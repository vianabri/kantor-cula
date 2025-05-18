<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistem Kantor</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Bidang Organisasi
    </div>

    <!-- Menu Organisasi -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrganisasi"
            aria-expanded="false" aria-controls="collapseOrganisasi">
            <i class="fas fa-users-cog"></i>
            <span>Organisasi & HRM</span>
        </a>
        <div id="collapseOrganisasi" class="collapse" aria-labelledby="headingOrganisasi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perencanaan & Kontrol</h6>
                <a class="collapse-item" href="{{ route('org.uraian') }}">Uraian Tugas Staf</a>
                <a class="collapse-item" href="{{ route('org.evaluasi') }}">Evaluasi Pelaksanaan</a>
                <a class="collapse-item" href="{{ route('org.laporan') }}">Laporan Kegiatan</a>
                <a class="collapse-item" href="{{ route('org.kalender') }}">Program & Kalender</a>

                <h6 class="collapse-header">Administrasi & Dokumen</h6>
                <a class="collapse-item" href="{{ route('org.surat') }}">Surat & Arsip</a>
                <a class="collapse-item" href="{{ route('org.notulensi') }}">Notulensi Rapat</a>
                <a class="collapse-item" href="{{ route('org.absensi') }}">Daftar Hadir</a>
                <a class="collapse-item" href="{{ route('org.anggaran') }}">Anggaran & Inventaris</a>

                <h6 class="collapse-header">Media & Komunikasi</h6>
                <a class="collapse-item" href="{{ route('org.media') }}">Pengelolaan Media</a>
                <a class="collapse-item" href="{{ route('org.promosi') }}">Desain Promosi</a>
                <a class="collapse-item" href="{{ route('org.publikasi') }}">Publikasi Anggota</a>

                <h6 class="collapse-header">Asuransi & Klaim</h6>
                <a class="collapse-item" href="{{ route('org.peserta') }}">Data Kepesertaan</a>
                <a class="collapse-item" href="{{ route('org.puskop') }}">Pengiriman Data</a>
                <a class="collapse-item" href="{{ route('org.klaim') }}">Sosialisasi & Klaim</a>

                <h6 class="collapse-header">Delegasi & Umum</h6>
                <a class="collapse-item" href="{{ route('org.delegasi') }}">Tugas Atasan</a>
                <a class="collapse-item" href="{{ route('org.rapat') }}">Rapat & Lokakarya</a>
                <a class="collapse-item" href="{{ route('org.survey') }}">Survey Kepuasan</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
<!-- End of Sidebar -->