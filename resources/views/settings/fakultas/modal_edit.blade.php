<div class="modal fade" id="authentication-{{ $item->id_fakultas }}" tabindex="-1" role="dialog"
    aria-labelledby="authentication-modal-label" aria-hidden="true">
    <div class="modal-dialog mt-6" role="document">
        <div class="modal-content border-0">
            <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                    <h4 class="mb-0 text-white" id="authentication-modal-label">Edit
                        Nama Fakultas</h4>
                    <p class="fs-10 mb-0 text-white">Isi Form Dibawah Ini</p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 px-5">
                <form action="/settings/fakultas/{{ $item->id_fakultas }}" method="POST">
                    @csrf
                    <div class="mb-3"><label class="form-label" for="modal-auth-name">Nama
                            Fakultas</label><input class="form-control" value="{{ $item->nama_fakultas }}"
                            type="text" autocomplete="on" id="modal-auth-name" name="nama_fakultas" />
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
