@extends('layouts.app')

@section('title', 'Daftar - Workshop Logic')

@section('content')
    @php
        // Pilih fungsi asset berdasarkan environment
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Judul Halaman -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ $assetFunction('landing/img/latar2.jpg') }});">
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
            <!-- Menampilkan pesan error dari JSON -->
            @if (session('error'))
                <div class="alert alert-danger">
                    <strong>Kesalahan:</strong> {{ session('error') }}
                </div>
            @endif

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
                            <option value="Pelatihan Google Docs">Pelatihan Google Docs</option>
                            <option value="Workshop Basis Data">Workshop Basis Data</option>
                            <option value="Pengenalan Github">Pengenalan Github</option>
                        </select>
                    </div>
                    <!-- Status & Kabupaten/Kota -->
                    <div class="col-md-12">
                        <label for="status_and_location">Status dan Lokasi</label>
                        <div class="input-group">
                            <select name="status" id="status" class="form-select" required>
                                <option value="">Pilih Status</option>
                                <option value="Pelajar">Pelajar</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Umum">Umum</option>
                            </select>
                            <input type="text" name="location" id="location" class="form-control"
                                placeholder="Masukkan Kabupaten/Kota" required>
                        </div>
                        <small class="text-muted">Contoh: Pelajar - Kabupaten Sleman</small>
                    </div>
                    <!-- Pesan -->
                    <div class="col-md-12">
                        <label for="message">Pesan (Opsional)</label>
                        <textarea name="message" id="message" rows="5" class="form-control">
Halo, saya [Nama Anda],
Saya tertarik untuk mengikuti [Nama Workshop] karena [alasan Anda].
Saya berharap dapat belajar lebih banyak tentang [topik workshop].
Terima kasih.
                        </textarea>
                        <small class="text-muted">*Silakan edit template pesan di atas sesuai kebutuhan Anda.</small>
                    </div>
                    <!-- Jenis Workshop (Tersembunyi) -->
                    <input type="hidden" name="jenis_workshop" value="Online">

                    <!-- Harga (Tersembunyi) -->
                    <input type="hidden" name="harga" value="15000">

                    <!-- Konfirmasi Pembayaran (Tersembunyi) -->
                    <input type="hidden" name="konfirmasi_pembayaran" value="Belum">

                    <!-- Submit -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Form Pendaftaran -->

    <!-- Pop-Up Modal -->
    @if (session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Pendaftaran Berhasil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ session('success') }}
                        @if (session('wa_link'))
                            <p class="mt-3">Bergabunglah ke grup WhatsApp melalui tautan di bawah ini:</p>
                            <a href="{{ session('wa_link') }}" class="btn btn-success mt-2" target="_blank">
                                Grup WhatsApp
                            </a>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Menunggu halaman sepenuhnya dimuat sebelum menampilkan modal
            document.addEventListener('DOMContentLoaded', function() {
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            });
        </script>
    @endif
@endsection
