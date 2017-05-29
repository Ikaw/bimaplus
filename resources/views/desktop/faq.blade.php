@extends('desktop.layouts.main')

@section('title','Bima+')

@section('background')

    "images/desktop/d-faq.png"

@endsection

@section('navbar')

<div class="row navbar-desktop">
    <div class="col-2" align="left"><img src="../images/desktop/d-logo-bimaplus-hitam.png" width="70%"></div>
    <div class="col-8">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link font-black" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-black" href="/about">About bima+</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-black" href="/digital-assistant">Digital Assistant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-black" href="/digital-world">Digital World</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-black" href="/&co">&Co Creative Hub</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-black" href="/digital-chat&call">Digital Chat & Call</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-black" href="/faq"><img src="../images/desktop/d-menu-faq.png" height="17px"></a>
          </li>
        </ul>
    </div>
    <div class="col-2" align="right"><a href="http://tri.co.id"><img src="../images/desktop/d-3-black.png" width="40%"></a></div>
</div>


@endsection

@section('content')

<div class="faq">
  <div class="row">
    <div class="col-12 ">
      <h1 class="title">FAQ</h1>
      <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner faq-content" role="listbox">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-12">
                <h5>1. Apakah aplikasi bima+ itu?</h5>
                <p class="font-12">bima+ adalah pendamping gaya hidup digitalmu yang menyediakan dukungan, solusi, dan hiburan untuk menjadikan hidup lebih seru dan menyenangkan.</p>
                <p class="font-12">bima+ juga menjadi tempat berkumpulnya creativepreneur muda Indonesia melalui &Co. Sebagai pendamping gaya hidup digitalmu, bima+ juga menyajikan konten yang bisa dibagikan dan pengalaman multimedia yang berbeda. Siapa pun bisa merasakan kelebihan bima+, dan jika menggunakan Tri, segala transaksi di dalam akan menjadi lebih mudah.</p>

                <h5 class="font-14"><strong>2. Apakah bisa digunakan untuk semua nomor Tri?</strong></h5>
                <p class="font-12">Ya, semua nomor Tri baik itu prabayar, Indie+ maupun pascabayar bisa menggunakan aplikasi Bima+.</p>

                <h5 class="font-14"><strong>3. Fitur-fitur apa saja yang tersedia di Bima+?</strong></h5>
                <ol class="font-12" style="list-style-type:none !important;">
                    <li>• Shake your phone.</li>
                    <li>• Mengatur Pulsa Tri.</li>
                        <ul>
                            <li>Cek profil Tri kamu.</li>
                            <li>Isi pulsa menggunakan kode voucher atau e-banking.</li>
                            <li>Berbagi kuota dengan keluarga dan teman.</li>
                            <li>Membeli produk yang pernah dibeli.</li>
                        </ul>
                    <li>• Notifikasi.</li>
                    <li>• Digital World.</li>
                    <li>• Creative market (&Co).</li>
                    <li>• Chat & Call.</li>
                    <li>• Paket rekomendasi.</li>
                    <li>• Kasih tahu teman! (Facebook & Twitter)</li>
                </ol>
              </div>
            </div>


          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-12">
                <h5 class="font-14"><strong>4. Apakah saya masih bisa menggunakan aplikasi BimaTri?</strong></h5>
                <p class="font-12">Untuk sementara kamu bisa menggunakan kedua aplikasi secara bersamaan.</p>

                <h5 class="font-14"><strong>5. Apa yang saya dapatkan dengan fitur Shake your phone?</strong></h5>
                <p class="font-12">Kamu bisa mendapatkan berbagai penawaran menarik dari Tri hanya dengan menggoyangkan handphone kamu.</p>

                <h5 class="font-14"><strong>6. Bentuk Digital World apa saja yang tersedia di bima+?</strong></h5>
                <ol class="font-12" style="list-style-type:disc !important;">
                    • bima+ menampilkan beragam film dan games yang bisa langsung ditonton, unduh atau dimainkan dengan membayar pakai pulsa Tri.<br>
                    • Unduh beragam aplikasi tanpa bayar.<br>
                    • Kamu bsia mencari lagu favoritmu dan langsung mengaktifkannya sebagai RBT atau menyimpannya di handphone.
                </ol>

                <h5 class="font-14"><strong>7. Apa yang dimaksud dengan &Co Creative Hub?</strong></h5>
                <p class="font-12">Kalau kamu creativepreneur dan ingin menunjukkan karyamu kepada pengguna bima+, hubungi Tri dan kami akan membantumu membuat daftar dari kreasimu.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-12">
                <h5 class="font-14"><strong>8. Apakah saya bisa menggunakan fitur Digital Chat & Call ke semua teman-teman saya? </strong></h5>
                <p class="font-12">Fitur ini tersedia hanya untuk sesama pengguna aplikasi bima+, klik icon di sebelah kanan atas dan kamu akan mengetahui teman-teman kamu yang juga memiliki aplikasi bima+</p>

                <h5 class="font-14"><strong>9. Apakah yang di maksud dengan fitur “Kasih tahu teman!”?</strong></h5>
                <p class="font-12">Untuk setiap transaksi yang kamu lakukan di bima+, kamu bisa share ke Facebook dan Twitter kamu.</p>

                <h5 class="font-14"><strong>10. Apakah bima+ tersedia untuk semua smartphone?</strong></h5>
                <p class="font-12">Saat ini aplikasi bima+ hanya tersedia untuk smartphone berbasis Android</p>

                <h5 class="font-14"><strong>11. Bagaimana cara mendownload aplikasi bima+?</strong></h5>
                <p class="font-12">bima+ bisa di download langsung dari smartphone Android kamu melalui Google Play.</p>

                <h5 class="font-14"><strong>12. Di menu mana kita bisa mengecek Notifikasi?</strong></h5>
                <p class="font-12">Kamu bisa klik di icon sebelah kiri atas, lalu klik menu Notifikasi.</p>

                <h5 class="font-14"><strong>13. Apakah notifikasi-notifikasi tersebut bisa di hapus?</strong></h5>
                <p class="font-12">Ya. Kamu bisa menghapus notifikasi tersebut langsung dari aplikasi bima+ kamu dengan cara geser (swap) ke kiri.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-12">
                <h5 class="font-14"><strong>14. Apakah saya bisa membeli pulsa dan atau paket menggunakan kartu kredit di aplikasi bima+ tersebut?</strong></h5>
                <p class="font-12">Bisa. Saat ini kamu bisa membeli pulsa dan paket lainnya menggunakan kartu kredit dan kartu debit berlogo visa/master dan juga menggunakan internet banking.</p>

                <h5 class="font-14"><strong>15. Apakah semua kartu debit bisa digunakan untuk membeli pulsa dan atau paket?</strong></h5>
                <p class="font-12">Untuk saat ini tidak semua bank membuka layanan transaksi online menggunakan kartu debit, disarankan agar pelanggan Tri melakukan pengecekan ke bank masing-masing.</p>

                <h5 class="font-14"><strong>16. Kartu Debit dari bank mana saja yang sudah bisa ber-transaksi online?</strong></h5>
                <p class="font-12">Transaksi online di bima+ berlaku untuk Kartu Debit dari Bank Mandiri, BNI dan CIMB Niaga.</p>

                <h5 class="font-14"><strong>17. Bagaimana agar Kartu Debit saya bisa digunakan untuk transaksi online?</strong></h5>
                <p class="font-12">Tergantung dari kebijakan masing-masing Bank. Pelanggan Tri disarankan untuk menghubungi pihak Bank.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
                <div class="col-12">
                  <h5 class="font-14"><strong>18. Bagaimana cara bertransaksi online di bima+ menggunakan Kartu Debit berlogo Visa/Master?</strong></h5>
                  <p class="font-12">Setelah memilih paket/pulsa, kamu dapat memilih metode pembayaran "Credit/Debit Visa/Master", dan ikuti langkah selanjutnya.</p>

                  <h5 class="font-14"><strong>19. Bagaimana jika transaksi pembelian kuota atau pulsa menggunakan internet banking dinyatakan berhasil tapi kuota atau pulsa belum bertambah atau belum terkirim?</strong></h5>
                  <p class="font-12">Jika transaksi berhasil, kamu akan mendapatkan SMS notifikasi. Dan kamu bisa melakukan pengecekan di profil kartu Tri kamu melalui bima+ ataupun melalui *123#. Namun bila quota atau pulsa kamu belum bertambah atau belum terkirim, maka silakan menghubungi 3Care di 123 dari kartu Tri kamu.</p>

                  <h5 class="font-14"><strong>20. Apakah layanan bima+ bisa digunakan di luar negeri?</strong></h5>
                  <p class="font-12">Bisa, dan berlaku tarif gprs roaming. Untuk info lebih lengkapnya, silakan menghubungi 3Care di 123 dari kartu Tri kamu.</p>
                </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="fa fa-chevron-left fa-lg" aria-hidden="true" style="color:gray;"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="fa fa-chevron-right fa-lg" aria-hidden="true" style="color:gray;"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
    $('.carousel').carousel({
        interval: false
    });
</script>

@endsection

@section('footer')
<div class="row footer-desktop">
    <div class="col-2"><a href="https://play.google.com/store/apps/details?id=com.linkit.bimatri&hl=en&utm_source=microsite"><img src="../images/g-play.png" width="50%"></a></div>
</div>
@endsection
