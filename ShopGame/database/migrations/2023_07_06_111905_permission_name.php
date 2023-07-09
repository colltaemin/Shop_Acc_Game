<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \App\Models\Permission::create([
            'name' => 'user.show',
        ]);
        \App\Models\Permission::create([
            'name' => 'user.edit',
        ]);
        \App\Models\Permission::create([
            'name' => 'user.delete',
        ]);
        \App\Models\Permission::create([
            'name' => 'product.show',
        ]);
        \App\Models\Permission::create([
            'name' => 'product.edit',
        ]);
        \App\Models\Permission::create([
            'name' => 'product.delete',
        ]);
        \App\Models\Permission::create([
            'name' => 'account.show',
        ]);
        \App\Models\Permission::create([
            'name' => 'account.edit',
        ]);
        \App\Models\Permission::create([
            'name' => 'account.delete',
        ]);
        \App\Models\Permission::create([
            'name' => 'role.show',
        ]);
        \App\Models\Permission::create([
            'name' => 'role.edit',
        ]);
        \App\Models\Permission::create([
            'name' => 'role.delete',
        ]);

        \App\Models\Role::create([
            'name' => 'admin',
            'description' => 'Quản trị viên',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
