<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Edit</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.cs
s">
</head>
<body style="background: lightgray">
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<form action="{{ route('bunga.update', $bunga->id) }}"
method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label class="font-weightbold">Nama</label>
<input type="text" class="form-control 
@error('title') is-invalid @enderror" name="nama" value="{{ 
old('nama',$bunga->nama) }}" placeholder="Nama bunga">
<!-- error message untuk title -->
@error('title')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weightbold">Deskripsi</label>
<input type="text" class="form-control 
@error('title') is-invalid @enderror" name="deskripsi" value="{{ 
old('deskripsi',$bunga->deskripsi) }}" placeholder="Deskripsi">
<!-- error message untuk title -->
@error('title')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group">
<label class="font-weightbold">Harga</label>
<input type="text" class="form-control 
@error('title') is-invalid @enderror" name="harga" value="{{ 
old('harga',$bunga->harga) }}" placeholder="Harga">
<!-- error message untuk title -->
@error('title')
<div class="alert alert-danger mt-2">
{{ $message }}
</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">gambar</label>
                                <input type="file" class="form-control @error('penerbit') is-invalid @enderror" name="gambar" placeholder="Pilih Gambar">
                                <!-- error message untuk penerbit -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}

</div>
@enderror
</div>
<button type="submit" class="btn btn-md btnprimary">SIMPAN</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js">
</script>
</body>
</html>
