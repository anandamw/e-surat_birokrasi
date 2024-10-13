@extends('layout.falcon.template')
@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Tambah Tipe Surat</h5>
        </div>
      </div>
    </div>
    <div class="card-body pt-0">
      <form>
        <div class="mb-3"><label class="form-label" for="basic-form-name">Masukkan Tipe Surat</label><input
            class="form-control" id="basic-form-name" type="text" placeholder="Masukkan Tipe Surat ..." /></div>
        <div class="mb-3"><label class="form-label" for="basic-form-name">Pilih Tipe Surat</label><select
                    class="form-select" id="basic-form-name" aria-label="Default select example">
                    <option selected="selected">Pilih Kategori Surat</option>
                    <option value="edaran">Surat Edaran</option>
                  </select></div>
        <a class="btn btn-secondary me-1" href="/settings/tipe">Kembali</a>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
@endsection
