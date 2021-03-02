<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allLogin extends Model
{
    public $timestamps = false;
    protected $table= "credentials";
    protected $primaryKey = 'user_id';
}
