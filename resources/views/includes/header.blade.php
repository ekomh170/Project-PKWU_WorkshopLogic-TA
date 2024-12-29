<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Logis</h1>
        </a>

        @include('includes.navbar')

        <a class="btn-getstarted" href="{{ url('/get-a-quote') }}">Get a Quote</a>
    </div>
</header>
