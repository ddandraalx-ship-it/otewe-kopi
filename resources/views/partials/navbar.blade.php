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

            {{-- Official Logo --}}
            <a href="#top" class="flex items-center gap-2 group">
                <img src="{{ asset('images/logo-otewe.svg') }}" alt="Otewe Logo" class="h-9 w-auto group-hover:scale-105 transition-transform duration-300">
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
