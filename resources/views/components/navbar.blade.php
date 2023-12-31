<nav class="navigation">
  <div class="brand-nav-navigation">
    <img src="{{asset('assets/logo.png')}}" alt="" srcset="">
    <h1 class="nav-text my-auto py-auto">SIKEBAS</h1>
  </div>
  <div class="nav-burger-button z-5">
      <button onclick="menu()" class="burger"></button>
    </div>
  <div class="dropdowns-navigation">
    <button class="button nav-link active-navigation" onclick="window.location='{{route('admin.dashboard')}}'">Dashboard</button>
    <div class="dropdown-navigation">
      <button class="button">
        Master
      </button>
      <div class="dropdown-menu-navigation">
        <button><a href="{{route('admin.dataSampah')}}">Data Sampah</a></button>
        <button><a href="{{route('admin.kategoriSampah')}}">Data Kategori Sampah</a></button>
        <button><a href="{{route('admin.daftarNasabah')}}">Data Nasabah</a></button>
        <button><a href="{{route('admin.daftarPengurus')}}">Data Pengurus</a></button>
        <button><a href="{{route('admin.daftarPelapak')}}">Data Pelapak</a></button>
      </div>
    </div>
    <div class="dropdown-navigation">
      <button class="button">
        Transaksi
      </button>
      <div class="dropdown-menu-navigation">
        <button><a href="{{route('admin.setoranNasabah')}}">Setoran Sampah Nasabah</a></button>
        <button><a href="{{route('admin.tabunganNasabah')}}">Tabungan Nasabah</a></button>
        <button><a href="{{route('admin.transaksiPenjualanNasabah')}}">Transaksi Penjualan Sampah</a></button>
      </div>
    </div>
    @if(Auth::user()->jabatan != "Pengurus")
    <div class="dropdown-navigation">
      <button class="button">
        Laporan
      </button>
      <div class="dropdown-menu-navigation">
        <button class="my-2"><a href="{{route('admin.laporanNasabah')}}">Laporan Rekap Total Sampah Penimbangan Nasabah</a></button>
        <button><a href="{{route('admin.laporanArusKasNasabah')}}">Laporan Arus Kas Nasabah</a></button>
        <button><a href="{{route('admin.laporanPembayaranKeLapak')}}">Laporan Pembayaran ke Lapak</a></button>
        <button class="my-2"><a href="{{route('admin.laporanDLHK')}}">Laporan Keuangan Bank Sampah untuk DLHK</a></button>
        <button><a href="{{route('admin.laporanInternal')}}">Laporan Keuangan Internal</a></button>
      </div>
    </div>
  </div>
  @endif
  <x-form action="{{route('logout')}}" class="nav-item my-auto py-auto justify-self-end" style="margin-left: 55rem;">
    <button class="nav-link" style="color: #9da9a5;" onmouseover="this.style.color='red';" onmouseout="this.style.color='#9da9a5';">Logout</button>
  </x-form>
  </div>
</nav>