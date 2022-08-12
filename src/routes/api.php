<?php

use Illuminate\Support\Facades\Route;
use Orlovdev\LaravelExtention\Http\Controllers\ItemsController;

Route::get('items', [ItemsController::class, 'index']);