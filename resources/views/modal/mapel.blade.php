<form action="{{ Route('content.store') }}" id="mapelform" name="mapelform" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-start" id="modalmapel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Mapel</h5>
                </div>
                <div class="modal-body">
                    <div class="container text-start">
                        <div class="mb-2 col-6">
                            <label for="nama-mapel">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" id="nama-mapel" name="nama-mapel" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="gambar-mapel">Gambar</label>
                            <input type="file" class="form-control" id="gambar-mapel" name="gambar-mapel" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="btnsave" name="form2submit_btn" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </div>
</form>
