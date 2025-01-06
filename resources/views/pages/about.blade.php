@extends('layouts.app')

@section('title', 'Tentang Kami - Logis')

@section('content')
    @php
        // Pilih fungsi asset berdasarkan environment
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ $assetFunction('landing/img/header.jpg') }});">
        <div class="container position-relative">
            <h1>Tentang Kami</h1>
            <p>Workshop Logic hadir untuk meningkatkan literasi dan keterampilan teknologi generasi muda.</p>
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
                    <img src="{{ $assetFunction('img/Pemateri.jpg') }}" class="img-fluid"
                        style="width: 100%; max-width: 800px; height: 480px; object-fit: cover;" alt="Tentang Kami">
                    <a href="https://youtu.be/EoBUbyZcGe4" class="glightbox pulsating-play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang Kami</h3>
                    <p>
                        Workshop Logic adalah platform pelatihan teknologi yang bertujuan untuk meningkatkan literasi
                        digital
                        dan keterampilan teknologi, khususnya di kalangan pelajar SMP, SMK, mahasiswa, serta komunitas anak
                        muda
                        seperti Karang Taruna. Kami hadir sebagai solusi atas minimnya akses pelatihan teknologi praktis di
                        usia
                        sekolah, dengan menyediakan materi pelatihan mulai dari dasar hingga lanjutan.
                    </p>
                    <ul>
                        @foreach ([['icon' => 'bi-diagram-3', 'title' => 'Misi Kami', 'description' => 'Memberdayakan generasi muda untuk menghadapi tantangan era digital melalui pelatihan berbasis praktik.'], ['icon' => 'bi-fullscreen-exit', 'title' => 'Pelatihan Fleksibel', 'description' => 'Solusi pelatihan fleksibel yang dapat diakses secara online maupun offline.'], ['icon' => 'bi-broadcast', 'title' => 'Peningkatan Karier', 'description' => 'Membantu peserta menambah keterampilan yang relevan untuk dunia kerja.']] as $about)
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

    <!-- Bagian Statistik -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                @foreach ([['count' => 20, 'label' => 'Peserta'], ['count' => 10, 'label' => 'Pelatihan'], ['count' => 6, 'label' => 'Paket Kelas'], ['count' => 6, 'label' => 'Pengajar']] as $stat)
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
            <p>Orang-orang hebat di balik kesuksesan Workshop Logic.</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach ([
            ['image' => 'team/team-1.jpg', 'name' => 'Nur Fadillah', 'role' => 'Hustler', 'description' => 'Meningkatkan koneksi dan peluang untuk Workshop Logic melalui strategi yang efektif.'],
            ['image' => 'team/team-1.jpg', 'name' => 'Muhammad Andhika Thata', 'role' => 'Hustler', 'description' => 'Mengelola peluang bisnis dan memperluas cakupan kemitraan kami.'],
            ['image' => 'team/eko_hacker.JPG', 'name' => 'Eko Muchamad Haryono', 'role' => 'Hacker', 'description' => 'Mengembangkan solusi teknologi yang inovatif dan efisien.'],
            ['image' => 'team/team-2.jpg', 'name' => 'Fatiya Labibah', 'role' => 'Hacker', 'description' => 'Menyediakan solusi teknologi mutakhir untuk kebutuhan pelatihan.'],
            ['image' => 'team/team-3.jpg', 'name' => 'Muhammad Zen Alby', 'role' => 'Hipster', 'description' => 'Mendesain pengalaman visual yang menarik dan kreatif untuk peserta pelatihan.'],
            ['image' => 'team/team-2.jpg', 'name' => 'Nurmila', 'role' => 'Hipster', 'description' => 'Mengembangkan branding kreatif dan mendukung identitas visual Workshop Logic.'],
        ] as $member)
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
        <img src="{{ $assetFunction('landing/img/header.jpg') }}" class="testimonials-bg" alt="Latar Testimonial">
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
                    @foreach ([['image' => 'testimonials/testimonials-1.jpg', 'name' => 'Saul Goodman', 'role' => 'CEO & Founder', 'content' => 'Pelatihan ini sangat membantu saya untuk meningkatkan keterampilan.'], ['image' => 'testimonials/testimonials-2.jpg', 'name' => 'Sarah Wilsson', 'role' => 'Desainer', 'content' => 'Sangat puas dengan materi yang mudah dipahami dan aplikatif.']] as $testimonial)
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
