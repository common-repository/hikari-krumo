<?php
/*
Plugin Name: Hikari Krumo
Plugin URI: http://hikari.ws/krumo/
Description: Krumo is a debugging tool equivalent to print_r() and var_dump(), with the advantage of collapsing array and object values so that it takes less space and let us see only what we really need from complex data.
Version: 0.02.04
Author: Hikari
Author URI: http://Hikari.ws
*/

/**!
*
* I, Hikari, from http://Hikari.WS , and the original author of the Wordpress plugin named
* Hikari Krumo, please keep this license terms and credit me if you redistribute the plugin
*
* Hikari Krumo,  is licensed under the Creative Commons Attribution-Noncommercial-Share Alike 3.0
* To view a copy of this license, please visit http://creativecommons.org/licenses/by-nc-sa/3.0/
*
*   This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
/*****************************************************************************
* © Copyright Hikari (http://wordpress.Hikari.ws), 2010
* If you want to redistribute this script, please leave a link to
* http://hikari.WS
*
* Parts of this code are provided or based on ideas and/or code written by others
* Translations to different languages are provided by users of this script
* IMPORTANT CONTRIBUTIONS TO THIS SCRIPT (listed in alphabetical order):
*
** Krumo: http://krumo.sourceforge.net
*
* Please send a message to the address specified on the page of the script, for credits
*
* Other contributors' (nick)names may be provided in the header of (or inside) the functions
* SPECIAL THANKS to all contributors and translators of this script !
*****************************************************************************/

define('HkKrumo_basename',plugin_basename(__FILE__));
define('HkKrumo_pluginfile',__FILE__);



require_once 'hikari-tools.php';
require_once 'krumo/class.krumo.php';
require_once 'hikari-krumo-options.php';





