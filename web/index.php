<?php
require('../vendor/autoload.php');
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();
//$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app->get('/', function(Request $request) use($app) {
    return $app['twig']->render('index.html', array(
        'stripe_public' => getenv('STRIPE_PUBLIC'),
        'amount' => $request->get('amount'),
        'description' => $request->get('description'),
    ));
});
$app->get('/success/', function(Request $request) use($app) {
    return $app['twig']->render('success.html');
});
$app->get('/declined/', function(Request $request) use($app) {
    return $app['twig']->render('declined.html');
});
$app->post('/', function(Request $request) use($app) {
    \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET'));
    try {
        $charge = \Stripe\Charge::create(array(
            'amount' => ceil($request->get('amount') * 100),
            'currency' => 'aud',
            'source' => $request->get('token'),
            'description' => $request->get('description'),
        ));
        return $app->redirect('success/');
    } catch(Exception $e) {}
    return $app->redirect('declined/');
});

$app->run();