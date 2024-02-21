<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Student::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kelas:: create([
            'nama' => '10 PPLG 1'
        ]);

        kelas:: create([
            'nama' => '10 PPLG 2'
        ]);

        kelas:: create([
            'nama' => '10 PPLG 3'
        ]);

        kelas:: create([
            'nama' => '10 PPLG 4'
        ]);

    }
}
