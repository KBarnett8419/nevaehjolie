<?php
//Pro Button
function ferry_pro_customizer( $wp_customize ) {
    class WP_Pro_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    
    public function render_content() {
    ?>
     <div class="ta-pro-box">
       <a href="<?php echo esc_url( __('https://themeansar.com/themes/ferry/', 'ferry'));?>" target="_blank" class="upgrade" id="review_pro"> <?php _e('Upgrade To Pro','ferry' ); ?></a>
        
    </div>
    <?php
    }
}
    $wp_customize->add_section( 'ferry_pro_section' , array(
		'title' => __('Themeansar Store', 'ferry'),
		'priority' => 1,
   	) );

    $wp_customize->add_setting('upgrade_pro', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new WP_Pro_Customize_Control( $wp_customize, 'upgrade_pro', array(
		'label' => __('Discover ferry Pro','ferry'),
        'section' => 'ferry_pro_section',
		'setting' => 'upgrade_pro',)
    ) );

class WP_ferry_review_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
	<div class="ta-pro-box">
        <a href="<?php echo esc_url( __('https://wordpress.org/support/view/theme-reviews/ferry/#postform/', 'ferry'));?>" target="_blank" class="review" id="review_pro"><?php _e('Support Forum','ferry' ); ?></a>
	</div>
    <?php
    }
}

    $wp_customize->add_setting( 'pro_Review', array(
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new WP_ferry_Review_Customize_Control( $wp_customize, 'pro_Review', array(	
		'label' => __('Discover ferry Pro','ferry'),
        'section' => 'ferry_pro_section',
		'setting' => 'pro_Review',)
    ) );

class WP_ferry_document_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="ta-pro-box">
	 <a href="<?php echo esc_url( __('http://docs.themeansar.com/ferry-lite/', 'ferry'));?>" target="_blank" class="document" id="review_pro"><?php _e('Online Documenation','ferry' ); ?></a>
	 
	 <div>
    <?php
    }
}

    class WP_ferry_tastore_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="ta-pro-box">
     <a href="<?php echo esc_url( __('https://themeansar.com/themes/', 'ferry'));?>" target="_blank" class="tistore" id="ti_store"><?php _e('Explore Our Themes','ferry' ); ?></a>
     
     <div>
    <?php
    }
}

    

    $wp_customize->add_setting( 'doc_Review', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new WP_ferry_document_Customize_Control( $wp_customize, 'doc_Review', array(	
		'label' => __('Discover ferry Pro','ferry'),
        'section' => 'ferry_pro_section',
		'setting' => 'doc_Review',)
    ) );

    $wp_customize->add_setting( 'ti_store', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new WP_ferry_tastore_Customize_Control( $wp_customize, 'ti_store', array(  
        'label' => __('Discover ferry Pro','ferry'),
        'section' => 'ferry_pro_section',
        'setting' => 'ti_store',)
    ) );
}
add_action( 'customize_register', 'ferry_pro_customizer' );
?>