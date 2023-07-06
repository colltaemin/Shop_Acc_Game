<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $myCheckboxes = $request->input('my_checkbox');
        $role = Role::create([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        $role->permissions()->attach($myCheckboxes);

        return redirect()->route('admin.roles.index');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $myCheckboxes = $request->input('my_checkbox');
        $role = Role::findOrFail($id);
        $role->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        $role->permissions()->sync($myCheckboxes);

        return redirect()->route('admin.roles.index');
    }

    public function delete($id)
    {
        try {
            Role::findOrFail($id)->delete();

            return response()->json([
                'code' => 200,
                'message' => 'success',
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'code' => 500,
                'message' => 'fail',
            ], 500);
        }
    }
}
