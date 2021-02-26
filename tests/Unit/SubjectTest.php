<?php

namespace Tests\Feature;

use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubjectTest extends TestCase
{
    /**
    @test
     */
    public function a_subject_can_update_position()
    {
        $subject = Subject::first();

        $position = 1;
        $subject->updatePosition($position);

        $this->assertEquals($subject->position, $position);
    }

    /** @test */
    public function two_subjects_can_swap_positions(){
        $subject1 = Subject::create(['name' => 'mat', 'type' => 'obavezni', 'position' => 1]);
        $subject2 = Subject::create(['name' => 'srp', 'type' => 'obavezni', 'position' => 2]);

        $subject1->swapPosition($subject2);

        $this->assertEquals($subject1->position, 2);
        $this->assertEquals($subject2->position, 1);
    }
}
