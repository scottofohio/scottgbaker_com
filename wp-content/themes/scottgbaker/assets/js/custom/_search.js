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
