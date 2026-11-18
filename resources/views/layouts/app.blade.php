<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Patna Caterer & Patna Tent House | Luxury Catering & Event Infrastructure in Patna')</title>
    <meta name="description" content="@yield('meta_description', 'Patna Caterer & Patna Tent House - Boring Road, Patna. Premium catering services, Champaran Ahuna Handi, royal wedding tent, German hangar, mandap decor, and event planning. Call 7717702563.')">
    <meta name="keywords" content="Patna Caterer, Patna Tent House, Best Caterers in Patna, Wedding Caterer Boring Road, Champaran Handi Mutton Patna, Tent House Boring Road Patna, Event Organizer Patna">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Vite Styles and Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        ::selection {
            background-color: #f59e0b;
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-mesh-light text-slate-800 antialiased font-sans min-h-screen flex flex-col relative overflow-x-hidden selection:bg-amber-500 selection:text-white">

    <!-- Living Ambient Background (Subtle Luxury Gradient Orbs) -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -top-32 -left-32 w-[500px] h-[500px] rounded-full bg-gradient-to-br from-amber-200/35 via-orange-100/25 to-transparent blur-3xl animate-float-1"></div>
        <div class="absolute top-1/3 -right-32 w-[480px] h-[480px] rounded-full bg-gradient-to-bl from-rose-200/30 via-amber-100/20 to-transparent blur-3xl animate-float-2"></div>
        <div class="absolute -bottom-32 left-1/4 w-[550px] h-[550px] rounded-full bg-gradient-to-tr from-emerald-100/25 via-teal-50/15 to-transparent blur-3xl animate-float-3"></div>
        <div class="absolute inset-0 opacity-[0.025] bg-[radial-gradient(#000_1px,transparent_1px)] [background-size:20px_20px]"></div>
    </div>

    <!-- Minimal, High-End Floating Navbar (No Clutter, Clean & Refined) -->
    <header class="sticky top-0 z-50 px-4 sm:px-6 lg:px-8 pt-4 pb-2">
        <nav id="main-navbar" class="max-w-6xl mx-auto bg-white/85 backdrop-blur-2xl border border-slate-200/80 rounded-full px-5 sm:px-7 h-16 flex items-center justify-between shadow-[0_4px_25px_-5px_rgba(0,0,0,0.04)] transition-all duration-300">
            
            <!-- Brand Logo (Clean & Elegant) -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                <div class="w-8 h-8 rounded-lg bg-slate-950 text-white flex items-center justify-center font-bold text-xs tracking-tight group-hover:bg-amber-600 transition-colors">
                    PC
                </div>
                <div class="flex items-baseline gap-1.5">
                    <span class="text-slate-950 font-bold text-sm sm:text-base tracking-tight">
                        Patna Caterer
                    </span>
                    <span class="text-[11px] font-medium text-slate-400 hidden sm:inline">
                        & Tent House
                    </span>
                </div>
            </a>

            <!-- Clean Nav Links (Simple, 1-Word/Short, Highly Readable) -->
            <div class="hidden md:flex items-center gap-1 text-xs font-semibold text-slate-600">
                <a href="{{ route('home') }}"
                   class="px-3.5 py-1.5 rounded-full transition {{ request()->routeIs('home') ? 'bg-slate-950 text-white nav-item-active' : 'hover:text-slate-950 hover:bg-slate-100/70' }}">
                    Home
                </a>
                <a href="{{ route('catering') }}"
                   class="px-3.5 py-1.5 rounded-full transition {{ request()->routeIs('catering') ? 'bg-slate-950 text-white nav-item-active' : 'hover:text-slate-950 hover:bg-slate-100/70' }}">
                    Catering
                </a>
                <a href="{{ route('tent-house') }}"
                   class="px-3.5 py-1.5 rounded-full transition {{ request()->routeIs('tent-house') ? 'bg-slate-950 text-white nav-item-active' : 'hover:text-slate-950 hover:bg-slate-100/70' }}">
                    Tent & Decor
                </a>
                <a href="{{ route('gallery') }}"
                   class="px-3.5 py-1.5 rounded-full transition {{ request()->routeIs('gallery') ? 'bg-slate-950 text-white nav-item-active' : 'hover:text-slate-950 hover:bg-slate-100/70' }}">
                    Gallery
                </a>
                <a href="{{ route('about') }}"
                   class="px-3.5 py-1.5 rounded-full transition {{ request()->routeIs('about') ? 'bg-slate-950 text-white nav-item-active' : 'hover:text-slate-950 hover:bg-slate-100/70' }}">
                    About
                </a>
                <a href="{{ route('contact') }}"
                   class="px-3.5 py-1.5 rounded-full transition {{ request()->routeIs('contact') ? 'bg-slate-950 text-white nav-item-active' : 'hover:text-slate-950 hover:bg-slate-100/70' }}">
                    Contact
                </a>
            </div>

            <!-- Right: Minimal Contact & Action Button -->
            <div class="flex items-center gap-3">
                <a href="tel:7717702563" class="hidden sm:flex items-center gap-1.5 text-xs font-semibold text-slate-700 hover:text-amber-600 transition">
                    <svg class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
                    <span>7717702563</span>
                </a>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center px-4 py-2 text-xs font-semibold rounded-full bg-slate-950 text-white hover:bg-slate-800 transition shadow-sm">
                    Book Event
                </a>

                <!-- Mobile Hamburger Icon -->
                <button id="mobile-nav-toggle" type="button" class="md:hidden p-1.5 rounded-full text-slate-700 hover:bg-slate-100 transition" aria-label="Toggle navigation">
                    <svg id="hamburger-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    <svg id="close-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </nav>

        <!-- Minimal Mobile Menu Overlay -->
        <div id="mobile-menu" class="hidden md:hidden max-w-sm mx-auto mt-2 bg-white/95 backdrop-blur-2xl border border-slate-200/80 rounded-2xl p-4 shadow-xl space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-xl text-xs font-semibold {{ request()->routeIs('home') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Home</a>
            <a href="{{ route('catering') }}" class="block px-3 py-2 rounded-xl text-xs font-semibold {{ request()->routeIs('catering') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Catering</a>
            <a href="{{ route('tent-house') }}" class="block px-3 py-2 rounded-xl text-xs font-semibold {{ request()->routeIs('tent-house') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Tent & Decor</a>
            <a href="{{ route('gallery') }}" class="block px-3 py-2 rounded-xl text-xs font-semibold {{ request()->routeIs('gallery') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Gallery</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-xl text-xs font-semibold {{ request()->routeIs('about') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">About</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-xl text-xs font-semibold {{ request()->routeIs('contact') ? 'bg-slate-950 text-white' : 'text-slate-800 hover:bg-slate-100' }}">Contact</a>
            
            <div class="pt-2 border-t border-slate-100 flex gap-2">
                <a href="tel:7717702563" class="flex-1 text-center py-2 bg-slate-100 text-slate-900 text-xs font-semibold rounded-lg">
                    Call 7717702563
                </a>
                <a href="https://wa.me/917717702563" target="_blank" rel="noopener noreferrer" class="flex-1 text-center py-2 bg-emerald-600 text-white text-xs font-semibold rounded-lg">
                    WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="relative z-10 flex-grow">
        @yield('content')
    </main>

    <!-- Master Footer -->
    <footer class="relative z-10 bg-white/90 backdrop-blur-md border-t border-slate-200 text-slate-600 text-xs py-14 pb-28 md:pb-14 mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-10 border-b border-slate-200">
                <!-- Col 1: Brand -->
                <div class="md:col-span-2 space-y-3">
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-slate-950 text-white font-bold text-xs flex items-center justify-center">
                            PC
                        </div>
                        <span class="text-slate-950 font-bold text-base tracking-tight">
                            Patna Caterer & Patna Tent House
                        </span>
                    </div>
                    <p class="text-slate-500 leading-relaxed max-w-md">
                        Patna's trusted catering and luxury event infrastructure partner with 15+ years of excellence. Hosting memorable weddings, receptions, and corporate galas across Bihar.
                    </p>
                    <div class="pt-1 text-slate-600 space-y-1">
                        <div><strong>Location:</strong> Near A.N. College, Boring Road, Patna, Bihar - 800013</div>
                        <div><strong>Phone:</strong> <a href="tel:7717702563" class="font-bold text-slate-900 hover:text-amber-600">+91 7717702563</a></div>
                        <div><strong>Profile:</strong> <a href="https://jsdl.in/DT-47WRSUKTS1G" target="_blank" rel="noopener noreferrer" class="hover:text-amber-600 underline">Justdial Verified (DT-47WRSUKTS1G)</a></div>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div>
                    <h4 class="text-slate-900 font-bold text-xs mb-3">Navigation</h4>
                    <ul class="space-y-2 text-slate-600">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-600 transition">Home</a></li>
                        <li><a href="{{ route('catering') }}" class="hover:text-amber-600 transition">Catering & Menus</a></li>
                        <li><a href="{{ route('tent-house') }}" class="hover:text-amber-600 transition">Tent & Decor</a></li>
                        <li><a href="{{ route('gallery') }}" class="hover:text-amber-600 transition">Event Gallery</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-amber-600 transition">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-600 transition">Contact & Booking</a></li>
                    </ul>
                </div>

                <!-- Col 3: Areas Served -->
                <div>
                    <h4 class="text-slate-900 font-bold text-xs mb-3">Patna Coverage</h4>
                    <p class="text-slate-500 leading-relaxed text-[11px]">
                        Boring Road, Bailey Road, Kankarbagh, Patliputra Colony, Danapur, Rajendra Nagar, Ashiana Nagar, Saguna More, Bihta, and Hajipur.
                    </p>
                </div>
            </div>

            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-[11px] text-slate-500">
                <p>© {{ date('Y') }} Patna Caterer & Patna Tent House. All Rights Reserved.</p>
                <p><a href="tel:7717702563" class="hover:text-slate-900 font-medium">Inquiries: +91 7717702563</a></p>
            </div>
        </div>
    </footer>

    <!-- Floating Mobile Quick Action Bar -->
    <div class="fixed bottom-4 left-1/2 -translate-x-1/2 z-50 w-[90%] max-w-xs bg-white/90 backdrop-blur-xl border border-slate-200/90 p-1.5 rounded-full shadow-2xl flex items-center justify-between gap-2 md:hidden">
        <a href="tel:7717702563"
           class="flex-1 py-2 px-3 bg-slate-950 text-white font-semibold text-xs rounded-full hover:bg-slate-800 transition flex items-center justify-center gap-1.5 shadow-sm">
            <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"/></svg>
            <span>Call</span>
        </a>

        <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20your%20services"
           target="_blank" rel="noopener noreferrer"
           class="flex-1 py-2 px-3 bg-emerald-600 text-white font-semibold text-xs rounded-full hover:bg-emerald-700 transition flex items-center justify-center gap-1.5 shadow-sm">
            <svg class="w-3.5 h-3.5 fill-current text-white" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
            <span>WhatsApp</span>
        </a>
    </div>

    @stack('scripts')
</body>
</html>
