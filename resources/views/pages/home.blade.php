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
                        @foreach ([['count' => 20, 'label' => 'Peserta'], ['count' => 10, 'label' => 'Pelatihan'], ['count' => 6, 'label' => 'Paket Workshop'], ['count' => 5, 'label' => 'Pengajar']] as $stat)
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
                    <img src="{{ $assetFunction('landing/img/workshop9 (2).png') }}" class="img-fluid mb-3 mb-lg-0"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Hero -->
    <!-- Bagian Problem -->
    <section id="problem" class="section" style="text-align: justify;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold;">Problem</h2>
            <p>Latar belakang ide bisnis Workshop Logic muncul dari kebutuhan akan pelatihan teknologi yang praktis dan
                terjangkau bagi generasi muda. Banyak generasi muda yang menghadapi kesulitan dalam mengakses pelatihan
                yang relevan dengan dunia kerja karena biaya tinggi atau keterbatasan akses.</p>
            <p>Workshop Logic bertujuan untuk menjawab tantangan ini dengan menyediakan pelatihan teknologi berbasis
                praktik yang efektif dan efisien, sehingga membantu peserta untuk menguasai keterampilan yang relevan dan
                meningkatkan daya saing mereka di pasar kerja.</p>
        </div>
    </section>
    <!-- Akhir Bagian Problem -->
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

    <!-- Bagian Materi Workshop -->
    <section id="workshop-material" class="section">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold;">Materi Workshop</h2>
            <div class="row gy-4">
                @foreach ([['title' => 'Dasar Pemrograman Web', 'description' => 'Belajar HTML, CSS, dan struktur halaman web dasar.', 'icon' => 'fa-brands fa-html5'], ['title' => 'Dasar-Dasar Microsoft Word', 'description' => 'Format dokumen, tabel, dan desain yang efisien.', 'icon' => 'fa-solid fa-file-word'], ['title' => 'Pengenalan GitHub', 'description' => 'Mengelola repository dan kolaborasi tim.', 'icon' => 'fa-brands fa-github']] as $material)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="card p-4 shadow w-100 d-flex align-items-center"
                            style="backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.8); border-radius: 20px; border: none;">
                            <div class="icon mb-3" style="color: #004080; font-size: 2rem; margin-right: 15px;">
                                <i class="{{ $material['icon'] }}"></i>
                            </div>
                            <div>
                                <h5 class="title">{{ $material['title'] }}</h5>
                                <p class="description">{{ $material['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Materi Workshop -->

    <!-- Bagian Tentang Kami -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <!-- Kolom Gambar dan Video -->
                <div class="col-lg-6 col-md-6 col-sm-12 position-relative align-self-start order-lg-last order-first"
                    data-aos="fade-up" data-aos-delay="200">
                    <div style="max-width: 500px; margin: 0 auto; position: relative;">
                        <img src="{{ $assetFunction('landing/img/Pemateri.jpg') }}"
                            style="max-width: 100%; height: auto; border-radius: 8px; object-fit: cover;"
                            alt="Pemateri Workshop">
                        <a href="https://youtu.be/EoBUbyZcGe4" class="glightbox pulsating-play-btn"
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                        font-size: 2rem; color: #fff; z-index: 10; background: rgba(0, 0, 0, 0.6);
                        border-radius: 50%; padding: 10px; transition: transform 0.3s ease-in-out;">
                        </a>
                    </div>
                </div>

                <!-- Kolom Konten -->
                <div class="col-lg-6 col-md-6 col-sm-12 content order-last order-lg-first" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3 style="margin-bottom: 1.5rem;">Tentang Workshop Logic</h3>
                    <p>Workshop Logic adalah solusi untuk membantu pelajar dan komunitas muda menguasai teknologi praktis
                        yang relevan dengan kebutuhan dunia kerja.</p>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach ([['icon' => 'bi-lightbulb', 'title' => 'Keterampilan Teknologi', 'description' => 'Fokus pada penguasaan teknologi seperti MS Office, pemrograman web, dan GitHub.'], ['icon' => 'bi-people', 'title' => 'Komunitas Kreatif', 'description' => 'Membangun jaringan dan komunitas dengan tujuan pengembangan keterampilan.'], ['icon' => 'bi-award', 'title' => 'Pengakuan Global', 'description' => 'Dukungan pencapaian untuk menambah nilai CV Anda.']] as $about)
                            <li style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <i class="bi {{ $about['icon'] }}"
                                    style="font-size: 1.5rem; color: #007bff; margin-right: 1rem;"></i>
                                <div>
                                    <h5 style="margin-bottom: 0.5rem;">{{ $about['title'] }}</h5>
                                    <p style="margin: 0;">{{ $about['description'] }}</p>
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
        <img src="{{ $assetFunction('landing/img/world-dotted-map.png') }}" alt="">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Bergabunglah Bersama Kami</h3>
                        <p>Tingkatkan keterampilan teknologi Anda bersama Workshop Logic. Wujudkan masa depan digital yang
                            lebih cerah.</p>
                        <a class="cta-btn" href="{{ url('/workshops/register') }}">Daftar Sekarang</a>
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

    <!-- Bagian Artikel Kewirausahaan 2024 -->
    <section id="entrepreneurship-article" class="section" style="text-align: justify;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold;">Matakuliah Kewirausahaan Nurul Fikri 2024</h2>
            <p>
                Matakuliah Kewirausahaan di Nurul Fikri yang diampu oleh Dosen Wulan Fitriani, S.Kom, menjadi salah satu
                mata
                kuliah yang sangat berharga dalam membangun jiwa kewirausahaan di kalangan mahasiswa. Dengan fokus pada
                konsep
                dasar hingga praktik nyata, mahasiswa diajak untuk mengenal dan mengembangkan kemampuan dalam dunia bisnis.
            </p>
            <p>
                Dalam perkuliahan ini, mahasiswa diberi tantangan untuk merancang ide bisnis yang inovatif, menyusun rencana
                bisnis yang strategis, serta mempraktikkan langkah-langkah pemasaran. Pendekatan ini memberikan pengalaman
                yang
                mendalam tentang bagaimana mengatasi tantangan kewirausahaan di dunia nyata.
            </p>
            <p>
                Tahun 2024, Nurul Fikri berkomitmen untuk terus meningkatkan kualitas pendidikan dengan pendekatan
                kewirausahaan
                yang interaktif. Harapan besarnya adalah memberikan mahasiswa bekal yang cukup untuk menjadi wirausahawan
                sukses dan berkontribusi pada perekonomian Indonesia.
            </p>
        </div>
    </section>
    <!-- Akhir Bagian Artikel Kewirausahaan 2024-->

    <!-- Bagian Artikel Kewirausahaan -->
    <section id="entrepreneurship-article" class="section" style="text-align: justify;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold;">Pengalaman Belajar Kewirausahaan di Nurul Fikri</h2>
            <p>
                Sebagai mahasiswa semester 3 di Nurul Fikri, matakuliah Kewirausahaan yang diampu oleh Dosen Wulan Fitriani,
                S.Kom, telah
                memberikan banyak pelajaran berharga. Dalam kelas ini, kami tidak hanya mempelajari teori-teori tentang
                kewirausahaan,
                tetapi juga menerapkan pengetahuan tersebut dalam proyek bisnis nyata.
            </p>
            <p>
                Salah satu pengalaman yang paling berkesan adalah ketika kami diminta untuk membuat rencana bisnis dari
                awal.
                Proses ini mencakup riset pasar, identifikasi masalah pelanggan, hingga menyusun strategi pemasaran yang
                efektif.
                Setiap langkah memberikan wawasan baru tentang bagaimana bisnis dijalankan di dunia nyata.
            </p>
            <p>
                Selain itu, kami juga diajarkan untuk mengelola keuangan, bekerja dalam tim, dan mempresentasikan ide bisnis
                kami kepada dosen dan rekan mahasiswa lainnya. Kegiatan ini melatih kemampuan komunikasi, kepemimpinan, dan
                problem-solving yang sangat penting dalam dunia kerja.
            </p>
            <p>
                Matakuliah ini juga membantu kami untuk melihat peluang bisnis yang ada di sekitar, serta memberikan
                keberanian
                untuk mengambil risiko yang terukur. Dengan bimbingan dan pengalaman praktik yang didapat, saya merasa lebih
                siap untuk menghadapi tantangan dunia kerja dan, mungkin, membangun usaha sendiri di masa depan.
            </p>
        </div>
    </section>
    <!-- Akhir Bagian Artikel Kewirausahaan -->

@endsection
