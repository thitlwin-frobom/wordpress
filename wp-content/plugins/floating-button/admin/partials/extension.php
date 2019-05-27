<?php
/**
 * Extansion version
 *
 * @package    Wow_Plugin
 * @subpackage
 * @copyright   Copyright (c) 2018, Dmytro Lobov
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
if (!defined('ABSPATH')) {
  exit;
}
?>

<style>
  .feature-section.one-col p {
    font-size: 16px;
  }

  .faq-title {
    cursor: pointer;
  }

  .faq-title:before {
    content: "\f132";
    font-family: Dashicons;
    vertical-align: bottom;
    margin-right: 8px;
    color: #e95645;
  }

  .toggleshow:before {
    content: "\f132";
    font-family: Dashicons;
    color: #e95645
  }

  .togglehide:before {
    content: "\f460";
    font-family: Dashicons;
  }

  .item-title {
    margin: 1.25em 0 .6em;
    font-size: 1em;
    line-height: 1;
    color: #1e73be;
  }

  .items .inside {
    margin: 10px 10px 10px 20px;
    display: none;
  }

  .feature-section ul {
    margin-left: 10px;
  }

  .feature-section ul li:before {
    content: "\f147";
    font-family: Dashicons;
    margin-right: 5px;
    color: #e95645
  }

  .wow-btn {
    width: 380px;
    display: inline-block;
    height: 42px;
    background: #e95645;
    border-radius: 3px;
    line-height: 42px;
    text-align: center;
    color: #fff !important;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    border: none;

  }

  .wow-btn:hover {
    background: #d45041;
  }

</style>

<script>
  jQuery(document).ready(function ($) {
    $('.item-title').children('.faq-title').click(function () {
      var par = $(this).closest('.items');
      $(par).children(".inside").toggle(500);
      if ($(this).hasClass('togglehide')) {
        $(this).removeClass('togglehide');
        $(this).addClass("toggleshow");
        $(this).attr('title', 'Show');
      }
      else {
        $(this).removeClass('toggleshow');
        $(this).addClass("togglehide");
        $(this).attr('title', 'Hide');
      }
    });
  })
</script>
<div class="about-wrap">
  <div class="feature-section one-col">
    <div class="col">

      <p>Get Advanced Features with Pro version of the plugin.</p>

      <p><a href="<?php echo $this->pro_url; ?>" target="_blank" class="wow-btn">Get Pro Version</a></p>

      <p>ADDITIONAL OPTIONS IN PRO VERSION:</p>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Custom Icon</span>
        </div>
        <div class="inside">
          <p>If you are not satisfied with the standard set of <a href="https://fontawesome.com/" target="_blank"> Font
              Awesome icons</a>, you can add your own icons.</p>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">User Target</span>
        </div>
        <div class="inside">
          <p>You can customize display the item on the page depending on the role of the user who is on the
            site. You
            can configure targeting for such user groups:</p>
          <ul>
            <li>All users;</li>
            <li>Unauthorized users;</li>
            <li>Authorized users;</li>
            <li>The role of the authorized user on the site;</li>
          </ul>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Multi language</span>
        </div>
        <div class="inside">
          <p>The condition for display the item depending on the language of the site.</p>
          <p>It is good to use if you have a website in several languages and you need to show different
            elements for a
            different language.</p>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Target to content</span>
        </div>
        <div class="inside">
          <p>Choose a condition to target your item to specific content or various other segments. You can
            display the
            item on:</p>
          <ul>
            <li>All posts and pages;</li>
            <li>Only posts;</li>
            <li>Only pages;</li>
            <li>Posts with certain IDs;</li>
            <li>Pages with certain IDs;</li>
            <li>Posts in Categorys with IDs;</li>
            <li>All posts, except;</li>
            <li>All pages, except;</li>
            <li>Taxonomy;</li>
          </ul>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Mobile and Desktop Screens</span>
        </div>
        <div class="inside">
          <p>You can show and hide elements depending on the user's device, to be more precise, on the width of the
            user's screen.</p>
          <p>For example, you can hide items for a user if he logged in from a mobile phone or from a stationary
            computer, simply by specifying the width of the device.</p>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Share in Social Networks</span>
        </div>
        <div class="inside">
          <p>An easy way to provide an opportunity for users to share your content on social networks.</p>
          <p>You can use 19 social networks for sharing:</p>
          <ul>
            <li>Facebook</li>
            <li>VK</li>
            <li>Twitter</li>
            <li>Linkedin</li>
            <li>Odnoklassniki</li>
            <li>Google</li>
            <li>Pinterest</li>
            <li>XING</li>
            <li>Myspace</li>
            <li>Weibo</li>
            <li>Buffer</li>
            <li>StumbleUpon</li>
            <li>Reddit</li>
            <li>Tumblr</li>
            <li>Blogger</li>
            <li>LiveJournal</li>
            <li>Pocket</li>
            <li>Telegram</li>
            <li>Skype</li>
          </ul>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Scroll To Top</span>
        </div>
        <div class="inside">
          <p>Add the ability to scroll to Top allows your website visitors to easily scroll back to the top of your page with one click of the button. This gives your website better navigation and also adds a more professional look to your current layout.</p>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Smooth Scroll To Elements</span>
        </div>
        <div class="inside">
          <p>A lightweight tool to animate smooth scrolling to anchor links on the page. Good use if you have a long page with content. That is a useful tool for page navigation.</p>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Add ID and Class</span>
        </div>
        <div class="inside">
          <p>Ability to add your own Classes and ID's to items.</p>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Button Positions</span>
        </div>
        <div class="inside">
          <p>The button can be placed on the screen:</p>
          <ul>
            <li>Bottom right</li>
            <li>Bottom left</li>
            <li>Top right</li>
            <li>Top left</li>
          </ul>
        </div>
      </div>

      <div class="items itembox">
        <div class="item-title">
          <span class="faq-title">Buttons shapes</span>
        </div>
        <div class="inside">
          <p>4 different button shapes:</p>
          <ul>
            <li>Circle</li>
            <li>Rounded square</li>
            <li>Ellipse</li>
            <li>Square</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>