<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariablesGlobales extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table ='variables_globales';
}
