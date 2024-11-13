@extends('layout.main')

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
               <h4>Selamat Datang di Dashboard</h4>
               <p>Ini adalah halaman utama aplikasi Anda.</p>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4">
                     <div class="card bg-primary text-white">
                        <div class="card-body">
                           <h5 class="card-title">Pengguna Aktif</h5>
                           <p class="card-text">Total pengguna aktif: 120</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card bg-success text-white">
                        <div class="card-body">
                           <h5 class="card-title">Penjualan Hari Ini</h5>
                           <p class="card-text">Rp 5.000.000</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card bg-warning text-white">
                        <div class="card-body">
                           <h5 class="card-title">Pelanggan Baru</h5>
                           <p class="card-text">Total pelanggan baru: 15</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mt-4">
                  <h5>Ringkasan Aktivitas</h5>
                  <p>Berikut adalah beberapa statistik terbaru:</p>
                  <!-- Tambahkan grafik atau statistik lainnya di sini -->
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
