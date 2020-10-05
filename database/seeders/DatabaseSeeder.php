<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Antes
        // factory(User::class, 10)->create();

        // AGORA
        // User::factory(10)->create();
        // User::factory()->count(50)->create();

        // ANTES
        // factory(User::class, 1)
        //      ->states('editor')
        //      ->create([
        //          'name' => 'Usuário',
        //          'email' => 'email@email.com.br',
        //      ]);

        // AGORA
        // User::factory()->count(10)->role(1)->create([
        //     'name' => 'admin'
        // ]);

        // User::factory()->count(10)->role(2)->create([
        //     'name' => 'user'
        // ]);

        // User::factory(5)
        //     ->role(1)
        //     ->hasPosts(10, [
        //         'title' => 'titulo do post admin',
        //     ])
        //     ->create();

        // User::factory(5)
        //     ->role(1)
        //     ->has(\App\Models\Post::factory()->count(10))
        //     ->create();

        // User::factory(5)
        //     ->role(2)
        //     ->hasPosts(10, [
        //         'title' => 'titulo do post user',
        //     ])
        //     ->create();

        // Post::factory(10)
        //     ->for(User::factory())
        //     ->create(['title' => 'teste do meu título']);

    }
}
