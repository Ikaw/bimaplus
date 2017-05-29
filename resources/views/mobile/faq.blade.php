@extends('mobile.layouts.main')

@section('title')

    {{ $menu->title }}

@endsection

@section('background')

    "../images/{{ $menu->picture }}"

@endsection

@section('background-grayscale')

    "../images/home-gray.png"

@endsection

@section('navbar')

<div class="row ">
    <div class="col-6 ">
        <div class="navbar1">
            <a href="/mobile/home"><img src="../images/btn-back-arrow-gray.png" width="30%" align="left"></a>
        </div>
    </div>
    <div class="col-6">
        <div class="navbar2">
            <a href="#"><img src="../images/btn-menu-gray.png" width="30%" align="right" id="navbar-mobile"></a>
        </div>
    </div>
</div>

<div class="row floating" id="navbar-content-mobile" style="display:none">
    <div class="col-12">
        <div class="row">
            <div class="col-12 close" ><a href="#" id="close"><img src="../images/btn-close.png" width="16%" align="right"></a></div>
        </div>
        <div class="row menu-mobile">
            <div class="col-12">
                <ul>
                    <li><a href="/mobile/home" class="font-white">Home</a></li>
                    <hr class="white">
                    <li><a href="/mobile/about" class="font-white">About bima+</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-assistant" class="font-white">Digital Assistant</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-world" class="font-white">Digital World</a></li>
                    <hr class="white">
                    <li><a href="/mobile/&co" class="font-white">&Co Creative Hub</a></li>
                    <hr class="white">
                    <li><a href="/mobile/digital-chat&call" class="font-white">Digital Chat & Call</a></li>
                    <hr class="white">
                    <li><a href="/mobile/faq" class="font-white"><img src="../images/menu-faq.png" height="20px"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<div class="faq">
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="fa fa-chevron-left fa-lg" aria-hidden="true" style="color:gray;"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="fa fa-chevron-right fa-lg" aria-hidden="true" style="color:gray;"></span>
        <span class="sr-only">Next</span>
    </a>
    <div id="carouselExampleIndicators" class="carousel slide ">
        <div class="carousel-inner" role="listbox">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            </ol>
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>1. Apakah aplikasi bima+ itu?</strong></p>
                        <p class="font-12">bima+ adalah pendamping gaya hidup digitalmu yang menyediakan dukungan, solusi, dan hiburan untuk menjadikan hidup lebih seru dan menyenangkan.</p>
                        <p class="font-12">bima+ juga menjadi tempat berkumpulnya creativepreneur muda Indonesia melalui &Co. Sebagai pendamping gaya hidup digitalmu, bima+ juga menyajikan konten yang bisa dibagikan dan pengalaman multimedia yang berbeda. Siapa pun bisa merasakan kelebihan bima+, dan jika menggunakan Tri, segala transaksi di dalam akan menjadi lebih mudah.</p>

                        <p class="font-14"><strong>2. Apakah bisa digunakan untuk semua nomor Tri?</strong></p>
                        <p class="font-12">Ya, semua nomor Tri baik itu prabayar, Indie+ maupun pascabayar bisa menggunakan aplikasi Bima+.</p>
                    </div>
                </div>

            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>3. Fitur-fitur apa saja yang tersedia di Bima+?</strong></p>
                        <ol class="font-12" style="list-style-type:none !important;">
                            <li>•	Shake your phone.</li>
                            <li>•	Mengatur Pulsa Tri.</li>
                                <ul>
                                    <li>o	Cek profil Tri kamu.</li>
                                    <li>o	Isi pulsa menggunakan kode voucher atau e-banking.</li>
                                    <li>o	Berbagi kuota dengan keluarga dan teman.</li>
                                    <li>o	Membeli produk yang pernah dibeli.</li>
                                </ul>
                            <li>•	Notifikasi.</li>
                            <li>•	Digital World.</li>
                            <li>•	Creative market (&Co).</li>
                            <li>•	Chat & Call.</li>
                            <li>•	Paket rekomendasi.</li>
                            <li>•	Kasih tahu teman! (Facebook & Twitter)</li>
                        </ol>

                    </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>4. Apakah saya masih bisa menggunakan aplikasi BimaTri?</strong></p>
                        <p class="font-12">Untuk sementara kamu bisa menggunakan kedua aplikasi secara bersamaan.</p>

                        <p class="font-14"><strong>5. Apa yang saya dapatkan dengan fitur Shake your phone?</strong></p>
                        <p class="font-12">Kamu bisa mendapatkan berbagai penawaran menarik dari Tri hanya dengan menggoyangkan handphone kamu.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>6. Bentuk Digital World apa saja yang tersedia di bima+?</strong></p>
                        <ol class="font-12" style="list-style-type:disc !important;">
                            <li>•	bima+ menampilkan beragam film dan games yang bisa langsung ditonton, unduh atau dimainkan dengan membayar pakai pulsa Tri.</li>
                            <li>•	Unduh beragam aplikasi tanpa bayar.</li>
                            <li>•	Kamu bsia mencari lagu favoritmu dan langsung mengaktifkannya sebagai RBT atau menyimpannya di handphone.</li>
                        </ol>

                        <p class="font-14"><strong>7. Apa yang dimaksud dengan &Co Creative Hub?</strong></p>
                        <p class="font-12">Kalau kamu creativepreneur dan ingin menunjukkan karyamu kepada pengguna bima+, hubungi Tri dan kami akan membantumu membuat daftar dari kreasimu.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>8. Apakah saya bisa menggunakan fitur Digital Chat & Call ke semua teman-teman saya? </strong></p>
                        <p class="font-12">Fitur ini tersedia hanya untuk sesama pengguna aplikasi bima+, klik icon di sebelah kanan atas dan kamu akan mengetahui teman-teman kamu yang juga memiliki aplikasi bima+</p>

                        <p class="font-14"><strong>9. Apakah yang di maksud dengan fitur “Kasih tahu teman!”?</strong></p>
                        <p class="font-12">Untuk setiap transaksi yang kamu lakukan di bima+, kamu bisa share ke Facebook dan Twitter kamu.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>10. Apakah bima+ tersedia untuk semua smartphone?</strong></p>
                        <p class="font-12">Saat ini aplikasi bima+ hanya tersedia untuk smartphone berbasis Android</p>

                        <p class="font-14"><strong>11. Bagaimana cara mendownload aplikasi bima+?</strong></p>
                        <p class="font-12">bima+ bisa di download langsung dari smartphone Android kamu melalui Google Play.</p>

                        <p class="font-14"><strong>12. Di menu mana kita bisa mengecek Notifikasi?</strong></p>
                        <p class="font-12">Kamu bisa klik di icon sebelah kiri atas, lalu klik menu Notifikasi.</p>

                    </div>
                </div>
            </div>

             <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">
                        <p class="font-14"><strong>13. Apakah notifikasi-notifikasi tersebut bisa di hapus?</strong></p>
                        <p class="font-12">Ya. Kamu bisa menghapus notifikasi tersebut langsung dari aplikasi bima+ kamu dengan cara geser (swap) ke kiri.</p>

                        <p class="font-14"><strong>14. Apakah saya bisa membeli pulsa dan atau paket menggunakan kartu kredit di aplikasi bima+ tersebut?</strong></p>
                        <p class="font-12">Bisa. Saat ini kamu bisa membeli pulsa dan paket lainnya menggunakan kartu kredit dan kartu debit berlogo visa/master dan juga menggunakan internet banking.</p>


                    </div>
                </div>
            </div>

            <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">

                        <p class="font-14"><strong>15. Apakah semua kartu debit bisa digunakan untuk membeli pulsa dan atau paket?</strong></p>
                        <p class="font-12">Untuk saat ini tidak semua bank membuka layanan transaksi online menggunakan kartu debit, disarankan agar pelanggan Tri melakukan pengecekan ke bank masing-masing.</p>

                        <p class="font-14"><strong>16. Kartu Debit dari bank mana saja yang sudah bisa ber-transaksi online?</strong></p>
                        <p class="font-12">Transaksi online di bima+ berlaku untuk Kartu Debit dari Bank Mandiri, BNI dan CIMB Niaga.</p>

                        <p class="font-14"><strong>17. Bagaimana agar Kartu Debit saya bisa digunakan untuk transaksi online?</strong></p>
                        <p class="font-12">Tergantung dari kebijakan masing-masing Bank. Pelanggan Tri disarankan untuk menghubungi pihak Bank.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">

                        <p class="font-14"><strong>18. Bagaimana cara bertransaksi online di bima+ menggunakan Kartu Debit berlogo Visa/Master?</strong></p>
                        <p class="font-12">Setelah memilih paket/pulsa, kamu dapat memilih metode pembayaran "Credit/Debit Visa/Master", dan ikuti langkah selanjutnya.</p>

                        <p class="font-14"><strong>19. Bagaimana jika transaksi pembelian kuota atau pulsa menggunakan internet banking dinyatakan berhasil tapi kuota atau pulsa belum bertambah atau belum terkirim?</strong></p>
                        <p class="font-12">Jika transaksi berhasil, kamu akan mendapatkan SMS notifikasi. Dan kamu bisa melakukan pengecekan di profil kartu Tri kamu melalui bima+ ataupun melalui *123#. Namun bila quota atau pulsa kamu belum bertambah atau belum terkirim, maka silakan menghubungi 3Care di 123 dari kartu Tri kamu.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="row">
                    <div class="col-12">

                        <p class="font-14"><strong>20. Apakah layanan bima+ bisa digunakan di luar negeri?</strong></p>
                        <p class="font-12">Bisa, dan berlaku tarif gprs roaming. Untuk info lebih lengkapnya, silakan menghubungi 3Care di 123 dari kartu Tri kamu.</p>

                    </div>
                </div>
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



