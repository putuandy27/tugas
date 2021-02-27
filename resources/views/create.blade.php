<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/dosen" method="post">
        @csrf
        <label for="name">Nama</label>
        <input type="text", name="nama">
        <label for="name">alamat</label>
        <input type="text", name="alamat">
        <label for="name">nik</label>
        <input type="text", name="nik">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>