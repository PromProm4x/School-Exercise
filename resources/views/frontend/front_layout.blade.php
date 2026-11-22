@include('frontend.partials.head')
<body>
    <!-- Top Nav with Logo -->
    <div class="bg-dark py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="index.html" class="navbar-brand">
                <img src="{{asset('assets/frontend')}}/assets/news1.png" alt="Logo" style="height: 40px; filter: brightness(0) invert(1);">
            </a>
            <div class="text-white small d-none d-md-block">Tuesday, June 02, 2026</div>
        </div>
    </div>

    <!-- Red Navbar -->
@include('frontend.partials.top_navbar')

    <!-- Main Content -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
@include('frontend.partials.footer')

    <!-- Bootstrap 5 JS Bundle -->
@include('frontend.partials.scripts')
</body>
</html>
