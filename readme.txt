=== Hikari Krumo ===
Contributors: shidouhikari 
Donate link: http://Hikari.ws/wordpress/#donate
Tags: krumo, debug, print_r, var_dump, backtrace, collapse, dump, PHP
Requires at least: 2.8.0
Tested up to: 3.0.1
Stable tag: 0.02.04

Krumo is a debug tool able of collapsing array and object values so that it takes less space and let us see only what we really need from complex data

== Description ==

*Krumo* is a debugging tool equivalent to print_r() and var_dump(), with the advantage of collapsing array and object values so that it takes less space and let us see only what we really need from complex data.

**<a href="http://hikari.ws/krumo/">Hikari Krumo</a>** ports it to a Wordpress plugin, so that Krumo becomes easily available in any Wordpress page. Original Krumo has a few bugs fixed and has its options available in an admin page instead of requiring krumo.ini file edited directly.


= Features =

* The simplicity of print_r() with the details of var_dump()
* Show any data, including its data type
* For arrays and objects, internal data are collapsed, so that it takes less space and you can expand to see only those values you really wanna see, spending much less space
* Works anywhere in Wordpress, backend and frontend
* Hide it from visitors and only those who really need to see dump be able to see it
* Automatically shows PHP file and line where dump happened, a great tool for debugging


== Installation ==

**Hikari Krumo** requires at least *Wordpress 2.8* and *PHP5* to work.

You can use the built in installer and upgrader, or you can install the plugin manually.

1. Download the zip file, upload it to your server and extract all its content to your <code>/wp-content/plugins</code> folder. Make sure the plugin has its own folder (for exemple  <code>/wp-content/plugins/hikari-krumo/</code>).
2. Activate the plugin through the 'Plugins' menu in WordPress admin page.
3. Go to Hikari Krumo settings page and set who should see it
4. That's it! Now you can use Krumo anywhere in your site, being it in a Wordpress Core file, a plugin or a theme, just by calling <code>krumo($data)</code> and passing the data you wanna debug to it!


= Upgrading =

If you have to upgrade manually, simply delete <code>hikari-krumo</code> folder and follow installation steps again.

= Uninstalling =

If you go to plugins list page and deactivate the plugin, it's config stored in database will remain stored and won't be deleted.

If you want to fully uninstall the plugin and clean up database, go to its options page and use its uninstall feature. This feature deletes all stored options, restoring them to default (which can also be used if you want defaults restored back), and then gives you direct link to securely deactive the plugin so that no database data remains stored.


== Frequently Asked Questions ==

= What's the difference of original Krumo to Hikari Krumo? =

Full Krumo is included in the plugin, it's ported to Wordpress so that we can use Krumo anywhere inside Wordpress without having to bother of including it before the use.

Krumo is also adapted so that it's configured from a Wordpress plugin admin page instead of original krumo.ini, making it much easier to config. You can also configure who should see krumo output, so that you use it in frontend while your visitors see your site without even guessing Krumo is in place there.

Also, a few Krumo bugs I've seen were fixed.

= I wanna design a new skin, will you help me?  =

Well I'm not webdesigner, but I can debug it and add to my plugin if you want.

Just provide me the skin files, and make sure to use schablon.com as a basis because it's the one I've tested further. Also make sure to use my plugin's files as basis, because they have some bug fixes over original ones.


== Screenshots ==

These ScreenShots were taken in my site, dumping the very known $post object, as in:

<code>
global $post;
krumo($post);
</code>

1. Krumo as it's presented when page loads, collapsed and using very little space
2. Main variable expanded, showing all object's fields
3. <code>$post->post_content</code> was still collapsed because it's a large text, now it was also expanded and you can see how a big string/blob of text is shown
4. here you see the result of <code>krumo(debug_backtrace())</code>

== Changelog ==

= 0.02 =
* First public release.

== Upgrade Notice ==

= 0.02 and above =
If you have to upgrade manually, simply delete <code>hikari-krumo</code> folder and follow installation steps again.
