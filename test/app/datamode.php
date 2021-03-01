<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datamode extends Model
{
    public $timestamps = false;
    protected $table= "test";
    protected $primaryKey = 'order_id';

}
