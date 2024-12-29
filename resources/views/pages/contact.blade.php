@extends('layouts.app')

@section('title', 'Kontak - Logis')

@section('content')
    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('landing/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Kontak</h1>
            <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami. Kami siap membantu Anda!</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="current">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Akhir Judul Halaman -->

    <!-- Bagian Kontak -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sid!2sid!4v1676961268712!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Akhir Google Maps -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jalan Adam No. 108, New York, NY 535022</p>
                        </div>
                    </div>
                    <!-- Akhir Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <!-- Akhir Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@contoh.com</p>
                        </div>
                    </div>
                    <!-- Akhir Info Item -->
                </div>

                <div class="col-lg-8">
                    <form action="{{ url('/kirim-pesan') }}" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan Anda" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Memuat...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                                <button type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Akhir Form Kontak -->
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Kontak -->
@endsection
