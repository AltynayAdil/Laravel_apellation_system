<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['title_ru'];
    public function statement(){
        return $this->hasOne(Statement::class);
    }
}
