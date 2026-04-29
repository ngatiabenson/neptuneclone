<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Neptune Fiduciaries — Global Corporate Services')</title>
    <meta name="description" content="@yield('meta_description', 'Neptune Fiduciaries offers expert financial advisory and offshore management solutions tailored to your unique needs.')">

    <!-- Favicon -->
    <link rel="icon" href="/images/mark-svg.png" type="image/png">

    <!-- Google Fonts: Playfair Display + DM Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via CDN (replace with compiled build in production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy:   { DEFAULT: '#0d2b55', 700: '#0a2244', 800: '#071a36', 900: '#040f1f' },
                        ocean:  { DEFAULT: '#1a4a8a', 400: '#3a72c0', 500: '#1a5faa' },
                        gold:   { DEFAULT: '#c9a44a', light: '#e4c97a' },
                        slate:  '#f4f7fb',
                    },
                    fontFamily: {
                        display: ['"Playfair Display"', 'Georgia', 'serif'],
                        body:    ['"DM Sans"', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        /* Global base */
        body { font-family: 'DM Sans', system-ui, sans-serif; }
        h1, h2, h3, h4 { font-family: 'Playfair Display', Georgia, serif; }

        /* Dropdown hover reveal */
        .nav-group:hover .dropdown-panel { display: block; }

        /* Mobile menu transition */
        #mobile-menu { transform: translateX(100%); transition: transform .3s ease; }
        #mobile-menu.open { transform: translateX(0); }

        /* Smooth scrollbar */
        html { scroll-behavior: smooth; }
    </style>

    @stack('styles')
</head>
<body class="bg-white text-gray-800 {{ Route::currentRouteName() }}">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Page Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    @stack('scripts')
</body>
</html>