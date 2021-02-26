<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded= [];


    public function students(){
        return $this->belongsToMany(Student::class, 'marks');
    }
    public function updatePosition($position){
        return $this->update(['position' => $position]);
    }
    public function swapPosition(Subject $subject){
        $helperIndex = $this->position;
        $this->update(['position' => $subject->position]);
        $subject->update(['position' => $helperIndex]);
    }
    public function scopeNext($query){
        return $query->where('position', '>' , $this->position)->orderBy('position', 'asc')->first();
    }
    public function scopePrev($query){
        return $query->where('position', '<' , $this->position)->orderBy('position', 'desc')->first();
    }
}
