# Problem description
Write a RESTful API, available via HTTP
use case: shopping basket
* userstory1: "as a customer, I want to add an item into the basket"
* userstory2: "as a customer, I want to view all my item in my basket"

## Technologies used
* PHP 7
* Laravel Framework 5.7
* Composer as package manager
* Mysql

## Prerequisites

Make sure that **PHP**, **Mysql**, **Git** and **Composer package manager** is already installed on the system. If not then follow the instructions to download and install all of these dependencies from the below links
* [Git](https://git-scm.com/downloads)
* [Composer package manager](https://getcomposer.org/)
* [Web server for Mac includes PHP and Mysql](https://www.mamp.info/en/downloads/)
* [Web server for Windows includes PHP and Mysql](http://www.wampserver.com/en/)


## Installation
The installation process is quite simple and straightforward. Just follow the below steps
 
- Open the terminal and navigate into the desired project directory and then execute the below command to download the code from github
```
git clone https://github.com/waqasrazaq/eshop.git
```
- Once the code is downloaded then navigate into project directory (eshop) and execute the below command in the root directory and wait for the process to download and install all the required components and dependencies

```composer install```

It will take some time, so wait for a couple of minutes to complete the process.


- In the root of the project directory, execute the below command via terminal. It will create the .env file from the example file comes with Laraval 

```
cp .env.example .env
```

- Then execute the below command to generate the App key

```
php artisan key:generate
```

- Next step is database configuration. Create a database named as "eshop_db" and note down the connection information (DB username, password and port). Then open .env file from root directory of the project and update the below connection information as per your dev environment

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eshop_db
DB_USERNAME=root
DB_PASSWORD=
```

- Till now we have configured the database with our project. Now lets create the required tables. Execute the below command via terminal from root directory of the project. Also Note that .env file should not be part of repo. Currently it is added just to ease the process of project configuration. 

```
php artisan migrate
```

- Now we will populate the database tables with dummy data
```
 php artisan db:seed
```

- Run the local dev server

```
 php artisan serve
```


That's it. Our asset-manager is installed and configured. Double check that dev web server is started and then type the URL in browser as http://base_web_server_url:port/asset-manager/public

# Output API end points

## For userstory1: "as a customer, I want to add an item into the basket"
URL: http://hostname:port/api/carts/{cart_id}/items

Example: http://127.0.0.1:8000/api/carts/2/items

### Request

HTTP Method: Post

Required Payload example: { 
    product_id: 23,
    quantity: 4
}

### Response

HTTP status code 201 with json object of added items if items are added sussfully and status code 422 in case of invalid input to the API

## For userstory2: "as a customer, I want to view all my item in my basket"
URL: http://hostname:port/api/carts/{cart_id}/items

Example URL: http://127.0.0.1:8000/api/carts/2/items

### Request
HTTP Method: Get

### Response
For valid response, HTTP status code 200 with list of all the added items into the cart (json format) and status code 500 in case any error on the server.

## Major files used to create these API
Although the information below on the application structure is very brief, at least it gives a starting point for the developers to work on the project 
* routes/api.php - Contains the RESTful api routes
* app/Http/Controllers - Contains all the controllers for the application. There's a file CartController.php inside it which controls all the requests coming from end points 
* app/Carts.php, app/CartItems.php, app/Products.php and app/User.php files are models I've created for the cart API
* database/migrations - Contains the tables **schema** and migration related code
![DB schema](http://projectxdubai.com/eshop/db-schema.png)
* database/seeds - Contains code to populate dummy data in the tables
* vendor - Contains all the composer dependencies
* tests -  Contains the unit tests for these API. (tests/Feature/CartsTest.php)

For more details on the overall files structure of the laravel project, follow this docs https://laravel.com/docs/ link.
