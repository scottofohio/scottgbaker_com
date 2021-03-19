Project.searchOptions = function() {
  $('button.hamburger').on('click', function(){
    $('nav.primary').toggleClass('active');
    
  });

  $(document).on('click', '.load-more-posts a', function(e){
    $(this).remove();
    e.preventDefault();
    
    $('.page-content').addClass('loading');
    url = $(this).attr('href');

    $.get(url, function(data){
      $('.page-content').append($(data).find('.page-content article'));
      $('.page-content').append($(data).find('.page-content .post-nav'));
      $('.page-content').removeClass('loading');
    });

  });

};
