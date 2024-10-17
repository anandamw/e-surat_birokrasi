@extends('layout.falcon.template')
@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Form Pengajuan Surat</h5>
        </div>
      </div>
    </div>
    <div class="card-body pt-0">
      <form>
        <div class="mb-3"><label class="form-label" for="basic-form-name">Masukkan NIM Mahasiswa</label><input
            class="form-control" id="basic-form-name" type="text" placeholder="NIM Mahasiswa" /></div>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#authentication-modal">Cek
          Nim</button>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
          aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">NIM Terdaftar</h4>
                  <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <div class="mb-3"><label class="form-label" for="modal-auth-name">Nama Mahasiswa</label><input
                    class="form-control" type="text" autocomplete="on" id="modal-auth-name" value="Rafi Nur Anjay"
                    readonly /></div>
                <div class="mb-3"><label class="form-label" for="modal-auth-email">Nim Mahasiswa</label><input
                    class="form-control" type="text" autocomplete="on" id="modal-auth-email" value="2202310007"
                    readonly /></div>
                <div class="mb-3"><label class="form-label" for="basic-form-gender">Pilih Tipe Surat</label><select
                    class="form-select" id="basic-form-gender" aria-label="Default select example">
                    <option selected="selected">Pilih Tipe Surat</option>
                    <option value="male">Peminjaman</option>
                    <option value="female">Magang</option>
                    <option value="other">Sidang</option>
                  </select></div>
                <div class="mb-3"><label class="form-label" for="tgl">Tanggal</label><input class="form-control"
                    type="date" id="tgl" /></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                    name="submit">Ajukan Surat</button></div>
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
@endsection
