<?php

namespace App\Http\Controllers;

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

        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $money_add = $request->money;
            $user = DB::table('users')->where('id', $id)->first();
            $money = $user->money + $money_add;
            DB::table('users')->where('id', $id)->update(['money' => $money]);

            DB::commit();

            return redirect()->route('admin.users.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage().' Line: '.$exception->getLine());
        }
    }
}
