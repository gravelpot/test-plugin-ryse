<?php

namespace RYSE\GitHubUpdaterDemo;

/**
 * Plugin Name:        UTexas GitHub Updater Demo
 * Plugin URI:         https://github.com/gravelpot/test-plugin-ryse
 * Version:            1.0.0
 * Description:        WordPress plugin to demonstrate how `GitHubUpdater` can enable WordPress to check for and update a custom plugin that's hosted in either a public or private repository on GitHub.
 * Author:             Paul Grotevant
 * Author URI:         https://gravelpot.org
 * Text Domain:        test-plugin-ryse
 * Tested up to:       6.8.1
 * Requires at least:  6.5
 * Requires PHP:       8.2
 * Update URI:         https://github.com/gravelpot/test-plugin-ryse
 * License:            GPLv2
 * License URI:        https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) exit;

require_once 'autoloader.php';

new Plugin(__FILE__);
