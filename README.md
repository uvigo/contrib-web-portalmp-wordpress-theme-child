# contrib-web-portalmp-wordpress-theme-child

El software alojado en proyectos "contrib" se ofrece tal cual, sin garantía de ningún tipo, expresa o implícita. La Universidad de Vigo no hace responsable de su uso ni de los daños u otras responsabilidades derivadas del mismo.

En particular, la Universidad de Vigo: No se compromete a atender peticiones de actualización del software. No dará ningún tipo de soporte ni formación relativa al mismo.

La utilización del software implica la aceptación de las condiciones de uso.

# UVigo WordPress Child Theme

WordPress Child Theme for use with multiproposal webs in Universidade de Vigo.


## Features

* WordPress Theme based on [Sage 9](https://roots.io/sage/)
* ES6 for JavaScript
* [Webpack](https://webpack.github.io/) for compiling assets, optimizing images, and concatenating and minifying files
* [Browsersync](http://www.browsersync.io/) for synchronized browser testing
* [Laravel Blade](https://laravel.com/docs/5.3/blade) as a templating engine
* [Controller](https://github.com/soberwp/controller) for passing data to Blade templates
* Use [UVigoweb Frontend](https://github.com/uvigo/contrib-web-portalmp-frontend) CSS framework, based on [Bootstrap 4](http://getbootstrap.com/)
* Font Awesome


## Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.9
* [PHP](http://php.net/manual/en/install.php) >= 7.0
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 6.9.x
* [Yarn](https://yarnpkg.com/en/docs/install)


## Theme structure

```shell
themes/uvigothemewp/   # → Root of your Sage based theme
├── appchild/             # → Theme PHP
│   ├── controllers/      # → Controller files
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── functions.php         # → Composer autoloader, theme includes
├── index.php             # → Never manually edit
├── languages/            # → Languages .mo and .po files
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
├── screenshot.png        # → Theme screenshot for WP admin
├── style.css             # → Theme meta information
├── vendor/               # → Composer packages (never edit)
├── views/                # → Theme templates
│   ├── layouts/          # → Base templates
│   └── partials/         # → Partial templates
```


## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.


## Theme development

* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/uvigothemewp`)


### Build commands

* `yarn run start` — Compile assets when file changes are made, start Browsersync session
* `yarn run build` — Compile and optimize the files in your assets directory
* `yarn run build:production` — Compile assets for production
* `yarn run deploy` — Compile assets for production and deploy in zip file

