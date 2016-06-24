<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comuna';
    public $primaryKey = 'id_comuna';
    public $timestamps = 'false';
}
