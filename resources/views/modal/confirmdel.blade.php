<form action="{{ route('content.destroy', $item->id_buku) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal fade text-start" id="confirmdel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 class="pb-3">Ingin Menghapus Data ? {{$item->id_buku}}</h3>
                    <div class="d-flex justify-content-center" style="gap:20px">
                        <button type="submit" class="btn btn-primary">Yakin</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
