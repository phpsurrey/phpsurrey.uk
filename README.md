# PHP Surrey

Huzzah you found the repo for the site!

## Getting it up and running locally

Clone this repo, point your terminal to the project location are follow the next steps :)

### Installing dependencies

All PHP depencies are managed using [composer](https://getcomposer.org/) & the browser assets are managed using [Bower](http://bower.io/), so assuming you have that installed just run:

    composer install
    bower install

### Starting the server

I built this version of the site using PHP 5.4's built in server, so in two terminal tabs run:

    php -S localhost:8080 -t web web/index.php
    sass -w web/stylesheets/main.scss

Alternatively, if copy `.env.example` to `.env` you can start using foreman.

    foreman start -f Procfile_dev

From here you should be able to visit [http://localhost:8080/](http://localhost:8080/) and see the site.

## Deploying

Hopefully the setup should just be a matter of dropping the repo on a server and pointing your chosen configuration to the `/web/index.php` file. 

You may also want to precomile the CSS with

    sass web/stylesheets/main.scss --style compressed > web/stylesheets/main.css

### Deploying to Heroku

## Fresh run

Create you Heroku project & set the build pack:

    heroku create phpsurrey --buildpack https://github.com/heroku/heroku-buildpack-php
    heroku buildpacks:set https://github.com/heroku/heroku-buildpack-php

## Normal deploy

Just push to heroku :)
