<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index()
    {
        $shoppingLists = ShoppingList::all();

        return view('history', ["shoppingLists" => $shoppingLists]);
    }
}
