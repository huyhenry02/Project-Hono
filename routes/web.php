<?php

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
Route::get('/', function () {
    return redirect('hono   ');
});
//Admin
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');

    //login Register of Admin
    Route::prefix('login')->group(function () {
        Route::get('/', 'LoginController@index')->name('login_admin.index');
    });

    Route::prefix('register')->group(function () {
        Route::get('/', 'RegisterController@index')->name('register.index');
        Route::get('/reset_pass', 'ChangePassController@index')->name('reset_pass.index');
    });

    //User
    Route::prefix('user')->group(function () {
        Route::get('/overview', 'UserController@index')->name('user.index');
        Route::get('/add_user', 'UserController@add')->name('user.add');
        Route::get('/leader_board', 'UserController@leader_board')->name('user.leader_board');
    });

    //User Profile
    Route::prefix('user_profile')->group(function () {
        Route::get('/profile', 'UserController@show_profile')->name('user.show_profile');
        Route::get('/team', 'UserController@show_team')->name('user.show_team');
        Route::get('/projects', 'UserController@show_projects')->name('user.show_projects');
        Route::get('/connection', 'UserController@show_connection')->name('user.show_connection');
        Route::get('/my_profile', 'UserController@show_my_profile')->name('user.show_my_profile');
    });

    //Commerce
    Route::prefix('commerce')->group(function () {
        Route::get('/', 'CommerceController@show_overview')->name('commerce.show_overview');

        //Product
        Route::prefix('product')->group(function () {
            Route::get('/', 'ProductController@show_product')->name('product.show_product');
            Route::get('/add', 'ProductController@show_add')->name('product.show_add');
            Route::get('/product_detail', 'ProductController@show_product_detail')->name('product.show_product_detail');
        });
        //Order
        Route::prefix('order')->group(function () {
            Route::get('/', 'OrderController@show_order')->name('order.show_order');
            Route::get('/order_detail', 'OrderController@show_order_detail')->name('order.show_order_detail');
        });
        //Customer
        Route::prefix('customer')->group(function () {
            Route::get('/', 'CustomerController@show_customer')->name('customer.show_customer');
            Route::get('/add', 'CustomerController@show_add')->name('customer.show_add');
            Route::get('/customer_detail', 'CustomerController@show_customer_detail')->name('customer.show_customer_detail');
        });
    });


});
//Client
Route::prefix('hono')->group(function () {
    Route::get('/', 'ClientController@index')->name('client.index');
    //login Client
    Route::prefix('login')->group(function () {
        Route::get('/', 'AuthClientController@show_login')->name('login_client.index');
    });
    //Register CLient
    Route::prefix('register')->group(function () {
        Route::get('/', 'AuthClientController@show_register')->name('register_client.index');
    });
    //Forgot Pass CLient
    Route::prefix('change_pass')->group(function () {
        Route::get('/', 'AuthClientController@show_change_pass')->name('change_pass_client.index');
    });

Route::prefix('my_account')->group(function ()
{
    Route::post('/logout', 'AuthClientController@logout')->name('logout_client');
    Route::get('/','ClientController@show_my_account')->name('my_account_client.index');

}
);
});
