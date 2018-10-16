<?php
/*
Plugin Name: wp-robo
Plugin URI: http://robointerativo.org
Description: Plugin help build chatbot any messanger without programming
Version:  0.01
Author: Aleksey Shilo
Author http://robointerativo.org
*/
/*  Copyright 2018 Aleksey Shilo   (email: info@robointerativo.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('admin_menu', function(){
	add_menu_page('WP Robo', 'WP ROBO', 'manage_options', 'wp_robo_main', function(){require 'main.php';}, 'dashicons-megaphone' , 25);
	add_submenu_page('telegram_main', __('Settings', 'wp-robo'), __('Settings', 'wp-robo'), 'manage_options', 'wp_robo_settings', function(){require 'settings.php';});

});
}
?>

