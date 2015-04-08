<?php
/**
 * Configuring Theme Options Menu
 */

// Remove call to parent theme options
remove_action( 'customize_register', 'twentyfifteen_customize_register', 11 );
//remove_action( $tag, $function_to_remove, $priority );
function wptuts_theme_customizer( $wp_customize ) {
    // add section
    $wp_customize->add_section( 'eemjii_company_details', array(
        'title' => "IP Solutions: Contact Info", // The title of section
        'description' => 'Updating following Contact Information which is used throughout the website', // The description of section
    ) );

    // Add Setting: Telephone
    $wp_customize->add_setting( 'eemjii_option_address', array(
        'default' => 'You haven\'t entered your address yet',
        // Let everything else default
    ) );
    // Add Controller: Telephone
    $wp_customize->add_control( 'eemjii_option_address', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Address',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Telephone
    $wp_customize->add_setting( 'eemjii_option_telephone', array(
        'default' => '0000 000 0000',
        // Let everything else default
    ) );
    // Add Controller: Telephone
    $wp_customize->add_control( 'eemjii_option_telephone', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Main Telephone Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Fax
    $wp_customize->add_setting( 'eemjii_option_fax', array(
        'default' => '',
        // Let everything else default
    ) );
    // Add Controller: Fax
    $wp_customize->add_control( 'eemjii_option_fax', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Main Fax Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Company Registration Number
    $wp_customize->add_setting( 'eemjii_option_company_no', array(
        'default' => '',
        // Let everything else default
    ) );
    // Add Controller: Company Registration Number
    $wp_customize->add_control( 'eemjii_option_company_no', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Company Registration Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Company VAT Registration Number
    $wp_customize->add_setting( 'eemjii_option_vat_no', array(
        'default' => '',
        // Let everything else default
    ) );
    // Add Controller: Company VAT Registration Number
    $wp_customize->add_control( 'eemjii_option_vat_no', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Company VAT Registration Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );
}

add_action( 'customize_register', 'wptuts_theme_customizer', 11 );


// Functions for outputting options
function eemjii_option_tel () {
    echo get_theme_mod(
        'eemjii_option_telephone',
        '<div class="alert alert-warning"><strong>Oops! </strong>You haven\'t entered your telephone number in the theme \'customize\' options</div>');
}
function eemjii_option_fax () {
    echo get_theme_mod(
        'eemjii_option_fax',
        '<div class="alert alert-warning">You haven\'t entered your fax number in the theme \'customize\' options</div>'
    );
}
function eemjii_option_address () {
    echo get_theme_mod(
        'eemjii_option_address',
        '<div class="alert alert-warning">You haven\'t entered your address in the theme \'customize\' options</div>'
    );
}
function eemjii_option_company_no () {
    echo get_theme_mod(
        'eemjii_option_company_no',
        '<div class="alert alert-warning">You haven\'t entered your company registration number in the theme \'customize\' options</div>'
    );
}
function eemjii_option_vat_no () {
    echo get_theme_mod(
        'eemjii_option_vat_no',
        '<div class="alert alert-warning">You haven\'t entered your VAT number in the theme \'customize\' options</div>'
    );
}