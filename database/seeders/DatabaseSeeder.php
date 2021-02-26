<?php

namespace Database\Seeders;

use App\Models\ClassType;
use App\Models\Mark;
use App\Models\Student;
use App\Models\StudentData;
use App\Models\Subject;
use Database\Factories\MarkFactory;
use Database\Factories\StudentDataFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        ClassType::truncate();
        Student::truncate();
        Subject::truncate();
        Mark::truncate();

        ClassType::factory()->times(2)->create();
        Subject::factory()->times(6)->create();
        Student::factory()->times(60)->create()
            ->each(function($student){
                $student->personalData()->save(StudentData::factory()->make());

                $subjects = Subject::all();
                $mark = Mark::factory()->make();
                $student->subjects()->attach($subjects, ['student_id' => $student->id, 'mark' => $mark->mark , 'school_year' => $mark->school_year, 'grade' => $mark->grade]);
            });
    }
}
