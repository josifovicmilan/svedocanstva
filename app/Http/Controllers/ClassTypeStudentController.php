<?php

namespace App\Http\Controllers;

use App\Models\ClassType;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassTypeStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\ClassType  $classtype
     * @return \Illuminate\Http\Response
     */
    public function index(ClassType $classtype)
    {
        //
//        $marks = $classtype->students()->with('subjects')->get()->pluck('subjects')->collapse();
//        return response($marks);
        return response($classtype->students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassType  $classType
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ClassType $classType)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassType  $classType
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(ClassType $classType, Student $student)
    {
        //
        return response($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassType  $classType
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassType $classType, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassType  $classType
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassType $classType, Student $student)
    {
        //
    }
}
