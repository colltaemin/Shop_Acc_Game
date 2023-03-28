<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;

    public $search;

    public $account;

    public $confirmingCategoryDeletion = false;

    public function render()
    {
        if ($this->search) {
            $accounts = Category::where('user_name', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(8);
        } else {
            $accounts = Category::orderBy('id', 'desc')->paginate(8);
        }

        return view('livewire.admin.category-component', ['accounts' => $accounts]);
    }

    public function confirmCategoryDeletion($id)
    {
        $this->confirmingCategoryDeletion = $id;
    }

    public function deleteCategory(Category $account)
    {
        if (! \Auth::check()) {
            return redirect()->route('login');
        }

        $account->delete();
        $this->confirmingCategoryDeletion = false;
    }
}
