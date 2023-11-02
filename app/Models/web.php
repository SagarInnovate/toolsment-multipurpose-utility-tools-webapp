<?php

use App\Http\Controllers\blogsController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\indexpage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toolsController;
use App\Http\Middleware\checkLogin;



use App\Http\Controllers\userscontroller;



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





Route::get('/',[indexpage::class, 'index']
);



Route::get('/tools', [toolsController::class, 'all_tools']);

Route::get('/tools/{id}', [toolsController::class, 'tt']);

Route::get('/blogs/{id}', [blogsController::class, 'bt']);



Route::get('/about', function () {
    return view('public.about');
});


Route::get('/blogs',  [blogsController::class, 'blog_posts']);


Route::get('/contact', function () {
    return view('public.contact');
});

Route::get('/disclaimer', function () {
    return view('public.disclaimer');
});

Route::get('/privacy-policy', function () {
    return view('public.privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('public.terms-and-conditions');
});

// Route::any('/user/change-password', function () {
//     return view('user.user-change-password');
// });

// Route::get('/user/favorite-tools', function () {
//     return view('user.user-favorite_tools');
// });

// Route::get('/user/more', function () {
//     return view('user.user-more');
// });

// Route::get('/user/profile', function () {
//     return view('user.user-Profile');
// });

// Route::get('/user/registration', function () {
//     return view('user.user-registration');
// });

// Route::get('/user/login', function () {
//     return view('user.user-login');
// });

// Route::get('/user/forgot-password', function () {
//     return view('user.user-forgot_password');
// });




// Route::get('/ssadmin/tools', function () {
//     return view('admin.admin-Tools');
// });



Route::get("/ssadmin", function () {

    if (isset($_SESSION["admin"])) {
        return redirect("/ssadmin/dashboard");
    } else {
        return redirect("/ssadmin/login");
    }
});
Route::get("/ssadmin/login", [CustomAuthController::class, 'login']);
Route::post("/ssadmin/login", [CustomAuthController::class, 'login_s']);

Route::post('/contacts', [contactController::class, 'store']);



Route::middleware([checkLogin::class])->group(function () {

    Route::get("/ssadmin/dashboard", function () {
        return view('admin.admin-Dashboard');
    });

    Route::resource('/ssadmin/tools', toolsController::class);


    Route::resource('/ssadmin/users', userscontroller::class);


    Route::resource('/ssadmin/categories', categoryController::class);

    Route::resource('/ssadmin/blogs', blogsController::class);

    Route::resource('/ssadmin/contacts', contactController::class);

    Route::get('/ssadmin/contacts/reply/{id}', [contactController::class, 'reply']);
    Route::get("/ssadmin/logout", [CustomAuthController::class, 'logout']);
});
