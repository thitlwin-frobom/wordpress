<?php
/**
 * Public code
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$menu_icon = '<i class="' . $param['button_icon'] . '"></i>';
$menu = '<div class="float-btn ' . $param['position'] . '">';
$button_class = ! empty( $param['main_button_clas'] ) ? ' ' . $param['main_button_clas'] : '';
$menu .= '<a class="flBtn-fab flBtn-large ' . $param['shape'] . $button_class . '" id="floatBtn">' . $menu_icon . '</a>';

// Build Vertical button menu
$menu    .= '<ul class="flBtn-menu fl-vertical">';
$class   = 'flBtn-fab flBtn-item scale-transition scale-out ' . $param['shape'];
$count_i = count( $param['menu_1']['item_type'] );
for ( $i = 0; $i < $count_i; $i ++ ) {
	$menu .= '<li>';

  $icon = '<i class="' . $param['menu_1']['item_icon'][ $i ] . '"></i>';

	if ( ! empty( $param['menu_1']['item_tooltip_include'][ $i ] ) ) {
		$tooltip = ' tooltip="' . $param['menu_1']['item_tooltip'][ $i ] . '"';
	} else {
		$tooltip = '';
	}
	$class_add = ! empty( $param['menu_1']['button_class'][ $i ] ) ? ' ' . $param['menu_1']['button_class'][ $i ] : '';
	$id_add    =
		! empty( $param['menu_1']['button_id'][ $i ] ) ? ' id="' . $param['menu_1']['button_id'][ $i ] . '"' : '';

	$item_type  = $param['menu_1']['item_type'][ $i ];
	$link_param = $tooltip . $id_add . ' class="' . $class . $class_add . '"';
	$link       = $param['menu_1']['item_link'][ $i ];

	switch ( $item_type ) {
		case 'link':
			$menu .= '<a href="' . $link . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'login':
			$menu .= '<a href="' . wp_login_url( $link ) . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'logout':
			$menu .= '<a href="' . wp_logout_url( $link ) . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'register':
			$menu .= '<a href="' . wp_registration_url() . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'lostpassword':
			$menu .= '<a href="' . wp_lostpassword_url( $link ) . '" ' . $link_param . '>' . $icon . '</a>';
			break;

	}
	$menu .= '</li>';
}
$menu .= '</ul>';

// Build Horizontal button menu
$menu    .= '<ul class="flBtn-menu fl-horizon">';
$count_i = count( $param['menu_2']['item_type'] );
for ( $i = 0; $i < $count_i; $i ++ ) {
	$menu .= '<li>';
  $icon = '<i class="' . $param['menu_2']['item_icon'][ $i ] . '"></i>';
	if ( ! empty( $param['menu_2']['item_tooltip_include'][ $i ] ) ) {
		$tooltip = ' tooltip="' . $param['menu_2']['item_tooltip'][ $i ] . '"';
	} else {
		$tooltip = '';
	}
	$class_add = ! empty( $param['menu_2']['button_class'][ $i ] ) ? ' ' . $param['menu_2']['button_class'][ $i ] : '';
	$id_add    =
		! empty( $param['menu_2']['button_id'][ $i ] ) ? ' id="' . $param['menu_2']['button_id'][ $i ] . '"' : '';

	$item_type  = $param['menu_2']['item_type'][ $i ];
	$link_param = $tooltip . $id_add . ' class="' . $class . $class_add . '"';
	$link       = $param['menu_2']['item_link'][ $i ];

	switch ( $item_type ) {
		case 'link':
			$menu .= '<a href="' . $link . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'login':
			$menu .= '<a href="' . wp_login_url( $link ) . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'logout':
			$menu .= '<a href="' . wp_logout_url( $link ) . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'register':
			$menu .= '<a href="' . wp_registration_url() . '" ' . $link_param . '>' . $icon . '</a>';
			break;
		case 'lostpassword':
			$menu .= '<a href="' . wp_lostpassword_url( $link ) . '" ' . $link_param . '>' . $icon . '</a>';
			break;
	}
	$menu .= '</li>';
}
$menu .= '</ul>';
$menu .= '</div>';
echo $menu;
?>