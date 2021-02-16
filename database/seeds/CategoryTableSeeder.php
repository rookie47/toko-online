<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Processor', 'slug' => 'processor', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Graphic card', 'slug' => 'vga', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Random acces memory', 'slug' => 'ram', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Power suplies', 'slug' => 'psu', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Display', 'slug' => 'display', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Storage', 'slug' => 'storage', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Motherboard', 'slug' => 'mobo', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}