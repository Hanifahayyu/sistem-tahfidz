<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Data Mahasiswa</title>
  </head>
  <body>
    <div class="container">
    <h1 class="my-5 text-center" >Edit Data Mahasiswa</h1>

    <form action ="{{ route('mahasiswa.update', $items->id) }}" method="POST">

        @method('PUT')
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nama_lengkap</label>
          <input type="text" name = "nama_lengkap" value="{{ old('nama_lengkap') ?? $items->nama_lengkap }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nim</label>
            <input type="text" name = "nim" value="{{ old('nim') ?? $items->nim }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">prodi</label>
            <input type="text" name = "prodi" value="{{ old('prodi') ?? $items->prodi }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fakultas</label>
            <input type="text" name = "fakultas" value="{{ old('fakultas') ?? $items->fakultas }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">no_hp</label>
            <input type="text" name = "no_hp" value="{{ old('no_hp') ?? $items->no_hp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp"> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">jenis_kelamin</label>
            <input type="text" name = "jenis_kelamin" value="{{ old('jenis_kelamin') ?? $items->jenis_kelamin }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp"> 
        </div>
        
        <br>
        
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>