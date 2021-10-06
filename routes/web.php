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
use App\Http\Controllers\formsController;
use App\Http\Controllers\errorsController;
use App\Http\Controllers\tablesController;
use App\Http\Controllers\otherController;
use App\Http\Controllers\chartsController;
use App\Http\Controllers\miscellaneousController;

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

/**project routes */
Route::get('/projectcard', [projectController::class, 'projectcard'])->name('projectcard')->middleware('auth');
Route::get('/projectlist', [projectController::class, 'projectlist'])->name('projectlist')->middleware('auth');
/**invoice routes */
Route::get('/invoicelist', [invoiceController::class, 'invoicelist'])->name('invoicelist')->middleware('auth');
Route::get('/invoicedetails', [invoiceController::class, 'invoicedetails'])->name('invoicedetails')->middleware('auth');

/**application routes */
Route::get('/messages', [appController::class, 'messages'])->name('messages')->middleware('auth');
Route::get('/mail', [appController::class, 'mail'])->name('mail')->middleware('auth');
Route::get('/filemanager', [appController::class, 'filemanager'])->name('filemanager')->middleware('auth');
Route::get('/messenger', [appController::class, 'messenger'])->name('messenger')->middleware('auth');

/**user manage routes */
Route::get('/userlist', [userController::class, 'userlist'])->name('userlist')->middleware('auth');
Route::get('/userprofile', [userController::class, 'userprofile'])->name('userprofile')->middleware('auth');
Route::get('/usercontact', [userController::class, 'usercontact'])->name('usercontact')->middleware('auth');
Route::get('/useraccount', [userController::class, 'useraccount'])->name('useraccount')->middleware('auth');
Route::get('/loginactivity', [userController::class, 'loginactivity'])->name('loginactivity')->middleware('auth');
Route::get('/gallery', [galleryController::class, 'gallery'])->name('gallery')->middleware('auth');
Route::get('/pricing', [pricingController::class, 'pricing'])->name('pricing')->middleware('auth');

/**kyc */
Route::get('/kyclist', [kycController::class, 'kyclist'])->name('kyclist')->middleware('auth');
Route::get('/kycdetails', [kycController::class, 'kycdetails'])->name('kycdetails')->middleware('auth');

/**tables */
Route::get('/special', [tablesController::class, 'basictables'])->name('special')->middleware('auth');
Route::get('/datatables', [tablesController::class, 'datatables'])->name('datatables')->middleware('auth');
/**errors routes */
Route::get('/four', [errorsController::class, 'fourOfour'])->name('four')->middleware('auth');
Route::get('/five', [errorsController::class, 'fiveOfive'])->name('five')->middleware('auth');

/**transaction routes */
Route::get('/basic', [transactionController::class, 'tranbasic'])->name('basic')->middleware('auth');
Route::get('/crypto', [transactionController::class, 'trancrypto'])->name('crypto')->middleware('auth');

/**products */
Route::get('/productdetails', [productController::class, 'productdetails'])->name('productdetails')->middleware('auth');
Route::get('/productlist', [productController::class, 'productlist'])->name('productlist')->middleware('auth');
Route::get('/productcard', [productController::class, 'productscard'])->name('productcard')->middleware('auth');

/**other routes */
Route::get('/faqs', [otherController::class, 'faqs'])->name('faqs')->middleware('auth');
Route::get('/terms', [otherController::class, 'terms'])->name('terms')->middleware('auth');

/**form routes */
Route::get('/validation', [formsController::class, 'validation'])->name('validation')->middleware('auth');
Route::get('/date', [formsController::class, 'date'])->name('date')->middleware('auth');
Route::get('/formupload', [formsController::class, 'formupload'])->name('formupload')->middleware('auth');

/**charts route */
Route::get('/chart', [chartsController::class, 'chartsjs'])->name('chart')->middleware('auth');
Route::get('/knob', [chartsController::class, 'knob'])->name('knob')->middleware('auth');
Route::get('/emailtemplate', [chartsController::class, 'emailtemplate'])->name('emailtemplate')->middleware('auth');

/**miscellaneous  routes */
Route::get('/jstree',[miscellaneousController::class,'jstree'])->name('jstree')->middleware('auth');
Route::get('/toast',[miscellaneousController::class,'toast'])->name('toast')->middleware('auth');
Route::get('/sweetalert',[miscellaneousController::class,'sweetalert'])->name('sweetalert')->middleware('auth');
