@extends('layouts.app')

@section('title', 'Daftar - Workshop Logic')

@section('content')
    @php
        // Pilih fungsi asset berdasarkan environment
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ $assetFunction('landing/img/header.jpg') }});">
        <div class="container position-relative">
            <h1>Daftar Workshop</h1>
            <p>Bergabunglah dengan pelatihan kami untuk meningkatkan keterampilan teknologi Anda.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Daftar Workshop</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Akhir Judul Halaman -->

    <!-- Form Pendaftaran -->
    <section id="workshop-register" class="workshop-register section">
        <div class="container section-title" data-aos="fade-up">
            <span>Daftar Workshop</span>
            <h2>Formulir Pendaftaran</h2>
            <p>Isi formulir di bawah ini untuk mendaftar pada workshop yang Anda pilih.</p>
        </div>
        <div class="container">
            <form action="{{ route('workshops.store') }}" method="POST" class="php-email-form" data-aos="fade-up"
                data-aos-delay="100">
                @csrf
                <div class="row gy-4">
                    <!-- Nama Lengkap -->
                    <div class="col-md-6">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Masukkan nama lengkap Anda" required>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Masukkan email Anda" required>
                    </div>
                    <!-- Nomor Telepon -->
                    <div class="col-md-6">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            placeholder="Masukkan nomor telepon Anda" required>
                    </div>
                    <!-- Pilih Workshop -->
                    <div class="col-md-6">
                        <label for="workshop">Pilih Workshop</label>
                        <select name="workshop" id="workshop" class="form-select" required>
                            <option value="">Pilih Workshop</option>
                            <option value="dasar-pemrograman-web">Dasar Pemrograman Web (3 Jam - Rp15.000)</option>
                            <option value="pemrograman-lanjutan">Pemrograman Lanjutan (4 Jam - Rp20.000)</option>
                            <option value="manajemen-kode-github">Manajemen Kode dengan GitHub (3 Jam - Rp15.000)</option>
                            <option value="admin-dasar-office-word">Administrasi Dasar: Microsoft Word (3 Jam - Rp15.000)
                            </option>
                            <option value="admin-dasar-office-excel">Administrasi Dasar: Microsoft Excel (3 Jam - Rp15.000)
                            </option>
                            <option value="admin-dasar-office-ppt">Administrasi Dasar: Microsoft PowerPoint (3 Jam -
                                Rp15.000)</option>
                        </select>
                    </div>
                    <!-- Pesan -->
                    <div class="col-md-12">
                        <label for="message">Pesan (Opsional)</label>
                        <textarea name="message" id="message" rows="5" class="form-control"
                            placeholder="Tulis pesan atau catatan tambahan di sini"></textarea>
                    </div>
                    <!-- Submit -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Form Pendaftaran -->
@endsection
