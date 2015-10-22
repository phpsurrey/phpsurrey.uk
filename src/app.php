<?php
require_once __DIR__.'/bootstrap.php';

$app->get('/', function() use($app) {
  return $app['twig']->render('index.html.twig');
});

$app->get('/location', function() use($app) {
  return $app['twig']->render('location.html.twig');
});

$app->get('/events', function() use($app) {
  return $app['twig']->render('events.html.twig');
});

$app->get('/contact', function() use($app) {
  return $app['twig']->render('contact.html.twig');
});

$app->get('/sponsors', function() use($app) {
  return $app['twig']->render('sponsors.html.twig');
});

$app->get('/sitemap.txt', function() use($app) {
  return $app['twig']->render('sitemap.txt.twig');
});

$app->run();
?>
