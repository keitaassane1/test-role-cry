<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CongelateurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\EtudeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniteController;
use App\Models\User;
use Spatie\Permission\Models\Role;

Route::get('/test', function(){

//    return \App\Models\User::find(2)->direction->nom;
$user_superviseur = User::find(1);
$user_superviseur->assignRole(Role::findByName('admin'));

});


Route::redirect('/', '/login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
Route::group(['middleware' => ['auth','role:admin|superviseur']], function () {


    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('/roles/ajouter', [RoleController::class, 'ajouter'])->name('roles.ajouter');

    //Routes pour les directions
    Route::get('/etudes', [EtudeController::class, 'index'])->name('etudes.index');
    Route::post('/etudes/ajouter', [EtudeController::class, 'ajouter'])->name('etudes.ajouter');


    //Routes pour les directions
    Route::get('/directions', [DirectionController::class, 'index'])->name('directions.index');
    Route::post('/directions/ajouter', [DirectionController::class, 'ajouter'])->name('directions.ajouter');

    // Routes pour les users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/ajouter', [UserController::class, 'ajouter'])->name('users.ajouter');

    // Routes pour les users
    Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
    Route::post('/agents/store', [AgentController::class, 'store'])->name('agents.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour les unites
    Route::get('/unites', [UniteController::class, 'index'])->name('unites.index');
    Route::post('/unites/store', [UniteController::class, 'store'])->name('unites.store');

    // Routes pour les congelateurs
    Route::get('/congelateurs', [CongelateurController::class, 'index'])->name('congelateurs.index');
    Route::post('/congelateurs/store', [CongelateurController::class, 'store'])->name('congelateurs.store');
});

require __DIR__.'/auth.php';
