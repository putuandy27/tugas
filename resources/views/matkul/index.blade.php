@extends('layout.main')

@section('title', 'Daftar Mata Kuliah')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3 mb-3">Table Mata Kuliah</h1>
                
                @if (session('status'))
                    <div class="alert alert-primary">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('ubah'))
                    <div class="alert alert-success">
                        {{ session('ubah') }}
                    </div>
                @endif

                <a href="matkul/create" class="btn btn-primary mt-1 mb-4">Tambah Data Matkul!</a>
                
                <table class="table table-hover">
                    <thead class= "thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $matkul as $m )
                            <tr>
                                <th scope="row">{{ $m->id }}</th>
                                <td> {{ $m->nama_mata_kuliah }} </td>
                                <td> {{ $m->sks }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection