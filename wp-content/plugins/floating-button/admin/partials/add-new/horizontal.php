<?php
/**
 * Horizontal Buttons Settings
 *
 * @package     Wow_Plugin
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

if (!defined('ABSPATH')) {
  exit;
}

include_once('settings/horizontal.php');
?>

<div class="adding-menu-2">
  <?php if ($count_ii > 0) {
    for ($i = 0; $i < $count_ii; $i++) { ?>
        <fieldset>
            <legend><?php _e('Item ', $this->text_domain); ?><?php echo $i + 1; ?></legend>
            <div class="container">
                <div class="element">
                  <?php _e('Icon', $this->text_domain); ?><br/>
                  <?php echo self::option($item_icon_[$i]); ?>
                </div>
                <div class="element">
                  <?php echo self::option($item_tooltip_include_[$i]); ?> <?php _e('Tooltip', $this->text_domain); ?>
                    <br/>
                  <?php echo self::option($item_tooltip_[$i]); ?>
                </div>
                <div class="element">
                </div>
            </div>
            <div class="container">
                <div class="element">
                  <?php _e('Button color', $this->text_domain); ?><br/>
                  <?php echo self::option($button_color_[$i]); ?>
                </div>
                <div class="element">
                  <?php _e('Button hover color', $this->text_domain); ?><br/>
                  <?php echo self::option($button_hcolor_[$i]); ?>
                </div>
                <div class="element">
                  <?php _e('Icon color', $this->text_domain); ?><br/>
                  <?php echo self::option($icon_color_[$i]); ?>

                </div>
            </div>
            <div class="container">
                <div class="element">
                  <?php _e('Item type', $this->text_domain); ?><br/>
                  <?php echo self::option($item_type_[$i]); ?>
                </div>
                <div class="element type-param">
                    <div class="type-link">
                        <span class="type-link-text">Link</span>:<br/>
                      <?php echo self::option($item_link_[$i]); ?>
                    </div>
                </div>
                <div class="element">
                </div>
            </div>
        </fieldset>
      <?php
    }
  }
  ?>
</div>

<div class="submit-bottom">
    <input type="button" value="Add item" class="add-item" onclick="itemadd(2)">
    <input type="button" class="delete-item" value="Delete last item" onclick="itemremove(2)">
</div>
