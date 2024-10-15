@extends('layout.falcon.template')
@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Tabel Pengabsahan</h5>
        </div>
      </div>
    </div>
    <div class="card-body pt-0">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel"
          aria-labelledby="tab-dom-e62a093c-e093-4513-b8bd-8d81aa2c9e80" id="dom-e62a093c-e093-4513-b8bd-8d81aa2c9e80">
          <div id="tableExample" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
              <div class="">
                <button class="btn btn-primary me-1 mb-1" type="button" data-bs-toggle="modal"
                  data-bs-target="#authentication-modal">Tambah TTD</button>
              </div>
              <table class="table table-bordered table-striped fs-10 mb-0">
                <thead class="bg-200">
                  <tr>
                    <th class="text-900 sort">No</th>
                    <th class="text-900 sort text-center">Nama</th>
                    <th class="text-900 sort text-center">TTD</th>
                    <th class="text-900 sort text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td class="no align-middle">1</td>
                    <td class="nama text-center text-break align-middle">Yosi Bagus</td>
                    <td class="foto text-center align-middle"><img src="{{ asset('falcon') }}/ktp.jpg" width="140" alt="">
                    </td>
                    <td class="action text-center align-middle">
                      <button class="btn btn-info me-1 mb-1" type="button" data-bs-toggle="modal"
                        data-bs-target="#authentication-modal2"">Edit</button>
                      <button class="btn btn-danger me-1 mb-1" type="button">Hapus</button>
                    </td>
                    <form action="">
                      <div class="modal fade" id="authentication-modal2" tabindex="-1" role="dialog"
                        aria-labelledby="authentication-modal-label" aria-hidden="true">
                        <div class="modal-dialog mt-6" role="document">
                          <div class="modal-content border-0">
                            <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                              <div class="position-relative z-1">
                                <h4 class="mb-0 text-white" id="authentication-modal-label">Edit TTD</h4>
                                <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
                              </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body py-4 px-5">
                              <div class="mb-3"><label class="form-label" for="modal-auth-name">Nama
                                  Pengabsah</label><input class="form-control" value="Yosi Bagus" type="text"
                                  autocomplete="on" id="modal-auth-name" /></div>
                              <div class="hero">
                                <label for="input-file" id="drop-area">
                                  <input type="file" accept="image/*" id="input-file" name="TTD" value=""
                                    hidden>
                                  <div id="image-view" class=" text-center pt-7">
                                    {{-- <img src="{{ asset('falcon') }}/upload.png"> --}}
                                    <p>Masukkan TTD</p>
                                  </div>
                                </label>
                              </div>
                              <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                  name="submit">Submit</button></div>
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
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row align-items-center mt-3">
              <div class="pagination d-none"></div>
              <div class="col">
                <p class="mb-0 fs-10">
                  <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                  <span class="d-none d-sm-inline-block"> &mdash;</span>
                  <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                      data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                    data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                      data-fa-transform="down-1"></span></a>
                </p>
              </div>
              <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button"
                  data-list-pagination="prev"><span>Previous</span></button><button
                  class="btn btn-sm btn-primary px-4 ms-2" type="button"
                  data-list-pagination="next"><span>Next</span></button></div>
            </div>
          </div>
        </div>
        <div class="tab-pane code-tab-pane" role="tabpanel"
          aria-labelledby="tab-dom-5ab6a6c2-df09-43e8-ad96-79a7b5f6dea6" id="dom-5ab6a6c2-df09-43e8-ad96-79a7b5f6dea6">
        </div>
      </div>
      <form action="">
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
          aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Form TTD</h4>
                  <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <div class="mb-3"><label class="form-label" for="modal-auth-name">Nama Pengabsah</label><input
                    class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                <div class="hero">
                  <label for="input-file" id="drop-area">
                    <input type="file" accept="image/*" id="input-file" name="TTD" hidden>
                    <div id="image-view" class=" text-center pt-7">
                      {{-- <img src="{{ asset('falcon') }}/upload.png"> --}}
                      <p>Masukkan TTD</p>
                    </div>
                  </label>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                    name="submit">Submit</button></div>
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
    </div>
  </div>
  <script>
    const dropArea = document.getElementById("drop-area");
    const inputFile = document.getElementById("input-file");
    const imgView = document.getElementById("image-view");

    inputFile.addEventListener("change", uploadImage);

    function uploadImage() {
      let imgLink = URL.createObjectURL(inputFile.files[0]);
      imgView.style.backgroundImage = `url(${imgLink})`;
      imgView.textContent = "";
      imgView.style.border = 0;
    }

    dropArea.addEventListener("dragover", function(e) {
      e.preventDefault();
    });

    dropArea.addEventListener("drop", function(e) {
      e.preventDefault();
      inputFile.files = e.dataTransfer.files;
      uploadImage();
    });
  </script>
@endsection
