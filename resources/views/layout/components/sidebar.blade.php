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
        data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
    </div><a class="navbar-brand" href="index.html">
      <div class="d-flex align-items-center py-3"><img class="me-2"
          src="{{ asset('falcon') }}/assets/img/icons/spot-illustrations/falcon.png" alt=""
          width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        <li class="nav-item"><!-- parent pages--><a class="nav-link" href="/">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                  class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
            </div>
          </a>
        </li>
        <li class="nav-item"><!-- label-->
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Menu</div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div><!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button">
          </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#kategori" role="button"
            data-bs-toggle="collapse" aria-expanded="false" aria-controls="kategori">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                  class="fas fa-folder-open"></span></span><span class="nav-link-text ps-1">Kategori</span>
            </div>
          </a>
          <ul class="nav collapse" id="kategori">
            <li class="nav-item"><a class="nav-link" href="/formSatu">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kategori Surat
                    1</span></div>
              </a><!-- more inner pages--></li>
            <li class="nav-item"><a class="nav-link" href="/formSatu">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kategori Surat
                    2</span></div>
              </a><!-- more inner pages--></li>
            <li class="nav-item"><a class="nav-link" href="/formSatu">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kategori surat
                    3</span></div>
              </a><!-- more inner pages--></li>
          </ul><!-- parent pages--><a class="nav-link" href="/rekap">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                  class="fas fa-table"></span></span><span class="nav-link-text ps-1">Rekapitulasi</span>
            </div>
          </a><!-- parent pages-->
        </li>
        <li class="nav-item">
          <div class="settings mb-3 position-absolute start-0 bottom-0">
            <a class=" nav-link" type="button" aria-expanded="false" href="/settings">
              <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                  <span class="fas fa-cog"></span>
                </span>
                <span class="nav-link-text ps-1">Settings</span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="/rekap">Tambah Kategori Surat</a>
              </li>
              <li>
                <a class="dropdown-item" href="/rekap">Tambah Tipe Surat</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
