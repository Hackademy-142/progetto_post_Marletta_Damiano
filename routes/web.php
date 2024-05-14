<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::('/articles/create' , [ArticleController::class , 'create'])->('article.create');
