@extends('layout.falcon.template')
@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Tabel Kategori</h5>
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
                    <a class="btn btn-primary me-1 mb-1" href="/settings/kategori_tambah">Tambah Kategori</a>
                </div>
              <table class="table table-bordered table-striped fs-10 mb-0">
                <thead class="bg-200">
                  <tr>
                    <th class="text-900 sort">No</th>
                    <th class="text-900 sort">Nama Kategori</th>
                    <th class="text-900 sort">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td class="no">1</td>
                    <td class="nama">Surat Edaran</td>
                    <td class="action">
                        <a class="btn btn-info me-1 mb-1" href="/settings/kategori_edit">Edit</a>
                        <button class="btn btn-danger me-1 mb-1" type="button">Hapus</button>
                    </td>
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
  </div>
@endsection
