<?php

/* #######################################################################

	Theme Options

####################################################################### */

function meanthemes_register_theme_customizer( $wp_customize ) {

	// Font size array at top for easy access
	$font_size = array (

			'10' => '10px',
			'11' => '11px',
			'12' => '12px',
			'13' => '13px',
			'14' => '14px',
			'15' => '15px',
			'16' => '16px',
			'17' => '17px',
			'18' => '18px',
			'19' => '19px',
			'20' => '20px',
			'21' => '21px',
			'22' => '22px',
			'23' => '23px',
			'24' => '24px',
			'25' => '25px',
			'26' => '26px',
			'27' => '27px',
			'28' => '28px',
			'29' => '29px',
			'30' => '30px',
			'31' => '31px',
			'32' => '32px',
			'33' => '33px',
			'34' => '34px',
			'35' => '35px',
			'36' => '36px',
			'37' => '37px',
			'38' => '38px',
			'39' => '39px',
			'40' => '40px',
			'41' => '41px',
			'42' => '42px',
			'43' => '43px',
			'44' => '44px',
			'45' => '45px',
			'46' => '46px',
			'47' => '47px',
			'48' => '48px',
			'49' => '49px',
			'50' => '50px',
			'51' => '51px',
			'52' => '52px',
			'53' => '53px',
			'54' => '54px',
			'55' => '55px',
			'56' => '56px',
			'57' => '57px',
			'58' => '58px',
			'59' => '59px',
			'60' => '60px',
			'61' => '61px',
			'62' => '62px',
			'63' => '63px',
			'64' => '64px',
			'65' => '65px',
			'66' => '66px',
			'67' => '67px',
			'68' => '68px',
			'69' => '69px',
			'70' => '70px',
			'71' => '71px',
			'72' => '72px',
			'73' => '73px',
			'74' => '74px',
			'75' => '75px',
			'76' => '76px',
			'77' => '77px',
			'78' => '78px',
			'79' => '79px',
			'80' => '80px',
			'81' => '81px',
			'82' => '82px',
			'83' => '83px',
			'84' => '84px',
			'85' => '85px',
			'86' => '86px',
			'87' => '87px',
			'88' => '88px',
			'89' => '89px',
			'90' => '90px',
			'91' => '91px',
			'92' => '92px',
			'93' => '93px',
			'94' => '94px',
			'95' => '95px',
			'96' => '96px',
			'97' => '97px',
			'98' => '98px',
			'99' => '99px',
			'100' => '100px',

	);

  

  class Custom_CSS_Control extends WP_Customize_Control {
    public $type = 'custom_css';

    public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="7" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
    }
}

class Text_Control extends WP_Customize_Control {
  public $type = 'footer';

  public function render_content() {
      ?>
          <label>
              <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
              <textarea rows="9" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
          </label>
      <?php
  }
}


	//
	// Site Identity Add Ons
	//

	$wp_customize->add_setting(
			'logo',
			array(
					'default'      => '',
					'sanitize_callback' => 'esc_html',
					'type' => 'option',
					'priority' => 4
			)
	);

	$wp_customize->add_control(
			new WP_Customize_Image_Control(
					$wp_customize,
					'logo',
					array(
							'label'    => __('Site Logo','meanthemes'),
							'section'  => 'title_tagline'
					)
			)
  );
  


  // Footer 

$wp_customize->add_section(
  'footer',
  array(
      'title' => __('Site Footer','meanthemes'),
      'priority' => 71,
  )
);


  $wp_customize->add_setting( 'footer_tagline', array(
    'sanitize_callback' => 'balanceTags',
    'default' => 'Enter Footer Headline here',
        'type' => 'option'
          ) );
     $wp_customize->add_control(
         new Text_Control( $wp_customize, 'footer',
             array(
                 'label' => 'Footer Tagline',
                 'section' => 'footer',
                 'settings' => 'footer_tagline',
                 'priority' => 3
             )
         )
     );
  

  //
  // CUSTOM TEXT
  //




  class Text_Control2 extends WP_Customize_Control {
      public $type = 'text_control2';

      public function render_content() {
          ?>
              <label>
                  <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                  <textarea rows="9" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
              </label>
          <?php
      }
  }

  class Text_Control3 extends WP_Customize_Control {
      public $type = 'text_control3';

      public function render_content() {
          ?>
              <label>
                  <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                  <textarea rows="9" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
              </label>
          <?php
      }
  }


    


        $wp_customize->add_setting(
            'text_logo_title',
            array(
                'default'   => __('Logo Title','meanthemes'),
								'sanitize_callback' => 'esc_html',
								'type' => 'option'
            )
        );

        $wp_customize->add_control(
            'text_logo_title',
            array(
                'section'  => 'text_settings',
                'label'    => __('Logo Title Text','meanthemes'),
                'type'     => 'text',
                'priority' => 6
            )
        );




        //
        // CUSTOM CSS
        //


        $wp_customize->add_section(
        	    'custom_css',
        	    array(
        	        'title' => __('Custom CSS Block','meanthtmes'),
        	        'priority' => 72,
        	    )
        	);

        $wp_customize->add_setting(
        	  'custom_css',
        	      array(
									'sanitize_callback' => 'balanceTags',
									'type' => 'option'
        	      )
        );

        $wp_customize->add_control(
            new Custom_CSS_Control( $wp_customize, 'custom_css',
                array(
                    'label' => __( 'Enter Your Custom CSS' , 'meanthemes' ),
                    'section' => 'custom_css',
                    'settings' => 'custom_css'
                )
            )
        );


        $wp_customize->add_section(
        	    'google_analytics_settings',
        	    array(
        	        'title' => __('Google Analytics JavaScript','meanthtmes'),
        	        'priority' => 73,
        	    )
        	);

          //
          // GOOGLE ANALYTICS
          //
          class Google_Analytics_Control extends WP_Customize_Control {
              public $type = 'google_analytics';

              public function render_content() {
                  ?>
                      <label>
                          <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                          <textarea rows="7" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                      </label>
                  <?php
              }
          }


          $wp_customize->add_setting(
          	  'google_analytics',
          	      array(
										'sanitize_callback' => 'balanceTags',
										'type' => 'option'
          	      )
          );

          $wp_customize->add_control(
              new Google_Analytics_Control(
                  $wp_customize, 'google_analytics',
                  array(
                      'label' => 'Google Analytics Script',
                      'section' => 'google_analytics_settings',
                      'settings' => 'google_analytics',
                      'priority' => 10,
                  )
              )
          );








}
add_action( 'customize_register', 'meanthemes_register_theme_customizer' );


// Make options change live...
function meanthemes_customizer_live_preview() {

    wp_enqueue_script(
        'meanthemes-theme-customizer',
        get_template_directory_uri() . '/theme-customizer/theme-customizer.js',
        array( 'jquery', 'customize-preview' ),
				MEANTHEMES_THEME_VER,
        true
    );




}
add_action( 'customize_preview_init', 'meanthemes_customizer_live_preview' );


function theme_customizer() {
    wp_enqueue_style( 'customizer', get_template_directory_uri() . '/theme-customizer/theme-customizer.css', array(), MEANTHEMES_THEME_VER, 'screen' );

		wp_enqueue_script(
				'js-customizer',
				get_template_directory_uri() . '/theme-customizer/js/customizer.js',
				array( 'jquery' ),
				MEANTHEMES_THEME_VER,
				true
		);

}

add_action( 'customize_controls_enqueue_scripts', 'theme_customizer' );


?>
