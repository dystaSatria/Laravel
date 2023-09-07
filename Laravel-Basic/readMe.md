# Laravel Basic


#### Start create Laravel

* download composer
* create laravel with composer

```
create-project laravel/laravel laravel-basic
```
* start for visual studio code
```
code .
```

* Run it

```
php artisan serve

```


#### Route 

* in route directory at web.php

```php

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Second code but same function
 Route::view('/', 'home');
 
 */

```

#### Composer json

* Add to github

```
git init

```

```
git add .

```
* if u have error

```
is owned by:
        'S-1-5-32-544'
but the current user is:
        'S-1-5-21-3852788498-2239215017-4066767366-1001'
To add an exception for this directory, call:

git config --global --add safe.directory F:/laravel-basic

```

