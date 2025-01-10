@extends('layouts.app')

@section('title', 'Kontak - Logis')

@section('content')
    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('landing/img/header.jpg') }});">
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

            <!-- Notifikasi Perbaikan -->
            <div class="alert alert-warning text-center" role="alert" data-aos="fade-up" data-aos-delay="200">
                <strong>Fitur kontak sedang dalam masa perbaikan.</strong> Jika Anda memiliki pertanyaan, silakan hubungi
                salah satu kami melalui tautan WhatsApp berikut:
                <ul class="list-unstyled mt-3">
                    <li><a href="https://wa.me/6285772586141" target="_blank" class="text-decoration-none">Nur Fadillah</a>
                    </li>
                    <li><a href="https://wa.me/6285157634427" target="_blank" class="text-decoration-none">Muhammad
                            Andhika
                            Thata</a>
                    </li>
                </ul>
            </div>

            <!-- Akhir Notifikasi Perbaikan -->

            <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126874.73138497677!2d106.7819913039207!3d-6.415196070782874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1735494012167!5m2!1sid!2sid"
                    style="border:0; width: 100%; height: 270px;" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Akhir Google Maps -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota
                                Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640
                            </p>
                        </div>
                    </div>
                    <!-- Akhir Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>021-786.3191</p>
                        </div>
                    </div>
                    <!-- Akhir Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>ekomh13@gmail.com</p>
                        </div>
                    </div>
                    <!-- Akhir Info Item -->
                </div>

                <div class="col-lg-8">
                    <form action="{{ url('/kirim-pesan') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                            </div>
                    
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                            </div>
                    
                            <div class="col-md-12">
                                <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
                            </div>
                    
                            <div class="col-md-12">
                                <textarea name="message" class="form-control" rows="6" placeholder="Pesan Anda" required></textarea>
                            </div>
                    
                            <div class="col-md-12 text-center">
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
