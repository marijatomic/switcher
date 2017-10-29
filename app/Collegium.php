<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collegium extends Model
{
    protected  $table ='collegiums';
    protected $fillable = ['name', 'description', 'prof_id', 'assist_id', 'conversation_id'];
    public $timestamps = false;
}
