@extends('layouts.app')

@section('title', 'Produk - Workshop Logic')

@section('content')
    @php
        // Pilih fungsi asset berdasarkan environment
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade" 
         style="background-image: url({{ $assetFunction('landing/img/latar2.jpg') }});">
        <div class="container position-relative">
            <h1>Produk</h1>
            <p>Pilihan tepat untuk meningkatkan keterampilan digital dengan pelatihan teknologi praktis dan terjangkau.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Produk</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4">
                @foreach ([
                    ['icon' => 'fa-solid fa-database', 'title' => 'Workshop Basis Data', 'description' => 'Pelajari cara mengelola data dengan efisien untuk mendukung pengambilan keputusan strategis.'],
                    ['icon' => 'fa-solid fa-file-word', 'title' => 'Pelatihan Google Docs', 'description' => 'Optimalkan kolaborasi tim dengan memanfaatkan fitur-fitur terbaik Google Docs.'],
                    ['icon' => 'fa-brands fa-github', 'title' => 'Pengenalan GitHub', 'description' => 'Kuasi dasar-dasar manajemen versi kode dan kolaborasi tim menggunakan GitHub.']
                ] as $service)
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="icon flex-shrink-0"><i class="{{ $service['icon'] }}"></i></div>
                        <div>
                            <h4 class="title">{{ $service['title'] }}</h4>
                            <p class="description">{{ $service['description'] }}</p>
                            <a href="{{ url('/workshops/register') }}" class="readmore stretched-link"><span>Daftar Workshop</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End service Item -->
                @endforeach
            </div>
        </div>
    </section><!-- /Featured Services Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Produk Jasa Kami</h2>
            <p>Kami memberikan pelatihan teknologi praktis yang membantu Anda bersiap menghadapi dunia digital modern.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @foreach ([
                    ['image' => 'basis data.jpg', 'title' => 'Workshop Basis Data', 'description' => 'Belajar dari nol sampai paham soal database, mulai dari cara bikin tabel, ngatur data biar rapi, sampai bikin query yang keren buat ambil data penting. Workshop ini pas banget buat yang pengen kerja lebih efisien dan terorganisir.'],
                    ['image' => 'googledocs.jpeg', 'title' => 'Pelatihan Google Docs', 'description' => 'Pelajari semua trik seru di Google Docs! Mulai dari bikin dokumen yang rapi, nambahin tabel atau gambar, sampai kolaborasi bareng tim secara real-time. Setelah ikut ini, kerja bareng tim pasti lebih gampang dan efisien.'],
                    ['image' => 'github.webp', 'title' => 'Pengenalan GitHub', 'description' => 'Pahami cara kerja GitHub tanpa ribet! Kamu bakal diajarin bikin repository, atur versi kode, sampai belajar cara kerja tim pake pull request. Semua dijelasin biar kamu makin pede bikin proyek bareng temen atau tim.']
                ] as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ $assetFunction('landing/img/' . $service['image']) }}" alt="" class="img-fluid">
                            </div>
                            <h3>{{ $service['title'] }}</h3>
                            <p class="description" style="text-align: justify;">{{ $service['description'] }}</p>
                        </div>
                    </div><!-- End Card Item -->
                @endforeach
            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Unique Value Proposition</h2>
            <p>Alasan mengapa Workshop Logic menjadi pilihan terbaik untuk pelatihan teknologi Anda.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 align-items-center features-item">
                @foreach ([
    [
        'image' => 'praktis.jpg',
        'title' => 'Praktis dan Efisien',
        'description' => 'Setiap materi dirancang untuk langsung dapat diterapkan dalam pekerjaan atau proyek nyata. Anda akan mendapatkan:
        <ul>
            <li><i class="bi bi-check-circle"></i> Panduan langkah demi langkah yang mudah diikuti.</li>
            <li><i class="bi bi-check-circle"></i> Contoh kasus yang relevan dengan dunia kerja.</li>
            <li><i class="bi bi-check-circle"></i> Materi latihan yang aplikatif.</li>
        </ul>'
    ],
    [
        'image' => 'materi.jpg',
        'title' => 'Materi Dasar hingga Lanjutan',
'description' => 'Pelatihan ini dirancang untuk semua level, mulai dari pemula sampai yang sudah berpengalaman. Keunggulan yang bisa Anda dapatkan di antaranya:
<ul>
    <li><i class="bi bi-check-circle"></i> Materi dasar yang mudah dipahami untuk membangun fondasi yang kuat.</li>
    <li><i class="bi bi-check-circle"></i> Materi lanjutan yang sesuai dengan kebutuhan dunia kampus atau kerja.</li>
    <li><i class="bi bi-check-circle"></i> Contoh kasus nyata yang membantu memahami aplikasi langsung dari materi.</li>
    <li><i class="bi bi-check-circle"></i> Latihan praktis dan evaluasi untuk memastikan Anda benar-benar paham.</li>
</ul>'
],
    [
        'image' => 'terjangkau.jpg',
        'title' => 'Terjangkau dan Fleksibel',
        'description' => 'Harga pelatihan yang kompetitif dengan opsi akses online maupun offline sesuai kebutuhan Anda. Beberapa keuntungan:
        <ul>
            <li><i class="bi bi-check-circle"></i> Biaya yang ramah di kantong tanpa mengorbankan kualitas.</li>
            <li><i class="bi bi-check-circle"></i> Jadwal fleksibel yang bisa disesuaikan dengan waktu Anda.</li>
            <li><i class="bi bi-check-circle"></i> Akses ulang ke materi pelatihan setelah sesi selesai.</li>
        </ul>'
    ],
    [
        'image' => 'dukungan.jpg',
        'title' => 'Dukungan Penuh',
        'description' => 'Kami menyediakan dukungan setelah pelatihan untuk memastikan Anda tetap berkembang. Manfaatnya:
        <ul>
            <li><i class="bi bi-check-circle"></i> Konsultasi lanjutan setelah pelatihan selesai.</li>
            <li><i class="bi bi-check-circle"></i> Akses ke komunitas belajar untuk diskusi dan berbagi pengalaman.</li>
            <li><i class="bi bi-check-circle"></i> Bantuan untuk menghadapi tantangan dalam proyek Anda.</li>
        </ul>'
    ]
] as $feature)
    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="{{ $loop->iteration * 100 }}">
        <img src="{{ $assetFunction('landing/img/' . $feature['image']) }}" class="img-fluid" alt="">
    </div>
    <div class="col-md-7" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
        <h3>{{ $feature['title'] }}</h3>
        <p class="fst-italic">{!! $feature['description'] !!}</p>
    </div>
@endforeach
            </div>
        </div>
        <style>
            .features-item img {
                width: 650px; 
                height: 350px; 
                object-fit: cover; 
                border-radius: 10px; 
                display: block; 
                margin: 0 auto;
            }
        </style>
    </section><!-- /Features Section -->
@endsection
