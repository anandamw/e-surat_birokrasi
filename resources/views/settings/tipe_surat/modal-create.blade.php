   {{-- form tambah --}}
   <form action="/settings/tipe/store" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
           aria-labelledby="authentication-modal-label" aria-hidden="true">
           <div class="modal-dialog mt-6" role="document">
               <div class="modal-content border-0">
                   <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                       <div class="position-relative z-1">
                           <h4 class="mb-0 text-white" id="authentication-modal-label">Tambah Tipe Surat</h4>
                           <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
                       </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"
                           aria-label="Close"></button>
                   </div>
                   <div class="modal-body py-4 px-5">
                       <div class="mb-3">
                           <label class="form-label" for="modal-auth-name">Tipe Surat</label>
                           <input class="form-control" type="text" name="nama_tipe_surat" autocomplete="on"
                               id="modal-auth-name" required />
                       </div>
                       <div class="mb-3">
                           <label class="form-label" for="modal-auth-name">File</label>
                           <input class="form-control" type="text" name="nama_file" autocomplete="on"
                               id="modal-auth-name" required />
                       </div>
                       <div class="mb-3"><label class="form-label" for="basic-form-name">Pilih Kategori
                               Surat</label>
                           <select class="form-select" name="kategori_id" id="basic-form-name"
                               aria-label="Default select example">
                               <option selected="selected">Pilih Kategori Surat</option>
                               @foreach ($kategori as $item)
                                   <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="mb-3">
                           <button class="btn btn-primary d-block w-100 mt-3" type="submit">Submit</button>
                       </div>
                       <div class="position-relative mt-5">
                           <hr />
                           <div class="divider-content-center">Birokrasi E-Surat Uniba Madura</div>
                       </div>
                       <div class="row g-2 mt-2">
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </form>
 