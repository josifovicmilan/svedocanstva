<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
class ClassType extends Model
{
    use HasFactory;



    protected $table = 'classes';
    protected $hidden= ['created_at', 'updated_at'];
    protected $fillable= ['class_number', 'year_started', 'name', 'study_duration'];
    protected $appends=['years_active'];
    public function students(){
        return $this->hasMany(Student::class, 'classes_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $guarded= [];
    public function getYearsActiveAttribute(){
        $year = $this->year_started;
        return  [
            'I разред' => $year . '/' . ($year+1),
            'II разред' => ($year+1) . '/' . ($year+2),
            'III разред' => ($year+2) . '/' . ($year+3),
            'IV разред' => ($year+3) . '/' . ($year+4),
        ];
    }

}
