# Laravel 8 Simple CART using stripes
Simple ecommerce system , supports Laravel 8.0 with Laravel Cashier.

-----
## Table of Contents

* [Features](#item1)
* [Quick Start](#item2)

-----
<a name="item1"></a>
## Features:
* Authentication
  * Registration
  * Login
  * Product Listing Page
  * Product detailed page
  * Buy product using creditcard
* Front-end
  * Custom template with Bootstrap 4
  * View products, buy products

-----
<a name="item2"></a>
## Quick Start:

Clone this repository and install the dependencies.

    $ git clone https://github.com/sinujose007/stripes-app.git && cd stripes-app
    $ composer install

Run the command below to initialize. 

    $ php artisan migrate
	$ php artisan db:seed --class=ProductsSeeder

Finally, serve the application.

    $ php artisan serve

Open [http://localhost:8000](http://localhost:8000) from your browser. 
It will redirect to a login page , you can register each user by visiting http://localhost:8000/register

Use registered username and password to login and view the products grid page.

-----
