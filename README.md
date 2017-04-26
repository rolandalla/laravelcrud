# Laravel  5.4 CRUD generator
1- This is a Laravel 5.4 CRUD generator install the package by using :
 composer require roland/crud dev-master

2- After install  go to config/app and add to providers :
  Roland\Crud\CrudServiceProvider::class,

3- Create config files 
  php artisan vendor:publish

4- All Done :) 

# How to use 
Commands

Crud command:

php artisan crud:generate Posts --fields="title:string, body:text"
You can also easily include route, set primary key, set views directory etc through options --route, --pk, --view-path as belows:

php artisan crud:generate Posts --fields="title:string:required, body:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin --route-group=admin
Options:

--fields : Fields name for the form & model.
--route : Include Crud route to routes.php? yes or no.
--pk : The name of the primary key.
--view-path : The name of the view path.
--namespace : Namespace of the controller.
--route-group : Prefix of the route group.
Other commands (optional):

For controller generator:

php artisan crud:controller PostsController --crud-name=posts --model-name=Post --view-path="directory" --route-group=admin
For model generator:

php artisan crud:model Post --fillable="['title', 'body']"
For migration generator:

php artisan crud:migration posts --schema="title:string, body:text"
For view generator:

php artisan crud:view posts --fields="title:string, body:text" --view-path="directory" --route-group=admin
By default, the generator will attempt to append the crud route to your routes.php file. If you don't want the route added, you can use the option --route=no.

After creating all resources, run migrate command. If necessary, include the route for your crud as well.

php artisan migrate
If you chose not to add the crud route in automatically (see above), you will need to include the route manually.

Route::resource('posts', 'PostsController');
Supported Field Types

These fields are supported for migration and view's form:

string
char
varchar
password
email
date
datetime
time
timestamp
text
mediumtext
longtext
json
jsonb
binary
number
integer
bigint
mediumint
tinyint
smallint
boolean
decimal
double
float
Custom Generator's Stub Template

You can customize the generator's stub files/templates to achieve your need.

Make sure you've published package's assets.

php artisan vendor:publish
Turn on custom_template support on /config/crudgenerator.php

'custom_template' => true,
From the directory /resources/crud-generator/ you can modify or customize the stub files.



