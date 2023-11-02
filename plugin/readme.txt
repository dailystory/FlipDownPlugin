# Countdown Timer for WordPress by DailyStory
Contributors: dailystory, roberthoward
Tags: marketing, sales, automation
Requires at least: 4.0
Tested up to: 6.3
Stable tag: 0.0.1
License: GNU General Public License v2.0 or later

The Countdown Timer is a WordPress plugin that makes it simple to add a countdown timer to your pages or posts.

The plugin is built and maintained by [DailyStory](https://www.dailystory.com/), a marketing automation platform. This plugin was created after several of our customers asked how they could create a similar plugin for their WordPress websites.

## How to use the plugin
The FlipDown plugin makes use of a WordPress shortcode. Simply add the shortcode within your WordPress page or post using the following syntax:

[[flipdown date="2023-11-27T00:00:00-0500"]]

The data should be in the format of a JavaScript ISO date with the offset for your location. The above example creates a countdown timer for Cyber Monday on November 27, 2023.

It's worth mentioning that the date should includes zeros for months less than 10 and times less than 10. 

For example, August 7th would be written as 2023-08-07.

## Installation
Installing the FlipDown WordPress Plugin in simple. Just add it to your site from your WordPress Plugin Dashboard and activate the plugin.

### From your WordPress dashboard
1. Visit "Plugins > Add New"
2. Search for "FlipDown"
3. Activate the plugin

### From WordPress.org
1. Download the plugin
2. Unzip the FlipDown plugin into a local directory on your computer
3. Upload the "flipdown" directory to your '/wp-content/plugins/' directory, using your favorite method (ftp, sftp, scp, etc...)
4. Open your WordPress admin dashboard and click "Plugins" in the left sidebar
5. Activate the plugin

### Clone from GitHub
You can [clone the FlipDown WordPress plugin from our GitHub repository](https://github.com/dailystory/FlipDownPlugin/). If you fix bugs, or add features, we would appreciate a pull request so we can share these with other users in the DailyStory community.

## Frequently Asked Questions

### What libraries does the FlipDown plugin use?
The FlipDown plugin uses the [FlipDown JS library](https://github.com/PButcher/flipdown). 

### Where can I get support?
For technical questions, please visit Stack Overflow’s [DailyStory tag](http://stackoverflow.com/). For all other questions, [please contact us](https://www.dailystory.com/contact-us/).

We recommend using WordPress version 4.0 or greater, but we've tested up to version 6.1.

## Screenshots
1. **Set DailyStory Site ID** - After the plugin is installed and activated, set your DailyStory Site ID and click "Save Settings".
2. **Web Form Designer** - Design web forms within DailyStory and then use WordPress shortcodes to easily embed them in your WordPress site.

## Changelog

### 1.0.0
* Initial release for submission to WordPress plugins
