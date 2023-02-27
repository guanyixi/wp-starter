# WordPress Starter Theme

**Theme Features**

* CSS (SCSS) compiling
* Javascript (Class & React) compiling
* Local web fonts with @import and preload
* SVG Icons with helper function for including icons
* Basic PHP templates & partials
* Enqueue and dequeue assets
* Basic settings in theme.json file

**Theme.json:**
* The settings in theme.json file will apply on Gutenberg block both on front end and back end. 
* You can disable theme.json CSS on the front end by dequeue the global-styles by adding `wp_dequeue_style( 'global-styles' )` in the `wp_enqueue_scripts` hook.
* There are pros and cons for each method. If theme.json settings are applied on both front and backend, you have to overwrite some default block stylings for the front end. If theme.json is only used for the back end, you will end up with styles in both theme.json and CSS files. 
* If your site is block based, to my opinion having the theme.json work on both front and back end is a better option. If your site is mostly custom web pages, theme.json should be only used for styling editors. That way, you can style the front end from scratch.


**Customize the theme for the project by:**

* Change the theme directory name.
* Change the theme name in style.css
* Search 'themename' within the theme directory, and replace it with the new theme name.


## Assets Compiling

This theme uses [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) for compiling assets.

First install: run `npm install` under the theme directory to install the npm packages.

* start: `npm start` - watch
* build: `npm run build` - minify 