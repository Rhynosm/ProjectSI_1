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
                        <form action="{{ route('postq.update', $postq->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">PENDIDIKAN TERAKHIR</label>
                                <input type="text" class="form-control @error('pendtera') is-invalid @enderror" name="pendtera"value="{{ old('pendtera', $postq->pendtera) }}" placeholder="Masukkan Judul Post">
                   
                                <!-- error message untuk title -->
                                @error('pendtera')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA INSTITUSI PENDIDIKAN</label>
                                <input type="text" class="form-control @error('namainstitusi') is-invalid @enderror" name="namainstitusi" value="{{ old('namainstitusi', $postq->namainstitusi) }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk title -->
                                @error('namainstitusi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TAHUN LULUS</label>
                                <input type="text" class="form-control @error('tahunlulus') is-invalid @enderror" name="tahunlulus" value="{{ old('tahunlulus', $postq->tahunlulus) }}" placeholder="Masukkan Judul Post">
                            
                            
                                <!-- error message untuk content -->
                                @error('tahunlulus')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GPA</label>
                                <input type="text" class="form-control @error('gpa') is-invalid @enderror" name="gpa" value="{{ old('gpa', $postq->gpa) }}" placeholder="Masukkan Judul Post">
                            
                            
                                <!-- error message untuk content -->
                                @error('gpa')
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