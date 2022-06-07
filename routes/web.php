<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\EcosystemController;
use App\Http\Controllers\Admin\NetworkController;
use App\Http\Controllers\Admin\AttachedfilesController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Models\Menu;

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

//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us.html', [PageController::class, 'about'])->name('about');
Route::get('/our-team.html', [PageController::class, 'ourteam'])->name('ourteam');
Route::get('/contact.html', [PageController::class, 'contact'])->name('contact');
Route::get('/{slug}.html', [PageController::class, 'index'])->name('page');
//$menus = Menu::getList();
// foreach ($menus as $menu) {
//     Route::get('/{slug}.html', [PageController::class, 'index']);
// }

// Route::get('/management-philosophy.html', [PageController::class, 'management'])->name('management');
// Route::get('/our-structure-people.html', [PageController::class, 'structure'])->name('structure');
// Route::get('/global-network.html', [PageController::class, 'network'])->name('network');
// Route::get('/contact.html', [PageController::class, 'contact'])->name('contact');

//admin
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login/store', [AdminController::class, 'store'])->name('admin.login.store');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/changepassword', [AdminController::class, 'changepassword'])->name('admin.changepassword');
    Route::post('/attachedfiles/uploadfile', [AttachedfilesController::class, 'uploadfile'])->name('admin.uploadfile');
    Route::post('/attachedfiles/deletefile', [AttachedfilesController::class, 'deletefile'])->name('admin.deletefile');
    Route::resources([
        '/content' => ContentController::class,
        '/menu' => MenuController::class,
        '/ecosystem' => EcosystemController::class,
        '/network' => NetworkController::class,
        '/setting' => SettingController::class,
    ]);
});
