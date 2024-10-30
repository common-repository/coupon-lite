<?php
/**
 * Coupon Plugin Lite
 *
 * @package     CouponPlugin
 * @author      CouponPlugin.io
 * @license     GPL-2.0+
 * @link        https://couponplugin.io
 *
 * @wordpress-plugin
 * Plugin Name: Coupon Plugin Lite
 * Plugin URI:  https://couponplugin.io
 * Description: A Coupon Plugin to add coupon and deal functionality to your wordpress site.
 * Version:     1.1.7
 * Author:      CouponPlugin.io
 * Author URI:  https://couponplugin.io
 * Text Domain: coupon_plugin
 * License:     GPL-2.0+
 * Domain Path:  /languages
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Requires WP:  4.5
 * Requires PHP: 7.4
 */

/*
Coupon Plugin Lite is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Coupon Plugin Lite is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Coupon Plugin Lite. If not, see License URI.
*/

namespace CouponPlugin;

if (!defined('ABSPATH')) {
    exit;
}
/**
 * Coupon Plugin Initializer
 *
 * @since 1.0.0
 *
 * @return void
 */
function coupon_plugin_init()
{
    define('COUPON_PLUGIN', __FILE__);
    define('COUPON_PLUGIN_PATH', plugin_dir_path(__FILE__));
    $plugin_url = plugin_dir_url(__FILE__);
    if (is_ssl()) {
        $plugin_url = str_replace('http://', 'https://', $plugin_url);
    }
    define('COUPON_PLUGIN_TEXT_DOMAIN', 'coupon_plugin');
    define('COUPON_PLUGIN_URL', $plugin_url);
    define('COUPON_PLUGIN_BASENAME', plugin_basename(__FILE__));
    function load_text_domain()
    {
        load_plugin_textdomain(COUPON_PLUGIN_TEXT_DOMAIN, false, dirname(plugin_basename(__FILE__)) . '/languages/');
    }

    add_action('init', __NAMESPACE__ . '\load_text_domain');
    require_once COUPON_PLUGIN_PATH . 'src/custom/custom.php';
}
coupon_plugin_init();
