<form action="{{ Route('content.store') }}" id="createform" name="createform" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-start" id="modalcreate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judul">judul Buku</label>
                        <input type="text" class="form-control" name="judul" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="mapel">Mata Pelajaran</label>
                        <select type="text" class="form-select @error('mapel') is-invalid @enderror" name="mapel"
                            id="mapel">
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
                        <select type="text" class="form-select @error('materi') is-invalid @enderror" name="materi"
                            id="materi">
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
                        <input class="form-control @error('file') is-invalid @enderror" type="file" name="file"
                            id="formfile" required>
                        @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </div>
</form>
