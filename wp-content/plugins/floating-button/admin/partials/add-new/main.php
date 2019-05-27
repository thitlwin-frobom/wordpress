<?php
/**
 * Main Settings
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
include_once( 'settings/main.php' );

?>


<div class="container">
  <div class="element">
		<?php _e( 'Position', $this->text_domain ); ?><?php echo self::tooltip( $position_help ); ?>
		<?php echo self::option( $position ); ?>

  </div>
  <div class="element">
		<?php _e( 'Icon', $this->text_domain ); ?>: <?php _e( 'custom',
			$this->text_domain ); ?> <br/>
			<?php echo self::option( $button_icon ); ?>
  </div>
  <div class="element">
		<?php _e( 'Button shape', $this->text_domain ); ?><br/>
		<?php echo self::option( $shape ); ?>
  </div>
</div>

<div class="container">
  <div class="element">
		<?php _e( 'Button color', $this->text_domain ); ?><br/>
		<?php echo self::option( $button_color ); ?>
  </div>
  <div class="element">
		<?php _e( 'Button hover color', $this->text_domain ); ?><br/>
		<?php echo self::option( $button_hcolor ); ?>
  </div>
  <div class="element">
		<?php _e( 'Icon color', $this->text_domain ); ?><br/>
		<?php echo self::option( $icon_color ); ?>
  </div>
</div>

<div class="container">
  <div class="element">
		<?php _e( 'Tooltip background', $this->text_domain ); ?><br/>
		<?php echo self::option( $tooltip_background ); ?>
  </div>
  <div class="element">
		<?php _e( 'Tooltip color', $this->text_domain ); ?><br/>
		<?php echo self::option( $tooltip_color ); ?>
  </div>
  <div class="element">
  </div>
</div>