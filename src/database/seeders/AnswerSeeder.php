<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $max = 5;
        for($c=1; $c<=$max; $c++) {
            Answer::factory()->create();
        }
    }
}
