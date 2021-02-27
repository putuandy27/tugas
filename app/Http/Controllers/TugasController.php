<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Jadwal;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDosen()
    {
        return Dosen::get();
    }

    public function getMhs()
    {
        $mhs = Mahasiswa::get();

        return view('form', compact('mhs'));
    }

    public function getMatkul()
    {
        return Matkul::get();
    }

    public function getDosenId($id)
    {
        return Dosen::findOrFail($id); 
    }

    public function getNamaMatkul()
    {
        return Matkul::select('nama_mata_kuliah')->get(); 
    }

    public function getFiveMhs()
    {
        return Mahasiswa::limit(5)->get();
    }

    public function getMataKuliah()
    {
        return Mahasiswa::find(1)->matkul()->get();
    }

    public function attachMatkul()
    {
        return Mahasiswa::find(1)->matkul()->attach([1,2,3]);
    }

    public function attachMhs()
    {
        return Matkul::find(1)->mahasiswa()->attach([1,2,3]);
    }

    public function detachMatkul()
    {
        return Mahasiswa::find(1)->matkul()->detach();
    }

    public function detachsemua()
    {
        // $mahasiswa = Mahasiswa::where('id', 1)->orWhere('id', 2)->orWhere('id', 3)->get();
        // //
        // $mahasiswa2  = Mahasiswa::whereIn('id', [1,2,3]);

        // for($i = 0, $i < count($mahasiswa), $i++){

        // }
        // return Mahasiswa::find(1)->matkul()->detach();
    }



    public function sync()
    {
        return Mahasiswa::find(1)->matkul()->sync([1,2,3,4,5]);
    }

    public function detachMhs()
    {
        return Matkul::find(1)->mahasiswa()->detach([1,2,3]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Matkul;
        $data->nama_mata_kuliah = 'PHP';
        $data->sks = '4';
        $data->save();

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = DB::table('mata_kuliah')->insert([
            [
            'nama_mata_kuliah' => 'Bahasa Jerman',
            'sks' => 5
            ],
            [
            'nama_mata_kuliah' => 'Bahasa Jepang',
            'sks' => 3
            ],
        ]);

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Matkul::create(
            [
            'nama_mata_kuliah' => 'Java',
            'sks' => 5
            ]
        );
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Matkul::find(1);
        $data->nama_mata_kuliah = 'PHP';
        $data->sks = '5';
        $data->save();

        // $matkul = Matkul::where('id', 1)
        // ->update([
        //     'sks'=>10
        // ]);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data = DB::table('mata_kuliah')
            ->where('id', 3)
            ->update(['sks' => 4]);

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $data = DB::table('mata_kuliah')->where('id', 7)->delete();

        return $data;
    }

    public function delete()
    {
        $data = Matkul::find(8);
        $data->delete();   
        
        return $data;
    }

    public function createMatkulWith()
    {
        $matkul = Matkul::find(1)->jadwal()->get();
        // atau
        // $matkul = Matkul::find(1)->jadwal()->where('hari', 'Minggu')->get();
        return $matkul;
    }
    public function createWithMatkul()
    {
        $jadwal = Jadwal::find(2)->mata_kuliah()->get();
        return $jadwal;
    }

    public function createdosenbaru()
    {
        $dosen = new Dosen;
        $dosen->nama = 'Mikasa';
        $dosen->alamat = 'Shiganshina';
        $dosen->nik = '7455261';
        $dosen->save();

        return $dosen;
    }

    public function updatemahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = 'Andy';
        $mahasiswa->alamat = 'Denpasar';
        $mahasiswa->nim = '19101';
        $mahasiswa->dosen_id = '5';
        $mahasiswa->save();

        return $mahasiswa;
    }

    public function getAllMhsFromDosenItu($id)
    {
        $data = Dosen::find($id)->mahasiswa()->get();

        return $data;
    }
}
