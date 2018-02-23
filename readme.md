# Laravel Simple CRUD

This project use for author documentation first time using Laravel. Any input are welcome.

## Step by step setting the project

- Install [Composer](https://getcomposer.org/download/)

- Install [Laravel](https://laravel.com/) 
````
composer create-project --prefer-dist laravel/laravel laravel-simple-CRUD
````

- Install [LaravelCollective](https://laravelcollective.com/). Read the documentation and how to install in the website.
````
composer require "laravelcollective/html"

composer update
````

- Download [Bootstrap](http://getbootstrap.com/docs/4.0/getting-started/download/) and put it in public folder.


- Set database configuration at `.env`. This project use `example` database.
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example
DB_USERNAME=root
DB_PASSWORD=
````

- Create schema
````
php artisan make:migration create_books_table
````

- After that look at `database\migrations` and edit the schema.
````
public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('author');
        $table->string('category');
    });
}
public function down()
{
    Schema::dropIfExists('books');
}
````

- Do not forget to refresh it. If failed, you could just comment `users` and `password_resets` code.
````
php artisan migrate:refresh
````

- Set the models which would be on `app` folder.
````
php artisan make:model Book
````

- Set the views on `resources\views` folder.


- Set the controllers on `app\http\controllers` folder.
````
php artisan make:controller BookController
````

- Set the routing on `routes\web.php` file.