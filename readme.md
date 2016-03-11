# Laravel 5.2 REST API + AngularJS 1.5 App + ngMaterial 1.0.6

#### Installation
```sh
$ git clone <REPO_URL>
$ composer install
$ npm install
$ bower update
$ gulp
```
#### Laravel 5.2 needs _.env_ file to working properly
You can see example .env file [here](https://github.com/laravel/laravel/blob/master/.env.example)


#### Setting symbolic link from _public_ to _public_html_ on webserver
```sh
$ ln -s public/ ../public_html
```
#### Build application public folder from assets
```sh
$ gulp
```

#### Watch Assets For Changes
```sh
$ gulp watch
```
