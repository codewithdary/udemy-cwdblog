<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArticleController;
use \App\Models\Article;

Route::get('/', function () { return view('welcome');});
Route::get('/dashboard', function () {
    $articles = Article::where('user_id', auth()->id())->paginate();
    return view('dashboard', compact('articles'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/articles', ArticleController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/articles', ArticleController::class)->except(['index', 'show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
