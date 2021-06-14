<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark bg-dasar" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                    <a class="nav-link" href="<?= base_url('home/'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Beranda
                    </a>
                    <div class="sb-sidenav-menu-heading">Menu</div>

                    <a class="nav-link active" href="<?= base_url('banding/'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Dasbor
                    </a>
                    <!-- <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Template Surat Pengantar
                    </a> -->
                    <div class="sb-sidenav-menu-heading">Keluar</div>
                    <a class="nav-link tombol-logout" href="<?= base_url('auth/logout'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Keluar
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">&copy;PTA MANADO</div>

            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>