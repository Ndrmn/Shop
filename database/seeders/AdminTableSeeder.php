<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => \Illuminate\Support\Facades\Hash::make('secret123'),
        ]);

        return $admin;
    }
}
