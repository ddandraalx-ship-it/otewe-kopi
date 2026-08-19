<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Otewe — Ngopi . Makan . Gelato')</title>
    <meta name="description" content="Otewe — Ngopi, makan, dan gelato di Taman Apsari Surabaya. Live band session.">

    {{-- Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#0F0D0B',
                        paper: '#FAFAFA',
                        mocha: {
                            300: '#D4A373',
                            400: '#C08452',
                            500: '#A87C51',
                            600: '#8C5E35',
                        }
                    },
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        body: ['"Inter"', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-[#0F0D0B] text-slate-100 font-sans antialiased selection:bg-mocha-400 selection:text-black min-h-screen relative overflow-x-hidden">

    {{-- Ambient Radial Glow Gradients --}}
    <div class="fixed top-[15%] left-[50%] -translate-x-1/2 w-[900px] max-w-full h-[600px] bg-mocha-500/10 rounded-full blur-[220px] pointer-events-none z-0"></div>

    <div class="grain-overlay" aria-hidden="true"></div>

    @include('partials.navbar')

    <main class="relative z-10">
        @yield('content')
    </main>

    {{-- Floating Glass WhatsApp Button --}}
    <a
        href="https://wa.me/{{ $cafe['phone_wa'] ?? '6281326428553' }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20dan%20reservasi%20tempat"
        target="_blank" rel="noopener"
        class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 rounded-full border border-mocha-400/40 bg-zinc-900/90 backdrop-blur-xl px-4 py-2.5 sm:px-5 sm:py-3 text-xs sm:text-sm font-bold text-white shadow-[0_10px_30px_rgba(0,0,0,0.8)] hover:bg-mocha-400 hover:text-zinc-950 transition-all duration-300 group"
    >
        <span class="relative flex h-2.5 w-2.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-mocha-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-mocha-400"></span>
        </span>
        <span class="hidden sm:inline">Info & Reservasi Tempat</span>
        <span class="sm:hidden">Info WA</span>
    </a>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
