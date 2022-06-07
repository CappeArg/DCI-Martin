<?php
/**
 * Templately plugin.
 *
 * The main plugin handler class is responsible for initializing Templately. The
 * class registers and all the components required to run the plugin.
 *
 * @package Templately
 */

namespace Templately;

defined('ABSPATH') or exit;

use Templately\Admin\Admin;

final class Plugin {
    /**
     * Plugin Version
     * @var string
     */
    protected static $version;
    /**
     * Plugin Name
     * @var string
     */
    protected static $plugin_name;
    /**
     * Plugin Instance
     * @var \Templately\Plugin
     */
    private static $_instance = null;
    /**
     * Elementor Instance
     *
     * @var \Templately\Elementor
     */
    public $elementor = null;
    /**
     * Admin Instance
     *
     * @var \Templately\Admin\Admin
     */
    public $admin = null;

    /**
     * Get a single instance of Plugin
     * @return Plugin
     */
    public static function get_instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Plugin constructor.
     * Initializing Templately plugin.
     *
     * @access private
     */
    private function __construct() {
        if (defined('TEMPLATELY_VERSION')) {
            self::$version = TEMPLATELY_VERSION;
        } else {
            self::$version = '0.0.1';
        }
        Installer::init();
        self::$plugin_name = 'templately';
        $this->admin = Admin::get_instance();
        $this->elementor = Elementor::get_instance();
        self::run();
        do_action('templately_init');
    }

    /**
     * Run all actions and hooks
     *
     * @return void
     */
    public static function run() {
        /**
         * Loader will run actions and filters function for the plugin.
         */
        Loader::run();
    }

    /**
     * Get Plugin Name or You can say Text Domain
     * @return string
     */
    public static function get_name() {
        return self::$plugin_name;
    }

    /**
     * Get Plugin Version
     * @return String
     */
    public static function get_version() {
        return self::$version;
    }
}
