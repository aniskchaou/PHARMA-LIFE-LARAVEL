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



Route::get('/about','\App\Http\Controllers\HomeController@about');
Route::get('/cart','\App\Http\Controllers\HomeController@cart');
Route::get('/checkout','\App\Http\Controllers\HomeController@checkout');
Route::get('/contact','\App\Http\Controllers\HomeController@contact');
Route::get('/','\App\Http\Controllers\HomeController@index');
Route::get('/shop','\App\Http\Controllers\HomeController@shop');
Route::get('/view','\App\Http\Controllers\HomeController@view');
Route::get('/dashboard','\App\Http\Controllers\HomeController@dashboard');



//customer
Route::get('/customer/create','\App\Http\Controllers\admin\CustomerController@create');
Route::post('/customer/store','\App\Http\Controllers\admin\CustomerController@store')->name('customer.store');
Route::get('/customer/delete/{id}','\App\Http\Controllers\admin\CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/edit/{id}','\App\Http\Controllers\admin\CustomerController@edit')->name('customer.edit');;
Route::post('/customer/update/{id}','\App\Http\Controllers\admin\CustomerController@update')->name('customer.update');
Route::get('/customer/index','\App\Http\Controllers\admin\CustomerController@index');

//employee
Route::get('/employee/create','\App\Http\Controllers\admin\EmployeeController@create');
Route::post('/employee/store','\App\Http\Controllers\admin\EmployeeController@store')->name('employee.store');
Route::get('/employee/delete/{id}','\App\Http\Controllers\admin\EmployeeController@destroy')->name('employee.destroy');
Route::get('/employee/edit/{id}','\App\Http\Controllers\admin\EmployeeController@edit')->name('employee.edit');;
Route::post('/employee/update/{id}','\App\Http\Controllers\admin\EmployeeController@update')->name('employee.update');
Route::get('/employee/index','\App\Http\Controllers\admin\EmployeeController@index');

//expense
Route::get('/expense/create','\App\Http\Controllers\admin\ExpenseController@create');
Route::post('/expense/store','\App\Http\Controllers\admin\ExpenseController@store')->name('expense.store');
Route::get('/expense/delete/{id}','\App\Http\Controllers\admin\ExpenseController@destroy')->name('expense.destroy');
Route::get('/expense/edit/{id}','\App\Http\Controllers\admin\ExpenseController@edit')->name('expense.edit');;
Route::post('/expense/update/{id}','\App\Http\Controllers\admin\ExpenseController@update')->name('expense.update');
Route::get('/expense/index','\App\Http\Controllers\admin\ExpenseController@index');

//medecine brand
Route::get('/medecinebrand/create','\App\Http\Controllers\admin\MedicineBrandController@create');
Route::post('/medecinebrand/store','\App\Http\Controllers\admin\MedicineBrandController@store')->name('medecinebrand.store');
Route::get('/medecinebrand/delete/{id}','\App\Http\Controllers\admin\MedicineBrandController@destroy')->name('medecinebrand.destroy');
Route::get('/medecinebrand/edit/{id}','\App\Http\Controllers\admin\MedicineBrandController@edit')->name('medecinebrand.edit');;
Route::post('/medecinebrand/update/{id}','\App\Http\Controllers\admin\MedicineBrandController@update')->name('medecinebrand.update');
Route::get('/medecinebrand/index','\App\Http\Controllers\admin\MedicineBrandController@index');

//medecine category
Route::get('/medecinecategory/create','\App\Http\Controllers\admin\MedicineCategoryController@create');
Route::post('/medecinecategory/store','\App\Http\Controllers\admin\MedicineCategoryController@store')->name('medecinecategory.store');
Route::get('/medecinecategory/delete/{id}','\App\Http\Controllers\admin\MedicineCategoryController@destroy')->name('medecinecategory.destroy');
Route::get('/medecinecategory/edit/{id}','\App\Http\Controllers\admin\MedicineCategoryController@edit')->name('medecinecategory.edit');;
Route::post('/medecinecategory/update/{id}','\App\Http\Controllers\admin\MedicineCategoryController@update')->name('medecinecategory.update');
Route::get('/medecinecategory/index','\App\Http\Controllers\admin\MedicineCategoryController@index');

//medecine
Route::get('/medecine/create','\App\Http\Controllers\admin\MedicineController@create');
Route::post('/medecine/store','\App\Http\Controllers\admin\MedicineController@store')->name('medecine.store');
Route::get('/medecine/delete/{id}','\App\Http\Controllers\admin\MedicineController@destroy')->name('medecine.destroy');
Route::get('/medecine/edit/{id}','\App\Http\Controllers\admin\MedicineController@edit')->name('medecine.edit');;
Route::post('/medecine/update/{id}','\App\Http\Controllers\admin\MedicineController@update')->name('medecine.update');
Route::get('/medecine/index','\App\Http\Controllers\admin\MedicineController@index');

//sale
Route::get('/sale/create','\App\Http\Controllers\admin\SaleController@create');
Route::post('/sale/store','\App\Http\Controllers\admin\SaleController@store')->name('sale.store');
Route::get('/sale/delete/{id}','\App\Http\Controllers\admin\SaleController@destroy')->name('sale.destroy');
Route::get('/sale/edit/{id}','\App\Http\Controllers\admin\SaleController@edit')->name('sale.edit');;
Route::post('/sale/update/{id}','\App\Http\Controllers\admin\SaleController@update')->name('sale.update');
Route::get('/sale/index','\App\Http\Controllers\admin\SaleController@index');

//service
Route::get('/service/create','\App\Http\Controllers\admin\ServiceController@create');
Route::post('/service/store','\App\Http\Controllers\admin\ServiceController@store')->name('service.store');
Route::get('/service/delete/{id}','\App\Http\Controllers\admin\ServiceController@destroy')->name('service.destroy');
Route::get('/service/edit/{id}','\App\Http\Controllers\admin\ServiceController@edit')->name('service.edit');;
Route::post('/service/update/{id}','\App\Http\Controllers\admin\ServiceController@update')->name('service.update');
Route::get('/service/index','\App\Http\Controllers\admin\ServiceController@index');

//supplier
Route::get('/supplier/create','\App\Http\Controllers\admin\SupplierController@create');
Route::post('/supplier/store','\App\Http\Controllers\admin\SupplierController@store')->name('supplier.store');
Route::get('/supplier/delete/{id}','\App\Http\Controllers\admin\SupplierController@destroy')->name('supplier.destroy');
Route::get('/supplier/edit/{id}','\App\Http\Controllers\admin\SupplierController@edit')->name('supplier.edit');;
Route::post('/supplier/update/{id}','\App\Http\Controllers\admin\SupplierController@update')->name('supplier.update');
Route::get('/supplier/index','\App\Http\Controllers\admin\SupplierController@index');
