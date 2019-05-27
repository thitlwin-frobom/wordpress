/* ========= INFORMATION ============================
- author:    Dmytro Lobov
- url:       https://wow-estore.com
- email:     givememoney1982@gmail.com
==================================================== */
<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$css = '';

$count_i = count( $param['menu_1']['item_type'] );
for ( $i = 0; $i < $count_i; $i ++ ) {
	$item = $i + 1;
	$css  .= '
			.fl-vertical li:nth-child(' . $item . ') .flBtn-fab {
				background-color: ' . $param['menu_1']['button_color'][ $i ] . ';
				color: ' . $param['menu_1']['icon_color'][ $i ] . ';			
			}	
			.fl-vertical li:nth-child(' . $item . ') .flBtn-fab:hover {
				 background-color: ' . $param['menu_1']['button_hcolor'][ $i ] . ';
				 color: ' . $param['menu_1']['icon_color'][ $i ] . ';
			}
		';
}

$count_i = count( $param['menu_2']['item_type'] );
for ( $i = 0; $i < $count_i; $i ++ ) {
	$item = $i + 1;
	$css  .= '
			.fl-horizon li:nth-child(' . $item . ') .flBtn-fab {
				background-color: ' . $param['menu_2']['button_color'][ $i ] . ';
				color: ' . $param['menu_2']['icon_color'][ $i ] . ';			
			}	
			.fl-horizon li:nth-child(' . $item . ') .flBtn-fab:hover {
				 background-color: ' . $param['menu_2']['button_hcolor'][ $i ] . ';
				 color: ' . $param['menu_2']['icon_color'][ $i ] . ';
			}
		';
}

$css .= ' 
		.flBtn-fab {
		   background-color: ' . $param['button_color'] . ';
			 color: ' . $param['icon_color'] . ';
		}
		.flBtn-fab:hover {
		   background-color: ' . $param['button_hcolor'] . ';
			 color: ' . $param['icon_color'] . ';
		}
		[tooltip]:before {
			background: ' . $param['tooltip_background'] . ';
			color: ' . $param['tooltip_color'] . ';
		}
	
	';

if ( ! empty( $param['include_mobile'] ) ) {
	$screen = ! empty( $param['screen'] ) ? $param['screen'] : 480;
	$css    .= '
		@media only screen and (max-width: ' . $screen . 'px){
			.float-btn {
				display:none;
			}
		}';
}
if ( ! empty( $param['include_more_screen'] ) ) {
	$screen_more = ! empty( $param['screen_more'] ) ? $param['screen_more'] : 1200;
	$css         .= '
		@media only screen and (min-width: ' . $screen_more . 'px){
			.float-btn {
				display:none;
			}
		}';
}
$css = trim( preg_replace( '~\s+~s', ' ', $css ) );
echo $css;
?>