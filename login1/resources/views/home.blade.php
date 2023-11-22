<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Web Lanjut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Bunga</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('bunga.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>

                        <table class="table" border='0'>
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($bunga as $bunga)
        <tr>
            <td>{{ $bunga->nama }}</td>
            <td>{{ $bunga->deskripsi }}</td>
            <td>{{ $bunga->harga }}</td>
            <td><img src="{{ asset('storage/gambar/'. $bunga->image)}}" alt="Gambar gaono" srcset="" style="width : 40px;"></td>
            <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bunga.destroy', $bunga->id) }}" method="POST">
                    <a href="{{ route('bunga.edit', $bunga->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">
                <div class="alert alert-danger">
                    Data Bunga belum Tersedia.
                </div>
            </td>
        </tr>
@endforelse
</tbody>
</table>

                        <!-- Tombol Logout -->
                        <div class="text-right">
                            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Pesan dengan toastr
    </script>
</body>
</html>
