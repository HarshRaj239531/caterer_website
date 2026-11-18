<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Patna Caterer & Patna Tent House | Premier Catering & Event Infrastructure in Patna')</title>
    <meta name="description" content="@yield('meta_description', 'Patna Caterer & Patna Tent House - Boring Road, Patna. Premium catering services, Champaran Ahuna Handi, royal wedding tent, German hangar, mandap decor, and event planning. Call 7717702563.')">
    <meta name="keywords" content="Patna Caterer, Patna Tent House, Best Caterers in Patna, Wedding Caterer Boring Road, Champaran Handi Mutton Patna, Tent House Boring Road Patna, Event Organizer Patna">

    @fonts

    <!-- Vite Styles and Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        ::selection {
            background-color: #f59e0b;
            color: #ffffff;
        }
        /* Hairline borders and glass glow */
        .nav-glow {
            box-shadow: 0 10px 30px -10px rgba(245, 158, 11, 0.12), 0 20px 40px -20px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-mesh-light text-slate-800 antialiased font-sans min-h-screen flex flex-col relative overflow-x-hidden selection:bg-amber-500 selection:text-white">

    <!-- Living Fluid Background Gradient Orbs (Framer Motion / CSS Smooth Physics) -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden" aria-hidden="true">
        <!-- Orb 1: Warm Amber Sun -->
        <div class="absolute -top-40 -left-40 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-amber-200/40 via-orange-100/30 to-transparent blur-3xl animate-float-1"></div>

        <!-- Orb 2: Rose Champagne for Wedding Elegance -->
        <div class="absolute top-1/4 -right-40 w-[550px] h-[550px] rounded-full bg-gradient-to-bl from-rose-200/35 via-amber-100/20 to-transparent blur-3xl animate-float-2"></div>

        <!-- Orb 3: Fresh Emerald for Auspicious Sanctity -->
        <div class="absolute -bottom-40 left-1/3 w-[650px] h-[650px] rounded-full bg-gradient-to-tr from-emerald-100/30 via-teal-50/20 to-transparent blur-3xl animate-float-3"></div>

        <!-- Subtle Dot Texture Overlay -->
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#000_1px,transparent_1px)] [background-size:16px_16px]"></div>
    </div>

    <!-- Top Utility Bar (Micro Header with Verified Status) -->
    <div class="relative z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 text-[11px] py-2 px-4 sm:px-6">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-slate-600">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 font-bold tracking-wide">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Booking Open: 2026-2027 Wedding Season
                </span>
                <span class="text-slate-300 hidden md:inline">|</span>
                <span class="text-slate-600 font-medium hidden md:inline">Near A.N. College, Boring Road, Patna, Bihar</span>
            </div>

            <div class="flex items-center gap-4">
                <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer"
                   class="hover:text-amber-700 transition flex items-center gap-1 text-slate-700 font-semibold group">
                    <span class="text-amber-500 group-hover:scale-110 transition-transform">★</span>
                    <span>Justdial Verified 4.8 / 5.0</span>
                    <svg class="w-3 h-3 text-slate-400 group-hover:text-amber-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                <span class="text-slate-300">•</span>
                <a href="tel:7717702563" class="text-slate-900 font-black hover:text-amber-600 transition flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-amber-600" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span>+91 7717702563</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Primary Floating Navigation Bar (Ultra-Professional Glassmorphic Pill) -->
    <header class="sticky top-0 z-40 px-3 sm:px-6 lg:px-8 pt-3 pb-2 transition-all duration-300">
        <div id="main-navbar" class="max-w-7xl mx-auto bg-white/90 backdrop-blur-2xl border border-slate-200/90 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 px-4 sm:px-6 h-18 flex items-center justify-between">
            
            <!-- Brand Monogram & Identity -->
            <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                <div class="relative w-11 h-11 rounded-xl bg-gradient-to-tr from-amber-600 via-amber-500 to-yellow-500 p-0.5 shadow-md shadow-amber-500/25 group-hover:scale-105 transition-transform duration-300">
                    <div class="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                        <span class="font-black text-amber-600 text-lg tracking-tighter">PC</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-1.5">
                        <span class="text-slate-950 font-black text-base sm:text-lg tracking-tight uppercase leading-none group-hover:text-amber-600 transition">
                            Patna Caterer
                        </span>
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    </div>
                    <span class="text-[10px] font-bold text-slate-500 tracking-wider uppercase mt-1">
                        & Patna Tent House
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Items (Dedicated Pages with High-End Active Indicators) -->
            <nav class="hidden lg:flex items-center gap-1 text-xs font-bold text-slate-700">
                <a href="{{ route('home') }}"
                   class="relative px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('home') ? 'bg-slate-950 text-white shadow-sm nav-item-active' : 'hover:bg-slate-100 hover:text-slate-950' }}">
                    Home
                </a>

                <a href="{{ route('catering') }}"
                   class="relative px-3.5 py-2 rounded-xl transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('catering') ? 'bg-slate-950 text-white shadow-sm nav-item-active' : 'hover:bg-slate-100 hover:text-slate-950' }}">
                    <span>Catering & Menus</span>
                    <span class="text-[9px] px-1.5 py-0.2 bg-amber-100 text-amber-800 rounded font-semibold {{ request()->routeIs('catering') ? 'text-slate-900 bg-white' : '' }}">
                        40+ Dishes
                    </span>
                </a>

                <a href="{{ route('tent-house') }}"
                   class="relative px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('tent-house') ? 'bg-slate-950 text-white shadow-sm nav-item-active' : 'hover:bg-slate-100 hover:text-slate-950' }}">
                    Tent House & Decor
                </a>

                <a href="{{ route('packages') }}"
                   class="relative px-3.5 py-2 rounded-xl transition-all duration-200 flex items-center gap-1.5 {{ request()->routeIs('packages') ? 'bg-slate-950 text-white shadow-sm nav-item-active' : 'hover:bg-slate-100 hover:text-slate-950' }}">
                    <span>Packages & Pricing</span>
                    <span class="text-[9px] px-1.5 py-0.2 bg-emerald-100 text-emerald-800 rounded font-semibold {{ request()->routeIs('packages') ? 'text-slate-900 bg-white' : '' }}">
                        Calculator
                    </span>
                </a>

                <a href="{{ route('about') }}"
                   class="relative px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('about') ? 'bg-slate-950 text-white shadow-sm nav-item-active' : 'hover:bg-slate-100 hover:text-slate-950' }}">
                    About Us
                </a>

                <a href="{{ route('contact') }}"
                   class="relative px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-slate-950 text-white shadow-sm nav-item-active' : 'hover:bg-slate-100 hover:text-slate-950' }}">
                    Contact & Booking
                </a>
            </nav>

            <!-- Actions Cluster -->
            <div class="hidden sm:flex items-center gap-2.5">
                <!-- WhatsApp Quick Action -->
                <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20your%20services"
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-1.5 px-3 py-2 text-xs font-bold rounded-xl border border-emerald-300 bg-emerald-50 text-emerald-800 hover:bg-emerald-100 transition shadow-sm"
                   title="Chat on WhatsApp">
                    <svg class="w-4 h-4 fill-current text-emerald-600" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                    <span>WhatsApp</span>
                </a>

                <!-- Primary CTA -->
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center px-4 py-2 text-xs font-black uppercase tracking-wider rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white hover:from-amber-600 hover:to-amber-700 transition shadow-md shadow-amber-500/25">
                    <span>Instant Quote</span>
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-nav-toggle" type="button" class="lg:hidden p-2 rounded-xl text-slate-700 hover:bg-slate-100 transition" aria-label="Open Navigation">
                <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Mobile Drawer Menu (Framer Motion Animated) -->
        <div id="mobile-menu" class="hidden lg:hidden mt-2 max-w-7xl mx-auto bg-white/98 backdrop-blur-2xl border border-slate-200 rounded-2xl p-4 shadow-2xl space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider {{ request()->routeIs('home') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Home</a>
            <a href="{{ route('catering') }}" class="block px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider {{ request()->routeIs('catering') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Catering & Menus</a>
            <a href="{{ route('tent-house') }}" class="block px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider {{ request()->routeIs('tent-house') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Tent House & Decor</a>
            <a href="{{ route('packages') }}" class="block px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider {{ request()->routeIs('packages') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Packages & Pricing</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider {{ request()->routeIs('about') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">About Us</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider {{ request()->routeIs('contact') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Contact & Booking</a>
            
            <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
                <a href="tel:7717702563" class="w-full text-center py-3 bg-slate-950 text-white text-xs font-black rounded-xl uppercase tracking-wider">
                    Call +91 7717702563
                </a>
                <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20your%20services"
                   target="_blank" rel="noopener noreferrer"
                   class="w-full text-center py-3 bg-emerald-600 text-white text-xs font-black rounded-xl uppercase tracking-wider">
                    WhatsApp Chat
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="relative z-10 flex-grow">
        @yield('content')
    </main>

    <!-- Master Footer -->
    <footer class="relative z-10 bg-white/90 backdrop-blur-md border-t border-slate-200 text-slate-600 text-xs py-16 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-slate-200">
                <!-- Col 1: Brand & Contact -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-tr from-amber-600 to-amber-500 text-white font-black text-lg flex items-center justify-center rounded-xl shadow-sm">
                            PC
                        </div>
                        <div>
                            <span class="text-slate-950 font-black text-lg uppercase tracking-tight block">
                                Patna Caterer & Patna Tent House
                            </span>
                            <span class="text-amber-700 font-semibold text-xs uppercase tracking-wider block">
                                Grand Taste & Luxury Event Infrastructure
                            </span>
                        </div>
                    </div>
                    <p class="text-slate-500 leading-relaxed max-w-md">
                        Patna's trusted catering and tent house specialist with 15+ years of excellence. Hosting memorable weddings, receptions, and corporate galas with pure ingredients, Champaran Ahuna Handi, German hangars, and Vedic mandap art.
                    </p>
                    <div class="pt-2 space-y-2 text-slate-700">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                            <span class="font-bold text-slate-900">Head Office:</span>
                            <span>Near A.N. College, Boring Road, Patna - 800013, Bihar</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span class="font-bold text-slate-900">Direct Phone:</span>
                            <a href="tel:7717702563" class="text-amber-700 hover:underline font-bold">+91 7717702563</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                            <span class="font-bold text-slate-900">Justdial Profile:</span>
                            <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-amber-600 underline">
                                Verified Partner (DT-47WRSUKTS1G)
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="text-slate-900 font-bold uppercase tracking-wider text-xs mb-4">Quick Navigation</h4>
                    <ul class="space-y-2.5 font-medium text-slate-600">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-600 transition">Home Page</a></li>
                        <li><a href="{{ route('catering') }}" class="hover:text-amber-600 transition">Catering & Food Menus</a></li>
                        <li><a href="{{ route('tent-house') }}" class="hover:text-amber-600 transition">Tent House & Mandap Decor</a></li>
                        <li><a href="{{ route('packages') }}" class="hover:text-amber-600 transition">Pricing Packages</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-amber-600 transition">About Our Heritage</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-600 transition">Contact & Venue Inquiries</a></li>
                    </ul>
                </div>

                <!-- Col 3: Patna Coverage Areas -->
                <div>
                    <h4 class="text-slate-900 font-bold uppercase tracking-wider text-xs mb-4">Patna Service Regions</h4>
                    <ul class="space-y-1.5 text-slate-500 text-[11px] leading-relaxed">
                        <li>• Boring Road & Boring Canal Road</li>
                        <li>• Bailey Road & Saguna More</li>
                        <li>• Kankarbagh & Rajendra Nagar</li>
                        <li>• Patliputra Colony & Ashiana Nagar</li>
                        <li>• Danapur Cantt & Khagaul</li>
                        <li>• Exhibition Road & Fraser Road</li>
                        <li>• Bihta, Hajipur & Greater Bihar</li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright Strip -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-500">
                <p>© {{ date('Y') }} Patna Caterer & Patna Tent House. All Rights Reserved.</p>
                <p class="flex items-center gap-2">
                    <span>Designed with Warm White Aesthetics for Patna Celebrations</span>
                    <span>•</span>
                    <a href="tel:7717702563" class="font-bold text-slate-700 hover:text-amber-600">Call: 7717702563</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Floating Action Dock (Mobile & Quick Access) -->
    <div class="fixed bottom-4 left-1/2 -translate-x-1/2 z-50 w-[92%] max-w-sm bg-white/95 backdrop-blur-xl border border-slate-200/90 p-2 rounded-2xl shadow-2xl flex items-center justify-between gap-2">
        <a href="tel:7717702563"
           class="flex-1 py-2.5 px-3 bg-slate-950 text-white font-bold text-xs uppercase tracking-wider rounded-xl hover:bg-slate-800 transition flex items-center justify-center gap-1.5 shadow">
            <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
            <span>Call 7717702563</span>
        </a>

        <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20your%20services"
           target="_blank" rel="noopener noreferrer"
           class="flex-1 py-2.5 px-3 bg-emerald-600 text-white font-bold text-xs uppercase tracking-wider rounded-xl hover:bg-emerald-700 transition flex items-center justify-center gap-1.5 shadow-md shadow-emerald-600/20">
            <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
            <span>WhatsApp</span>
        </a>
    </div>

    @stack('scripts')
</body>
</html>
