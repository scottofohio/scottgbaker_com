(function( $ ) {


  $(window).load(function() {

    "use strict";

    // Switch radios for images
    $('#customize-control-layout_columns input[name="_customize-radio-layout_columns"]').each(function () {
      if( $(this).is(':checked') ) {
         $(this).parent().addClass('active');
       }
    });

    $('#customize-control-layout_columns input:radio').change(function(){

      $('#customize-control-layout_columns input:radio').parent().removeClass('active');
      $(this).parent().addClass('active');

    });

    var newIn = function() {


          // New in 1.1.5
          $('#customize-controls .preview-notice').append('<div class="mt-announce" style="opacity:0;" />');
          $('#customize-controls .mt-announce').append('<h3>New in 1.2.5</h3><p>You will find all new options from this version below in a lovely orange color and any section headers that contain new options will be marked with a <span class="mt-new mt-inline">NEW!</span> Enjoy!</p>');


          // Apply "new" styles for 1.0.6
          //var newSection = '#accordion-section-meanthemes_general_options .accordion-section-title, #accordion-section-layout_options .accordion-section-title, #accordion-section-meanthemes_font .accordion-section-title';

          //var newOption = '#customize-control-load_more label, #customize-control-swap_archive_transition label, #customize-control-layout_fixed_height label, #customize-control-layout_columns .customize-control-title, #customize-control-font_size_body label, #customize-control-font_size_logo label, #customize-control-font_size_meta label, #customize-control-font_size_heading_min label, #customize-control-font_size_heading_max label, #customize-control-font_size_heading_max_layout label, #customize-control-font_size_heading_2 label, #customize-control-font_size_heading_3 label, #customize-control-font_size_heading_4 label, #customize-control-font_size_heading_5 label, #customize-control-font_size_heading_6 label, #customize-control-font_size_more_footer label';

          // 1.0.7 & 8 & 9


        var newSection = '#accordion-section-homepage_options .accordion-section-title';

        var newOption = '#customize-control-show_loader label';


        $(newSection).append(' <span class="mt-new" style="opacity:0">NEW!</span>');

        $('#customize-controls .mt-announce, #customize-controls .mt-new').delay(1500).animate( { 'opacity':'1' },500 );

        $(newOption).addClass('mt-new-label');


        // Turn off Notifications
        $('#customize-control-new_off input').change(function(){

            if ($(this).is(':checked')) {

                $('.mt-new, .mt-announce').fadeOut();
                $(newOption).removeClass('mt-new-label');

            }

            else {

              $('.mt-new, .mt-announce').fadeIn();
              $(newOption).addClass('mt-new-label');

            }

        });


  };

  //newIn();

});

})( jQuery );
