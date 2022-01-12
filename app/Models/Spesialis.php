<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;
    protected $table = "spesialis";
    protected $visible = ['nama_spesialis'];

    protected $fillable = ['nama_spesialis'];

    public $timestamps = true;

    public function spesialis()
    {
        $this->hasMany('App\Models\DataDokter', 'id_spesialis');
    }
}
