<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;


use App\Http\Controllers\UpLoadFileQuestion;
use App\Http\Controllers\UserController;
use App\Models\Result;
use App\Models\Test;


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



require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('question')->middleware('role:admin,user')->group(function () {
    Route::get('test/{id}', [QuestionController::class, 'findTest'])->name('test_question');
    Route::post('/checkCorrectoption', [QuestionController::class, 'checkCorrectOption'])->name('checkCorrectoption');
    Route::get('/history', [ResultController::class, 'showHistory'])->name('history');
    Route::get('/ShowAnswerQuestion/{id}', [ResultController::class, 'ShowAnswerQuestion'])->name('AnswerQuestion');
    Route::view('/result_exam', 'result');

});



Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/questions', QuestionController::class)->names('questions');
    Route::get('/search_question', [QuestionController::class, 'search'])->name('questions.search');
    Route::resource('results', ResultController::class);
    Route::resource('user', UserController::class);
    Route::get('users/history/{id}', [ResultController::class, 'showHistoryUser'])->name('history.user');
    
    Route::get('/question_upload', [UpLoadFileQuestion::class, 'index'])->name('create.upload');
    Route::post('/question_upload_csv', [UpLoadFileQuestion::class, 'processUpLoad'])->name('handleUpLoad');
    
});