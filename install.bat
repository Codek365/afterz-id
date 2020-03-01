cp .env.example .env
composer update
php artisan migrate --seed
php artisan key:generate
php artisan storage:link


Pause

