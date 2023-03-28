<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;

    public $search;

    public $product;

    public $confirmingProductDeletion = false;

    public function render()
    {
        if ($this->search) {
            $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(8);
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(8);
        }

        return view('livewire.admin.product-component', ['products' => $products]);
    }

    public function confirmProductDeletion($id)
    {
        $this->confirmingProductDeletion = $id;
    }

    public function deleteProduct(Product $product)
    {
        if (! \Auth::check()) {
            return redirect()->route('login');
        }

        $product->delete();
        $this->confirmingProductDeletion = false;
    }
}
