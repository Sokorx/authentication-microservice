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

### Copy Generated Documentation Files

```shell
cp storage/app/scribe/collection.json public/scribe/collection.json
cp storage/app/scribe/openapi.yaml public/scribe/openapi.yaml
```
