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
