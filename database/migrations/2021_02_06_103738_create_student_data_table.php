<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_data', function (Blueprint $table) {
            $table->id();
            $table->string('school_number', 6);
            $table->string('registration_number' );
            $table->string('signid_in_at')->default('I');
            $table->string('type_of_education')->default('редован');
            $table->string('borough_of_birth');
            $table->string('city_of_birth' );
            $table->string('country_of_birth');
            $table->timestamps();

            $table->foreignId('student_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_data');
    }
}
