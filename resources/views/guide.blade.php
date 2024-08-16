@extends('user_sheet.layouts')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')

<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Guide</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/user_sheet')}}">Home</a></li>
          <li class="breadcrumb-item active">Guide</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

  <div class="container">
      <div class="card-container">

          <div class="card">
            <div class="card-body">
              <h1 class="card-title">Tata Cara Melakukan Caring Pelanggan</h1>
              <div class="pt-1">
                <p class="card-text">1.Selamat Pagi/Siang/Sore Bapak/Ibu.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">2.Perkenalkan saya dari Telkom,Benar ini dengan penanggung jawab dari mitra Bapak/Ibu?</p>
              </div>
              <div class="pt-1">
                <p class="card-text">3.Sebelumnya saya ingin mengucapkan terimakasih kepada Bapak/Ibu karena telah menggunakan layanan indibiz.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">4.Saya juga izin bertanya kepada Bapak/Ibu mengenai layanan serta jaringan dari indibiz apakah pelayanan yang kami berikan sudah baik dan sudah sesuai dengan harapan yang Bapak/Ibu miliki?</p>
              </div>
              <div class="pt-1">
                <p class="card-text">5.Jika terdapat keluhan yang Bapak/Ibu miliki bisa langsung sampaikan saja ke pada kami atau bisa langsung datang ke kantor terdekat atau bisa juga menghubungi nomor 1-500-250.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">6.Saya ingin mengingatkan mengenai biaya tagihan layanan internet dengan jumlah sebesar, untuk pembayaran tagihan sudah dapat dilakukan ya Bapak/Ibu.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">7.Pembayaran dilakukan dari tanggal 5-20 setiap bulannya.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">8.Jika pembayaran melewati dari tanggal tersebut maka akan dikenakan denda ya Bapak/Ibu.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">9.Terima kasih atas waktunya Bapak/Ibu.</p>
              </div>
              <div class="pt-1">
                <p class="card-text">10.Selamat Pagi/Siang/Sore Bapak/Ibu.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About The System</h5>
              <h6 class="card-text"><Strong>Function:</Strong></h6>
              <div class="pt-1">
                <p class="card-text">Memudahkan petugas unit PayColl untuk melakukan caring terhadap pelanggan untuk mengingatkan piutang pelanggan.</p>
              </div>
              <div class="pt-3">
                <h6 class="card-text"><Strong>Category:</Strong></h6>
              </div>
              <div class="pt-3">
                <p class="card-text">1.Lunas/Paid = Daftar pelanggan yang telah membayar tagihan berjalan.</p>
              </div>
              <div class="pt-0">
                <p class="card-text">2.Good Habbit = Daftar pelanggan yang memiliki riwayat pembayaran tepat waktu.</p>
              </div>
              <div class="pt-0">
                <p class="card-text">3.< 6 Bulan = Daftar pelanggan yang baru menggunakan layanan Indibiz kurang dari 6 bulan.</p>
              </div>
              <div class="pt-0">
                <p class="card-text">4.Bad Habbit = Daftar pelanggan yang memiliki riwayat pembayaran yang jarang tepat waktu.</p>
              </div>
              <div class="pt-3">
                <h6 class="card-text"><Strong>Note:</Strong></h6>
              </div>
              <div class="pt-0">
                <p class="card-text">Untuk Caring ke-n, prioritaskan pelanggan yang keterangan nomor tidak aktif, RNA, dan reject.</p>
              </div>
            </div>
        </div>
      </div>


    <!-- F.A.Q Group 1 -->
    <style>
      .card img {
        width: 100%;
        height: auto;
      }
    </style>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Organizational Structure</h5>
          <img src="{{ asset('build/assets/jabatan.jpg') }}" alt="jabatan">
        </div>
      </div>
    </div>
    <!-- End F.A.Q Group 1 -->

    </div>


  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
@endsection

