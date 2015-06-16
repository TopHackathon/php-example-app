export SYMFONY_ENV=prod
php composer.phar install --no-dev --optimize-autoloader
php app/console cache:clear --env=prod --no-debug
php app/console assetic:dump --env=prod --no-debug
rm composer.phar
