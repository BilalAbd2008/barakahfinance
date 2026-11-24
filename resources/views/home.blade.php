@extends('layouts.app')

@section('title', 'Barakah Finance | Rencanakan Keuangan, Ikhtiarkan Keberkahan')

@section('content')
    <!-- Hero Section -->
    <section id="beranda" class="relative overflow-hidden bg-gradient-to-r from-[#0f4432] via-[#165942] to-[#236f54] text-white">
        <!-- Subtle ambient light accent -->
        <div class="pointer-events-none absolute -top-24 right-0 w-[560px] h-[560px] rounded-full bg-gold-400/10 blur-3xl"></div>

        <div class="relative max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10 py-16 lg:py-20">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-10 items-center">
                <!-- Left Copy -->
                <div class="lg:col-span-7">
                    <p class="reveal text-xs sm:text-[13px] font-semibold tracking-[0.2em] uppercase text-gold-300 mb-5">
                        Lembaga Edukasi Keuangan Syariah
                    </p>

                    <h1 class="reveal reveal-delay-1 font-serif text-4xl sm:text-5xl lg:text-[60px] xl:text-[66px] font-bold leading-[1.12] tracking-tight text-white mb-6">
                        Rencanakan Keuangan,<br>
                        <span class="italic font-semibold text-gold-300">Ikhtiarkan Keberkahan</span>
                    </h1>

                    <p class="reveal reveal-delay-2 text-base sm:text-[18px] lg:text-[19px] text-emerald-50/85 leading-[1.65] max-w-2xl mb-9">
                        Edukasi, pendampingan, dan perencanaan keuangan untuk individu dan keluarga Muslim, agar lebih terencana, aman, dan sesuai syariat Islam.
                    </p>

                    <div class="reveal reveal-delay-3 flex flex-wrap items-center gap-4 mb-9">
                        <a href="#daftar" class="inline-flex items-center gap-2.5 px-7 py-4 rounded-xl bg-gold-400 text-navy-900 text-[15.5px] font-semibold shadow-sm hover:bg-gold-300 hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M10 3.5v9m0 0-3.25-3.25M10 12.5l3.25-3.25M4.5 16h11"/>
                            </svg>
                            <span>Unduh Worksheet Gratis</span>
                        </a>
                        <a href="#program" class="inline-flex items-center gap-2.5 px-7 py-4 rounded-xl bg-white/5 border border-white/30 text-white text-[15.5px] font-semibold hover:bg-white/15 hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M4 2.8v10.4L13 8 4 2.8z"/>
                            </svg>
                            <span>Lihat Program Kami</span>
                        </a>
                    </div>

                    <div class="reveal reveal-delay-4 flex flex-wrap items-center gap-x-5 gap-y-2 text-[13.5px] sm:text-[14.5px] text-emerald-100/80">
                        <span class="inline-flex items-center gap-2">
                            <svg class="w-4 h-4 text-gold-300" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3.5 5.5A1.5 1.5 0 0 1 5 4h3.5a2 2 0 0 1 1.5.7A2 2 0 0 1 11.5 4H15a1.5 1.5 0 0 1 1.5 1.5v9A1.5 1.5 0 0 1 15 16h-3.5a1.5 1.5 0 0 0-1.5 1 1.5 1.5 0 0 0-1.5-1H5a1.5 1.5 0 0 1-1.5-1.5v-9Z"/>
                                <path d="M10 4.8V16.8"/>
                            </svg>
                            <span>Gratis</span>
                        </span>
                        <span class="text-white/25 hidden sm:inline">|</span>
                        <span>Edukasi, bukan nasihat investasi</span>
                        <span class="text-white/25 hidden sm:inline">|</span>
                        <span>Tanpa janji hasil</span>
                    </div>
                </div>

                <!-- Right Arch Illustration -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="reveal reveal-delay-2 relative w-full max-w-[380px] sm:max-w-[430px] lg:max-w-[465px]">
                        <svg viewBox="0 0 360 390" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto drop-shadow-[0_24px_45px_rgba(7,31,23,0.32)]" role="img" aria-label="Ilustrasi perencanaan keuangan syariah Barakah Finance">
                            <defs>
                                <linearGradient id="archBg" x1="180" y1="16" x2="180" y2="372" gradientUnits="userSpaceOnUse">
                                    <stop offset="0%" stop-color="#F7E6CA"/>
                                    <stop offset="55%" stop-color="#F1D9B5"/>
                                    <stop offset="100%" stop-color="#E6C99E"/>
                                </linearGradient>
                                <radialGradient id="sunGlow" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(180 218) rotate(90) scale(72)">
                                    <stop offset="0%" stop-color="#FFF9ED" stop-opacity="0.95"/>
                                    <stop offset="100%" stop-color="#F7E6CA" stop-opacity="0"/>
                                </radialGradient>
                                <clipPath id="archClip">
                                    <path d="M24 182C24 92.53 93.84 20 180 20C266.16 20 336 92.53 336 182V370H24V182Z"/>
                                </clipPath>
                            </defs>

                            <!-- Arch Frame -->
                            <g clip-path="url(#archClip)">
                                <rect x="24" y="20" width="312" height="350" fill="url(#archBg)"/>

                                <!-- Soft Sunlight Glow -->
                                <circle cx="180" cy="218" r="72" fill="url(#sunGlow)" class="animate-soft-glow"/>

                                <!-- Minimalist Mosque Silhouette -->
                                <g opacity="0.45">
                                    <!-- Left Minaret -->
                                    <rect x="118" y="220" width="7" height="82" rx="1.5" fill="#C7AA80"/>
                                    <path d="M116 221L121.5 208L127 221H116Z" fill="#C7AA80"/>
                                    <rect x="115" y="240" width="13" height="3" rx="1.5" fill="#C7AA80"/>
                                    <!-- Right Minaret -->
                                    <rect x="235" y="212" width="7" height="90" rx="1.5" fill="#C7AA80"/>
                                    <path d="M233 213L238.5 198L244 213H233Z" fill="#C7AA80"/>
                                    <rect x="232" y="232" width="13" height="3" rx="1.5" fill="#C7AA80"/>
                                    <!-- Central Dome -->
                                    <path d="M148 278C148 249 162 232 180 223C198 232 212 249 212 278V302H148V278Z" fill="#D5BA92"/>
                                    <rect x="179" y="214" width="2" height="10" fill="#C7AA80"/>
                                    <!-- Base -->
                                    <rect x="96" y="286" width="168" height="24" fill="#D5BA92"/>
                                </g>

                                <!-- Warm Ground Table -->
                                <rect x="24" y="314" width="312" height="56" fill="#C9B08A"/>

                                <!-- Stacked Books & Ledger -->
                                <g class="animate-float-slow">
                                    <!-- Upper Book -->
                                    <rect x="52" y="268" width="174" height="34" rx="5" fill="#7D542E"/>
                                    <rect x="58" y="274" width="162" height="6" rx="3" fill="#B58C5B" opacity="0.6"/>
                                    <!-- Lower Book -->
                                    <rect x="34" y="302" width="202" height="38" rx="6" fill="#6F4926"/>
                                    <rect x="42" y="309" width="186" height="7" rx="3.5" fill="#A97F4D" opacity="0.55"/>
                                    <!-- Dark Ledger / Tablet Card -->
                                    <rect x="196" y="240" width="76" height="62" rx="10" fill="#1C2C38"/>
                                    <rect x="208" y="254" width="36" height="4" rx="2" fill="#BD9446" opacity="0.85"/>
                                    <rect x="208" y="265" width="52" height="3.5" rx="1.75" fill="#FFFFFF" opacity="0.25"/>
                                    <rect x="208" y="274" width="42" height="3.5" rx="1.75" fill="#FFFFFF" opacity="0.2"/>
                                </g>
                            </g>

                            <!-- Subtle Inner Arch Rim -->
                            <path d="M24 182C24 92.53 93.84 20 180 20C266.16 20 336 92.53 336 182V370H24V182Z" stroke="#FFF4DF" stroke-opacity="0.35" stroke-width="1.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilar Singkat Strip -->
    <section class="bg-cream-50 border-b border-cream-300/80">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10 py-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-0 lg:divide-x lg:divide-cream-300/90">
                @foreach ($pillars as $index => $pillar)
                    <div class="reveal reveal-delay-{{ ($index % 4) + 1 }} flex items-center justify-start lg:justify-center gap-4 lg:px-6">
                        <div class="shrink-0 text-gold-500">
                            @if ($pillar['icon'] === 'users')
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M16 19v-1.2a3.3 3.3 0 0 0-3.3-3.3H8.3A3.3 3.3 0 0 0 5 17.8V19"/>
                                    <circle cx="10.5" cy="8.5" r="3"/>
                                    <path d="M20 19v-1a3 3 0 0 0-2.2-2.9"/>
                                    <path d="M15.8 5.6a3 3 0 0 1 0 5.8"/>
                                </svg>
                            @elseif ($pillar['icon'] === 'scale')
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 4v16M7 20h10M5 7h14"/>
                                    <path d="M6.5 7 4 13a3 3 0 0 0 5 0L6.5 7Z"/>
                                    <path d="M17.5 7 15 13a3 3 0 0 0 5 0l-2.5-6Z"/>
                                </svg>
                            @elseif ($pillar['icon'] === 'sprout')
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 20v-8"/>
                                    <path d="M12 12c0-4 2.8-6.5 7-6.5 0 4.2-2.5 6.5-7 6.5Z"/>
                                    <path d="M12 14c0-3.2-2.3-5.2-5.8-5.2 0 3.4 2 5.2 5.8 5.2Z"/>
                                    <path d="M8 20h8"/>
                                </svg>
                            @else
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 3.5 5 6.5v5.3c0 4.5 3 8 7 9.2 4-1.2 7-4.7 7-9.2V6.5l-7-3Z"/>
                                    <path d="m9.2 12.2 1.9 1.9 3.8-4.1"/>
                                </svg>
                            @endif
                        </div>
                        <div class="text-[14.5px] sm:text-[15.5px] font-semibold text-navy-900 leading-snug">
                            {{ $pillar['line1'] }}<br>{{ $pillar['line2'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Tentang Kami / Cara Kami -->
    <section id="tentang" class="py-20 lg:py-24">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                <!-- Left Narrative -->
                <div class="lg:col-span-4 lg:border-r lg:border-cream-300/90 lg:pr-10 reveal">
                    <p class="text-xs font-semibold tracking-[0.18em] uppercase text-gold-600 mb-3">Cara Kami</p>
                    <h2 class="font-serif text-3xl sm:text-[38px] lg:text-[40px] font-bold text-navy-900 leading-[1.18] mb-5">
                        Uang itu soal kebiasaan, bukan cuma angka
                    </h2>
                    <p class="text-[15.5px] text-slate-600 leading-relaxed mb-4">
                        Kami mulai dari cara memandang harta sebagai amanah, ikhtiar, dan jalan keberkahan. Setelah itu, baru teknisnya.
                    </p>
                    <p class="text-[15.5px] text-slate-600 leading-relaxed">
                        <strong class="font-semibold text-navy-900">Visi kami:</strong> membina mindset dan perilaku keuangan keluarga Muslim sesuai prinsip syariah dan keilmuan perencanaan keuangan, berlandaskan Al-Qur'an dan hadits sebagai rujukan utama, dengan niat memperoleh ridho Allah.
                    </p>
                </div>

                <!-- Right 3 Elevated Cards -->
                <div class="lg:col-span-8 grid sm:grid-cols-3 gap-6">
                    @foreach ($approaches as $index => $approach)
                        <div class="reveal reveal-delay-{{ $index + 1 }} bg-white rounded-2xl p-7 sm:p-8 border border-cream-300/70 shadow-card hover:shadow-card-hover hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-cream-100 text-gold-500 flex items-center justify-center mb-6">
                                @if ($approach['icon'] === 'mindset')
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M9.5 4.5a3.5 3.5 0 0 0-3.4 4.3A3.5 3.5 0 0 0 7 15.5V17a2 2 0 0 0 2 2h1V4.5h-.5Z"/>
                                        <path d="M14.5 4.5a3.5 3.5 0 0 1 3.4 4.3A3.5 3.5 0 0 1 17 15.5V17a2 2 0 0 1-2 2h-1V4.5h.5Z"/>
                                    </svg>
                                @elseif ($approach['icon'] === 'coins')
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <ellipse cx="12" cy="7" rx="6" ry="2.5"/>
                                        <path d="M6 7v5c0 1.4 2.7 2.5 6 2.5s6-1.1 6-2.5V7"/>
                                        <path d="M6 12v5c0 1.4 2.7 2.5 6 2.5s6-1.1 6-2.5v-5"/>
                                    </svg>
                                @else
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M4 19h5v-4h5v-4h5V7"/>
                                        <path d="M16 7h3v3"/>
                                    </svg>
                                @endif
                            </div>
                            <h3 class="font-serif text-[20px] font-bold text-navy-900 leading-snug mb-3">
                                {{ $approach['title'] }}
                            </h3>
                            <p class="text-[14.5px] text-slate-600 leading-relaxed">
                                {{ $approach['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kami -->
    <section id="program" class="py-16 lg:py-20">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <div class="text-center max-w-2xl mx-auto mb-14 reveal">
                <div class="inline-flex items-center gap-3 text-xs font-semibold tracking-[0.18em] uppercase text-gold-600 mb-3">
                    <span class="w-7 h-px bg-gold-400/70"></span>
                    <span>Program Kami</span>
                    <span class="w-7 h-px bg-gold-400/70"></span>
                </div>
                <h2 class="font-serif text-3xl sm:text-[40px] lg:text-[44px] font-bold text-brand-900 leading-tight mb-3.5">
                    Pilihan Program Sesuai Kebutuhanmu
                </h2>
                <p class="text-base text-slate-600">
                    Dari belajar mandiri, kelas interaktif, hingga pengembangan kompetensi.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($programs as $index => $program)
                    <article class="reveal reveal-delay-{{ $index + 1 }} group bg-white rounded-2xl overflow-hidden border border-cream-300/75 shadow-card hover:shadow-card-hover hover:-translate-y-1.5 transition-all duration-300 flex flex-col">
                        <!-- Top Card Illustration -->
                        <div class="relative h-48 shrink-0">
                            @if ($program['key'] === 'mandiri')
                                <div class="w-full h-full bg-gradient-to-br from-[#e7efe9] via-[#f2f1ea] to-[#f4ecdd] flex items-center justify-center px-8 pt-4">
                                    <div class="w-48 h-32 bg-white rounded-xl border border-cream-300/80 shadow-sm p-5 space-y-3 transition-transform duration-500 group-hover:-translate-y-1">
                                        <div class="h-3 w-3/4 rounded-full bg-brand-800/15"></div>
                                        <div class="h-2.5 w-1/2 rounded-full bg-brand-800/10"></div>
                                        <div class="h-2.5 w-5/6 rounded-full bg-gold-400/25"></div>
                                        <div class="h-2.5 w-2/3 rounded-full bg-slate-200"></div>
                                    </div>
                                </div>
                            @elseif ($program['key'] === 'kelas')
                                <div class="w-full h-full bg-gradient-to-br from-[#e7edf0] via-[#f0efe9] to-[#f5ecdc] flex items-center justify-center px-8 pt-4">
                                    <div class="w-52 h-32 bg-navy-900 rounded-xl shadow-md p-5 flex flex-col items-center justify-center gap-3 transition-transform duration-500 group-hover:-translate-y-1">
                                        <div class="flex items-center gap-3.5">
                                            <span class="w-6 h-6 rounded-full bg-slate-300/85"></span>
                                            <span class="w-6 h-6 rounded-full bg-slate-300/85"></span>
                                            <span class="w-6 h-6 rounded-full bg-slate-300/85"></span>
                                        </div>
                                        <div class="flex items-center gap-3.5">
                                            <span class="w-6 h-6 rounded-full bg-slate-300/75"></span>
                                            <span class="w-6 h-6 rounded-full bg-gold-400/80"></span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-brand-900 to-brand-800 flex items-center justify-center px-8 pt-4">
                                    <div class="relative w-56 h-32 bg-[#faf4e6] rounded-lg border-2 border-gold-400/60 shadow-md p-4 transition-transform duration-500 group-hover:-translate-y-1">
                                        <div class="w-full h-full border border-gold-400/40 rounded p-3 space-y-2.5">
                                            <div class="h-2.5 w-2/3 rounded-full bg-gold-500/35"></div>
                                            <div class="h-2.5 w-1/2 rounded-full bg-gold-500/25"></div>
                                        </div>
                                        <span class="absolute -bottom-3 right-3.5 w-9 h-9 rounded-full bg-gold-500 ring-2 ring-[#faf4e6] shadow-sm"></span>
                                    </div>
                                </div>
                            @endif

                            <!-- Overlapping Gold Icon Badge -->
                            <div class="absolute -bottom-6 left-7 w-12 h-12 rounded-xl bg-gold-500 text-white shadow-md flex items-center justify-center ring-4 ring-white">
                                @if ($program['key'] === 'mandiri')
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M4 5.5A1.5 1.5 0 0 1 5.5 4H10a2 2 0 0 1 2 2v13a1.5 1.5 0 0 0-1.5-1.5h-5A1.5 1.5 0 0 1 4 16V5.5Z"/>
                                        <path d="M20 5.5A1.5 1.5 0 0 0 18.5 4H14a2 2 0 0 0-2 2v13a1.5 1.5 0 0 1 1.5-1.5h5A1.5 1.5 0 0 0 20 16V5.5Z"/>
                                    </svg>
                                @elseif ($program['key'] === 'kelas')
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M16 19v-1a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1"/>
                                        <circle cx="10.5" cy="9" r="2.8"/>
                                        <path d="M19.5 19v-1a2.7 2.7 0 0 0-2-2.6"/>
                                        <path d="M15.6 6.4a2.7 2.7 0 0 1 0 5.2"/>
                                    </svg>
                                @else
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="m3 9.5 9-4.5 9 4.5-9 4.5-9-4.5Z"/>
                                        <path d="M6.5 11.5v4.5c0 1.4 2.5 2.8 5.5 2.8s5.5-1.4 5.5-2.8v-4.5"/>
                                    </svg>
                                @endif
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-7 pt-10 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-serif text-[23px] font-bold text-navy-900 mb-3">
                                    {{ $program['title'] }}
                                </h3>
                                <p class="text-[15px] text-slate-600 leading-relaxed mb-4">
                                    {{ $program['description'] }}
                                </p>

                                @if ($program['note'])
                                    <p class="pt-4 mb-5 border-t border-dashed border-cream-300 text-[13px] text-slate-500 leading-relaxed">
                                        {{ $program['note'] }}
                                    </p>
                                @endif
                            </div>

                            <a href="{{ $program['cta_href'] }}" class="inline-flex items-center gap-1.5 text-[14.5px] font-semibold text-gold-600 hover:text-brand-800 transition-colors mt-2">
                                <span>{{ $program['cta_label'] }}</span>
                                <span class="transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true">→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Webinar Mendatang (Interactive Carousel) -->
    <section id="webinar" class="py-16 lg:py-24">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                <!-- Left Intro -->
                <div class="lg:col-span-4 reveal">
                    <p class="text-xs font-semibold tracking-[0.18em] uppercase text-gold-600 mb-3">Program Unggulan</p>
                    <h2 class="font-serif text-3xl sm:text-[38px] lg:text-[40px] font-bold text-navy-900 leading-[1.18] mb-4">
                        Webinar<br>Mendatang
                    </h2>
                    <p class="text-[15.5px] text-slate-600 leading-relaxed mb-7">
                        Kelas online gratis dengan tema relevan untuk perjalanan finansial keluarga Muslim.
                    </p>
                    <a href="#daftar" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-lg bg-brand-800 text-white text-[15px] font-semibold shadow-sm hover:bg-brand-900 hover:-translate-y-0.5 transition-all duration-200">
                        <span>Daftar Webinar Gratis</span>
                        <span aria-hidden="true">→</span>
                    </a>
                </div>

                <!-- Right Carousel -->
                <div class="lg:col-span-8 reveal reveal-delay-2">
                    <div class="flex items-center gap-3 sm:gap-5">
                        <!-- Prev Button -->
                        <button id="webinar-prev" type="button" class="shrink-0 w-11 h-11 rounded-full border border-gold-400/60 bg-cream-50 text-gold-600 hover:bg-gold-500 hover:text-white hover:border-gold-500 transition-all duration-200 flex items-center justify-center shadow-sm" aria-label="Webinar sebelumnya">
                            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12.5 5 7.5 10l5 5"/>
                            </svg>
                        </button>

                        <!-- Slide Deck -->
                        <div id="webinar-deck" class="flex-1 min-w-0 rounded-2xl bg-gradient-to-r from-white via-[#fdfbf7] to-[#f4ecdc] border border-cream-300/80 shadow-card p-8 sm:p-11 min-h-[240px] flex items-center relative overflow-hidden">
                            @foreach ($webinars as $index => $webinar)
                                <article
                                    data-webinar-slide="{{ $index }}"
                                    class="webinar-slide w-full {{ $index === 1 ? 'block opacity-100 translate-x-0' : 'hidden opacity-0 translate-x-3' }}"
                                >
                                    <div class="inline-flex items-center gap-2 text-sm font-semibold text-navy-900 mb-4">
                                        <svg class="w-4 h-4 text-gold-500" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect x="3" y="4.5" width="14" height="12.5" rx="2"/>
                                            <path d="M6.5 2.5v3M13.5 2.5v3M3 8.5h14"/>
                                        </svg>
                                        <span>{{ $webinar['date'] }}</span>
                                    </div>

                                    <h3 class="font-serif text-2xl sm:text-[32px] font-bold text-navy-900 leading-snug mb-3">
                                        {{ $webinar['title'] }}
                                    </h3>

                                    <p class="text-base text-slate-700 {{ $webinar['is_quote'] ? 'italic' : '' }} mb-4">
                                        {{ $webinar['description'] }}
                                    </p>

                                    <p class="text-[13.5px] text-slate-500 leading-relaxed">
                                        {{ $webinar['speakers'] }}
                                    </p>
                                </article>
                            @endforeach
                        </div>

                        <!-- Next Button -->
                        <button id="webinar-next" type="button" class="shrink-0 w-11 h-11 rounded-full border border-gold-400/60 bg-cream-50 text-gold-600 hover:bg-gold-500 hover:text-white hover:border-gold-500 transition-all duration-200 flex items-center justify-center shadow-sm" aria-label="Webinar berikutnya">
                            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7.5 5 12.5 10l-5 5"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Pagination Dots -->
                    <div class="flex items-center justify-center gap-2.5 mt-6" role="tablist" aria-label="Pilih jadwal webinar">
                        @foreach ($webinars as $index => $webinar)
                            <button
                                type="button"
                                data-webinar-dot="{{ $index }}"
                                aria-label="Lihat webinar {{ $webinar['title'] }}"
                                aria-selected="{{ $index === 1 ? 'true' : 'false' }}"
                                class="h-2 rounded-full transition-all duration-300 {{ $index === 1 ? 'w-7 bg-navy-900' : 'w-2 bg-cream-300 hover:bg-gold-400' }}"
                            ></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Kami Menjaga Amanah -->
    <section class="bg-gradient-to-r from-[#114835] via-[#175b43] to-[#1d674d] text-white py-20 lg:py-24">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-10 items-start">
                <!-- Left Intro -->
                <div class="lg:col-span-4 reveal">
                    <p class="text-xs font-semibold tracking-[0.18em] uppercase text-gold-300 mb-3">
                        Cara Kami Menjaga Amanah
                    </p>
                    <h2 class="font-serif text-3xl sm:text-[38px] lg:text-[40px] font-bold leading-[1.18] mb-4">
                        Menjaga Amanah dalam Setiap Edukasi
                    </h2>
                    <p class="text-[15.5px] text-emerald-50/80 leading-relaxed">
                        Kami percaya bahwa edukasi keuangan bukan hanya tentang menyampaikan ilmu, tetapi juga tentang menjaga kepercayaan dan tanggung jawab.
                    </p>
                </div>

                <!-- Right 4 Pillars with Subtle Hairline Dividers -->
                <div class="lg:col-span-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-0">
                    @foreach ($trustValues as $index => $value)
                        <div class="reveal reveal-delay-{{ $index + 1 }} lg:border-l lg:border-white/15 lg:px-7">
                            <div class="text-gold-300 mb-4">
                                @if ($value['icon'] === 'fathonah')
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M4.5 13.5 9 9l3.5 3.5L17 8l2.5 2.5"/>
                                        <path d="M5 14c1.5 2 3.8 3 7 3s5.5-1 7-3"/>
                                    </svg>
                                @elseif ($value['icon'] === 'amanah')
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 3.5 5 6.5v5.3c0 4.5 3 8 7 9.2 4-1.2 7-4.7 7-9.2V6.5l-7-3Z"/>
                                        <path d="m9.2 12.2 1.9 1.9 3.8-4.1"/>
                                    </svg>
                                @elseif ($value['icon'] === 'siddiq')
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 4v16M7 20h10M5 7h14"/>
                                        <path d="M6.5 7 4 13a3 3 0 0 0 5 0L6.5 7Z"/>
                                        <path d="M17.5 7 15 13a3 3 0 0 0 5 0l-2.5-6Z"/>
                                    </svg>
                                @else
                                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M4 5.5A1.5 1.5 0 0 1 5.5 4H10a2 2 0 0 1 2 2v13a1.5 1.5 0 0 0-1.5-1.5h-5A1.5 1.5 0 0 1 4 16V5.5Z"/>
                                        <path d="M20 5.5A1.5 1.5 0 0 0 18.5 4H14a2 2 0 0 0-2 2v13a1.5 1.5 0 0 1 1.5-1.5h5A1.5 1.5 0 0 0 20 16V5.5Z"/>
                                    </svg>
                                @endif
                            </div>
                            <h3 class="font-semibold text-[16.5px] text-white mb-2.5">
                                {{ $value['title'] }}
                            </h3>
                            <p class="text-[14.5px] text-emerald-50/75 leading-relaxed">
                                {{ $value['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-14 pt-6 border-t border-white/15 text-center reveal">
                <p class="inline-flex items-center justify-center gap-2 text-[13.5px] text-emerald-100/80">
                    <svg class="w-4 h-4 shrink-0 text-gold-300" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                        <circle cx="10" cy="10" r="7.5"/>
                        <path d="M10 9.5v4M10 6.8h.01" stroke-linecap="round"/>
                    </svg>
                    <span>Materi syariah ditelaah sebelum ditayangkan. Edukasi bukan nasihat investasi dan bukan fatwa.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Meet Our Founders -->
    <section class="py-20 lg:py-24">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <!-- Header Row -->
            <div class="grid lg:grid-cols-12 gap-6 lg:gap-8 items-end mb-12 reveal">
                <div class="lg:col-span-5">
                    <p class="text-xs font-semibold tracking-[0.18em] uppercase text-gold-600 mb-3">Meet Our Founders</p>
                    <h2 class="font-serif text-3xl sm:text-[38px] lg:text-[40px] font-bold text-navy-900 leading-[1.18]">
                        Dibangun oleh Individu dengan Keahlian yang Beragam
                    </h2>
                </div>

                <div class="lg:col-span-5">
                    <p class="text-[15px] text-slate-600 leading-relaxed">
                        Barakah Finance hadir melalui kolaborasi para praktisi dan pendidik dengan satu tujuan: membantu masyarakat mengelola harta sesuai prinsip Islam. Afiliasi pribadi tiap founder disebut saat ia tampil.
                    </p>
                </div>

                <div class="lg:col-span-2 lg:text-right">
                    <button
                        id="open-founders-modal"
                        type="button"
                        class="inline-flex items-center gap-1.5 px-5 py-3 rounded-lg border border-gold-400/70 bg-cream-50 text-[13.5px] font-semibold text-brand-900 hover:bg-cream-200 hover:border-gold-500 transition-all duration-200 whitespace-nowrap"
                    >
                        <span>Lihat Profil Lengkap</span>
                        <span aria-hidden="true">→</span>
                    </button>
                </div>
            </div>

            <!-- 5 Founder Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                @foreach ($founders as $index => $founder)
                    <div class="reveal reveal-delay-{{ ($index % 4) + 1 }} bg-cream-200/80 rounded-2xl p-7 text-center border border-cream-300/70 hover:bg-cream-200 hover:-translate-y-1 hover:shadow-card transition-all duration-300 flex flex-col items-center">
                        <div
                            class="w-[88px] h-[88px] mb-5 rounded-full text-white flex items-center justify-center font-serif font-bold text-2xl tracking-wide shadow-sm ring-4 ring-white/80"
                            style="background-color: {{ $founder['bg'] }};"
                        >
                            {{ $founder['inisial'] }}
                        </div>
                        <h3 class="font-semibold text-base text-navy-900">
                            {{ $founder['nama'] }}
                        </h3>
                        <span class="mt-2.5 inline-block px-3.5 py-1 rounded-full bg-white text-xs font-medium text-slate-600 shadow-sm">
                            {{ $founder['bidang'] }}
                        </span>
                    </div>
                @endforeach
            </div>

            <p class="mt-7 text-center text-[13px] text-slate-500/90 reveal">
                Inisial pendiri dapat diganti dengan foto resmi tiap founder saat tersedia.
            </p>
        </div>
    </section>

    <!-- CTA & Form Pendaftaran (Unified Split Card) -->
    <section id="daftar" class="pb-24">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <div class="reveal rounded-2xl overflow-hidden bg-white border border-cream-300/80 shadow-card grid lg:grid-cols-12">
                <!-- Left Emerald Info Panel -->
                <div class="lg:col-span-5 relative overflow-hidden bg-gradient-to-br from-[#0f4432] via-[#165942] to-[#206b50] text-white p-9 sm:p-11 lg:p-14 flex flex-col justify-between">
                    <!-- Subtle Ambient Gold Glow -->
                    <div class="pointer-events-none absolute -top-20 -right-20 w-64 h-64 rounded-full bg-gold-400/15 blur-3xl"></div>

                    <!-- Subtle Mosque Arch Silhouette Watermark -->
                    <svg class="pointer-events-none absolute right-5 bottom-0 h-40 w-auto opacity-15" viewBox="0 0 150 140" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M18 140V76C18 46 39 24 66 24C93 24 114 46 114 76V140H18Z" fill="#FFF4DD"/>
                        <rect x="124" y="38" width="12" height="102" rx="2" fill="#FFF4DD"/>
                        <path d="M121 39L130 16L139 39H121Z" fill="#FFF4DD"/>
                    </svg>

                    <div class="relative">
                        <p class="text-xs font-semibold tracking-[0.18em] uppercase text-gold-300 mb-3.5">
                            Mulai Sekarang
                        </p>
                        <h2 class="font-serif text-3xl sm:text-[38px] font-bold leading-[1.18] text-white mb-4">
                            Mulai Langkah Kecilmu Hari Ini
                        </h2>
                        <p class="text-[15.5px] text-emerald-50/85 leading-relaxed">
                            Unduh worksheet gratis, kenali kondisi keuangan keluargamu, dan rencanakan langkah berikutnya bersama Barakah Finance.
                        </p>
                    </div>

                    <ul class="relative mt-9 pt-7 border-t border-white/15 space-y-3.5 text-[14.5px] text-emerald-50/90">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-gold-300 mt-1" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m4.5 10.5 3.5 3.5 7.5-8"/>
                            </svg>
                            <span>Worksheet Cek Kesehatan Keuangan Keluarga gratis</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-gold-300 mt-1" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m4.5 10.5 3.5 3.5 7.5-8"/>
                            </svg>
                            <span>Informasi jadwal &amp; akses webinar edukasi syariah</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 shrink-0 text-gold-300 mt-1" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m4.5 10.5 3.5 3.5 7.5-8"/>
                            </svg>
                            <span>Data dijaga amanah, tanpa spam &amp; tanpa janji hasil</span>
                        </li>
                    </ul>
                </div>

                <!-- Right White Form Panel -->
                <div id="form-pendaftaran" class="lg:col-span-7 p-9 sm:p-11 lg:p-14 bg-white flex flex-col justify-center">
                    <div class="mb-7">
                        <h3 class="font-serif text-2xl sm:text-[30px] font-bold text-navy-900 mb-2">
                            Daftar Worksheet &amp; Webinar Gratis
                        </h3>
                        <p class="text-[15px] text-slate-500">
                            Lengkapi data singkat di bawah ini agar kami dapat mengirimkan materi atau jadwal pilihanmu.
                        </p>
                    </div>

                    @if (session('pesan_sukses'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-brand-900 text-sm flex items-start gap-3">
                            <svg class="w-5 h-5 shrink-0 text-brand-700 mt-0.5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <circle cx="10" cy="10" r="8"/>
                                <path d="m6.8 10.2 2.2 2.2 4.3-4.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>{{ session('pesan_sukses') }}</span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('registrations.store') }}" class="space-y-5">
                        @csrf

                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="nama" class="block text-sm font-semibold text-navy-900 mb-2">Nama</label>
                                <input
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    value="{{ old('nama') }}"
                                    placeholder="Nama lengkap Anda"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-cream-300 bg-cream-50/40 text-[15px] text-navy-900 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-brand-700 focus:ring-2 focus:ring-brand-800/15 transition"
                                >
                            </div>

                            <div>
                                <label for="kontak" class="block text-sm font-semibold text-navy-900 mb-2">WhatsApp atau email</label>
                                <input
                                    type="text"
                                    id="kontak"
                                    name="kontak"
                                    value="{{ old('kontak') }}"
                                    placeholder="08xx atau nama@email.com"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-cream-300 bg-cream-50/40 text-[15px] text-navy-900 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-brand-700 focus:ring-2 focus:ring-brand-800/15 transition"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="topik" class="block text-sm font-semibold text-navy-900 mb-2">Yang ingin kamu pelajari</label>
                            <select
                                id="topik"
                                name="topik"
                                class="w-full px-4 py-3 rounded-lg border border-cream-300 bg-white text-[15px] text-navy-900 focus:outline-none focus:border-brand-700 focus:ring-2 focus:ring-brand-800/15 transition"
                            >
                                @foreach ($topics as $topic)
                                    <option value="{{ $topic }}" @selected(old('topik') === $topic)>
                                        {{ $topic }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-start gap-2.5 pt-1">
                            <input
                                type="checkbox"
                                id="setuju"
                                name="setuju"
                                value="1"
                                @checked(old('setuju'))
                                required
                                class="mt-1 h-4 w-4 rounded border-cream-300 text-brand-800 accent-[#1b6048] focus:ring-brand-700"
                            >
                            <label for="setuju" class="text-[13.5px] text-slate-600 leading-relaxed">
                                Saya setuju data saya dipakai Barakah Finance untuk mengirim materi dan informasi program, sesuai <a href="#kontak" class="text-brand-800 font-medium underline underline-offset-2 hover:text-brand-900">Kebijakan Privasi</a>.
                            </label>
                        </div>

                        <div class="pt-1">
                            <button type="submit" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-lg bg-brand-800 text-white text-[15px] font-semibold shadow-sm hover:bg-brand-900 hover:-translate-y-0.5 transition-all duration-200">
                                <span>Kirim Pendaftaran</span>
                                <span aria-hidden="true">→</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Minimalist Founder Profile Modal -->
    <div id="founders-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-navy-900/55 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="founders-modal-title">
        <div class="bg-cream-50 rounded-2xl border border-cream-300 shadow-2xl max-w-2xl w-full max-h-[85vh] overflow-y-auto p-6 sm:p-8">
            <div class="flex items-start justify-between gap-4 pb-4 border-b border-cream-300/80 mb-6">
                <div>
                    <p class="text-[11px] font-semibold tracking-[0.16em] uppercase text-gold-600 mb-1">Meet Our Founders</p>
                    <h3 id="founders-modal-title" class="font-serif text-2xl font-bold text-navy-900">Profil Pendiri Barakah Finance</h3>
                </div>
                <button id="close-founders-modal" type="button" class="w-9 h-9 rounded-lg border border-cream-300 bg-white text-slate-600 hover:text-navy-900 hover:bg-cream-200/70 transition flex items-center justify-center" aria-label="Tutup profil pendiri">
                    ✕
                </button>
            </div>

            <div class="space-y-4">
                @foreach ($founders as $founder)
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-cream-300/70">
                        <div
                            class="w-12 h-12 shrink-0 rounded-full text-white flex items-center justify-center font-serif font-bold text-sm"
                            style="background-color: {{ $founder['bg'] }};"
                        >
                            {{ $founder['inisial'] }}
                        </div>
                        <div>
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <h4 class="font-semibold text-navy-900">{{ $founder['nama'] }}</h4>
                                <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-full bg-cream-200 text-brand-900">{{ $founder['bidang'] }}</span>
                            </div>
                            <p class="text-xs sm:text-[13.5px] text-slate-600 leading-relaxed">{{ $founder['ringkasan'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function () {
            // Interactive Webinar Carousel
            const slides = Array.from(document.querySelectorAll('[data-webinar-slide]'));
            const dots = Array.from(document.querySelectorAll('[data-webinar-dot]'));
            const prevBtn = document.getElementById('webinar-prev');
            const nextBtn = document.getElementById('webinar-next');
            const deck = document.getElementById('webinar-deck');

            let currentIndex = slides.length > 1 ? 1 : 0;
            let autoTimer = null;

            function showSlide(targetIndex) {
                if (slides.length === 0) return;
                currentIndex = (targetIndex + slides.length) % slides.length;

                slides.forEach(function (slide, idx) {
                    const isActive = idx === currentIndex;
                    if (isActive) {
                        slide.classList.remove('hidden');
                        requestAnimationFrame(function () {
                            slide.classList.remove('opacity-0', 'translate-x-3');
                            slide.classList.add('opacity-100', 'translate-x-0');
                        });
                    } else {
                        slide.classList.add('hidden', 'opacity-0', 'translate-x-3');
                        slide.classList.remove('opacity-100', 'translate-x-0');
                    }
                });

                dots.forEach(function (dot, idx) {
                    const isActive = idx === currentIndex;
                    dot.setAttribute('aria-selected', String(isActive));
                    dot.classList.toggle('w-6', isActive);
                    dot.classList.toggle('bg-navy-900', isActive);
                    dot.classList.toggle('w-2', !isActive);
                    dot.classList.toggle('bg-cream-300', !isActive);
                });
            }

            function startAutoAdvance() {
                stopAutoAdvance();
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
                autoTimer = window.setInterval(function () {
                    showSlide(currentIndex + 1);
                }, 6500);
            }

            function stopAutoAdvance() {
                if (autoTimer) {
                    window.clearInterval(autoTimer);
                    autoTimer = null;
                }
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function () {
                    showSlide(currentIndex - 1);
                    startAutoAdvance();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function () {
                    showSlide(currentIndex + 1);
                    startAutoAdvance();
                });
            }

            dots.forEach(function (dot) {
                dot.addEventListener('click', function () {
                    showSlide(Number(dot.dataset.webinarDot));
                    startAutoAdvance();
                });
            });

            if (deck) {
                deck.addEventListener('mouseenter', stopAutoAdvance);
                deck.addEventListener('mouseleave', startAutoAdvance);
            }

            startAutoAdvance();

            // Founders Profile Modal
            const modal = document.getElementById('founders-modal');
            const openModalBtn = document.getElementById('open-founders-modal');
            const closeModalBtn = document.getElementById('close-founders-modal');

            function toggleModal(open) {
                if (!modal) return;
                modal.classList.toggle('hidden', !open);
                modal.classList.toggle('flex', open);
                document.body.classList.toggle('overflow-hidden', open);
            }

            if (openModalBtn) {
                openModalBtn.addEventListener('click', function () { toggleModal(true); });
            }
            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', function () { toggleModal(false); });
            }
            if (modal) {
                modal.addEventListener('click', function (event) {
                    if (event.target === modal) {
                        toggleModal(false);
                    }
                });
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                        toggleModal(false);
                    }
                });
            }
        })();
    </script>
@endpush
