<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';
    public $primaryKey = 'id';
    public $timestamps = 'false';
}
