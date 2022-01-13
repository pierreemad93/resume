<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Slider\JobsController;
use App\Http\Controllers\Admin\Slider\SocialLinksController;

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

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class , 'index'])->name('admin.dashboard');
    Route::resources([
        'slider' => SliderController::class,
        'sociallinks' => SocialLinksController::class,
        'jobs' => JobsController::class,

    ]);
    
});