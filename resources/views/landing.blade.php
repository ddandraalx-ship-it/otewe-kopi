@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section id="beranda" class="section pt-10 pb-16">
    <div class="container-otewe grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7">
            <div class="flex flex-wrap gap-2 mb-6">
                <span class="inline-flex items-center gap-2 glass-pill text-zinc-100 font-mono text-xs px-3.5 py-1.5 rounded-full font-bold uppercase tracking-wider">
                    <span class="w-2.5 h-2.5 rounded-full bg-white animate-pulse"></span> OPEN 👇 SURABAYA
                </span>
                <span class="inline-flex items-center gap-1.5 glass-pill text-zinc-300 font-mono text-xs px-3.5 py-1.5 rounded-full font-semibold uppercase tracking-wider">
                    🎸 Live Band Weekend
                </span>
            </div>
            
            <h1 class="text-hero-headline font-black mb-6 tracking-tighter text-zinc-50 uppercase leading-none">
                Ngopi.<br>
                Makan.<br>
                <span class="bg-zinc-50 text-zinc-950 px-3 py-1 inline-block -rotate-1 rounded-xl">Gelato.</span>
            </h1>
            
            <p class="text-zinc-300 text-lg sm:text-xl leading-relaxed max-w-lg mb-8 font-medium">
                Satu tempat untuk semua momen santai. Nikmati snack renyah, toast tebal, rice bowl pedas nampol, serta live band session setiap akhir pekan.
            </p>

            <div class="flex flex-wrap gap-4 items-center">
                <a href="#menu" class="btn-primary">Lihat Menu Ticket</a>
                <a href="https://wa.me/6281326428553" target="_blank" class="btn-ghost">
                    💬 Reservasi WA: 081326428553
                </a>
            </div>
        </div>

        {{-- Minimalist B&W Graphic Showcase --}}
        <div class="lg:col-span-5">
            <div class="glass-card-dark p-4 rounded-3xl overflow-hidden group border border-white/15">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-zinc-950">
                    <img src="{{ asset('images/graphic-hero.svg') }}" alt="Otewe Kopi Minimalist B&W Graphic Art" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
                </div>
                <div class="p-4 pt-5 flex items-center justify-between">
                    <div>
                        <p class="font-mono text-xs text-zinc-400 uppercase tracking-widest font-bold">100% LOKAL / 0% RIBET</p>
                        <p class="font-display text-lg font-bold text-zinc-100">Surabaya's Prime Chill Spot</p>
                    </div>
                    <span class="glass-pill px-3 py-1 text-xs font-mono font-bold text-zinc-200 rounded-full">OPEN 👇</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- LIVE BAND SESSION SECTION --}}
<section id="live-band" class="section py-16">
    <div class="container-otewe">
        <div class="glass-card-dark rounded-3xl p-8 sm:p-12 border border-white/20 relative overflow-hidden">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7">
                    <span class="font-mono text-xs font-bold uppercase tracking-[0.2em] glass-pill text-zinc-200 px-3.5 py-1.5 rounded-full inline-block mb-4">
                        🎸 SPECIAL EVENT HIGHLIGHT
                    </span>
                    <h2 class="text-4xl sm:text-5xl font-black text-zinc-50 tracking-tight uppercase mb-4">
                        Live Band & Acoustic Session
                    </h2>
                    <p class="text-zinc-300 text-base sm:text-lg leading-relaxed mb-6 font-medium">
                        Bikin malam minggumu makin berkesan! Nikmati alunan akustik, studio band session, dan jam session santai bersama teman dan komunitas terbaik di Surabaya.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="glass-pill p-4 rounded-2xl">
                            <p class="font-mono text-xs uppercase tracking-widest text-zinc-400 font-bold mb-1">SCHEDULE</p>
                            <p class="font-display font-extrabold text-lg text-white">Jum’at – Minggu Night</p>
                            <p class="font-mono text-xs text-zinc-300 mt-0.5">19.30 – 23.00 WIB</p>
                        </div>
                        <div class="glass-pill p-4 rounded-2xl">
                            <p class="font-mono text-xs uppercase tracking-widest text-zinc-400 font-bold mb-1">RESERVASI MEJA</p>
                            <p class="font-display font-extrabold text-lg text-white">Front Stage Area</p>
                            <p class="font-mono text-xs text-zinc-300 mt-0.5">Amankan via WA 081326428553</p>
                        </div>
                    </div>

                    <a href="https://wa.me/6281326428553" target="_blank" class="btn-whatsapp">
                        📱 Reservasi Front Stage Live Band (081326428553)
                    </a>
                </div>

                <div class="lg:col-span-5">
                    <div class="rounded-2xl overflow-hidden border border-white/20 bg-zinc-950 aspect-[4/3]">
                        <img src="{{ asset('images/graphic-liveband.svg') }}" alt="Live Band Session Graphic Artwork"
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- JAM BUKA & OPERASIONAL --}}
<section id="jam-buka" class="section py-16">
    <div class="container-otewe">
        <div class="glass-card-dark rounded-3xl p-8 sm:p-12 border border-white/15">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="font-mono text-xs font-bold uppercase tracking-[0.2em] glass-pill text-zinc-200 px-3.5 py-1.5 rounded-full inline-block mb-4">
                        OPEN 👇 OPERATIONAL HOURS
                    </span>
                    <h2 class="text-4xl sm:text-5xl font-black text-zinc-50 tracking-tight uppercase mb-4">
                        Jam Buka & Reservasi
                    </h2>
                    <p class="text-zinc-300 text-base mb-6 font-medium">
                        Siap menyambut kamu setiap hari! Mau nongkrong santai, nugas, atau nonton Live Band, langsung amankan meja favoritmu.
                    </p>
                    <a href="https://wa.me/6281326428553" target="_blank" class="btn-whatsapp">
                        📱 Chat Reservasi via WA (081326428553)
                    </a>
                </div>

                <div class="grid gap-4">
                    <div class="glass-pill p-6 rounded-2xl border border-white/15">
                        <p class="font-mono text-xs uppercase tracking-widest text-zinc-400 font-bold mb-1">HARI KERJA</p>
                        <h4 class="text-xl font-extrabold text-zinc-50 mb-1">Senin – Kamis</h4>
                        <p class="font-mono text-2xl font-bold text-zinc-200">10.00 – 00.00 WIB</p>
                    </div>

                    <div class="glass-pill p-6 rounded-2xl border border-white/15">
                        <p class="font-mono text-xs uppercase tracking-widest text-zinc-400 font-bold mb-1">AKHIR PEKAN & LIVE MUSIC</p>
                        <h4 class="text-xl font-extrabold text-zinc-50 mb-1">Jum’at – Minggu</h4>
                        <p class="font-mono text-2xl font-bold text-zinc-200">10.00 – 03.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MENU SECTION --}}
<section id="menu" class="section">
    <div class="container-otewe">
        <div class="text-center mb-12">
            <p class="eyebrow mb-3">DAFTAR MENU TICKET</p>
            <h2 class="text-4xl sm:text-6xl font-black uppercase tracking-tight text-zinc-50">Yang Wajib Dicoba</h2>
        </div>

        <div class="max-w-2xl mx-auto">
            <input type="radio" name="menu-tab" id="tab-snack" class="hidden" checked>
            <input type="radio" name="menu-tab" id="tab-toast" class="hidden">
            <input type="radio" name="menu-tab" id="tab-rice"  class="hidden">

            <div class="tab-buttons flex justify-center gap-3 mb-10">
                <label for="tab-snack" class="tab-btn cursor-pointer">Snack</label>
                <label for="tab-toast" class="tab-btn cursor-pointer">Toast</label>
                <label for="tab-rice"  class="tab-btn cursor-pointer">Rice Bowl</label>
            </div>

            {{-- SNACK --}}
            <div id="panel-snack" class="menu-panel">
                <div class="menu-card">
                    <p class="menu-title">Snack</p>
                    <p class="menu-sub">Teman Ngobrol Paling Pas</p>
                    @php
                    $snacks = [
                        ['Kentang Goreng', 22, ['fav']],
                        ['Cireng', 22, []],
                        ['Mendoan Milenial', 22, []],
                        ['Pangsit Goreng', 24, []],
                        ['Udang Rambutan', 24, []],
                        ['Kulit Ayam Kress', 28, []],
                        ['Makpot Cheesemelt', 28, ['best']],
                        ['Casadilla Tuna', 28, ['fav','best']],
                        ['Casadilla Seaweed', 28, []],
                        ['Dimsum Cuan', 30, ['best']],
                        ['Sempler Otewe', 35, ['fav']],
                        ['Sayap Ayam Saus Gongujang/BBQ/Cheese', 38, []],
                    ];
                    @endphp
                    @foreach ($snacks as [$name, $price, $tags])
                        <div class="menu-row">
                            <span class="menu-row-name">
                                {{ $name }}
                                @if (in_array('fav', $tags)) <span class="badge-fav" title="Favourite">★ FAV</span> @endif
                                @if (in_array('best', $tags)) <span class="badge-best" title="Best Seller">👍 BEST</span> @endif
                            </span>
                            <span class="menu-row-leader"></span>
                            <span class="menu-row-price">{{ $price }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- TOAST --}}
            <div id="panel-toast" class="menu-panel">
                <div class="menu-card">
                    <p class="menu-title">Toast</p>
                    <p class="menu-sub">Tebal, Gurih, Nagih</p>
                    @php
                    $toasts = [
                        ['Tiramisu Toast', 20, []],
                        ['Egg & Cheese Mayo', 28, ['fav']],
                        ['Chicken Garlic', 28, ['best']],
                        ['Spicy Tuna', 30, ['fav']],
                        ['Beef Glaze', 30, []],
                    ];
                    @endphp
                    @foreach ($toasts as [$name, $price, $tags])
                        <div class="menu-row">
                            <span class="menu-row-name">
                                {{ $name }}
                                @if (in_array('fav', $tags)) <span class="badge-fav" title="Favourite">★ FAV</span> @endif
                                @if (in_array('best', $tags)) <span class="badge-best" title="Best Seller">👍 BEST</span> @endif
                            </span>
                            <span class="menu-row-leader"></span>
                            <span class="menu-row-price">{{ $price }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- RICE BOWL --}}
            <div id="panel-rice" class="menu-panel">
                <div class="menu-card">
                    <p class="menu-title">Rice Bowl</p>
                    <p class="menu-sub">Berat, Pedas, Nampol</p>
                    @php
                    $riceBowls = [
                        ['Seblak Juragan', 26, ['hot']],
                        ['Mie Korean Carbonara', 26, ['fav','hot']],
                        ['Nasi Gila', 26, ['hot']],
                        ['Nasi Ayam Kulit Ningrat', 30, []],
                        ['Nasi Ayam/Dori Cabe Garam', 30, ['hot']],
                        ['Nasi Ayam/Dori Salted Egg', 32, ['best']],
                        ['Nasi Ayam/Dori Japanese Curry', 32, ['fav']],
                        ['Nasi Beef Truffle', 32, ['fav']],
                        ['Nasi Beef Wagyu Garlic', 38, ['best']],
                    ];
                    @endphp
                    @foreach ($riceBowls as [$name, $price, $tags])
                        <div class="menu-row">
                            <span class="menu-row-name">
                                {{ $name }}
                                @if (in_array('fav', $tags)) <span class="badge-fav" title="Favourite">★ FAV</span> @endif
                                @if (in_array('best', $tags)) <span class="badge-best" title="Best Seller">👍 BEST</span> @endif
                                @if (in_array('hot', $tags)) <span class="badge-hot" title="Extra Hot">🌶 HOT</span> @endif
                            </span>
                            <span class="menu-row-leader"></span>
                            <span class="menu-row-price">{{ $price }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TENTANG SECTION (MINIMALIST GRAPHIC ART + STORY CARD) --}}
<section id="tentang" class="section">
    <div class="container-otewe grid lg:grid-cols-2 gap-10 items-center">
        <div class="glass-card-dark p-6 rounded-3xl border border-white/15">
            <div class="rounded-2xl overflow-hidden bg-zinc-950 aspect-square">
                <img src="{{ asset('images/graphic-about.svg') }}" alt="Otewe About Graphic Design Artwork"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500 opacity-90">
            </div>
        </div>

        <div>
            <p class="eyebrow mb-3">CERITA KAMI</p>
            <h2 class="text-4xl sm:text-5xl font-black text-zinc-50 mb-6 uppercase tracking-tight">Bukan Sekadar Ngopi</h2>
            <p class="text-zinc-300 leading-relaxed text-base sm:text-lg mb-4 font-medium">
                Otewe lahir dari ide sederhana: satu tempat untuk semua kebutuhan nongkrong — 
                kopi buat yang butuh energi, makanan berat buat yang laper beneran, 
                gelato penutup manis, dan live music session seru setiap akhir pekan.
            </p>
            <p class="text-zinc-400 leading-relaxed text-base font-medium">
                Setiap menu dites berkali-kali sebelum naik status jadi favorit pelanggan. Tempat santai berkelas dengan estetika modern.
            </p>
        </div>
    </div>
</section>

{{-- GALERI / HIGHLIGHT GRID (GLASS TYPOGRAPHY CARDS) --}}
<section id="galeri" class="section">
    <div class="container-otewe">
        <div class="text-center mb-12">
            <p class="eyebrow mb-3">HIGHLIGHT VIBE & EVENT</p>
            <h2 class="text-4xl sm:text-5xl font-black uppercase tracking-tight text-zinc-50">Dari Dapur & Stage Otewe</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @php
            $highlights = [
                ['01', 'Kopi Susu Otewe', 'Racikan khas berenergi'],
                ['02', 'Live Band Night', 'Every weekend session'],
                ['03', 'Seblak Juragan', 'Pedas nampol juara'],
                ['04', 'Gelato Premium', 'Penutup manis dingin'],
                ['05', 'Dimsum Cuan', 'Kukus & goreng gurih'],
                ['06', 'Toast Tebal', 'Banyak pilihan rasa'],
                ['07', 'Rice Bowl Wagyu', 'Kenyang puas mantap'],
                ['08', 'Late Night Vibe', 'Buka sampai jam 03.00'],
            ];
            @endphp

            @foreach ($highlights as [$num, $title, $sub])
                <div class="typo-card glass-card-dark group min-h-[160px] flex flex-col justify-between">
                    <div>
                        <span class="font-mono text-2xl font-black text-zinc-400 group-hover:text-white block transition-colors">
                            {{ $num }}
                        </span>
                        <h3 class="font-display font-extrabold text-lg sm:text-xl text-zinc-100 group-hover:text-white mt-2 leading-tight transition-colors">
                            {{ $title }}
                        </h3>
                    </div>
                    <p class="font-mono text-[11px] uppercase tracking-wider text-zinc-400 group-hover:text-zinc-300 mt-3 transition-colors">
                        {{ $sub }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- LOKASI / KONTAK --}}
<section id="lokasi" class="section">
    <div class="container-otewe grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <p class="eyebrow mb-3">KUNJUNGI KAMI</p>
            <h2 class="text-4xl sm:text-5xl font-black text-zinc-50 mb-6 uppercase tracking-tight">Otewe Kopi, Surabaya</h2>
            
            <div class="space-y-4 mb-8">
                <p class="text-zinc-200 font-medium flex items-center gap-2 text-base">
                    <span>📍</span> Jl. Manyar Kertoarjo No. 24, Surabaya
                </p>
                <div>
                    <p class="text-zinc-200 font-medium flex items-center gap-2 text-base mb-1">
                        <span>🕐</span> <strong>Opening Hours:</strong>
                    </p>
                    <div class="pl-7 font-mono text-sm space-y-1 text-zinc-300">
                        <p>• Senin - Kamis: <strong>10.00 - 00.00 WIB</strong></p>
                        <p>• Jum’at - Minggu: <strong>10.00 - 03.00 WIB</strong></p>
                        <p>• 🎸 Live Band: <strong>Weekend Night (19.30 - 23.00)</strong></p>
                    </div>
                </div>
                <p class="text-zinc-200 font-medium flex items-center gap-2 text-base pt-2">
                    <span>📱</span> <strong>Reservasi WA:</strong>
                    <a href="https://wa.me/6281326428553" target="_blank" class="font-mono font-bold text-white underline hover:text-zinc-300">
                        081326428553
                    </a>
                </p>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="https://wa.me/6281326428553" target="_blank" class="btn-whatsapp">
                    💬 Hubungi WA Reservasi
                </a>
                <a href="https://maps.google.com/?q=otewe+kopi+surabaya" target="_blank" class="btn-ghost">
                    🗺️ Open Google Maps
                </a>
            </div>
        </div>

        {{-- GMAPS EMBED (Kept Intact) --}}
        <div class="glass-card-dark p-3 rounded-3xl border border-white/20 aspect-square overflow-hidden">
            <iframe src="https://maps.google.com/maps?q=otewe%20kopi%20surabaya&output=embed"
                    class="w-full h-full border-0 rounded-2xl" loading="lazy" title="Peta Otewe Kopi Surabaya"></iframe>
        </div>
    </div>
</section>
@endsection
