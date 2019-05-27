<?php
/**
 * Vertical Buttons Settings
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

$count_i = ( ! empty( $param['menu_1']['item_type'] ) ) ? count( $param['menu_1']['item_type'] ) : '0';
if ( $count_i > 0 ) {
	for ( $i = 0; $i < $count_i; $i ++ ) {
		$item_icon_[ $i ] = array(
			'name'  => 'param[menu_1][item_icon][]',
			'class' => 'icons',
			'type'  => 'select',
			'val'   => isset( $param['menu_1']['item_icon'][ $i ] ) ? $param['menu_1']['item_icon'][ $i ] : 'fas fa-hand-point-up',
			'option' => $icons_new,
		);
		$item_tooltip_include_[ $i ] = array(
			'name'  => 'param[menu_1][item_tooltip_include][]',
			'type'  => 'checkbox',
			'class' => 'tooltip-include',
			'val'   => isset( $param['menu_1']['item_tooltip_include'][ $i ] ) ? $param['menu_1']['item_tooltip_include'][ $i ] : 0,
			'func'  => 'itemtooltip(this);',
		);
		$item_tooltip_[ $i ] = array(
			'name'  => 'param[menu_1][item_tooltip][]',
			'class' => 'item-tooltip',
			'type'  => 'text',
			'val'   => isset( $param['menu_1']['item_tooltip'][ $i ] ) ? $param['menu_1']['item_tooltip'][ $i ] : '',

		);
		$button_color_[ $i ] = array(
			'name' => 'param[menu_1][button_color][]',
			'type' => 'color',
			'val'  => isset( $param['menu_1']['button_color'][ $i ] ) ? $param['menu_1']['button_color'][ $i ] : '#009688',
		);
		$button_hcolor_[ $i ] = array(
			'name' => 'param[menu_1][button_hcolor][]',
			'type' => 'color',
			'val'  => isset( $param['menu_1']['button_hcolor'][ $i ] ) ? $param['menu_1']['button_hcolor'][ $i ] : '#009688',
		);
		$icon_color_[ $i ] = array(
			'name' => 'param[menu_1][icon_color][]',
			'type' => 'color',
			'val'  => isset( $param['menu_1']['icon_color'][ $i ] ) ? $param['menu_1']['icon_color'][ $i ] : '#ffffff',
		);
		$item_type_[ $i ] = array(
			'name'   => 'param[menu_1][item_type][]',
			'type'   => 'select',
			'class'  => 'item-type',
			'val'    => isset( $param['menu_1']['item_type'][ $i ] ) ? $param['menu_1']['item_type'][ $i ] : '',
			'option' => array(
				'link'         => __( 'Link', $this->text_domain ),
				'login'        => __( 'Login', $this->text_domain ),
				'logout'       => __( 'Logout', $this->text_domain ),
				'register'     => __( 'Register', $this->text_domain ),
				'lostpassword' => __( 'Lostpasswordt', $this->text_domain ),
			),
			'func'   => 'itemtype(this);',
		);
		$item_link_[ $i ] = array(
			'name' => 'param[menu_1][item_link][]',
			'type' => 'text',
			'val'  => isset( $param['menu_1']['item_link'][ $i ] ) ? $param['menu_1']['item_link'][ $i ] : '',
		);
	}
}