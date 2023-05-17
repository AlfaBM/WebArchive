<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\book;
use App\Models\mapel;
use App\Models\materi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            admin::create([
                'username' => 'admin',
                'password' => hash::make('123')
            ]);

            mapel::create([
                'nama_mapel' => 'bokep'
            ]);

            materi::create([
                'nama_materi' => 'porn'
            ]);
            
            book::create([
                'judul' => 'test',
                'data' => 'fhorno.pdf',
                'id_mapel' => 1,
                'id_materi' => 1
            ]);
    }
}
