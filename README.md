# Moniport Authentication Microservice

## Requirement

- PHP 8.0
- Laravel 9

## Project setup

```shell
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seeder
```

### Run development server

```shell
php artisan serve
```

### Run tests

```shell
php artisan test
```

### Generate Documentation

```shell
php artisan scribe:generate
```

### Compiles and minifies for production

``` shell
npm run build
```

### Lints and fixes files

```shell
npm run lint
```

### Customize configuration

See [Configuration Reference](https://cli.vuejs.org/config/).
