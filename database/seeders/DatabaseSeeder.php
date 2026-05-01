<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Article;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Article::factory(3)->create();
        Category::factory(4)->create();
        Task::factory(10)->create();
    }
}
