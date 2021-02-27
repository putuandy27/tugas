<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    public function Matkul(){
        return $this->belongsToMany(Matkul::class, 'mahasiswa_matkul', 'mahasiswa_id', 'mata_kuliah_id');
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
