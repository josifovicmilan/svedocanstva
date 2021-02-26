<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $guarded = [];

    //ocena pripada uceniku
    public function student(){
        return $this->belongsTo(Student::class);
    }
    //ocena pripada predmetu
    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    protected $appends = ['descriptive_mark'];
    public function getDescriptiveMarkAttribute(){
        switch ($this->mark){
            case 1: return 'недовољан(1)';
                    break;
            case 2: return 'довољан(2)';
                    break;
            case 3: return 'добар(3)';
                    break;
            case 4: return 'врло добар(4)';
                    break;
            case 5: return 'одличан(5)';
                    break;
        }
    }
}
