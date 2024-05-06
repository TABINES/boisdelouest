<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        $this->call([
            // Generate in cascade: Question, Answer, User
            QuestionSeeder::class,
        ]);
    }
}
