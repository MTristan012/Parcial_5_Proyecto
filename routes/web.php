<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShoppingListController;
use App\Models\Item;
use App\Models\ShoppingList;
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
    return view('items');
});

Route::get('/history', function () {
    $categories = Item::select('category')->get();
    return view('history', compact('categories'));
});

Route::post('/history/create', [ItemController::class, 'create'])->name('historyItem.create');

Route::get('/statistics', function () {
    return view('statistics');
});

Route::post('/create', [ShoppingListController::class, 'create'])->name('shoppingList.create');

/*
// Delete
Route::post('admin/adminTeachers/delete', [UserController::class, "delete"])->name("userTeachers.delete");
*/