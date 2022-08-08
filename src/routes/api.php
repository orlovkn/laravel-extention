<?php

use Illuminate\Support\Facades\Route;
use Orlov\LaravelExtention\Http\Controllers\ItemsController;

Route::get('items', [ItemsController::class, 'index']);