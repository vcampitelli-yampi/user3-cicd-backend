#!/bin/sh
cd $(dirname "$0")/../
mkdir vendor
chown www-data:www-data vendor
sudo -u www-data composer install --no-dev --no-progress --no-interaction --optimize-autoloader
