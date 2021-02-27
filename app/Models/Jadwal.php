<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    public function mata_kuliah(){
        return $this->belongsTo(Matkul::class, 'mata_kuliah_id');
    }
}
