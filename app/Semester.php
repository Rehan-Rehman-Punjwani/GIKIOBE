<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model

{
    protected $primaryKey = 'semester_id';
    public $timestamps = false;


    protected $fillable = [

        'semester_type',
        'semester_year',
          
    ];
}
