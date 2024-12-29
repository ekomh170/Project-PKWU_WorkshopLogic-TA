@extends('layouts.app')

@section('title', 'Beranda - Logis')

@section('content')
    @php
        // Pilih fungsi asset berdasarkan environment
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Bagian Hero -->
    <section id="hero" class="hero section dark-background">
        <img src="{{ $assetFunction('landing/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Mitra Pengiriman Cepat Anda</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Menangani kebutuhan pengiriman dengan cepat dan terpercaya. Solusi tepat untuk segala kebutuhan
                        logistik Anda.
                    </p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Kode Pos atau Kota Anda. Contoh: Jakarta">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
                        @foreach ([['count' => 232, 'label' => 'Klien'], ['count' => 521, 'label' => 'Proyek'], ['count' => 1453, 'label' => 'Dukungan'], ['count' => 32, 'label' => 'Pekerja']] as $stat)
                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $stat['count'] }}"
                                        data-purecounter-duration="0" class="purecounter">{{ $stat['count'] }}</span>
                                    <p>{{ $stat['label'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ $assetFunction('landing/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Hero -->

    <!-- Bagian Layanan Unggulan -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4">
                @foreach ([['icon' => 'fa-cart-flatbed', 'title' => 'Layanan Cepat', 'description' => 'Pengiriman cepat dan aman, menjamin kepuasan Anda.'], ['icon' => 'fa-truck', 'title' => 'Transportasi Modern', 'description' => 'Kendaraan terkini untuk pengiriman barang Anda dengan aman.'], ['icon' => 'fa-truck-ramp-box', 'title' => 'Manajemen Kargo', 'description' => 'Penanganan kargo yang efisien untuk memastikan kelancaran logistik.']] as $service)
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up"
                        data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="icon flex-shrink-0"><i class="fa-solid {{ $service['icon'] }}"></i></div>
                        <div>
                            <h4 class="title">{{ $service['title'] }}</h4>
                            <p class="description">{{ $service['description'] }}</p>
                            <a href="#" class="readmore stretched-link"><span>Pelajari Lebih Lanjut</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Layanan Unggulan -->

    <!-- Bagian Tentang Kami -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ $assetFunction('landing/img/about.jpg') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang Kami</h3>
                    <p>Kami menyediakan layanan logistik terbaik untuk kebutuhan Anda. Kepercayaan Anda adalah prioritas
                        kami.</p>
                    <ul>
                        @foreach ([['icon' => 'bi-diagram-3', 'title' => 'Layanan Terpercaya', 'description' => 'Dukungan penuh untuk kebutuhan logistik Anda.'], ['icon' => 'bi-fullscreen-exit', 'title' => 'Pengelolaan Efisien', 'description' => 'Manajemen pengiriman yang efisien dan tepat waktu.'], ['icon' => 'bi-broadcast', 'title' => 'Jangkauan Luas', 'description' => 'Kami hadir di berbagai wilayah untuk memenuhi kebutuhan Anda.']] as $about)
                            <li>
                                <i class="bi {{ $about['icon'] }}"></i>
                                <div>
                                    <h5>{{ $about['title'] }}</h5>
                                    <p>{{ $about['description'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Tentang Kami -->

    <!-- Bagian Ajakan -->
    <section id="call-to-action" class="call-to-action section dark-background">
        <img src="{{ $assetFunction('landing/img/cta-bg.jpg') }}" alt="">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Hubungi Kami Sekarang</h3>
                        <p>Kami siap membantu Anda kapan saja. Lakukan pengiriman barang dengan mitra terpercaya.</p>
                        <a class="cta-btn" href="#">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Ajakan -->

    <!-- Bagian Harga -->
    <section id="pricing" class="pricing section">
        <div class="container section-title" data-aos="fade-up">
            <span>Harga</span>
            <h2>Harga</h2>
            <p>Pilih paket yang sesuai dengan kebutuhan logistik Anda.</p>
        </div>
        <div class="container">
            <div class="row gy-4">
                @foreach ([['title' => 'Paket Gratis', 'price' => 'Rp0', 'features' => ['Layanan dasar', 'Pengiriman lokal', 'Dukungan pelanggan'], 'notIncluded' => ['Layanan premium', 'Jaminan waktu']], ['title' => 'Paket Bisnis', 'price' => 'Rp29.000', 'features' => ['Semua fitur paket gratis', 'Dukungan premium', 'Jaminan waktu'], 'notIncluded' => []], ['title' => 'Paket Profesional', 'price' => 'Rp49.000', 'features' => ['Semua fitur paket bisnis', 'Layanan eksklusif', 'Konsultasi logistik'], 'notIncluded' => []]] as $plan)
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="pricing-item {{ $loop->iteration === 2 ? 'featured' : '' }}">
                            <h3>{{ $plan['title'] }}</h3>
                            <h4><sup>{{ $plan['price'] }}</sup><span> / bulan</span></h4>
                            <ul>
                                @foreach ($plan['features'] as $feature)
                                    <li><i class="bi bi-check"></i> <span>{{ $feature }}</span></li>
                                @endforeach
                                @if (!empty($plan['notIncluded']))
                                    @foreach ($plan['notIncluded'] as $notIncluded)
                                        <li class="na"><i class="bi bi-x"></i> <span>{{ $notIncluded }}</span></li>
                                    @endforeach
                                @endif
                            </ul>
                            <a href="#" class="buy-btn">Pilih Paket</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Harga -->
@endsection
