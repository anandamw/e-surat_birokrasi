{{-- form edit data --}}
<div class="modal fade" id="authentication-modal2{{ $item->id_tipe_surat }}" tabindex="-1" role="dialog"
    aria-labelledby="authentication-modal-label" aria-hidden="true">
    <div class="modal-dialog mt-6" role="document">
        <div class="modal-content border-0">
            <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                    <h4 class="mb-0 text-white" id="authentication-modal-label">
                        Edit Tipe Surat</h4>
                    <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini
                    </p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="/settings/tipe/{{ $item->id_tipe_surat }}/update" method="POST">
                @csrf
                <div class="modal-body py-4 px-5">
                    <div class="mb-3"><label class="form-label" for="modal-auth-name">Tipe Surat</label><input
                            class="form-control" type="text" name="nama_tipe_surat"
                            value="{{ $item->nama_tipe_surat }}" autocomplete="on" id="modal-auth-name" />
                    </div>
                    <div class="mb-3"><label class="form-label" for="modal-auth-name">File</label>
                        <input class="form-control" type="text" value="{{ $item->nama_file }}" name="nama_file"
                            autocomplete="on" id="modal-auth-name" />
                    </div>
                    <div class="mb-3"><label class="form-label" for="basic-form-name">Pilih Kategori
                            Surat</label>
                        <select name="kategori_id" class="form-select" id="basic-form-name"
                            aria-label="Default select example">
                            <option selected="selected">Pilih Kategori Surat
                            </option>

                            @foreach ($getKategori as $get)
                                <option value="{{ $get->id_kategori }}"
                                    {{ $get->id_kategori == $item->kategori_id ? 'selected' : '' }}>
                                    {{ $get->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary d-block w-100 mt-3">Submit</button>
                    </div>
                    <div class="position-relative mt-5">
                        <hr />
                        <div class="divider-content-center">Birokrasi E-Surat
                            Uniba
                            Madura</div>
                    </div>
                    <div class="row g-2 mt-2">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
