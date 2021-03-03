@extends('layout/main')

@section('title', 'Form Mata Kuliah')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">

            <h1 class="mt-3 mb-1">Form Tambah Data Mata Kuliah</h1>
            <hr>
            <form method="POST" action="/matkul" class="mt-4">
                @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mata Kuliah</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkkan Nama Mata Kuliah" name="nama_mata_kuliah" class="form-control" id="nama_mata_kuliah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkkan sks" class="form-control" id="sks" name="sks">
                        </div>
                    </div>  
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"></legend>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah Data!</button>
                            </div>
                        </div>
                    </fieldset>   
            </form>
        </div> 
    </div>       
</div>
@endsection