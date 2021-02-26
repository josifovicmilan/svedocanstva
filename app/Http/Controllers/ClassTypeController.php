<?php

namespace App\Http\Controllers;

use App\Models\ClassType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes  = ClassType::all();
        return response($classes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'class_number' => 'required|min:1|max:11',
            'year_starter' => 'required|numeric',
            'name' => 'required',
            'study_duration' => 'required|min:3'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response($validator->errors()->all, 422);
        }
        $newClass = ClassType::create($request->all());

        return response($newClass);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassType  $classType
     * @return \Illuminate\Http\Response
     */
    public function show(ClassType $classtype)
    {

        return response($classtype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassType  $classType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassType $classType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassType  $classType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassType $classType)
    {
        //
    }
}
