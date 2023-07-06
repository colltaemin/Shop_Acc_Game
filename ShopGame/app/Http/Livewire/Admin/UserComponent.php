<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;

    public $search;

    public $user;

    public $confirmUserAddRole = false;

    protected $rules = [
        'role' => 'required',
    ];

    public function render()
    {
        if ($this->search) {
            $users = User::where('name', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(13);
        } else {
            $users = User::orderBy('id', 'desc')->paginate(13);
        }

        return view('livewire.admin.user-component', ['users' => $users]);
    }

    public function confirmUserAddRole(User $user): void
    {
        // dd($user);
        $this->user = $user;
    }

    public function saveRole(): void
    {
    }
}
