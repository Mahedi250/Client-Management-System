<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datamodel extends Model
{
    public $timestamps = false;
    protected $table= "maneger";
    protected $primaryKey = 'man_id';

}
