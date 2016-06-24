<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    public $primaryKey = 'id_region';
    public $timestamps = 'false';
}
