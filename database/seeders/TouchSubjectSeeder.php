<?php

namespace Database\Seeders;

use App\Enums\TouchSubjects;
use App\Models\TouchSubject;
use Illuminate\Database\Seeder;

class TouchSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (TouchSubjects::constants() as $constant) {
            TouchSubject::query()->create(
                [
                    'name' => $constant
                ]
            );
        }
    }
}
