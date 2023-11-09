## Laravel Image Gallery App

This is a basic authentication built with Laravel and Tainwind CSS. It allows users to register and login.

# Requirements

-   PHP 8.1 or later
-   NodeJS and npm
-   PHP extensions according to Laravel.

### Getting Started

clone this repository

Change the directory

```sh
cd laravel-basic-authentication
```

Install the dependencies:

```sh
composer install
```

```sh
npm install
```

Create a new database same as `laravelauth` then rename the `.env.example` to `.env` and run `php artisan key:generate`

Migrate the database:

```sh
php artisan migrate
```

Start the development server:

```sh
npm run dev
php artisan serve
```
