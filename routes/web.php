<?php

    use App\Http\Controllers\front\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
