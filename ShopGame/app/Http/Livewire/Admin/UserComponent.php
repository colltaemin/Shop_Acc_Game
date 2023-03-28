<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;

    public $search;

    public $user;

    public $confirmingUserAddAmount = false;

    protected $rules = [
        'user.money' => 'required',
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

    public function confirmUserAddAmount(User $user)
    {
        $this->user = $user;
        $this->confirmingUserAddAmount = $this->user->id;
    }

    public function saveUser($id)
    {
        $users = User::find($id);

        $users->money = $this->user->money;

        $users->update([
            'money' => $users->money,
        ]);

        $users->save();

        $this->confirmingUserAddAmount = false;
    }
}
