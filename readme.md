# Wordpress Custom Post Types and Taxonomies Plugin

It is best practice to include custom post types and taxonomies in a plugin, rather than in functions.php, and that's exactly what this plugin does. There is no UI -- just adjust the plugin code to suit your needs.

## Includes

custom-post-types-taxonomies-ashe-abbott.php, which contains examples for setting up a hierarchical taxonomy, a non-hierarchical taxonomy and a custom post type, including labels, dashicons, etc.

## How To Use

* Upload the Wordpress Custom Post Types and Taxonomies Plugin folder to your plugins directory.
* Activate plugin.
* Code away! Add, change and remove custom post types and taxonomies as needed.

## Changelog

### Potential Roadmap for Future Updates
* Develop UI?

### v1.2
* Added `'show_in_rest' => true` to custom post type to enable block editor support

### v1.1
* Revised and added some comments
* Changed main php file name so as not to trigger unsupported plugin warning on WordFence; updated plugin name to match

### v1.0
Initial commit.