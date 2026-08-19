<header
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300"
>
    <div
        class="mx-4 mt-4 rounded-2xl border border-white/10 transition-all duration-300"
        :class="scrolled ? 'bg-zinc-950/95 backdrop-blur-2xl shadow-2xl border-mocha-400/30' : 'bg-zinc-900/70 backdrop-blur-xl'"
    >
        <div class="flex items-center justify-between px-5 py-3 md:px-8">

            {{-- Official Logo (Inline Vector SVG for 100% Reliability) --}}
            <a href="#top" class="flex items-center gap-2 group" aria-label="Otewe Kopi Home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 450 120" class="h-9 w-auto group-hover:scale-105 transition-transform duration-300">
                    <defs>
                        <linearGradient id="logoNavGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#D4A373" />
                            <stop offset="100%" stop-color="#C08452" />
                        </linearGradient>
                    </defs>
                    <g transform="translate(10, 10)">
                        <circle cx="50" cy="50" r="46" fill="#C08452" />
                        <circle cx="50" cy="50" r="42" fill="#0F0D0B" />
                        <path d="M 32 26 C 24 40 32 60 48 76 C 58 86 72 82 72 74 C 72 60 56 46 42 32 C 36 26 32 26 32 26 Z" fill="url(#logoNavGrad)" />
                        <path d="M 68 74 C 76 60 68 40 52 24 C 42 14 28 18 28 26 C 28 40 44 54 58 68 C 64 74 68 74 68 74 Z" fill="url(#logoNavGrad)" />
                        <path d="M 38 28 C 30 42 42 62 62 76 C 52 70 42 56 38 28 Z" fill="#0F0D0B" />
                    </g>
                    <text x="120" y="74" font-family="'Inter', 'Plus Jakarta Sans', sans-serif" font-size="64" font-weight="900" fill="#FFFFFF" letter-spacing="-3">Otewe</text>
                    <text x="122" y="98" font-family="'Inter', sans-serif" font-size="13" font-weight="800" fill="#D4A373" letter-spacing="4">NGOPI · MAKAN · GELATO</text>
                </svg>
            </a>

            {{-- Desktop Nav Links --}}
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-zinc-200">
                <a href="#top" class="hover:text-mocha-300 transition-colors">Beranda</a>
                <a href="#menu" class="hover:text-mocha-300 transition-colors">Daftar Menu</a>
                <a href="#live-band" class="hover:text-mocha-300 transition-colors">Live Band</a>
                <a href="#jam-buka" class="hover:text-mocha-300 transition-colors">Jam Buka</a>
                <a href="#lokasi" class="hover:text-mocha-300 transition-colors">Taman Apsari</a>
            </nav>

            {{-- CTA Button --}}
            <div class="hidden md:flex items-center gap-3">
                <a
                    href="https://wa.me/{{ $cafe['phone_wa'] ?? '6281326428553' }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20dan%20reservasi%20tempat"
                    target="_blank" rel="noopener"
                    class="inline-flex items-center gap-2 rounded-full border border-mocha-400/40 bg-mocha-400/10 text-mocha-300 px-5 py-2 text-sm font-bold hover:bg-mocha-400 hover:text-zinc-950 transition-all duration-300 shadow-md"
                >
                    💬 Info & Reservasi WA
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button @click="open = !open" class="md:hidden text-white p-2 rounded-xl bg-white/10" aria-label="Buka menu">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" /></svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div x-show="open" x-cloak x-transition class="md:hidden border-t border-white/10 px-5 py-5 flex flex-col gap-4 text-sm font-semibold text-zinc-300">
            <a @click="open=false" href="#top" class="hover:text-mocha-300">Beranda</a>
            <a @click="open=false" href="#menu" class="hover:text-mocha-300">Daftar Menu</a>
            <a @click="open=false" href="#live-band" class="hover:text-mocha-300">Live Band</a>
            <a @click="open=false" href="#jam-buka" class="hover:text-mocha-300">Jam Buka</a>
            <a @click="open=false" href="#lokasi" class="hover:text-mocha-300">Taman Apsari</a>
            <a
                href="https://wa.me/{{ $cafe['phone_wa'] ?? '6281326428553' }}?text=Halo%20Otewe%2C%20saya%20mau%20tanya%20info%20dan%20reservasi%20tempat"
                target="_blank" rel="noopener"
                class="inline-flex justify-center items-center gap-2 rounded-full bg-mocha-400 text-zinc-950 px-5 py-2.5 font-bold text-center"
            >
                💬 Info & Reservasi WhatsApp
            </a>
        </div>
    </div>
</header>
