<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\MentionController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminParametreController;
use App\Http\Controllers\AideController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\post;

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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/mention', [MentionController::class, 'index'])->name('mention');


Route::resource('/event', EventController::class);


Route::middleware('auth')->group(function () {
    Route::get('/Compte', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/personnage/avatar', [PersonnageController::class, 'updateAvatar'])->name('personnage.avatar.update');
    Route::get('/personnage/edit', [PersonnageController::class, "edit"])->name('personnage.edit');
    Route::post('/personnage/update', [PersonnageController::class, "update"])->name('personnage.update');
});

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/home', function () {return view('home');})->name('home');
    Route::get('/aide', [CategorieController::class,'index'])->name('aide.index');
    Route::post('/categorie/store', [CategorieController::class,'store'])->name('categorie.store');
    Route::post('/aide/store', [AideController::class,'store'])->name('aide.store');
    Route::get('/aide/{id}', [AideController::class,'show'])->name('aide.show');
    Route::delete('/categorie/{id}', [CategorieController::class,'destroy'])->name('aide.cat.destroy');
    Route::delete('/aide/{id}', [AideController::class,'destroy'])->name('aide.destroy');

});

Route::get('/personnage', [PersonnageController::class, "index"])->name('personnage.index');
Route::get('/personnage/{id}', [PersonnageController::class, "show"])->name('personnage.show');

Route::middleware('auth', "roleAdmin")->group(function () {
    Route::get('/admin', [AdminUserController::class, 'indexDemande'])->name('admin.index');
    Route::post('/admin/{id}', [AdminUserController::class, 'updateDemande'])->name('admin.updateDemande');
    Route::delete('/admin/{id}', [AdminUserController::class, 'destroy'])->name('admin.destroy');

    Route::get('/admin/membre', [AdminUserController::class, 'indexMembre'])->name('admin.user');
    Route::post('/admin/membre/{id}', [AdminUserController::class, 'updateMembre'])->name('admin.updateMembre');
    Route::delete('/admin/demande/{id}', [AdminUserController::class, 'destroyMembre'])->name('admin.destroyMembre');

    Route::get('/admin/parametre', [AdminParametreController::class, 'edit'])->name('admin.parametre');
    Route::post('/admin/parametre/{id}', [AdminParametreController::class,'update'])->name('admin.parametre.update');
});

require __DIR__.'/auth.php';
