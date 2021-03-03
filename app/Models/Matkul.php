<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matkul extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'mata_kuliah';
    protected $fillable = ['nama_mata_kuliah', 'sks'];

    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'mata_kuliah_id');
    }

    public function Mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matkul', 'mata_kuliah_id', 'mahasiswa_id');
    }

    public function dosen(){
        return $this->belongsToMany(Dosen::class, 'dosen_matkul', 'mata_kuliah_id', 'dosen_id');
    }
}
