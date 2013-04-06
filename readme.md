## Guestbook App Laravel 4.x

Simple application built with Laravel 4.

### Install

#### Install dependency packages for Laravel 4 using composer
```
$  php composer install
```
#### Create unique key for application
```
$ php ./artisan key:generate
```
#### Create database laravel_guests
```
mysql > create schema laravel_guests;

mysql > use laravel_guests;
```
Don't forget to change MySQL database settings in file app/database.php

####  Run migrate
```
$ php ./artisan migrate:install

$ php ./artisan migrate
```
####  Run server

For demo it's enough to run this application on development server
```
$ php ./artisan serve
```
### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
