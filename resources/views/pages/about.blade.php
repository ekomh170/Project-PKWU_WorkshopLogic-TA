@extends('layouts.app')

@section('title', 'Tentang Kami - Logis')

@section('content')
    @php
        // Pilih fungsi asset berdasarkan environment
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ $assetFunction('landing/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Tentang Kami</h1>
            <p>Menyediakan layanan logistik cepat dan handal yang memenuhi kebutuhan Anda.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Akhir Judul Halaman -->

    <!-- Bagian Tentang Kami -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ $assetFunction('landing/img/about.jpg') }}" class="img-fluid" alt="Tentang Kami">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang Kami</h3>
                    <p>
                        Kami adalah mitra terpercaya Anda dalam memberikan solusi logistik yang cepat, aman, dan efisien.
                        Dengan pengalaman yang kaya, kami memastikan setiap pengiriman berjalan lancar dan tepat waktu.
                    </p>
                    <ul>
                        @foreach ([['icon' => 'bi-diagram-3', 'title' => 'Layanan yang Komprehensif', 'description' => 'Kami menyediakan berbagai solusi logistik untuk memenuhi kebutuhan Anda.'], ['icon' => 'bi-fullscreen-exit', 'title' => 'Inovasi dan Teknologi', 'description' => 'Menggunakan teknologi terkini untuk memastikan kecepatan dan keakuratan layanan kami.'], ['icon' => 'bi-broadcast', 'title' => 'Dukungan Pelanggan 24/7', 'description' => 'Tim kami siap membantu Anda kapan pun Anda butuhkan.']] as $item)
                            <li>
                                <i class="bi {{ $item['icon'] }}"></i>
                                <div>
                                    <h5>{{ $item['title'] }}</h5>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Tentang Kami -->

    <!-- Bagian Statistik -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                @foreach ([['count' => 232, 'label' => 'Klien'], ['count' => 521, 'label' => 'Proyek'], ['count' => 1453, 'label' => 'Jam Dukungan'], ['count' => 32, 'label' => 'Pekerja']] as $stat)
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $stat['count'] }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Statistik -->

    <!-- Bagian Tim -->
    <section id="team" class="team section">
        <div class="container section-title" data-aos="fade-up">
            <span>Tim Kami</span>
            <h2>Tim Kami</h2>
            <p>Orang-orang hebat di balik kesuksesan kami.</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach ([['image' => 'team/team-1.jpg', 'name' => 'Walter White', 'role' => 'Pengembangan Web', 'description' => 'Menciptakan solusi digital yang efisien dan inovatif.'], ['image' => 'team/team-2.jpg', 'name' => 'Sarah Jhinson', 'role' => 'Pemasaran', 'description' => 'Memastikan layanan kami dikenal luas dan dihargai.'], ['image' => 'team/team-3.jpg', 'name' => 'William Anderson', 'role' => 'Konten', 'description' => 'Menyampaikan pesan kami dengan cara yang menarik dan informatif.']] as $member)
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="member">
                            <img src="{{ $assetFunction('landing/img/' . $member['image']) }}" class="img-fluid"
                                alt="{{ $member['name'] }}">
                            <div class="member-content">
                                <h4>{{ $member['name'] }}</h4>
                                <span>{{ $member['role'] }}</span>
                                <p>{{ $member['description'] }}</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Tim -->

    <!-- Bagian Testimonial -->
    <section id="testimonials" class="testimonials section dark-background">
        <img src="{{ $assetFunction('landing/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="Latar Testimonial">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    @foreach ([['image' => 'testimonials/testimonials-1.jpg', 'name' => 'Saul Goodman', 'role' => 'CEO & Founder', 'content' => 'Layanan ini sangat membantu bisnis saya menjadi lebih efisien.'], ['image' => 'testimonials/testimonials-2.jpg', 'name' => 'Sarah Wilsson', 'role' => 'Desainer', 'content' => 'Saya sangat puas dengan kecepatan dan ketepatan waktu pengiriman.']] as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ $assetFunction('landing/img/' . $testimonial['image']) }}"
                                    class="testimonial-img" alt="{{ $testimonial['name'] }}">
                                <h3>{{ $testimonial['name'] }}</h3>
                                <h4>{{ $testimonial['role'] }}</h4>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    {{ $testimonial['content'] }}
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Testimonial -->
@endsection
