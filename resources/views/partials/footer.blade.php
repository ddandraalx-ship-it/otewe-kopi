<footer class="px-6 py-12 border-t border-white/10 bg-zinc-950">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-sm">
        
        {{-- Official Logo in Footer --}}
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo-otewe.svg') }}" alt="Otewe Logo" class="h-9 w-auto">
        </div>

        {{-- Footer Nav Links --}}
        <div class="flex flex-wrap items-center justify-center gap-6 font-semibold text-zinc-300 text-xs">
            <a href="#top" class="hover:text-mocha-300 transition-colors">Beranda</a>
            <a href="#menu" class="hover:text-mocha-300 transition-colors">Daftar Menu</a>
            <a href="#live-band" class="hover:text-mocha-300 transition-colors">Live Band</a>
            <a href="#jam-buka" class="hover:text-mocha-300 transition-colors">Jam Buka</a>
            <a href="#lokasi" class="hover:text-mocha-300 transition-colors">Taman Apsari</a>
        </div>

        {{-- Instagram & Copyright --}}
        <div class="flex items-center gap-4 text-zinc-300 text-xs font-semibold">
            <a
                href="https://instagram.com/{{ $cafe['instagram'] }}"
                target="_blank" rel="noopener"
                class="inline-flex items-center gap-1.5 hover:text-white transition-colors border border-mocha-400/30 bg-mocha-400/10 rounded-full px-3 py-1 text-mocha-300 font-bold"
            >
                📷 @ {{ $cafe['instagram'] }}
            </a>
            <p>&copy; {{ date('Y') }} Otewe. All rights reserved.</p>
        </div>

    </div>
</footer>
