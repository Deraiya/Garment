<?php

Route::get('/', function () {
    return view('pages.login');
});
Route::get('Dashboard','DashboardController@getDashboard')->name('Dashboard');

Route::get('Billing','BillingController@getBilling')->name('Billing');

Route::get('ProductEntry','ProductEntryController@getProductEntry')->name('ProductEntry');
Route::post('postProductEntry','ProductEntryController@postProductEntry')->name('postProductEntry');
Route::post('updated','ProductEntryController@updateProduct')->name('updateProduct');
Route::get('delete/product/{id}','InventoryController@productdestroy')->name('productdestroy');


Route::get('Employee','EmployeeController@getEmployee')->name('Employee');
Route::post('postEmployee','EmployeeController@postEmployee')->name('postEmployee');
Route::get('/edit/employee/{id}','EmployeeController@editEmployee')->name('editEmployee');
Route::post('updateEmployee/{id}','EmployeeController@updateEmployee')->name('updateEmployee');
Route::get('EmployeeDetails','EmployeeController@getEmployeeDetails')->name('EmployeeDetails');

Route::get('Sales','SalesController@getSales')->name('sales');

Route::get('History','HistoryController@getHistory')->name('History');

Route::get('Inventory','InventoryController@getInventoryList')->name('Inventory');
Route::get('/edit/{id}','InventoryController@editProduct')->name('editProduct');

Route::get('/id={id}','BillingController@findProduct');

Route::post('/generate','BillingController@generateBill')->name('generatebill');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
