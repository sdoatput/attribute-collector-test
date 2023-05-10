#/bin/bash

rm -rf .composer-attribute-collector vendor
composer install
php src/test.php
composer dump-autoload
php src/test.php
