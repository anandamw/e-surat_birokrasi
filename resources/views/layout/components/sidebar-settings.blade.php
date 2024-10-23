<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
  <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="d-flex align-items-center">
    <div class="toggle-icon-wrapper">
      <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
        data-bs-placement="left" title="Toggle Navigation">
        <span class="navbar-toggle-icon">
          <span class="toggle-line"></span>
        </span>
      </button>
    </div>
    <a class="navbar-brand" href="#">
      <div class="d-flex align-items-center py-3">
        <img class="me-2" src="{{ asset('falcon') }}/assets/img/icons/spot-illustrations/falcon.png" alt=""
          width="40" />
        <span class="font-sans-serif text-primary">falcon</span>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        <li class="nav-item">
          <!-- parent pages-->
          <a class="nav-link" href="/settings">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon">
                <span class="fas fa-chart-pie"></span>
              </span>
              <span class="nav-link-text ps-1">Dashboard</span>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <!-- label-->
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Menu</div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>
          <!-- parent pages-->
          <a class="nav-link" href="/settings/kategori">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon">
                <span class="fas fa-clipboard-list"></span>
              </span>
              <span class="nav-link-text ps-1">Kategori</span>
            </div>
          </a>
          <a class="nav-link" href="/settings/tipe">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon">
                <span class="fas fa-indent"></span>
              </span>
              <span class="nav-link-text ps-1">Tipe Surat</span>
            </div>
          </a>
          <!-- parent pages-->
          <a class="nav-link" href="/settings/pengabsahan">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon">
                <span class="fas fa-file-signature"></span>
              </span>
              <span class="nav-link-text ps-1">Pengabsahan</span>
            </div>
          </a>
          <a class="nav-link" href="/settings/fakultas">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon">
                <span class="fas fa-file-signature"></span>
              </span>
              <span class="nav-link-text ps-1">Fakultas</span>
            </div>
          </a>
          <!-- parent pages-->
        </li>
        <li class="nav-item">
          <div class="settings mb-3 position-absolute start-0 bottom-0">
            <a class=" nav-link" type="button" href="/dashboard">
              <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                  <span class="fas fa-arrow-left"></span>
                </span>
                <span class="nav-link-text ps-1">Kembali</span>
              </div>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
