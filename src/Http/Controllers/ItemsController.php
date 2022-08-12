<?php

declare(strict_types=1);

namespace Orlovdev\LaravelExtention\Http\Controllers;

use Orlovdev\LaravelExtention\Models\Item;

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