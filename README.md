
Laravel CRUD Generator
<a href="http://www.rolandalla.com/laravel-crud-generator/">http://www.rolandalla.com/laravel-crud-generator/ </a>
### Requirements
    Laravel >=5.1
    PHP >= 5.5.9

## Installation

1. Run
    ```
    composer require roland/crud dev-master
    ```

2. Add service provider to **/config/app.php** file.
    ```php
    'providers' => [
        ...

         Roland\Crud\CrudServiceProvider::class,
    ],
    ```
  

3. Publish config file & generator template files.
    ```
    php artisan vendor:publish --provider="Roland\Crud\CrudServiceProvider"
    ```
4. All Done.
    ```
    Your Crud Generator is Installed :)
    ```
### Optional

1. Install **laravelcollective/html** helper package if you haven't installed it already.
    * Run

    ```
    composer require laravelcollective/html
    ```

    * Add service provider & aliases to **config/app.php**.
    ```php
    'providers' => [
        ...

        Collective\Html\HtmlServiceProvider::class,
    ],

    'aliases' => [
        ...

        'Form' => Collective\Html\FormFacade::class,
        'HTML' => Collective\Html\HtmlFacade::class,
    ],
    ```
2. Run ```composer dump-autoload```

Note: You should have configured database for this operation.

## Commands

#### Crud command:

```
php artisan crud:generate Posts --fields="title:string, body:text"
```

You can also easily include route, set primary key, set views directory etc through options **--route**, **--pk**, **--view-path** as belows:

```
php artisan crud:generate Posts --fields="title:string:required, body:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin --route-group=admin
```

Options:

- --fields : Fields name for the form & model.
- --route : Include Crud route to routes.php? yes or no.
- --pk : The name of the primary key.
- --view-path : The name of the view path.
- --namespace : Namespace of the controller.
- --route-group : Prefix of the route group.

-----------
-----------


#### Other commands (optional):

For controller generator:

```
php artisan crud:controller PostsController --crud-name=posts --model-name=Post --view-path="directory" --route-group=admin
```

For model generator:

```
php artisan crud:model Post --fillable="['title', 'body']"
```

For migration generator:

```
php artisan crud:migration posts --schema="title:string, body:text"
```

For view generator:

```
php artisan crud:view posts --fields="title:string, body:text" --view-path="directory" --route-group=admin
```

By default, the generator will attempt to append the crud route to your *routes/web.php* file. If you don't want the route added, you can use the option ```--route=no```, or edit the route path on config file.

After creating all resources, run migrate command. *If necessary, include the route for your crud as well.*

```
php artisan migrate
```

If you chose not to add the crud route in automatically (see above), you will need to include the route manually.
```php
Route::resource('posts', 'PostsController');
```

### Supported Field Types

These fields are supported for migration and view's form:

* string
* char
* varchar
* password
* email
* date
* datetime
* time
* timestamp
* text
* mediumtext
* longtext
* json
* jsonb
* binary
* number
* integer
* bigint
* mediumint
* tinyint
* smallint
* boolean
* decimal
* double
* float

### Custom Generator's Stub Template

You can customize the generator's stub **vendor/roland/crud/Commands/stubs** to achieve your need.

1. Make sure you've published package's assets.
    ```
    php artisan vendor:publish
    ```
2. From the directory **/resources/backEnd/** you can modify or customize the created View files.

3. From the directory **/resources/backLayout/** you can modify or customize the created Master Layout.

4. From the file **/routes/web.php** you can modify or customize the created route.

4. From the file **/app/config/crudgenerator.php** you can modify or customize all the needed paths.


### Suggestion 
Start your project using this Laravel 5.4 Advanced Starter :
Sentinel,
Crud Generator,
* Laravel 5.4.x
* Twitter Bootstrap 3.x
* Back-end
    * Automatic install and setup website.
    * User management.
    * Role management.
    * Dashboard.
    * Gentelella Dashboard Ready.
* Front-end
    * User login, registration
    * soon will be more...
* Packages included:
    * Datatables Bundle
    * Sentinel
    * Crud generator
Check out: http://www.rolandalla.com/laravel-5-4-advanced-starter/
Github: https://github.com/roladn/laravel-sentinel-crud-starter






