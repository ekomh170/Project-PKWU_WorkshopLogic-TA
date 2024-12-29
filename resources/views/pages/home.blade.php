@extends('layouts.app')

@section('title', 'Beranda - Workshop Logic')

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
                    <h2 data-aos="fade-up">Mitra Anda dalam Literasi Teknologi</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Workshop Logic membantu generasi muda menguasai keterampilan teknologi praktis untuk menghadapi
                        tantangan dunia digital.
                    </p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Bidang pelatihan yang Anda butuhkan">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
                        @foreach ([['count' => 232, 'label' => 'Peserta'], ['count' => 521, 'label' => 'Pelatihan'], ['count' => 1453, 'label' => 'Jam Pelatihan'], ['count' => 32, 'label' => 'Pengajar']] as $stat)
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
                @foreach ([['icon' => 'fa-graduation-cap', 'title' => 'Pelatihan Praktis', 'description' => 'Pelatihan berbasis praktik untuk membantu Anda menguasai teknologi secara langsung.'], ['icon' => 'fa-book', 'title' => 'Materi Komprehensif', 'description' => 'Kombinasi materi dasar hingga lanjutan sesuai kebutuhan dan minat.'], ['icon' => 'fa-chalkboard-teacher', 'title' => 'Pengajar Profesional', 'description' => 'Dibimbing oleh pengajar berpengalaman dalam dunia teknologi.']] as $service)
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
                    <h3>Tentang Workshop Logic</h3>
                    <p>Workshop Logic adalah solusi untuk membantu pelajar dan komunitas muda menguasai teknologi praktis
                        yang relevan dengan kebutuhan dunia kerja.</p>
                    <ul>
                        @foreach ([['icon' => 'bi-lightbulb', 'title' => 'Keterampilan Teknologi', 'description' => 'Fokus pada penguasaan teknologi seperti MS Office, pemrograman web, dan GitHub.'], ['icon' => 'bi-people', 'title' => 'Komunitas Kreatif', 'description' => 'Membangun jaringan dan komunitas dengan tujuan pengembangan keterampilan.'], ['icon' => 'bi-award', 'title' => 'Pengakuan Global', 'description' => 'Dukungan pencapaian untuk menambah nilai CV Anda.']] as $about)
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
                        <h3>Bergabunglah Bersama Kami</h3>
                        <p>Tingkatkan keterampilan teknologi Anda bersama Workshop Logic. Wujudkan masa depan digital yang
                            lebih cerah.</p>
                        <a class="cta-btn" href="#">Daftar Sekarang</a>
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
            <p>Pilih paket pelatihan sesuai dengan durasi dan kebutuhan belajar teknologi Anda.</p>
        </div>
        <div class="container">
            <div class="row gy-4">
                @foreach ([['title' => 'Paket 2 Jam', 'price' => 'Rp10.000', 'features' => ['Durasi 2 jam', 'Materi dasar', 'Akses online']], ['title' => 'Paket 3 Jam', 'price' => 'Rp15.000', 'features' => ['Durasi 3 jam', 'Materi dasar dan lanjutan', 'Diskusi interaktif']], ['title' => 'Paket 4 Jam', 'price' => 'Rp20.000', 'features' => ['Durasi 4 jam', 'Materi lengkap', 'Sertifikat pelatihan']]] as $plan)
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="pricing-item {{ $loop->iteration === 2 ? 'featured' : '' }}">
                            <h3>{{ $plan['title'] }}</h3>
                            <h4><sup>{{ $plan['price'] }}</sup><span> / sesi</span></h4>
                            <ul>
                                @foreach ($plan['features'] as $feature)
                                    <li><i class="bi bi-check"></i> <span>{{ $feature }}</span></li>
                                @endforeach
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
