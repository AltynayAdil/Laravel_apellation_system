<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $fillable = [
      'id','name', 'user_id', 'subject_id', 'course_id', 'teacher_id', 'answer', 'response', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function protokol(){
        return $this->belongsTo(Protokol::class);
    }



}
