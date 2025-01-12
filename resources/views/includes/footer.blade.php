<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <img src="{{ $assetFunction('landing/img/logo_workshop.png') }}" alt="Logo" style="height: 40px; width:40px; margin-right: 10px;">
                    <span class="">Workshop Logic</span>
                </a>
                <p>Pintar Berlogika</p>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/workshop_logic?igsh=MXg0Zm5mYWczM29saw=="><i class="bi bi-instagram"></i></a>
                    <a href="https://www.tiktok.com/@workshop_logic?_t=ZS-8t0Vm6QtZWS&_r=1"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="{{ url('/product') }}">Produk</a></li>
                    <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Kontak</a></li>
                    <li><a href="{{ url('/workshops/register') }}">Daftar Workshop</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>Kampus Nurul Fikri<br>Jakarta Selatan<br>Indonesia</p>
                <p><strong>Phone:</strong> +1 5589 55488 55<br><strong>Email:</strong> info@example.com</p>
            </div>
        </div>
    </div>
</footer>
