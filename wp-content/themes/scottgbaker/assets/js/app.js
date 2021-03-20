/*global $:true*/
/**
 * Init JavaScript - This script is executed first in the final compiled app.js
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
**/

// $ = jQuery;
var Project = Project || {};
/**
 * General JavaScripture
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 **/

Project.misc = function () {
  
};
Project.searchOptions = function() {
  $('button.hamburger').on('click', function(){
    $('nav.primary').toggleClass('active');
    
  });

  $(document).on('click', '.load-more-posts a', function(e){
    $(this).remove();
    e.preventDefault();
    
    $('.blog-feed').addClass('loading');
    url = $(this).attr('href');

    $.get(url, function(data){
      $('.blog-feed').append($(data).find('.page-content article'));
      $('.blog-feed').append($(data).find('.page-content .post-nav'));
      $('.blog-feed').removeClass('loading');
    });

  });

};

/**
 * Init JavaScript - This script is executed last in the final compiled app.js
 *
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 **/

$ = jQuery;

// Variables


$(document).ready(function(){
  hljs.highlightAll();
  var search = new Project.searchOptions();
  var miscelaneous = new Project.misc();
});