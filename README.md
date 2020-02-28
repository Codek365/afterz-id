# afterz-id
Run cp .env.example .env command to copy example into real .env file, then edit it with DB credentials and other settings you want
Run composer install command
Run php artisan migrate --seed command. Seed is important, because it will create the first admin user for you.
Run php artisan key:generate command
Run php artisan storage:link command
And that's it, go to your domain and login with these credentials: admin@admin.com - password
