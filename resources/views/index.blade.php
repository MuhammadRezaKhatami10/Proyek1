@extends('layouts.master')

@section('page_title', 'Freshshop | Home')
@section('content')
    <!-- ABOUT -->
    <div class="about-background">
        <div class="about-diskon">
            <div class="update">
                <div class=></div>
                <p class="update-diskon">Diskon Sampai 30%</p><br>
                <p class="update-terbaru">Produk Terbaru</p>
            </div>
        </div>
        <div class="about-produk">
            <div class="circle">
                <div id="slideshow" >
                    <div>
                        <img src="img/drawer 1.png">
                    </div>
                    <div>
                        <img src="img/chair.png">
                    </div>
                    <div>
                        <img src="img/table.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HIGHLIGHT -->
    <div class="highlight-background">
        <div class="judul">
            <p>UMKM MINGGU INI</p><br><br>
        </div>
        <div class="underline">
        </div>
        <div class="highlight-section1">
            <div class="sayuran">
                <img src="img/sayur.png">
                <div class="sayuran__overlay">
                    <div class=""></div>
                </div>
            </div>
            <div class="mebel">
                <a href="mebel">
                    <img src="img/mebel.png">
                </a>
            </div>
        </div>
        <div class="highlight-section2">
            <div class="sembako">
                <img src="img/sembako.png">
                <a href="toko"></a>
            </div>
            <div class="streetfood">
                <img src="img/streetfood.png">
            </div>
        </div>
    </div>
@endsection
