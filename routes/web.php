<?php

use App\Models\Package;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardConntroller;
use App\Http\Controllers\ProfileController;

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


Route::get('/', [HomeController::class,'show']);


Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class,'index']);

Route::get('/package',[PackageController::class,'index']);

Route::get('/dashHome',function(){
    return view('dashboard.side.home');
})->middleware('auth');


//This is for About Dashboard-----------------------------------------------------
Route::get('/dashAbout', [AboutController::class,'list'])->middleware('auth');
Route::get('/abouts/{about}', [AboutController::class,'edit'])->middleware('auth');
Route::post('/abouts/{about}', [AboutController::class,'update'])->middleware('auth');

//This is for Question Dashboard-----------------------------------------------------
Route::get('/dashQuestion', [QuestionController::class,'list'])->middleware('auth');
Route::get('/dashAddQuestion',[QuestionController::class,'create'])->middleware('auth');
Route::post('/dashAddQuestion',[QuestionController::class,'store'])->middleware('auth');
Route::get('/questions/{question}', [QuestionController::class,'edit'])->middleware('auth');
Route::post('/questions/{question}', [QuestionController::class,'update'])->middleware('auth');
Route::delete('/questions/{question}',[QuestionController::class,'destroy']);

//This is for Profile Dashboard-----------------------------------------------------
Route::get('/dashProfile', [ProfileController::class,'list'])->middleware('auth');
Route::get('/profiles/{profile}', [ProfileController::class,'edit'])->middleware('auth');
Route::post('/profiles/{profile}', [ProfileController::class,'update'])->middleware('auth');



//This is for Package-----------------------------------------------------
Route::get('/dashHome',[DashboardConntroller::class,'list'])->middleware('auth');

Route::get('/dashAdd',[DashboardConntroller::class,'create'])->middleware('auth');
Route::post('/dashAdd',[DashboardConntroller::class,'store'])->middleware('auth');

Route::post('/packages/{package}',[DashboardConntroller::class,'update']);
Route::get('/packages/{package}',[DashboardConntroller::class,'edit']);

Route::delete('/packages/{package}',[DashboardConntroller::class,'destroy']);

//This for subject--------------------------------------------------------
Route::get('/dashSubject',[SubjectController::class,'list'])->middleware('auth');

Route::get('/dashAddSub',[SubjectController::class,'create'])->middleware('auth');
Route::post('/dashAddSub',[SubjectController::class,'store'])->middleware('auth');

Route::post('/subjects/{subject}',[SubjectController::class,'update'])->middleware('auth');
Route::get('/subjects/{subject}',[SubjectController::class,'edit'])->middleware('auth');

Route::delete('/subjects/{subject}',[SubjectController::class,'destroy'])->middleware('auth');

//This for Dashboard Form--------------------------------------------------------
Route::get('/dashForm',[FormController::class,'list'])->middleware('auth');
Route::get('/forms/{form}',[FormController::class,'edit'])->middleware('auth');//update postpone
Route::post('/forms/{form}',[FormController::class,'update'])->middleware('auth');
Route::delete('/forms/{form}',[FormController::class,'destroy'])->middleware('auth');
Route::get('/export',[FormController::class,'export'])->middleware('auth');
Route::get('/exportView',[FormController::class,'exportView'])->middleware('auth');


//This for Register--------------------------------------------------------
Route::get('/registerz/{id}',[RegisterController::class,'create0'])->middleware('guest');
Route::post('/registerz',[RegisterController::class,'store'])->middleware('guest');


//Ini Dashboar Teachers
Route::get('/dashTeacher',[TeacherController::class,'list'])->middleware('auth');
Route::get('add-teacher',[TeacherController::class,'create'])->middleware('auth');
Route::post('add-teacher',[TeacherController::class,'store'])->middleware('auth');
Route::get('edit-teacher/{id}',[TeacherController::class,'edit'])->middleware('auth');
Route::put('update-teacher/{id}',[TeacherController::class,'update'])->middleware('auth');
Route::get('/delete-teacher/{id}',[TeacherController::class,'destroy'])->middleware('auth');

//Ini Dashboar Hero
Route::get('/dashHero',[HeroController::class,'list'])->middleware('auth');
Route::get('add-hero',[HeroController::class,'create'])->middleware('auth');
Route::post('add-hero',[HeroController::class,'store'])->middleware('auth');
Route::get('edit-hero/{id}',[HeroController::class,'edit'])->middleware('auth');
Route::post('update-hero/{id}',[HeroController::class,'update'])->middleware('auth');
Route::delete('destroy-hero/{id}',[HeroController::class,'destroy'])->middleware('auth');



//Ini Dashboar Choose
Route::get('/dashChoose',[ChooseController::class,'list'])->middleware('auth');
Route::get('add-choose',[ChooseController::class,'create'])->middleware('auth');
Route::post('add-choose',[ChooseController::class,'store'])->middleware('auth');
Route::get('edit-choose/{id}',[ChooseController::class,'edit'])->middleware('auth');
Route::put('update-choose/{id}',[ChooseController::class,'update'])->middleware('auth');
Route::get('delete-choose/{id}',[ChooseController::class,'destroy'])->middleware('auth');

//Ini Dashboar Portfolio
Route::get('/dashPortfolio',[PortfolioController::class,'list'])->middleware('auth');
Route::get('add-portfolio',[PortfolioController::class,'create'])->middleware('auth');
Route::post('add-portfolio',[PortfolioController::class,'store'])->middleware('auth');
Route::get('edit-portfolio/{id}',[PortfolioController::class,'edit'])->middleware('auth');
Route::put('update-portfolio/{id}',[PortfolioController::class,'update'])->middleware('auth');
Route::get('delete-portfolio/{id}',[PortfolioController::class,'destroy'])->middleware('auth');


//profile password
// Route::get('/edit-profiles/{profile}', [PasswordController::class,'editPassword'])->middleware('auth');
// Route::post('/profiles/{profile}', [PasswordController::class,'updateassword'])->middleware('auth');