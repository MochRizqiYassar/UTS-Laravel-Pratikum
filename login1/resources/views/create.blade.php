<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('bunga.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}" placeholder="Nama">
                                <!-- error message untuk judul -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <input type="text" class="form-control @error('pengarang') is-invalid @enderror"
                                    name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Deskripsi">
                                <!-- error message untuk pengarang -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Harga</label>
                                <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                                    name="harga" value="{{ old('harga') }}" placeholder="Harga">
                                <!-- error message untuk penerbit -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                        </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('penerbit') is-invalid @enderror" name="image" placeholder="Pilih Gambar">
                                <!-- error message untuk penerbit -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>