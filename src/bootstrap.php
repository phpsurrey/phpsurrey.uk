<?php
require_once __DIR__.'/../vendor/autoload.php';

ini_set('date.timezone', 'UTC');

$app = new Silex\Application();

$app['debug'] = getenv('DEBUG') ? true : false;
$app['assets.require_compiled'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
  'twig.path' => __DIR__.'/views',
));

$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

$app->before(function () use ($app) {
  $app['twig']->addGlobal('layout', $app['twig']->loadTemplate('layout.html.twig'));
});
