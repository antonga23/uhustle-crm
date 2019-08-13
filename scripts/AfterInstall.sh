#!/bin/bash
# Set permissions to storage and bootstrap cache
# sudo chmod -R 0775 /var/www/html
# sudo chown -R ubuntu:apache /var/www/html
# sudo chmod -R 0777 /var/www/html/storage
# sudo chmod -R 0777 /var/www/html/bootstrap/cache
#
cd /var/www/html
#
# Run composer
sudo composer install --no-ansi --no-suggest --no-interaction --no-progress --prefer-dist --no-scripts -d /var/www/html

# sudo composer dumpautoload

# #
# # Run artisan commands
php /var/www/html/artisan migrate

