<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => '123123',
        ]);

        \App\Models\Category::factory(20)->create();
        \App\Models\Product::factory()->create([
            'name' => 'Làng Lá Phiêu Lưu Kí',
            'current_account' => 100,
            'sold_account' => random_int(1, 100),
            'slug' => 'lang-la-phieu-luu-ki',
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Ninja Origin',
            'current_account' => 100,
            'sold_account' => random_int(1, 100),
            'slug' => 'ninja-origin',
        ]);
        \App\Models\ProductService::factory()->create([
            'product_id' => 1,
            'current_service' => 1,
            'sold_service' => random_int(1, 100),
        ]);
        \App\Models\ProductService::factory()->create([
            'product_id' => 2,
            'current_service' => 1,
            'sold_service' => random_int(1, 100),
        ]);
        \App\Models\GameServiceSellSilver::factory()->create([
            'productService_id' => 1,
            'sever' => 'Làng Lá',
            'multiplier' => 1,
        ]);
    }
}
