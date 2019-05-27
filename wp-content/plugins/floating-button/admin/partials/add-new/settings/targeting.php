<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Tergeting settings
 *
 * @package     Lead_Generation
 * @subpackage  Settings
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */



// Enable Don’t show on screens less than
$include_mobile = array(
	'id'   => 'include_mobile',
	'name' => 'param[include_mobile]',
	'type' => 'checkbox',
	'val'  => isset( $param['include_mobile'] ) ? $param['include_mobile'] : 0,
	'func' => 'screen_less(this)',
);

// Enable Don’t show on screens less than helper
$include_mobile_help = array(
	'text' => __( 'Specify the window breakpoint ( mix width) in px.', $this->text_domain ),
);

// Min screen value
$screen = array(
	'id'     => 'screen',
	'name'   => 'param[screen]',
	'type'   => 'number',
	'val'    => isset( $param['screen'] ) ? $param['screen'] : 480,
	'option' => array(
		'min'         => '0',
		'max'         => '3000',
		'step'        => '1',
		'placeholder' => '480',
	),
);