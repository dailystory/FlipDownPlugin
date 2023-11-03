# FlipDown WordPress Plugin
This WordPress plugin by [DailyStory](https://www.dailystory.com/) enables users to use a simple short code to insert a FlipDown countdown timer in WordPress pages or posts. We initially developed this plug for our own website to easily add countdown timers for webinars, but several customers asked about using it for Black Friday and Cyber Monday.

![FlipDown WordPress Plugin](https://github.com/dailystory/FlipDownPlugin/blob/main/assets/flip_down.png)

The FlipDown plugin uses the [FlipDown JS library](https://github.com/PButcher/flipdown). 

## How to use the plugin
The FlipDown plugin makes use of a WordPress shortcode. Simply add the shortcode within your WordPress page or post using the following syntax:

`[flipdown date="2023-11-27T00:00:00-0500"]`

The data should be in the format of a JavaScript ISO date with the offset for your location. The above example creates a countdown timer for Cyber Monday on November 27, 2023.

It's worth mentioning that the date should includes zeros for months less than 10 and times less than 10. 

For example, August 7th would be written as 2023-08-07.

## Current Supported Version
version 0.0.1, Updated November 2023

## License
The FlipDown plugin is licensed under GNU General Public License v2.0 or later.

## Contributing
If you use this plugin and find bugs or want to add features (or contribute in other ways) we'd love it. Just submit a pull request and we'll review the changes. 

We're also open to suggestions, bug reports and more. Anything we can do to make this plugin more useful for our customers!

If you have [questions or ideas about this plugin we would love to talk](https://www.dailystory.com/contact-us).
