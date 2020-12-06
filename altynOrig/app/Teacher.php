<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name'];
    public function statement(){
        return $this->hasOne(Statement::class);
    }

}
