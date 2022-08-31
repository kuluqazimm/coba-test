<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'khuluqin Azim',
            'username' => 'naxjagoan',
            'email' => 'azim@eaghost.com',
            'password' => bcrypt('password')
        ]);
        User::factory(4)->create();
        Kategori::create([
            'name' => 'Auto',
            'slug' => 'auto'
        ]);
        Kategori::create([
            'name' => 'Random',
            'slug' => 'random'
        ]);
        Kategori::create([
            'name' => 'Classic',
            'slug' => 'classic'
        ]);
        Kategori::create([
            'name' => 'Racing',
            'slug' => 'racing'
        ]);
        Kategori::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);
        Kategori::create([
            'name' => 'Urban',
            'slug' => 'urban'
        ]);
        Post::factory(20)->create();
    }
}