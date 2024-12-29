<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modulos;
use App\Models\Perfiles;
class PerfilesModulos extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table ='perfiles_modulos';

    public function modulos()
    {
        return $this->belongsTo(Modulos::class);
    }
    public function perfiles()
    {
        return $this->belongsTo(Perfiles::class);
    }
}
