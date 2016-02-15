//Function definitions below

jQuery(document).ready(function(){

  //changes text in profile
	jQuery('#public').text('View Profile');

  //Reveal text for non-members S
  jQuery('.logged-out .menu a').on('click', function(event){
    	event.preventDefault();
    	jQuery('.gg-hidden').slideToggle();
    });
 
  //dynamically sizes category-select box
 	jQuery(".category-select").css("height", parseInt(jQuery(".category-select option").length) * 20);
   

    //Shows extra search results on global search page
    jQuery('.gg-click-to-reveal').on('click', function(event){
        jQuery(this).next().slideToggle();
    });
    jQuery('.gg-click-to-reveal').on('hover', function(event){
        jQuery(this).css('cursor', 'pointer' );
    });


  //Hide current or archived
  jQuery('.acf-field-552ee050c4cd8').hide();


    var filterTerms = [],
    orderExclude = [],
    categoryTerms = [],
    urlVars = getUrlVars();


    //Changes 'title' text on news, scholarship, and opportunities
    if(typeof urlVars['scholarship_category'] != "undefined"){
      switch (urlVars['scholarship_category']) {
        case 'Review':
          jQuery('label[for=acf-_post_title]').html('Title of reviewed book<span class="acf-required">*</span>');
          break;
        default: 
          jQuery('label[for=acf-_post_title]').html(urlVars['scholarship_category'].replace(/\+/g, ' ') + ' Title <span class="acf-required">*</span>');
          break;
      }
    }

    if(typeof urlVars['news_category'] != "undefined"){
      switch (urlVars['news_category']) {
        case 'Conference+Or+Symposium':
          jQuery('label[for=acf-_post_title]').html('Post Title (conference name) <span class="acf-required">*</span>');  
          break;
        case 'Exhibition+Information':
          jQuery('label[for=acf-_post_title]').html('Post Title (name of exhibition) <span class="acf-required">*</span>');
          break;
        case 'New+Edition':
            jQuery('label[for=acf-_post_title]').html('Post Title (name of edition) <span class="acf-required">*</span>');
            //Hide City and Country
            jQuery('.acf-field-54bd6ad27d3f3').hide();
            jQuery('.acf-field-54e4e7594849d').hide();
            jQuery('.acf-field-54bd6b0c7d3f4').hide();
            break;
        default:
          jQuery('label[for=acf-_post_title]').html('Post Title <span class="acf-required">*</span>');
          break;
      }
    }

    if(typeof urlVars['opportunities_category'] != "undefined"){
      switch (urlVars['opportunities_category']){
        case 'Artist+Residency':
            jQuery('label[for=acf-_post_title]').html('Post Title (name of residency) <span class="acf-required">*</span>');
            break;
        case 'Exhibition+Participation':
            jQuery('label[for=acf-_post_title]').html('Post Title (call for participation) <span class="acf-required">*</span>');
            break;
        case 'Fellowship+Or+Grant':
            jQuery('label[for=acf-_post_title]').html('Post Title (name of fellowship or grant) <span class="acf-required">*</span>');
            break;
        case 'Internship':
            jQuery('label[for=acf-_post_title]').html('Post Title (name of internship) <span class="acf-required">*</span>');
            break;
        case 'Job':
            jQuery('label[for=acf-_post_title]').html('Post Title (name of job) <span class="acf-required">*</span>');
            break;
        default: 
          jQuery('label[for=acf-_post_title]').html('Post Title (name of opportunity) <span class="acf-required">*</span>');
          break;
      }
    }


    //Adds text before research area filters in New, Scholarship, and Opportunities
    jQuery('.acf-field-550daf44f7433').before('<h2>Check any relevant tags</h2>');

    var abstracts = jQuery('.abstract');
    abstracts.each(function(index){
          var html = excerptAbstract(jQuery(this).html());
          jQuery(this).html(html);
    });



    //hides Create/Update News, Scholarship, Opportunities form after notification
    if(urlVars['updated']){
      jQuery('form').hide();
    }

    //Dynamically generates readmore on News, Scholarship, and Opportunities
    jQuery('body').on('click', '.read-more', function(event){
      var abstract = jQuery(this).closest('.abstract');
      jQuery(this).remove();
      abstract.find('.elipses').remove();
      var excerpt = abstract.find('.abstract-excerpt').html();
      var continuation = abstract.find('.abstract-continuation').html();

      abstract.html(excerpt + continuation);
    });

   
 	//Prepend html for filtered searches
 	if(jQuery('body').hasClass('category') || jQuery('body').hasClass('members')){

 		 categories = urlVars.categories;
 		 numCategoryTerms = categories.length || 0;

	 	if(numCategoryTerms > 0){
		 	jQuery('.category-select option[selected]').removeAttr('selected');
	 		for(var i = 0; i < numCategoryTerms; i++){
		 		var word = ucwords(categories[i].replace(/-/g, ' '));
		 		word = word.substr(word.indexOf(" ") + 1);
		 		categoryTerms.push(word);
       	jQuery('.category-select option[value="' + categories[i] + '"]').attr('selected', 'selected');	 
	 		}
	 	}

    if(urlVars['orderby']){
      jQuery('.orderby-filter input[checked]').removeAttr('checked');
        jQuery('.orderby-filter input[value="' + urlVars['orderby'] + '"]').attr('checked', 'checked');
        orderExclude.push(urlVars['orderby']);
    }

    if(urlVars['status']){
      jQuery('.status-filter input[checked]').removeAttr('checked');
      jQuery('.status-filter input[value="' + urlVars['status'] + '"]').attr('checked', 'checked');
      orderExclude.push(urlVars['status']);

    }

	 	if(urlVars['s']){
	       	var terms = urlVars['s'].split('+');
	       	for(i = 0, n = terms.length; i < n; i++){
	       		filterTerms.push(terms[i]);
	     }
	   }

    if(urlVars['Members']){
     	jQuery('a[title="' + urlVars['Members'] + '"]').addClass('current-selection');
        filterTerms.push(urlVars['Members']); 
    }

    if(orderExclude.length > 0){
        jQuery('.header-explanatory-text').prepend(returnOrderExcludeHtml(orderExclude));     
    }
    if(filterTerms.length > 0){
      jQuery('.header-explanatory-text').prepend(returnFilterHtml(filterTerms.join(', ')));
    } else if(categoryTerms.length > 0) {
      jQuery('.header-explanatory-text').prepend(returnSubcategoryHtml(categoryTerms.join(', ')));
 	  }
  }

});

function ucwords(str) {
  //  discuss at: http://phpjs.org/functions/ucwords/
  return (str + '')
    .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
      return $1.toUpperCase();
    });
}

function getUrlVars(){
    var varsHash = {
    			categories: []
    		},
    	isCategoryVar = false,
    	categoryPattern = new RegExp('category%5B%5D'),
    	hashItem = [],
    	varsArray = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');


    for(var i = 0, n = varsArray.length; i < n; i++) {
        hashItem = varsArray[i].split('=');
        isCategoryVar = categoryPattern.test(hashItem[0]);
        if(isCategoryVar){
        	varsHash.categories.push(hashItem[1]);
        } else {
        	varsHash[hashItem[0]] = hashItem[1];
        }
    }

    return varsHash;
}

function excerptAbstract(text){

  var characterCount = text.length;
  if(characterCount < 250){
    return text;
  } else {
    var excerpt = text.substr(0, 250);
    var continuation = text.substr(250);
    var returnHTML = '<div class="abstract-excerpt">' +
                      excerpt +
                      '<span class="elipses">. . .</span><button class="read-more">Read More</button></div>'  +
                      '<div class="abstract-continuation">' +
                      continuation +
                      '</div>';
    return returnHTML;
  }
}

function getPropertyValues(obj){
	var vals =[]
	for (key in obj){
		vals.push(obj[key]);
	}
	return vals;
}

function returnSubcategoryHtml(category_var){
  return '<p>Viewing "' + category_var + '" items: </strong></p>';
}

function returnFilterHtml(search_var){
	
	return '<p>Your search for "' + search_var + '" turned up the following results: </strong></p>';
}

function returnOrderExcludeHtml(order_exclude_var){


  var order = order_exclude_var[0];
  var exclude = order_exclude_var[1];

  var orderHash = {
    'pubdate_ASC': "year published (old to new)",
    'pubdate_DESC': "year published (new to old)",
    'posted_ASC': "date published on website (old to new)",
    'posted_DESC': "date published on website (new to old)",
    'expiration_ASC': 'expiration date (recent to latest)',
    'expiration_DESC': 'expiration date (latest to recent)'
  };

  var returnString =  '<p>';

  if(order){
    returnString += 'Sorted by ' + orderHash[order] + '.';
    }

  if(exclude && exclude != 'both'){
    returnString += ' Only ' + exclude + ' items shown.';
  }

  return returnString + '</p>';

}
