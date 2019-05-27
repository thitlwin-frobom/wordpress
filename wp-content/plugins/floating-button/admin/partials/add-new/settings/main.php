<?php
/**
 * Main Settings param
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

$position = array(
	'id'     => 'position',
	'name'   => 'param[position]',
	'type'   => 'select',
	'val'    => isset( $param['position'] ) ? $param['position'] : 'bottom-right',
	'option' => array(
		'fl-right fl-bottom' => __( 'bottom-right', 'floating-button' ),
	),
);

$position_help = array(
	'text' => __( 'Specify floating button location on screen.', 'floating-button' ),
);

include_once( 'icons.php' );
$icons_new = array();
foreach ( $icons as $key => $value ) {
	$icons_new[ $value ] = $value;
}

$button_icon = array(
	'id'     => 'button_icon',
	'name'   => 'param[button_icon]',
	'class'  => 'icons',
	'type'   => 'select',
	'val'    => isset( $param['button_icon'] ) ? $param['button_icon'] : 'fas fa-hand-point-up',
	'option' => $icons_new,
	'func'   => '',
);

$button_icon_help = array(
	'text' => __( 'Select the Icon for button', 'floating-button' ),
);

$shape = array(
	'id'     => 'shape',
	'name'   => 'param[shape]',
	'type'   => 'select',
	'val'    => isset( $param['shape'] ) ? $param['shape'] : 'circle',
	'option' => array(
		'fl-circle'  => __( 'Circle', 'floating-button' ),
	),
	'func'   => '',
);

$button_color = array(
	'id'   => 'button_color',
	'name' => 'param[button_color]',
	'type' => 'color',
	'val'  => isset( $param['button_color'] ) ? $param['button_color'] : '#009688',
);

$button_hcolor = array(
	'id'   => 'button_hcolor',
	'name' => 'param[button_hcolor]',
	'type' => 'color',
	'val'  => isset( $param['button_hcolor'] ) ? $param['button_hcolor'] : '#009688',
);

$icon_color = array(
	'id'   => 'icon_color',
	'name' => 'param[icon_color]',
	'type' => 'color',
	'val'  => isset( $param['icon_color'] ) ? $param['icon_color'] : '#fff',
);

$tooltip_background = array(
	'id'   => 'tooltip_background',
	'name' => 'param[tooltip_background]',
	'type' => 'color',
	'val'  => isset( $param['tooltip_background'] ) ? $param['tooltip_background'] : '#585858',
);

$tooltip_color = array(
	'id'   => 'tooltip_color',
	'name' => 'param[tooltip_color]',
	'type' => 'color',
	'val'  => isset( $param['tooltip_color'] ) ? $param['tooltip_color'] : '#fff',
);


