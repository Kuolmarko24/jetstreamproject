<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\cryptoController;
use App\Http\Controllers\analyticsController;
use App\Http\Controllers\investController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\appController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\pricingController;
use App\Http\Controllers\kycController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\productController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;

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
//     return view('welcome');
// })->middleware('auth');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');    
    })->name('dashboard');
Route::get('/', [indexController::class, 'index'])->name('index')->middleware('auth');
Route::get('/crypto', [cryptoController::class, 'crypto'])->name('crypto')->middleware('auth');
Route::get('/analytics', [analyticsController::class, 'analytics'])->name('analytics')->middleware('auth');
Route::get('/invest', [investController::class, 'invest'])->name('invest')->middleware('auth');
/**auth routes */
Route::get('/loginpage', [authController::class, 'loginpage'])->name('loginpage');
Route::get('/registerpage', [authController::class, 'registerpage'])->name('registerpage');
Route::get('/forgotpasswd', [authController::class, 'forgotpasswd'])->name('forgotpasswd');
Route::get('/confirm', [authController::class, 'confirm'])->name('confirm');
/**project routes */
Route::get('/projectcard', [projectController::class, 'projectcard'])->name('projectcard');
Route::get('/projectlist', [projectController::class, 'projectlist'])->name('projectlist');
/**invoice routes */
Route::get('/invoicelist', [invoiceController::class, 'invoicelist'])->name('invoicelist');
Route::get('/invoicedetails', [invoiceController::class, 'invoicedetails'])->name('invoicedetails');

/**application routes */
Route::get('/messages', [appController::class, 'messages'])->name('messages');
Route::get('/mail', [appController::class, 'mail'])->name('mail');
Route::get('/filemanager', [appController::class, 'filemanager'])->name('filemanager');
Route::get('/messenger', [appController::class, 'messenger'])->name('messenger');

/**user manage routes */
Route::get('/userlist', [userController::class, 'userlist'])->name('userlist');
Route::get('/userprofile', [userController::class, 'userprofile'])->name('userprofile');
Route::get('/usercontact', [userController::class, 'usercontact'])->name('usercontact');
Route::get('/useraccount', [userController::class, 'useraccount'])->name('useraccount');
Route::get('/loginactivity', [userController::class, 'loginactivity'])->name('loginactivity');
Route::get('/gallery', [galleryController::class, 'gallery'])->name('gallery');
Route::get('/pricing', [pricingController::class, 'pricing'])->name('pricing');

/**kyc */
Route::get('/kyclist', [kycController::class, 'kyclist'])->name('kyclist');
Route::get('/kycdetails', [kycController::class, 'kycdetails'])->name('kycdetails');

/**transaction routes */
Route::get('/basic', [transactionController::class, 'tranbasic'])->name('basic');
Route::get('/crypto', [transactionController::class, 'trancrypto'])->name('crypto');

/**products */
Route::get('/productdetails', [productController::class, 'productdetails'])->name('productdetails');
Route::get('/productlist', [productController::class, 'productlist'])->name('productlist');
Route::get('/productcard', [productController::class, 'productscard'])->name('productcard');



