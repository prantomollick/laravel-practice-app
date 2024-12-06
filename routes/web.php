<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});

// Route::get('/about', [AboutController::class, 'about']); // this is the route to the about page
// Route::get('/about/me', [AboutController::class, 'aboutme']); // this is the route to the about me page
Route::get('/download', [FileController::class, 'download']); // this is the route to the download page
Route::get('/download/invoice/', [FileController::class, 'error']); // this is the route to the download invoice page
Route::get('/download/invoice/{invoiceId}', [FileController::class, 'downloadInvoice']); // this is the route to the download invoice page
//Route::get('/download/invoice/{invoiceId}/type', [FileController::class, 'downloadInvoice']); // this is the route to the download invoice page
Route::get('/download/invoice/{invoiceId}/file/{fileType?}', [FileController::class, 'downloadInvoice']); // this is the route to the download invoice page


Route::get('/invoice/{invoiceId}', [InvoiceController::class, 'invoice']); // this is the route to the invoice page
Route::get('/misc', [InvoiceController::class, 'requestExample']); // this is the route to the invoice page


Route::get('/tasks', [TaskController::class, 'index']); // this is the route to the tasks page
Route::get('/tasks/{taskId}', [TaskController::class, 'show']); // this is the route to the tasks page

Route::get('/home', [SiteController::class, 'home'])->name('home'); // this is the route to the home page
Route::get('/menu', [SiteController::class, 'menu'])->name('menu'); // this is the route to the menu page
Route::get('/about', [SiteController::class, 'about'])->name('about'); // this is the route to the about page
Route::get('/reservations', [SiteController::class, 'reservations'])->name('res'); 
Route::get('/styles', [SiteController::class, 'styles']); 
// Route::get('/contact', [SiteController::class, 'contact']); // this is the route to the about page

//Onle to return a view
// Route::view('/contact', 'site.contact'); // this is the route to the about page


// Route::get('/about', function() {
//     return response("Hello, I'm about page", 200);
// }); // get post put patch delete


Route::get('/demo/logic', [DemoController::class, 'logic']); // this is the route to the demo page
Route::get('/demo/data', [DemoController::class, 'data']); // this is the route to the demo page
Route::get('/demo/home', [DemoController::class, 'home']); // this is the route to the demo page
Route::get('/demo/about', [DemoController::class, 'about']); // this is the route to the demo page