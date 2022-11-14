<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bizzworldController;
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

// Route::get('/', function () {
//     return view('home');
// });
// Website Route Start
Route::get('/', [bizzworldController::class, 'index']);
Route::get('/services', [bizzworldController::class, 'services']);
Route::get('/faq', [bizzworldController::class, 'faq']);
Route::get('/gallery', [bizzworldController::class, 'gallery']);
// Website Route End

// Email Route Start
Route::any('getintouch', [bizzworldController::class, 'getintouch']);
Route::any('applynow', [bizzworldController::class, 'applynow']);
Route::any('message', [bizzworldController::class, 'message']);
// Email Route End

// Admin Panel Route Start
Route::get('/logout', [bizzworldController::class, 'logout']);
Route::get('/login', [bizzworldController::class, 'login']);
Route::get('/admingallery', [bizzworldController::class, 'admingallery']);
Route::get('/bizzadmin', [bizzworldController::class, 'bizzadmin']);
Route::any('jobpost', [bizzworldController::class, 'jobpost']);
Route::any('uploadgallery', [bizzworldController::class, 'uploadgallery']);
Route::any('adminlogin', [bizzworldController::class, 'adminlogin']);
Route::get('/uploadsheetdata', function () {
    return view('admin.uploaddatasheet');
});
Route::any('admincampaigndashboard', [bizzworldController::class, 'admincampaigndashboard']);
// Admin Panel Route End