<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
        {{-- <thead> --}}
            <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>NIK</td>
            </tr>
        {{-- </thead> --}}
        {{-- <tbody> --}}
            @foreach ($dosen as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->nik }}</td>
            </tr>
            @endforeach
        {{-- </tbody> --}}
    </table>

    {{-- @if ($mhs)
        {{ $mhs->nama}}
        <p>ini benar</p> 
    @else
        <p>Engga ada datanya</p>
    @endif --}}
</body>
</html>