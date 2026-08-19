<section id="top" class="relative min-h-[85vh] sm:min-h-[90vh] flex items-center px-4 sm:px-6 pt-24 sm:pt-32 pb-12 sm:pb-20 overflow-hidden">

    {{-- Static Watermark Logo Anchored Inside Hero Section --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[280px] sm:w-[400px] md:w-[480px] max-w-[85vw] pointer-events-none z-0 opacity-[0.035]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 450 120" class="w-full h-auto">
            <g transform="translate(10, 10)">
                <circle cx="50" cy="50" r="46" fill="#FFFFFF" />
                <circle cx="50" cy="50" r="42" fill="#0F0D0B" />
                <path d="M 32 26 C 24 40 32 60 48 76 C 58 86 72 82 72 74 C 72 60 56 46 42 32 C 36 26 32 26 32 26 Z" fill="#FFFFFF" />
                <path d="M 68 74 C 76 60 68 40 52 24 C 42 14 28 18 28 26 C 28 40 44 54 58 68 C 64 74 68 74 68 74 Z" fill="#FFFFFF" />
                <path d="M 38 28 C 30 42 42 62 62 76 C 52 70 42 56 38 28 Z" fill="#0F0D0B" />
            </g>
            <text x="120" y="74" font-family="'Inter', sans-serif" font-size="64" font-weight="900" fill="#FFFFFF" letter-spacing="-3">Otewe</text>
            <text x="122" y="98" font-family="'Inter', sans-serif" font-size="13" font-weight="800" fill="#FFFFFF" letter-spacing="4">NGOPI · MAKAN · GELATO</text>
        </svg>
    </div>

    {{-- Background Aesthetic Coffee Shop Bar Photo Overlay (`cafe-bg.png`) --}}
    <div class="absolute inset-0 z-0 opacity-25 pointer-events-none">
        <img src="/images/cafe-bg.png" alt="Otewe Coffee Shop Atmosphere" class="w-full h-full object-cover filter brightness-75 contrast-110">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0F0D0B] via-[#0F0D0B]/60 to-[#0F0D0B]"></div>
    </div>

    <div class="max-w-6xl mx-auto w-full grid lg:grid-cols-12 gap-8 lg:gap-12 items-center relative z-10">
        
        {{-- Left Hero Info & Buttons --}}
        <div class="lg:col-span-7 fade-up text-center lg:text-left">
            <div class="flex flex-wrap justify-center lg:justify-start gap-2 mb-4 sm:mb-6">
                <span class="inline-flex items-center gap-2 rounded-full border border-mocha-400/40 bg-mocha-400/10 backdrop-blur-md px-3.5 py-1 sm:px-4 sm:py-1.5 text-[11px] sm:text-xs font-bold text-mocha-300">
                    <span class="w-2 h-2 sm:w-2.5 sm:h-2.5 rounded-full bg-mocha-400 animate-pulse"></span> Otewe Taman Apsari Surabaya
                </span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-black tracking-tight text-white leading-snug sm:leading-tight mb-4 sm:mb-6">
                Duduk lama-lama,<br class="hidden sm:inline">
                <span class="text-mocha-300">bukan cuma ngopi.</span>
            </h1>

            <p class="text-zinc-200 text-xs sm:text-base md:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0 mb-6 sm:mb-8 font-medium drop-shadow">
                Otewe Taman Apsari adalah tempat nongkrong santai: kopi nikmat, makan enak, gelato segar, dan bakal ada live band session juga loh.
            </p>

            {{-- Action Buttons --}}
            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3">
                <a href="#menu" class="w-full sm:w-auto text-center rounded-full bg-mocha-400 text-zinc-950 px-6 sm:px-7 py-3 sm:py-3.5 text-xs sm:text-sm font-bold hover:bg-mocha-300 transition-all duration-300 shadow-[0_10px_25px_rgba(192,132,82,0.3)]">
                    📖 Lihat Daftar Menu
                </a>
                <a
                    href="https://wa.me/{{ $cafe['phone_wa'] ?? '6281326428553' }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20dan%20reservasi%20tempat"
                    target="_blank" rel="noopener"
                    class="w-full sm:w-auto text-center rounded-full border border-white/20 bg-white/10 backdrop-blur-xl px-5 sm:px-6 py-3 sm:py-3.5 text-xs sm:text-sm font-bold text-white hover:bg-white/20 transition-all duration-300"
                >
                    💬 Chat Info & Reservasi Tempat
                </a>
            </div>
        </div>

        {{-- Right Large Transparent Floating Logo --}}
        <div class="lg:col-span-5 fade-up flex flex-col items-center justify-center relative mt-2 lg:mt-0">
            
            {{-- Soft Warm Glow Behind Floating Logo --}}
            <div class="absolute inset-0 bg-mocha-500/20 rounded-full filter blur-[60px] sm:blur-[70px] pointer-events-none"></div>

            {{-- Large Transparent Inline Logo Graphic --}}
            <div class="relative z-10 w-full max-w-[300px] sm:max-w-[440px] p-2 sm:p-4 flex flex-col items-center justify-center group">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 450 120" class="w-full h-auto max-h-32 sm:max-h-48 object-contain filter drop-shadow-[0_15px_35px_rgba(192,132,82,0.3)] group-hover:scale-105 transition-transform duration-500">
                    <defs>
                        <linearGradient id="logoHeroGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#D4A373" />
                            <stop offset="100%" stop-color="#C08452" />
                        </linearGradient>
                    </defs>
                    <g transform="translate(10, 10)">
                        <circle cx="50" cy="50" r="46" fill="#C08452" />
                        <circle cx="50" cy="50" r="42" fill="#0F0D0B" />
                        <path d="M 32 26 C 24 40 32 60 48 76 C 58 86 72 82 72 74 C 72 60 56 46 42 32 C 36 26 32 26 32 26 Z" fill="url(#logoHeroGrad)" />
                        <path d="M 68 74 C 76 60 68 40 52 24 C 42 14 28 18 28 26 C 28 40 44 54 58 68 C 64 74 68 74 68 74 Z" fill="url(#logoHeroGrad)" />
                        <path d="M 38 28 C 30 42 42 62 62 76 C 52 70 42 56 38 28 Z" fill="#0F0D0B" />
                    </g>
                    <text x="120" y="74" font-family="'Inter', 'Plus Jakarta Sans', sans-serif" font-size="64" font-weight="900" fill="#FFFFFF" letter-spacing="-3">Otewe</text>
                    <text x="122" y="98" font-family="'Inter', sans-serif" font-size="13" font-weight="800" fill="#D4A373" letter-spacing="4">NGOPI · MAKAN · GELATO</text>
                </svg>
                <div class="mt-4 sm:mt-8 text-center">
                    <span class="inline-block px-3.5 py-1 rounded-full border border-white/15 bg-zinc-950/70 backdrop-blur-md text-zinc-300 font-mono text-[10px] sm:text-xs font-semibold tracking-widest uppercase">
                        TAMAN APSARI · SURABAYA
                    </span>
                    <p class="text-xs sm:text-base font-bold text-white mt-1.5 sm:mt-2 tracking-wide">NGOPI · MAKAN · GELATO</p>
                </div>
            </div>

        </div>

    </div>
</section>
