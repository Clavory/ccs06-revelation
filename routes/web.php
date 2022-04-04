<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevelationController;
Route::get('/', [RevelationController::class, 'index']);
Route::get('/chapter/{chapter_number}', [RevelationController::class, "readByChapter"]);
Route::get('/all-chapters', [RevelationController::class, 'readAllChapters']);



