<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Barakah Finance | Rencanakan Keuangan, Ikhtiarkan Keberkahan')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=1">
    <link rel="alternate icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v=1">
    <link rel="apple-touch-icon" href="{{ asset('favicon-32x32.png') }}?v=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Lora"', 'Georgia', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    colors: {
                        cream: {
                            50: '#fbfaf7',
                            100: '#f8f6f0',
                            200: '#f3ede0',
                            300: '#e9e0cd',
                        },
                        brand: {
                            950: '#0f3d2e',
                            900: '#134c39',
                            800: '#1b6048',
                            700: '#237357',
                            600: '#2d8667',
                        },
                        navy: {
                            900: '#142b3d',
                            800: '#1b364b',
                        },
                        gold: {
                            300: '#e2cc97',
                            400: '#cfa95e',
                            500: '#bd9446',
                            600: '#a37b31',
                        },
                    },
                    boxShadow: {
                        card: '0 8px 28px -6px rgba(20, 43, 61, 0.06), 0 2px 6px -1px rgba(20, 43, 61, 0.03)',
                        'card-hover': '0 18px 40px -12px rgba(20, 43, 61, 0.11), 0 4px 12px -2px rgba(20, 43, 61, 0.04)',
                    },
                },
            },
        };
    </script>

    <style>
        /* Minimalist, refined motion system */
        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition:
                opacity 0.72s cubic-bezier(0.22, 1, 0.36, 1),
                transform 0.72s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: opacity, transform;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-delay-1 { transition-delay: 90ms; }
        .reveal-delay-2 { transition-delay: 180ms; }
        .reveal-delay-3 { transition-delay: 270ms; }
        .reveal-delay-4 { transition-delay: 360ms; }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
        }
        .animate-float-slow {
            animation: floatSlow 6.5s ease-in-out infinite;
        }

        @keyframes softPulseGlow {
            0%, 100% { opacity: 0.75; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.04); }
        }
        .animate-soft-glow {
            animation: softPulseGlow 7s ease-in-out infinite;
            transform-origin: center;
        }

        .nav-link {
            position: relative;
            padding-bottom: 4px;
            transition: color 0.25s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background-color: #bd9446;
            border-radius: 9999px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
        }
        .nav-link:hover::after,
        .nav-link.is-active::after {
            transform: scaleX(1);
        }
        .nav-link.is-active {
            color: #142b3d;
            font-weight: 600;
        }

        .webinar-slide {
            transition: opacity 0.4s cubic-bezier(0.22, 1, 0.36, 1), transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
            .animate-float-slow,
            .animate-soft-glow {
                animation: none !important;
            }
            html {
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body class="bg-cream-100 text-slate-700 font-sans antialiased selection:bg-gold-300/40 selection:text-navy-900">

    <!-- Navbar -->
    <header id="site-header" class="sticky top-0 z-50 bg-cream-50/95 backdrop-blur-md border-b border-cream-300/80 transition-shadow duration-300">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10 h-[84px] flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}#beranda" class="inline-flex items-center gap-3 group" aria-label="Barakah Finance Beranda">
                <svg class="w-10 h-10 shrink-0 transition-transform duration-300 group-hover:scale-105" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M8 31V17C8 11.477 12.477 7 18 7C23.523 7 28 11.477 28 17V31" stroke="#BD9446" stroke-width="2" stroke-linecap="round"/>
                    <path d="M13.2 27.2C13.6 21.6 17.5 17.4 22.8 16.5C22.4 22.2 18.6 26.4 13.2 27.2Z" fill="#1B6048"/>
                </svg>
                <span class="font-serif font-bold text-[19px] leading-[1.08] text-navy-900 tracking-tight">
                    Barakah<br>Finance
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-9 text-[15.5px] font-medium text-slate-600" aria-label="Navigasi Utama">
                <a href="{{ route('home') }}#beranda" data-nav-target="beranda" class="nav-link is-active hover:text-navy-900">Beranda</a>
                <a href="{{ route('home') }}#tentang" data-nav-target="tentang" class="nav-link hover:text-navy-900">Tentang Kami</a>
                <a href="{{ route('home') }}#program" data-nav-target="program" class="nav-link hover:text-navy-900">Program</a>
                <a href="{{ route('home') }}#webinar" data-nav-target="webinar" class="nav-link hover:text-navy-900">Webinar</a>
                <a href="{{ route('home') }}#kontak" data-nav-target="kontak" class="nav-link hover:text-navy-900">Kontak</a>
            </nav>

            <!-- Action & Mobile Trigger -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}#daftar" class="hidden sm:inline-flex items-center gap-2.5 px-6 py-3 rounded-lg bg-brand-800 text-white text-[15px] font-semibold shadow-sm hover:bg-brand-900 hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M10 3.5v9m0 0-3.25-3.25M10 12.5l3.25-3.25M4.5 16h11"/>
                    </svg>
                    <span>Unduh Worksheet</span>
                </a>
                <button id="menu-btn" type="button" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg border border-cream-300 bg-white text-navy-900 hover:bg-cream-200/70 transition" aria-label="Buka menu navigasi" aria-expanded="false">
                    <svg id="menu-icon-open" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                    <svg id="menu-icon-close" class="w-5 h-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M6 6l12 12M18 6l-12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-cream-50 border-t border-cream-300/80 px-5 py-5 space-y-3 text-sm font-medium shadow-md">
            <a href="{{ route('home') }}#beranda" class="block py-1.5 text-navy-900 hover:text-brand-800">Beranda</a>
            <a href="{{ route('home') }}#tentang" class="block py-1.5 text-slate-700 hover:text-brand-800">Tentang Kami</a>
            <a href="{{ route('home') }}#program" class="block py-1.5 text-slate-700 hover:text-brand-800">Program</a>
            <a href="{{ route('home') }}#webinar" class="block py-1.5 text-slate-700 hover:text-brand-800">Webinar</a>
            <a href="{{ route('home') }}#kontak" class="block py-1.5 text-slate-700 hover:text-brand-800">Kontak</a>
            <a href="{{ route('home') }}#daftar" class="mt-2 flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-brand-800 text-white font-semibold hover:bg-brand-900 transition">
                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M10 3.5v9m0 0-3.25-3.25M10 12.5l3.25-3.25M4.5 16h11"/>
                </svg>
                <span>Unduh Worksheet</span>
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="kontak" class="bg-navy-900 text-slate-300 pt-16 pb-12">
        <div class="max-w-[1320px] mx-auto px-5 sm:px-8 lg:px-10">
            <div class="grid md:grid-cols-12 gap-10 pb-12 border-b border-white/10">
                <div class="md:col-span-5">
                    <h4 class="font-serif text-xl font-bold text-white mb-3.5">Barakah Finance</h4>
                    <p class="text-[15px] text-slate-300/80 leading-relaxed max-w-md">
                        Lembaga edukasi dan perencanaan keuangan untuk keluarga Muslim. Barakah Finance bukan lembaga keuangan berizin.
                    </p>
                </div>

                <div class="md:col-span-4">
                    <h4 class="font-serif text-base font-bold text-white tracking-wide mb-3.5">Kontak</h4>
                    <ul class="space-y-2.5 text-[15px] text-slate-300/80">
                        <li class="flex items-center gap-2">
                            <span class="text-slate-400">WhatsApp:</span>
                            <span class="text-gold-300/90">[WHATSAPP]</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-slate-400">Email:</span>
                            <span class="text-gold-300/90">[EMAIL]</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-slate-400">Instagram:</span>
                            <span class="text-gold-300/90">[INSTAGRAM]</span>
                        </li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <h4 class="font-serif text-base font-bold text-white tracking-wide mb-3.5">Informasi</h4>
                    <ul class="space-y-2.5 text-[15px] text-slate-300/80">
                        <li>
                            <a href="#daftar" class="text-gold-300/90 hover:text-white transition">Kebijakan Privasi</a>
                        </li>
                        <li class="text-slate-400 text-[13px]">[ALAMAT / NPWP BILA DIPERLUKAN]</li>
                    </ul>
                </div>
            </div>

            <div class="pt-7 text-[13px] text-slate-400/90 leading-relaxed">
                Seluruh materi bersifat edukasi, bukan nasihat investasi, bukan fatwa, dan tanpa janji hasil. Founder dapat memiliki afiliasi pribadi di bidang keuangan; afiliasi itu disebut saat ia tampil, dan Barakah Finance sendiri bersikap netral terhadap produk. Nama dan skema CIMM berasal dari IARFC Syariah, begitu pula program RFS; Barakah Finance berperan sebagai perantara dan bukan penyelenggara sertifikasi. © 2026 Barakah Finance.
            </div>
        </div>
    </footer>

    <script>
        (function () {
            // Mobile navigation toggle
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const iconOpen = document.getElementById('menu-icon-open');
            const iconClose = document.getElementById('menu-icon-close');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function () {
                    const isHidden = mobileMenu.classList.toggle('hidden');
                    menuBtn.setAttribute('aria-expanded', String(!isHidden));
                    iconOpen.classList.toggle('hidden', !isHidden);
                    iconClose.classList.toggle('hidden', isHidden);
                });

                mobileMenu.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', function () {
                        mobileMenu.classList.add('hidden');
                        menuBtn.setAttribute('aria-expanded', 'false');
                        iconOpen.classList.remove('hidden');
                        iconClose.classList.add('hidden');
                    });
                });
            }

            // Subtle navbar elevation on scroll
            const header = document.getElementById('site-header');
            window.addEventListener('scroll', function () {
                if (!header) return;
                if (window.scrollY > 12) {
                    header.classList.add('shadow-[0_6px_24px_-12px_rgba(20,43,61,0.16)]');
                } else {
                    header.classList.remove('shadow-[0_6px_24px_-12px_rgba(20,43,61,0.16)]');
                }
            }, { passive: true });

            // Scroll reveal observer
            const revealEls = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window && revealEls.length > 0) {
                const revealObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            revealObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

                revealEls.forEach(function (el) {
                    revealObserver.observe(el);
                });
            } else {
                revealEls.forEach(function (el) {
                    el.classList.add('is-visible');
                });
            }

            // Active section indicator on scroll
            const navLinks = document.querySelectorAll('[data-nav-target]');
            const sections = ['beranda', 'tentang', 'program', 'webinar', 'kontak']
                .map(function (id) { return document.getElementById(id); })
                .filter(Boolean);

            if ('IntersectionObserver' in window && sections.length > 0) {
                const sectionObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            const id = entry.target.id;
                            navLinks.forEach(function (link) {
                                link.classList.toggle('is-active', link.dataset.navTarget === id);
                            });
                        }
                    });
                }, { rootMargin: '-30% 0px -55% 0px' });

                sections.forEach(function (sec) {
                    sectionObserver.observe(sec);
                });
            }
        })();
    </script>

    @stack('scripts')
</body>
</html>
