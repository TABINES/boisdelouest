<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminNoAnswerController;
use App\Http\Controllers\AdminAnsweredController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StatistiquesController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/faq', [FaqController::class, 'list'])->name('faq');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/question/create', [QuestionController::class, 'create'])->name('question.create');
Route::post('/question', [QuestionController::class, 'store'])->name('question.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/no-answered/list', [AdminNoAnswerController::class, 'list'])->name('admin.noanswer');
    Route::post('/admin/no-answered/{id}', [AnswerController::class, 'create'])->name('admin.noanswer.create');
    Route::post('/admin/no-answer/delete/{id}/{route}', [QuestionController::class, 'destroy'])->name('admin.noanswer.delete');
    Route::post('/admin/no-answered', [AnswerController::class, 'store'])->name('admin.noanswer.store');

    Route::get('/admin/answered/list', [AdminAnsweredController::class, 'list'])->name('admin.answered');
    Route::post('/admin/answered/delete/{id}/{route}', [QuestionController::class, 'destroy'])->name('admin.answered.delete');
    Route::post('/admin/answered/edit/{id}', [AnswerController::class, 'edit'])->name('admin.answered.edit');
    Route::post('/admin/answered', [AnswerController::class, 'update'])->name('admin.answered.update');
});

Route::middleware('stats')->group(function () {
    Route::get('/statistiques', [StatistiquesController::class, 'list'])->name('statisitiques');
});

Route::fallback(function () {
    return view('404');
});

require __DIR__.'/auth.php';
