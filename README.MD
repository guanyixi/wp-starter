# WordPress Starter Theme

WordPress Starter theme that uses [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) for workflow.

**Theme Features**

* CSS (SCSS) compiling
* Javascript (React) compiling
* Local web fonts with preload
* SVG Icons with helper function for including icons
* Basic PHP templates & partials

**You can always customize the theme for your project by:**

* Change the theme directory name to your custom theme name.
* Change the theme name in style.css
* Search 'themename' within the theme directory, and replace it with your custom theme name.

## Assets Compiling

Run `npm install` under the theme directory to install the npm packages.

* start: `npx wp-scripts start` (dev - watch)
* build: `npx wp-scripts build` (production - minify)


