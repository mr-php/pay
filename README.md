# MrPHP Payment Gateway

PHP app that makes use of the following:

- [Silex](http://silex.sensiolabs.org/) web framework.
- [Stripe](https://stripe.com/) payment gateway.
- [PayPal](https://www.paypal.com/) payment gateway.
- [Heroku](https://www.heroku.com/) deployment and hosting.

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
- [PayPal Buttons](https://www.paypal.com/webapps/mpp/get-started/buy-now-button)
