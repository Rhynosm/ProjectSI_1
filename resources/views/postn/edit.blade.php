<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('postn.update', $postn->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA PELATIHAN</label>
                                <input type="text" class="form-control @error('namapel') is-invalid @enderror" name="namapel"value="{{ old('namapel', $postn->namapel) }}" placeholder="Masukkan Judul Post">
                   
                                <!-- error message untuk title -->
                                @error('namapel')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENYELENGGARA</label>
                                <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror" name="penyelenggara" value="{{ old('penyelenggara', $postn->penyelenggara) }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk title -->
                                @error('penyelenggara')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL MULAI</label>
                                <input type="text" class="form-control @error('tanggalmulai') is-invalid @enderror" name="tanggalmulai" value="{{ old('tanggalmulai', $postn->tanggalmulai) }}" placeholder="Masukkan Judul Post">
                            
                            
                                <!-- error message untuk content -->
                                @error('tanggalmulai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL BERAKHIR</label>
                                <input type="text" class="form-control @error('tanggalberakhir') is-invalid @enderror" name="tanggalberakhir" value="{{ old('tanggalberakhir', $postn->tanggalberakhir) }}" placeholder="Masukkan Judul Post">
                            
                            
                                <!-- error message untuk content -->
                                @error('tanggalberakhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">BIAYA</label>
                                <input type="text" class="form-control @error('biaya') is-invalid @enderror" name="biaya" value="{{ old('biaya', $postn->biaya) }}" placeholder="Masukkan Judul Post">
                            
                            
                                <!-- error message untuk content -->
                                @error('biaya')
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
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>