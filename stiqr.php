<?php
/*
Plugin Name: Stiqr 
Plugin URI: http://www.jongyulin.com/works/stiqr-wordpress-plugin/
Description: 
Version: 0.1 
Author: Jongyu Lin 
Author URI: http://www.jongyulin.com/
License: GPL2
*/
/*  Copyright 2010  Jongyu Lin  (email : Jongyu.Lin@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
add_action('init', 'stiqr_enqueue_script');
add_action('wp_footer', 'stiqr_footer_script');

function stiqr_enqueue_script()
{
	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js');
}

function stiqr_footer_script()
{
	echo '<script language="javascript" src="http://load.stiqr.com/sticker/api"></script>';
}
