# Scouts Rebrand 2018 Theme

## Description

> Free Wordpress Template for use by Scouting Groups in the UK.

## Screenshot

![Screenshot of this theme, showing the top of the homepage](/screenshot.png?raw=true)

## Installation

1. Download the [latest version of site theme](https://github.com/west-sussex-scouts/county-wordpress-theme/releases/latest)
1. Upload the plugin files to `/wp-content/themes/county-wordpress-theme`, or install the plugin through the WordPress plugins screen directly.
1. Activate the Theme through the 'Themes' screen in WordPress

## Updates

In theory, the theme will show an update is available in the wordpress updates manager. If updates are not showing, manually follow the steps in the [Installation](#Installation) Section again.

## Setup

1. Install this theme to your Wordpress site
1. Set up the customization options ([/wp-admin/customize.php?return=%2Fwp-admin%2Fthemes.php](/wp-admin/customize.php?return=%2Fwp-admin%2Fthemes.php))
    1. Site Title = Name of your District / Group
    1. Charity Number = Your charity number (omit if not required)
    1. Menu (see [Menu](#menu) below)
    1. Homepage (see [Homepage](#homepage) below)

## Menus

This theme requires that two [menus](https://codex.wordpress.org/WordPress_Menu_User_Guide) be set up.

### Header Menu

This menu will be displayed at the top of all pages.

Recommendation is:

* Home (Custom link to `/`)
* Your
* Pages
* Here

### Footer Links

This menu dictates the links which are displayed at the bottom of the page.

There are some quirks to how these links are generated:

* A top-level menu item will not be added as a link, but as the section 'header'. This should be set up as a 'Custom link' with a url of '#'
* Only the first 3 top level links will be displayed.
* If a top-level item has no sub-items, it will be skipped (not displayed, and will not count towards the limit of 3 items)
* As many second-level items can be added as required (but don't go too overboard - it will look silly with too many!)
* When viewed on a computer (width > 992px), the items will be generated in two columns, as below:

    |Top-level|     |
    |---------|-----|
    |Sub-1    |Sub-2|
    |Sub-3    |Sub-4|
* On Smaller devices, the items are displayed as one column

## Homepage

This theme includes a static homepage. You can configure which page this points to in 'Homepage settings' in the customize menu.
