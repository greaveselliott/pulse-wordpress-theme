<?php
if( function_exists('register_field_group') ):

    register_field_group(array (
        'key' => 'group_5525005b2ac7c',
        'title' => 'Services',
        'fields' => array (
            array (
                'key' => 'field_552504b0c8105',
                'label' => 'Icon',
                'name' => 'icon',
                'prefix' => '',
                'type' => 'select',
                'instructions' => 'Select an Icon for this post',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array (
                    'lamp' => 'lamp',
                    'pencil' => 'pencil',
                    'retweet' => 'retweet',
                    'megaphone' => 'megaphone',
                    'chat' => 'chat',
                    'chart-area' => 'chart-area',
                ),
                'default_value' => array (
                    '' => '',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
                'disabled' => 0,
                'readonly' => 0,
            ),
            array (
                'key' => 'field_5525007312e8d',
                'label' => 'Info box',
                'name' => 'info_box',
                'prefix' => '',
                'type' => 'textarea',
                'instructions' => 'Enter in a short description that summarises this service.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'new_lines' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_552500cb12e8e',
                'label' => 'Sectioned Content',
                'name' => 'sectioned_content',
                'prefix' => '',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'min' => '',
                'max' => 84,
                'layout' => 'table',
                'button_label' => 'Add Row',
                'sub_fields' => array (
                    array (
                        'key' => 'field_5525011a12e8f',
                        'label' => 'Sub-section Title',
                        'name' => 'sub-section_title',
                        'prefix' => '',
                        'type' => 'text',
                        'instructions' => 'Add a sub-title for this subsection',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_552501bb12e90',
                        'label' => 'Sub-Section Text',
                        'name' => 'sub-section_text',
                        'prefix' => '',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                    ),
                ),
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'eemjii_services',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));

endif;