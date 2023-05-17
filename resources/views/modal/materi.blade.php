 <form action="{{ Route('content.store') }}" id="materiform" name="materiform" method="post">
     @csrf
     <div class="modal fade text-start" id="modalmateri" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Tambah Materi</h5>
                 </div>
                 <div class="modal-body">
                     <div class="container text-start">
                         <div class="mb-2 col-6">
                             <label for="nama-materi">Nama Materi</label>
                             <input type="text" class="form-control" id="nama-materi" name="nama-materi" required>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" id="btnsave" name="form3submit_btn"
                         class="btn btn-primary">Submit</button>
                 </div>
             </div>
         </div>

     </div>
 </form>
