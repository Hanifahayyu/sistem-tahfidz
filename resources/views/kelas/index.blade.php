<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tabel Mahasiswa</title>
  </head>


  <body>
    <div class="container">
    <h1 class="my-5 text-center">Data Mahasiswa</h1>

    <div>
        <a href="{{ route('santri.create') }}" class="btn btn-primary text-bold">Create Data</a>
    </div>

    <table class="table table-striped">
    </div>

        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Prodi</th>
            <th scope="col">Fakultas</th>
            <th scope="col">No HP</th>
            <th scope="col">Jenis Kelamin</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->prodi }}</td>
                <td>{{ $item->fakultas }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>
                  
                  <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST"
                    <br>
                    <a class="btn btn-warning" href="{{ route('mahasiswa.edit', $item->id) }}">edit</a>
                    @csrf
                    @method('delete')
                    
                    
                    <button type="submit" class= "btn btn-danger">delete</a>  
                      
                    </form>

                </td>  
            </tr>
                
            @empty
            @endforelse
        </tbody>
      </table>
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