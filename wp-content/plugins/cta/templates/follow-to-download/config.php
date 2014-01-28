<?php
/**
* WordPress: WP Calls To Action Template Config File
* @package  WordPress Calls to Action
* @author 	InboundNow
*/
do_action('wp_cta_global_config'); // The wp_cta_global_config function is for global code added by 3rd party extensions

//gets template directory name to use as identifier - do not edit - include in all template files
$key = wp_cta_get_parent_directory(dirname(__FILE__));


$wp_cta_data[$key]['info'] =
array(
	'version' => "1.0", // Version Number
	'label' => "Twitter Follow to Download", // Nice Name
	'category' => 'social', // Template Category
	'demo' => 'http://demo.inboundnow.com/go/demo-template-preview/', // Demo Link
	'description'  => 'Get more twitter followers with this CTA' // template description
);



// Define Meta Options for template
$wp_cta_data[$key]['settings'] =
array(
    array(
        'label' => 'Instructions', // Name of field
        'description' => "This Call to action is used for twitter follow gating downloadable content. Basically you can get more shares on followers on twitter in return for a peice of downloadable content.<p><strong>Recommened Dimensions:</strong> 300px by 300px</p>", // what field does
        'id' => 'description', // metakey. $key Prefix is appended from parent in array loop
        'type'  => 'description-block', // metafield type
        'default'  => '', // default content
        'context'  => 'normal' // Context in screen (advanced layouts in future)
        ),
    array(
        'label' => 'Text Above the CTA (optional)',
        'description' => "This is the text above the call to action describing what they get if they share. You can use HTML or shortcodes in this box",
        'id'  => 'header-text',
        'type'  => 'textarea',
        'default'  => 'Follow us on Twitter to Download our Free Guide',
        'context'  => 'normal'
        ),
    array(
        'label' => 'Top Text Color',
        'description' => "Changes Text Color",
        'id'  => 'text-color',
        'type'  => 'colorpicker',
        'default'  => '000000',
        'context'  => 'normal'
        ),
    array(
        'label' => 'Twitter username',
        'description' => "Twitter username. example @DavidWells",
        'id'  => 'twittername',
        'type'  => 'text',
        'default'  => 'DavidWells',
        'context'  => 'normal'
        ),
     array(
        'label' => 'Link to Download',
        'description' => "This will be the download for people to get once they like the above URL",
        'id'  => 'download-url',
        'type'  => 'text',
        'default'  => 'http://www.link-to-download.com',
        'context'  => 'normal'
        ),
    array(
        'label' => 'Background Color',
        'description' => "Changes background color",
        'id'  => 'content-color',
        'type'  => 'colorpicker',
        'default'  => 'ffffff',
        'context'  => 'normal'
        ),
      array(
        'label' => 'turn-off-editor',
        'description' => "Turn off editor",
        'id'  => 'turn-off-editor',
        'type'  => 'custom-css',
        'default'  => '#postdivrich, .calc.button-secondary {display:none !important;}'
        ),
       array(
       'label' => 'Border Radius (Set rounded corners)',
       'description' => "Set to 0 for no rounded corners, set to 5+ to round the CTA edges",
       'id'  => 'border-radius',
       'type'  => 'number',
       'default'  => '0',
       'context'  => 'normal'
       ),
       array(
           'label' => 'Instructions', // Name of field
           'description' => "<strong>Please Note:</strong> This doesn't incorporate the twitter js callback and people can simply close the follow window to download your content. Most folks will actually follow you. Download the pro template to ensure tweets", // what field does
           'id' => 'description-two', // metakey. $key Prefix is appended from parent in array loop
           'type'  => 'description-block', // metafield type
           'default'  => '', // default content
           'context'  => 'normal' // Context in screen (advanced layouts in future)
           ),
    );