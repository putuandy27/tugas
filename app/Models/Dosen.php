<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $fillable = ['id', 'nama', 'alamat', 'nik'];

    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class, 'dosen_id');
    }
    public function mata_kuliah(){
        return $this->belongsToMany(Matkul::class, 'dosen_matkul', 'dosen_id', 'mata_kuliah_id');
    }
}
