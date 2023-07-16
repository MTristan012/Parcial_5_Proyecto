<?php

namespace App\Http\Livewire;

use App\Models\ShoppingList;
use Livewire\Component;

class Statistics extends Component
{
    public function render()
    {
        $shoppingLists = ShoppingList::all();
        return view('livewire.statistics', compact('shoppingLists'));
    }
}
