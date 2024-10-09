@extends('layout.falcon.template')
@section('content')
                    <div class="row mb-3">
            <div class="col">
              <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                  <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2" src="{{ asset('falcon') }}/assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                    <div>
                      <h6 class="text-primary fs-10 mb-0">Welcome to </h6>
                      <h4 class="text-primary fw-bold mb-0">E-Surat <span class="text-info fw-medium">BIROKRASI</span></h4>
                    </div><img class="ms-n4 d-md-none d-lg-block" src="{{ asset('falcon') }}/assets/img/illustrations/crm-line-chart.png" alt="" width="150" />
                  </div>
                  <div class="col-md-auto p-3">
                    <a class="btn btn-primary me-1 mb-1" href="#kategori" role="button"
                  data-bs-toggle="collapse" aria-expanded="false" aria-controls="kategori">Ajukan Surat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3 g-3">
            <div class="col-xxl-3">
              <div class="card">
                <div class="card-header d-flex flex-between-center py-2 border-bottom">
                  <h6 class="mb-0">Most Leads</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-most-leads" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-most-leads"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="row align-items-center">
                    <div class="col-md-5 col-xxl-12 mb-xxl-1">
                      <div class="position-relative">
                        <div class="echart-most-leads my-2" data-echart-responsive="true"></div>
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                          <p class="fs-10 mb-0 text-400 font-sans-serif fw-medium">Total</p>
                          <p class="fs-6 mb-0 font-sans-serif fw-medium mt-n2">15.6k</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-md-7">
                      <hr class="mx-nx1 mb-0 d-md-none d-xxl-block" />
                      <div class="d-flex flex-between-center border-bottom py-3 pt-md-0 pt-xxl-3">
                        <div class="d-flex"><img class="me-2" src="{{ asset('falcon') }}/assets/img/crm/email.svg" width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Email </h6>
                        </div>
                        <p class="fs-10 text-500 mb-0 fw-semi-bold">5200 vs 1052</p>
                        <h6 class="text-700 mb-0">54%</h6>
                      </div>
                      <div class="d-flex flex-between-center border-bottom py-3">
                        <div class="d-flex"><img class="me-2" src="{{ asset('falcon') }}/assets/img/crm/social.svg" width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Social </h6>
                        </div>
                        <p class="fs-10 text-500 mb-0 fw-semi-bold">5623 vs 4929</p>
                        <h6 class="text-700 mb-0">27%</h6>
                      </div>
                      <div class="d-flex flex-between-center border-bottom py-3">
                        <div class="d-flex"><img class="me-2" src="{{ asset('falcon') }}/assets/img/crm/call.svg" width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Call </h6>
                        </div>
                        <p class="fs-10 text-500 mb-0 fw-semi-bold">2535 vs 1486</p>
                        <h6 class="text-700 mb-0">4%</h6>
                      </div>
                      <div class="d-flex flex-between-center border-bottom py-3 border-bottom-0 pb-0">
                        <div class="d-flex"><img class="me-2" src="{{ asset('falcon') }}/assets/img/crm/other.svg" width="16" height="16" alt="..." />
                          <h6 class="text-700 mb-0">Other </h6>
                        </div>
                        <p class="fs-10 text-500 mb-0 fw-semi-bold">256 vs 189</p>
                        <h6 class="text-700 mb-0">13%</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">View all<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
              </div>
            </div>
          </div>
@endsection
