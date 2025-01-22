<footer id="footer" class="footer dark-background" style="background-color: #0a0e27; padding: 40px 0; color: #ffffff;">
    <div class="container footer-top" style="max-width: 1200px; margin: auto;">
        <div class="row gy-4" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <!-- Logo dan Tentang -->
            <div class="col-lg-5 col-md-12 footer-about" style="flex: 1;">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center"
                    style="text-decoration: none; color: white;">
                    <img src="{{ $assetFunction('landing/img/logo_workshop.png') }}" alt="Logo"
                        style="height: 40px; width: 40px; margin-right: 10px;">
                    <span style="font-size: 20px; font-weight: bold;">Workshop Logic</span>
                </a>
                <p style="margin-top: 10px;">Pintar Berlogika</p>
                <div class="social-links d-flex mt-4" style="display: flex; gap: 10px;">
                    <a href="https://wa.me/6285157634427" style="color: white; font-size: 20px;"><i
                            class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/workshop_logic?igsh=MXg0Zm5mYWczM29saw=="
                        style="color: white; font-size: 20px;"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.tiktok.com/@workshop_logic?_t=ZS-8t0Vm6QtZWS&_r=1"
                        style="color: white; font-size: 20px;"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>

            <!-- Link Berguna -->
            <div class="col-lg-2 col-6 footer-links" style="flex: 1;">
                <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 15px;">Useful Links</h4>
                <ul style="list-style: none; padding: 0; line-height: 2;">
                    <li><a href="{{ url('/') }}" style="text-decoration: none; color: white;">Beranda</a></li>
                    <li><a href="{{ url('/about') }}" style="text-decoration: none; color: white;">Tentang Kami</a></li>
                    <li><a href="{{ url('/product') }}" style="text-decoration: none; color: white;">Produk</a></li>
                    <li><a href="{{ url('/contact') }}" style="text-decoration: none; color: white;">Kontak</a></li>
                    <li><a href="{{ url('/workshops/register') }}" style="text-decoration: none; color: white;">Daftar
                            Workshop</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-3 col-md-12 footer-contact" style="flex: 1;">
                <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 15px;">Contact Us</h4>
                <p style="line-height: 1.8;">
                    Jalan Lenteng Agung Raya No.20 RT.5/RW.1<br>
                    Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa,<br>
                    Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640<br>
                    <strong>Email:</strong> ekomh13@gmail.com<br>
                </p>
            </div>
        </div>
    </div>

    <!-- Kredit -->
    <div class="container mt-4 text-center" style="margin-top: 30px;">
        <p class="credit" style="font-size: 12px; color: #ffffff; opacity: 0.8; margin: 0;">Workshop Logic - STTNF
            Teknik Informatika 2024</p>
    </div>
</footer>
