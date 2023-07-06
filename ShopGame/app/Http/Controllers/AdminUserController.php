<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::table('users')->paginate(14);

        return view('admin.users.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        $roles = Role::all();

        return view('admin.users.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);

            $user->roles()->sync($request->role_id);

            DB::commit();

            return redirect()->route('admin.users.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage().' Line: '.$exception->getLine());
        }
    }
}
