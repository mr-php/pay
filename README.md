# MrPHP Payment Gateway

Simple PHP app that makes use of the following:

- [Silex](http://silex.sensiolabs.org/) web framework.
- [Stripe](https://stripe.com/) payment gateway.
- Deployed using [Heroku](https://www.heroku.com/).

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

- [Getting Started with PHP on Heroku](https://devcenter.heroku.com/articles/getting-started-with-php)
- [PHP on Heroku](https://devcenter.heroku.com/categories/php)
- [Silex Documentation](http://silex.sensiolabs.org/documentation)
- [Silex Twig Templates](http://silex.sensiolabs.org/doc/providers/twig.html)
- [Stripe Documentation](https://stripe.com/docs)
- [Stripe Custom Forms](https://stripe.com/docs/tutorials/forms)
