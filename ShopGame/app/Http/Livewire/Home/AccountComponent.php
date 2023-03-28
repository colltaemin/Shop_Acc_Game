<?php

namespace App\Http\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AccountComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(8);
        $products = Product::orderBy('id', 'desc')->paginate(8);

        return view('livewire.home.account-component', ['categories' => $categories, 'products' => $products]);
    }
}
