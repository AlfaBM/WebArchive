@extends('template.admindashboard')
@section('title', 'Content')

@section('content')
    <div class="container pt-5">
        <div class="card mb-3 mt-5">
            <div class="container">
                <div class="card-body">
                    <section class="text-start d-flex" style="gap: 10px;">
                        <i class="fas fa-database"></i>
                        <p>Update</p>
                    </section>
                    <div class="card">
                        <div class="container col-6">
                            <div class="card-body">
                                <h5 class="card-title">Edit Content</h5>
                                <section class="pt-1">
                                    <section class="main text-start">
                                        <form action="{{ Route('patchmapel', $data->id_mapel) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="nama-mapel">Nama mapel</label>
                                                <input type="text" class="form-control" name="nama-mapel" id="nama-mapel"
                                                    value="{{ $data->nama_mapel }}" required>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="Gambar">Gambar</label>
                                                <input class="form-control @error('Gambar') is-invalid @enderror"
                                                    type="file" name="Gambar" id="Gambar">
                                                @error('Gambar')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 text-center">
                                                <button name="form1submit_btn" class="btn btn-outline-primary"
                                                    type="submit">SUBMIT</button>
                                                    <a href="{{route('content.index')}}" class="btn btn-danger">BACK</a>
                                        </form>
                                    </section>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection