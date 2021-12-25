<?php

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserCollection;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\api\TestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CampanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\CatagoryItemController;
use App\Http\Controllers\CustomerController;
use phpDocumentor\Reflection\Types\Resource_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//  Admin
Route::Group(['prefix' => '/admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/catagory', CatagoryController::class);
    Route::resource('/item', ItemController::class);
    Route::resource('/order', OrderController::class);
    Route::get('/new_order', [OrderController::class, 'newOrder']);
    Route::resource('/user', CampanyController::class);
});









Route::Group(['prefix' => '/userpage'], function () {
    Route::get('/', [PageController::class, 'index']);
    Route::get('/catagory/{id}', [PageController::class, 'item']);
    Route::get('/show_item/{id}', [PageController::class, 'show_item']);
    Route::resource('/catagory.item', CatagoryItemController::class)->shallow();
});








Route::Group(['prefix' => '/cart'], function () {
    Route::resource('/', CartController::class);
    Route::get('/add', [CartController::class, 'addItem']);
    Route::get('/delete/{id}', [CartController::class, 'delete']);
    Route::get('/store/{id}', [CartController::class, 'store']);
    Route::get('/item', function () {
        return view('Pages.cart_item');
    });
});



Route::prefix('customer')->group(function () {
    Route::get('/', [CustomerController::class, 'index']);
    Route::POST('/register', [CustomerController::class, 'register']);
});








Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', [HomeController::class, 'index']);
Auth::routes();


// Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/users', function () {
    return new UserCollection(User::paginate());
});
Route::group(['prefix' => 'api', 'namespace' => 'api'], function () {
    Route::Resource('/tests', TestController::class);
});
Route::get('/tests', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
