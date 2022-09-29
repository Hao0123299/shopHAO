<?php

    use App\Http\Controllers\admin\AdminController;
    use App\Http\Controllers\front\HomeController;
    use App\Http\Controllers\front\ProductController;
    use App\Models\Brands;
    use App\Models\Category;
    use App\Models\Role;
    use App\Models\User;
    use App\Models\Users;
    use Illuminate\Support\Facades\Route;

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

//front
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/shop/product/{id}', [ProductController::class, 'show']);

//admin
Route::get('/quan-tri', [AdminController::class, 'index']);
