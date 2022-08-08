<?php

declare(strict_types=1);

namespace Orlov\LaravelExtention\Http\Controllers;

use Orlov\LaravelExtention\Models\Item;

class ItemsController
{
    public function index()
    {
        $items = Item::query()->select(['name'])->get();

        return response()->json([
            'items' => $items,
        ]);
    }
}