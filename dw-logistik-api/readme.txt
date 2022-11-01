composer create-project --prefer-dist laravel/lumen dw-logistik-api

php artisan make:migration create_users_table
php artisan make:migration create_user_balances_table
php artisan make:migration create_fleets_table
php artisan make:migration create_categories_table
php artisan make:migration create_balance_histories_table
php artisan make:migration create_customers_table
php artisan make:migration create_orders_table
php artisan make:migration create_order_complaints_table

.env
dw-logistik

bootstrap/app.php
uncomment code 
  $app->withEloquent();
  $app->withFacades();



php -S localhost:8000 -t ./public

php artisan make:migration change_api_token_nullable_to_users_table
composer require doctrine/dbal
php artisan migrate

uncomment
$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
]);

$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\AuthServiceProvider::class);

Kemudian buka file app/Providers/AuthServiceProvider.php dan modifikasi method boot() menjadi

php artisan make:seeder UsersTableSeeder
php artisan db:seed --class=UsersTableSeeder

php artisan make:migration change_photo_nullable_to_users_table 
php artisan migrate

php artisan make:migration add_field_reset_token_to_users_table
php artisan migrate

Adapun file ResetPasswordMail.php yang berada di dalam table App/Mail belum tersedia, buat file tersebut dan tambahkan code berikut.
composer require illuminate/mail

Lalu buka file bootstrap/app.php dan tambahkan baris code berikut

$app->register(Illuminate\Mail\MailServiceProvider::class);

$app->configure('mail');
$app->alias('mailer', Illuminate\Mail\Mailer::class);
$app->alias('mailer', Illuminate\Contracts\Mail\Mailer::class);
$app->alias('mailer', Illuminate\Contracts\Mail\MailQueue::class);

Buat middleware baru bernama CorsMiddleware.php di dalam folder app/Http/Middleware dan tambahkan code berikut


Untuk mengatasi hal ini, buka file AuthServiceProvider.php yang berada di dalam folder app/Providers dan modifikasi block code yang memiliki return statement menjadi.
return User::where('api_token', end($explode))->first();




