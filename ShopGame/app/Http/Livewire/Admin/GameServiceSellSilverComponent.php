<?php

namespace App\Http\Livewire\Admin;

use App\Models\GameServiceSellSilver;
use App\Models\ProductService;
use Livewire\Component;
use Livewire\WithPagination;

class GameServiceSellSilverComponent extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        if ($this->search) {
            $productServices = ProductService::where('product_id', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(8);
        } else {
            $productServices = ProductService::orderBy('id', 'desc')->paginate(8);
        }

        return view('livewire.admin.game-service-sell-silver-component', ['productServices' => $productServices]);
    }

    public function confirmGameServiceSellSilverAdd(GameServiceSellSilver $gameServiceSellSilver)
    {
        // $this->gameServiceSellSilver = $gameServiceSellSilver;
        // $this->confirmingGameServiceSellSilverAdd = true;
    }
}
