<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ $assetFunction('landing/img/logo_workshop.png') }}" alt="Logo"
                style="height: 40px; width:40px; margin-right: 10px;">
            <h1 class="sitename">Workshop Logic</h1>
        </a>

        @include('includes.navbar')
        <a class="btn-getstarted" href="{{ url('https://www.instagram.com/workshop_logic') }}"
            target="_blank">Instagram</a>
        {{-- <a class="btn-getstarted" href="{{ url('https://www.linkedin.com/in/eko-haryono-290/') }}">Dev 1</a>
        <a class="btn-getstarted" href="{{ url('https://www.instagram.com/dambelsbru_/') }}">Dev 2</a> --}}
    </div>
</header>
