<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

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
Route::get("/", [AuthController::class, "accueil"])->name("accueil");

//inscription
Route::get("/register", [AuthController::class, "create"])->name("create");
Route::post("/register", [AuthController::class, "register"])->name("register");

//connexion
Route::get("/login", [AuthController::class, "loginView"])->name("loginView");
Route::post("/login", [AuthController::class, "loginPost"])->name("loginPost");

//deconnexion
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

//compte
Route::get('/recharge', [TransactionController::class, "rechargeView"])->name("rechargeView")->middleware("auth");
Route::post('/recharge', [TransactionController::class, "recharge"])->name("recharge")->middleware("auth");

//Crud transaction
Route::get("/transactions", [TransactionController::class, "liste"])->name('liste')->middleware("auth");
Route::get("/ajout/transactions", [TransactionController::class, "ajoutView"])->name('ajoutView')->middleware('auth');
Route::post("/ajout", [TransactionController::class, "ajoutPost"])->name('ajoutPost')->middleware("auth");