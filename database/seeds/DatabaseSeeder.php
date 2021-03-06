<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 10)->create();
        factory(Post::class, 10)->create();
    }
}
