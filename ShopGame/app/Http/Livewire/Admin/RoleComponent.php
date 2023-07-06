<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RoleComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $roles = Role::orderBy('id', 'desc')->paginate(8);

        return view('livewire.admin.role-component', ['roles' => $roles]);
    }

    public function create(): void
    {
        $this->emit('showModal');
    }
}
