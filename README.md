# PhalconPHP - Micro
An example application built with the Phalcon PHP extension using the micro application type.

### Local Setup

To setup you local environment you must run the following command:

```bash
cp .env.example .env 
docker-compose up
```

Composer install:
```bash
docker exec -it phalcon-micro-php-fpm composer install
```

Then run the DB migrations:
```bash
docker exec -it phalcon-micro-php-fpm ./vendor/bin/phalcon migration run
```

Once built the application is accessible at: [http://localhost:8080/](http://localhost:8080/)

### PHPStorm
As PhalconPHP exists in memory, and does not live within the vendor folder, to get PHPStorm to not show errors on it's 
dependencies. You can install the Phalcon-4-autocomplete plugin.
    
[https://github.com/ruudboon/phpstorm-phalcon-4-autocomplete](https://github.com/ruudboon/phpstorm-phalcon-4-autocomplete)

### Testing

To test phpcs you can run:

```bash
composer run phpcs
```