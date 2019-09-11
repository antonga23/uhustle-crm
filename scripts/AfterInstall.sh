#!/bin/bash
# Set permissions to storage and bootstrap cache
if id "ubuntu" >/dev/null 2>&1; then
    sudo chown -R ubuntu:apache /var/www/html
else
    sudo chown -R ec2-user:apache /var/www/html
fi
sudo chmod -R 0775 /var/www/html
sudo chmod -R 0777 /var/www/html/storage
sudo chmod -R 0777 /var/www/html/bootstrap/cache
#
cd /var/www/html
#
# Run composer
sudo composer install --no-ansi --no-suggest --no-interaction --no-progress --prefer-dist --no-scripts -d /var/www/html

# sudo composer dumpautoload

# #
# # Run artisan commands
php /var/www/html/artisan migrate --seed
# php /var/www/html/artisan db:seed
php /var/www/html/artisan config:cache

