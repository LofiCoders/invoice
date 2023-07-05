<?php

use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FeaturePlanController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\InvoiceController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\ReportController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', DashboardController::class)->name('dashboard');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);
    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Plan
    Route::delete('plans/destroy', [PlanController::class, 'massDestroy'])->name('plans.massDestroy');
    Route::resource('plans', PlanController::class, ['except' => ['show']]);

    // Feature
    Route::delete('features/destroy', [FeatureController::class, 'massDestroy'])->name('features.massDestroy');
    Route::resource('features', FeatureController::class, ['except' => ['show']]);

    // Countries
    Route::delete('countries/destroy', [CountriesController::class, 'massDestroy'])->name('countries.massDestroy');
    Route::resource('countries', CountriesController::class, ['except' => ['show']]);

    // Feature Plan
    Route::delete('feature-plans/destroy', [FeaturePlanController::class, 'massDestroy'])->name('feature-plans.massDestroy');
    Route::resource('feature-plans', FeaturePlanController::class, ['except' => ['show']]);

    // Payment
    Route::resource('payments', PaymentController::class, ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Reports
    Route::resource('reports', ReportsController::class);
});

Route::group(['prefix' => 'account', 'as' => 'account.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', HomeController::class)->middleware('auth')->name('dashboard');
    Route::get('/reports', ReportController::class)->name('reports');
    Route::resource('/customers', CustomerController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/invoices', InvoiceController::class);
});

Route::group(['middleware'=>['auth','verified']],function(){
    //Billing

    Route::get('/billing',[BillingController::class,'index'])->name('billing.index');


    //Checkout

    Route::get('/checkout/{plan:slug}',[CheckoutController::class,'checkout'])->name('checkout');
    Route::post('/checkout',[CheckoutController::class,'processCheckout'])->name('checkout.process');

    //Profile 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
