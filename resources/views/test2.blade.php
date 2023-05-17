<div class="card mb-3">
    <div class="container">
        <div class="card-body">
            <section class="text-start d-flex" style="gap: 10px;">
                <i class="fas fa-database"></i>
                <p>Insert</p>
            </section>

            <div class="container col-6">

                @if (Session::has('succes'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('succes') }}
                    </div>
                @endif
                <h5 class="card-title">Input Content</h5>
                <section class="pt-1">
                    <section class="main text-start">
                        <form action="{{ Route('content.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul">judul Buku</label>
                                <input type="text" class="form-control" name="judul" id="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="mapel">Mata Pelajaran</label>
                                <select type="text" class="form-select @error('mapel') is-invalid @enderror"
                                    name="mapel" id="mapel">
                                    @error('mapel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <option value="">pilih Mapel</option>
                                    @foreach ($data2 as $item)
                                        <option value="{{ $item->id_mapel }}">{{ $item->nama_mapel }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="materi">Materi</label>
                                <select type="text" class="form-select @error('materi') is-invalid @enderror"
                                    name="materi" id="materi">
                                    @error('materi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <option value="">pilih Materi</option>
                                    @foreach ($data3 as $item)
                                        <option value="{{ $item->id_materi }}">{{ $item->nama_materi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="file">File</label>
                                <input class="form-control @error('file') is-invalid @enderror" type="file"
                                    name="file" id="formfile" required>
                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <button name="form1submit_btn" class="btn btn-outline-primary"
                                    type="submit">SUBMIT</button>
                        </form>
                    </section>
                </section>
            </div>
        </div>
    </div>
</div>
