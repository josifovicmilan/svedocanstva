<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $with=['personalData'];

    public function classroom(){
        return $this->belongsTo(ClassType::class, 'classes_id');
    }
    public function personalData(){
        return $this->hasOne(StudentData::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'marks')->orderBy('position','asc')->withPivot('grade','mark', 'school_year');
    }
    public function marks(){
        return $this->subjects->pluck('pivot')->values();
    }
    public function subjectsInYear($year){
        return $this->subjects()->where('school_year', $year)->get();
    }
    public function average(){
        return $this->subjects()->avg('mark');
    }
    public function averageInYear($year){
        return $this->subjects()->where('school_year', $year)->avg('mark');
    }

}
