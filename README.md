# MrPHP Payment Gateway

Simple PHP app that makes use of the [Silex](http://silex.sensiolabs.org/) web framework, deployed using Heroku.

For more info see [Getting Started with PHP on Heroku](https://devcenter.heroku.com/articles/getting-started-with-php) article - check it out.

## Running Locally

Make sure you have PHP, Apache and Composer installed.  Also, install the [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
$ git clone git@github.com:mr-php/pay.git # or clone your own fork
$ cd pay
$ composer update
$ foreman start web
```

Your app should now be running on [localhost:5000](http://localhost:5000/).

## Documentation

For more information about using PHP on Heroku, see these Dev Center articles:

- [PHP on Heroku](https://devcenter.heroku.com/categories/php)
