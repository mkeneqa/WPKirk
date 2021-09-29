# WP Kirk for React

[![Latest Stable Version](https://poser.pugx.org/wpbones/wpbones/v/stable)](https://packagist.org/packages/wpbones/wpbones)

WP Kirk is a boilerplate plugin written by using [WP Bones](https://github.com/wpbones/WPBones) Framework Library.
You may start from here to create a WP Bones WordPress plugin.

As you know, WordPress doesn't support composer. So, I have used a little trick to fix this issue.

## Requirement

### Composer

    $ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

### Yarn

First of all, you have to install [yarn](https://yarnpkg.com/en/). If you're using a Mac just run

    $ brew install yarn

For different OS please follow the instruction [here](https://yarnpkg.com/en/docs/install)

## Overview

This version is built with [Webpack](https://webpack.js.org/) in order to provides support for [ReactJS](https://reactjs.org/). In this boilerplate you'll find

```txt
 resources/
   assets/
     jsx/
       app.jsx
       styles.less
     components/
       sample.jsx
```

In short, an example of a ReactJS application `app.jsx` which import a less style `styles.less`. This application uses a custom component `sample.jsx` which uses [styled-component](https://www.styled-components.com/).
For the `components` folder, you already will find the `alias` in the `webpack.config.js`. Anyway, feel free to configure the `package.json` and the `webpack.config.js` file as you want.

The enque of the main script works as usual by using `withAdminScripts()` in the `/plugin/Http/Controllers/Dashboard/DashboardController.php`. For more infomation about that see the [complete docs here](https://github.com/wpbones/WPBones/wiki)

```php
class DashboardController extends Controller
{

  public function index()
  {
    return WPKirk()->view( 'dashboard.index' )
        ->withAdminScripts('main');
  }
}
```

### Get started

    $ yarn

### Compiling

    $ yarn dev

probably, during the develop, you'll use

    $ yarn watch

## I love Laravel

First to all, this framework and the boilerplate plugin are inspired to [Laravel](http://laravel.com/) framework. Also, you will find a `bones` php shell executable like Laravel `artisan`.
After cloning the repo, you can:

Display help

    $ php bones

Change namespace

    $ php bones install

The last command is very important. You can change either the plugin name or the namespace in anytime. However, I suggest you to make this only the first time, when the plugin is inactive.
After changing of the namespace, you can start to develop you plugin. Your namespace will be `MyPluginName`.

You will find further detail in the [Official WP Bones Documentation](https://github.com/wpbones/WPBones/wiki)
