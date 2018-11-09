#!/bin/sh
    
    set -e
    
    phpenv local 7.2

    mysql -e 'create database syllabus_tests;'

    cp .env.codeship .env
    
    composer install --prefer-dist --no-interaction -o --optimize-autoloader
    
    php artisan key:generate    
    php artisan migrate --force --env="syllabus_tests"
    php artisan db:seed --env="syllabus_tests"

    cp phpunit.xml.ci phpunit.xml

    vendor/bin/phpunit