<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Homepage;
use App\Livewire\ReviewPage;
use App\Livewire\ReviewDetail;
use App\Livewire\AuthorsPage;
use App\Livewire\AboutPage;

Route::get('/', Homepage::class);
Route::get('/reviews', ReviewPage::class);
Route::get('/reviews/{reviewId}', ReviewDetail::class);
Route::get('/authors', AuthorsPage::class);
Route::get('/about', AboutPage::class);
