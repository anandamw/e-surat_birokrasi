@extends('layout.falcon.template')
@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Tabel Fakultas</h5>
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
                  data-bs-target="#authentication-modal">Tambah fakultas</button>
              </div>
              <table class="table table-bordered table-striped fs-10 mb-0">
                <thead class="bg-200">
                  <tr>
                    <th class="text-900 sort text-center">No</th>
                    <th class="text-900 sort text-center">Nama Fakultas</th>
                    <th class="text-900 sort text-center">Kode Fakultas</th>
                    <th class="text-900 sort text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($kategori as $item)
                    <tr>
                      <td class="no align-middle text-center align-middle">{{ $loop->iteration }}</td>
                      <td class="nama text-center align-middle">{{ $item->nama_kategori }}</td>
                      <td class="action text-center align-middle">
                        <button class="btn btn-info me-1 mb-1" type="button" data-bs-toggle="modal"
                          data-bs-target="#authentication-{{ $item->token_kategori }}">Edit</button>
                        <button class="btn btn-danger me-1 mb-1" type="button" data-bs-toggle="modal"
                          data-bs-target="#destroyer-{{ $item->token_kategori }}">Hapus</button>
                      </td>
                    </tr>

                    <div class="modal fade" id="destroyer-{{ $item->token_kategori }}" tabindex="-1" role="dialog"
                      aria-labelledby="authentication-modal-label" aria-hidden="true">
                      <div class="modal-dialog mt-6" role="document">
                        <div class="modal-content border-0">
                          <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                            <div class="position-relative z-1">
                              <h4 class="mb-0 text-white" id="authentication-modal-label">Yakin Ingin Menghapus <br> <strong>{{ $item->nama_kategori }}</strong></h4>
                            </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2"
                              data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body py-4 px-5 text-center">
                            <button class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close">Batalkan</button>
                            <a class="btn btn-danger" href="/settings/kategori/{{ $item->token_kategori }}/del">Hapus</a>
                          </div>
                          <div class="modal-footer">
                            <p class="fs-10 mb-0 text-danger">Untuk menghindari salah klik, pengecekan akan dilakukan sebelum menghapus data.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="authentication-{{ $item->token_kategori }}" tabindex="-1" role="dialog"
                      aria-labelledby="authentication-modal-label" aria-hidden="true">
                      <div class="modal-dialog mt-6" role="document">
                        <div class="modal-content border-0">
                          <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                            <div class="position-relative z-1">
                              <h4 class="mb-0 text-white" id="authentication-modal-label">Edit
                                Kategori</h4>
                              <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
                            </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2"
                              data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body py-4 px-5">
                            <form action="/settings/kategori/{{ $item->token_kategori }}" method="POST">
                              @csrf
                              <div class="mb-3"><label class="form-label" for="modal-auth-name">Nama
                                  Kategori</label><input class="form-control" value="{{ $item->nama_kategori }}"
                                  type="text" autocomplete="on" id="modal-auth-name" name="nama_kategori" />
                              </div>
                              <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                  name="submit">Submit</button></div>
                              <div class="position-relative mt-5">
                                <hr />
                                <div class="divider-content-center">Birokrasi E-Surat Uniba
                                  Madura</div>
                              </div>
                              <div class="row g-2 mt-2">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="row align-items-center mt-3">
              <div class="pagination d-none"></div>
              <div class="col">
                <p class="mb-0 fs-10">
                  <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                  <span class="d-none d-sm-inline-block"> &mdash;</span>
                  <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                      class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                    class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                      class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
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
    </div>

    <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
      aria-labelledby="authentication-modal-label" aria-hidden="true">
      <div class="modal-dialog mt-6" role="document">
        <div class="modal-content border-0">
          <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
            <div class="position-relative z-1">
              <h4 class="mb-0 text-white" id="authentication-modal-label">Tambah Kategori</h4>
              <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
            </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body py-4 px-5">
            <form action="" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="modal-auth-name">
                    Nama Kategori
                </label>
                  <input class="form-control" type="text" autocomplete="on" id="modal-auth-name"
                  name="nama_kategori" />
                  @error('nama_kategori')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                  name="submit">Submit</button></div>
              <div class="position-relative mt-5">
                <hr />
                <div class="divider-content-center">Birokrasi E-Surat Uniba Madura</div>
              </div>
              <div class="row g-2 mt-2">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
