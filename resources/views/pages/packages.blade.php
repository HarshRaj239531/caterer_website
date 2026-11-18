@extends('layouts.app')

@section('title', 'Packages & Pricing | Patna Caterer & Patna Tent House')
@section('meta_description', 'Transparent catering and tent house pricing packages in Patna. Compare Silver, Gold, and Platinum wedding packages. Interactive cost calculator. Call 7717702563.')

@section('content')
    <!-- Packages Header -->
    <section class="pt-12 pb-16 sm:pt-16 sm:pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                Zero Hidden Charges Guarantee
            </span>
            <h1 class="text-4xl sm:text-6xl font-black text-slate-950 uppercase tracking-tight mb-4">
                Transparent Packages & Pricing
            </h1>
            <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Choose from our pre-curated packages or customize your per-plate menu and decor to match your exact guest count and budget.
            </p>
        </div>
    </section>

    <!-- Package Cards Grid -->
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

                <!-- Tier 1: Silver -->
                <div class="glass-card glass-card-hover p-8 sm:p-10 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-600">Silver Package</span>
                            <span class="text-[11px] bg-slate-100 text-slate-700 font-semibold px-2.5 py-0.5 rounded-full">Intimate</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-950 mb-2">Birthday, Tilak & Puja</h3>
                        <p class="text-xs text-slate-500 mb-6">Designed for 50 to 200 guests with core catering and neat canopy setup.</p>

                        <div class="border-y border-slate-100 py-4 mb-6">
                            <span class="text-xs uppercase text-slate-400 font-semibold tracking-wider">Starting Range</span>
                            <div class="text-3xl font-black text-slate-900 font-mono mt-1">₹450 - ₹650 <span class="text-xs font-normal text-slate-500">/ per plate</span></div>
                            <span class="text-[11px] text-slate-400">Pure Veg or Standard Non-Veg</span>
                        </div>

                        <ul class="space-y-3 text-xs text-slate-700 mb-8 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>18+ Course Buffet (Starters, Mains, Breads, Dessert)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Standard Canopy / Pandal Decor & Lighting</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Bone China Crockery & Chafing Dish Setups</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Uniformed Buffet Stewards & Cleaners</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Drinking Water Dispensers & Waste Clearance</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20the%20Silver%20Package"
                       target="_blank" rel="noopener noreferrer"
                       class="w-full py-3.5 text-center bg-slate-100 hover:bg-slate-200 text-slate-900 font-bold text-xs uppercase tracking-wider rounded-xl transition">
                        Select Silver Package
                    </a>
                </div>

                <!-- Tier 2: Gold (Highlighted) -->
                <div class="glass-card glass-card-hover p-8 sm:p-10 rounded-2xl border-2 border-amber-400 relative shadow-2xl shadow-amber-500/15 flex flex-col justify-between">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-amber-500 text-white text-[11px] font-black uppercase tracking-widest px-4 py-1 rounded-full shadow">
                        Most Popular in Patna
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-4 mt-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Gold Package</span>
                            <span class="text-[11px] bg-amber-100 text-amber-800 font-bold px-2.5 py-0.5 rounded-full">Grand Wedding</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-950 mb-2">Grand Wedding & Reception</h3>
                        <p class="text-xs text-slate-500 mb-6">Our flagship choice for weddings with 200 to 800+ guests.</p>

                        <div class="border-y border-amber-100 py-4 mb-6">
                            <span class="text-xs uppercase text-amber-700 font-semibold tracking-wider">Starting Range</span>
                            <div class="text-3xl font-black text-amber-600 font-mono mt-1">₹750 - ₹1,150 <span class="text-xs font-normal text-slate-500">/ per plate</span></div>
                            <span class="text-[11px] text-slate-500">Includes live food counters + Full decor</span>
                        </div>

                        <ul class="space-y-3 text-xs text-slate-700 mb-8 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600 font-bold">✓</span>
                                <span><strong>32+ Item Royal Feast:</strong> Mughlai, Bihari & North Indian</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600 font-bold">✓</span>
                                <span><strong>Live Chaat Counters:</strong> Puchka, Banarasi Chaat & Tikkis</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600 font-bold">✓</span>
                                <span><strong>Live Desserts:</strong> Hot Jalebi-Rabdi, Gajar Halwa, Kulfi</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600 font-bold">✓</span>
                                <span><strong>Royal Wedding Mandap:</strong> Floral arches & sacred altar</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600 font-bold">✓</span>
                                <span><strong>Illuminated Entrance:</strong> Fairy-light tunnel & red carpet</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600 font-bold">✓</span>
                                <span>VIP Banquet Seating & Round Tables with satin linen</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20the%20Gold%20Wedding%20Package"
                       target="_blank" rel="noopener noreferrer"
                       class="w-full py-3.5 text-center bg-gradient-to-r from-amber-500 to-amber-600 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:from-amber-600 hover:to-amber-700 transition shadow-lg shadow-amber-500/25">
                        Book Gold Package
                    </a>
                </div>

                <!-- Tier 3: Platinum Royal -->
                <div class="glass-card glass-card-hover p-8 sm:p-10 rounded-2xl border border-slate-200 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-600">Platinum Royal</span>
                            <span class="text-[11px] bg-slate-100 text-slate-700 font-semibold px-2.5 py-0.5 rounded-full">VIP / Luxury</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-950 mb-2">Celebrity Gala & Turnkey</h3>
                        <p class="text-xs text-slate-500 mb-6">Unrivalled luxury for 500 to 3,000+ guests with German hangar.</p>

                        <div class="border-y border-slate-100 py-4 mb-6">
                            <span class="text-xs uppercase text-slate-400 font-semibold tracking-wider">Starting Range</span>
                            <div class="text-3xl font-black text-slate-900 font-mono mt-1">₹1,350 - ₹2,200 <span class="text-xs font-normal text-slate-500">/ per plate</span></div>
                            <span class="text-[11px] text-slate-400">Turnkey Event & Hospitality Management</span>
                        </div>

                        <ul class="space-y-3 text-xs text-slate-700 mb-8 font-medium">
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>45+ Course Global Luxury Buffet (Italian, Chinese, Awadhi)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Champaran Ahuna Handi Mutton Live earthen pot station</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Full German Hangar Waterproof AC Pandal setup</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Grand Floral Art installations with imported exotic flowers</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-amber-600">✓</span>
                                <span>Truss light, Sound DJ, LED video wall & Silent DG sets</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20I%20am%20inquiring%20about%20the%20Platinum%20Royal%20Package"
                       target="_blank" rel="noopener noreferrer"
                       class="w-full py-3.5 text-center bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition">
                        Select Platinum Package
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- INTERACTIVE ESTIMATE CALCULATOR -->
    <section class="py-16 bg-white/70 backdrop-blur-md border-y border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                    Instant Planning Tool
                </span>
                <h2 class="text-3xl sm:text-4xl font-black uppercase tracking-tight text-slate-950 mt-3 mb-2">
                    Live Event Cost Calculator
                </h2>
                <p class="text-slate-600 text-sm">
                    Move the sliders to calculate real-time approximate budget projections for your Patna celebration.
                </p>
            </div>

            <div class="glass-card p-6 sm:p-10 rounded-3xl border border-slate-200 shadow-xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Controls -->
                    <div class="space-y-6">
                        <!-- Guest Slider -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="calc-guests" class="text-xs font-bold uppercase tracking-wider text-slate-900">
                                    Number of Guests:
                                </label>
                                <span id="guest-count-label" class="text-base font-black font-mono bg-amber-500 text-white px-3 py-0.5 rounded-lg">
                                    350 Guests
                                </span>
                            </div>
                            <input id="calc-guests" type="range" min="50" max="1500" step="25" value="350"
                                   class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-amber-500">
                            <div class="flex justify-between text-[11px] text-slate-500 mt-1">
                                <span>50 Guests</span>
                                <span>750 Guests</span>
                                <span>1500+ Guests</span>
                            </div>
                        </div>

                        <!-- Event Type Selection -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-900 mb-2">
                                Event Type:
                            </label>
                            <div class="grid grid-cols-3 gap-2">
                                <button type="button" onclick="setEventType('Wedding', 1.2, this)" class="event-btn border-2 border-amber-500 bg-amber-50 text-amber-900 py-2 px-2 text-xs font-bold uppercase rounded-lg text-center">
                                    Wedding
                                </button>
                                <button type="button" onclick="setEventType('Reception', 1.0, this)" class="event-btn border border-slate-300 bg-white text-slate-800 py-2 px-2 text-xs font-bold uppercase rounded-lg text-center hover:border-amber-400">
                                    Reception
                                </button>
                                <button type="button" onclick="setEventType('Birthday', 0.8, this)" class="event-btn border border-slate-300 bg-white text-slate-800 py-2 px-2 text-xs font-bold uppercase rounded-lg text-center hover:border-amber-400">
                                    Birthday/Puja
                                </button>
                            </div>
                        </div>

                        <!-- Food Type -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-900 mb-2">
                                Food Preference:
                            </label>
                            <div class="grid grid-cols-2 gap-3">
                                <button type="button" onclick="setFoodType('Pure Veg', 600, this)" class="food-btn border border-slate-300 bg-white text-slate-800 py-2.5 px-3 text-xs font-bold uppercase rounded-lg text-center hover:border-amber-400">
                                    Pure Vegetarian
                                </button>
                                <button type="button" onclick="setFoodType('Veg & Non-Veg', 850, this)" class="food-btn border-2 border-amber-500 bg-amber-50 text-amber-900 py-2.5 px-3 text-xs font-bold uppercase rounded-lg text-center">
                                    Veg & Non-Veg
                                </button>
                            </div>
                        </div>

                        <!-- Tent Requirement -->
                        <div>
                            <label class="flex items-center gap-3 p-3 border border-slate-200 bg-white rounded-xl cursor-pointer hover:border-amber-400 transition">
                                <input type="checkbox" id="calc-tent" checked onchange="calculateEstimate()" class="w-4 h-4 accent-amber-500 rounded">
                                <span class="text-xs font-semibold text-slate-800">Include Complete Tent House, Mandap & Stage Decor</span>
                            </label>
                        </div>
                    </div>

                    <!-- Live Calculation Result Card -->
                    <div class="bg-gradient-to-br from-slate-900 to-slate-950 text-white p-8 rounded-2xl shadow-xl flex flex-col justify-between h-full">
                        <div>
                            <span class="inline-block text-[11px] font-bold uppercase tracking-widest text-amber-400 border border-slate-700 px-3 py-1 rounded-full mb-3">
                                Projected Total Budget
                            </span>
                            <div id="estimated-total" class="text-3xl sm:text-4xl font-black text-white font-mono my-2">
                                ₹3,75,000 - ₹4,40,000
                            </div>
                            <div id="estimated-per-plate" class="text-xs text-amber-300 font-mono mb-6 pb-6 border-b border-slate-800">
                                Approx ₹950 - ₹1,150 / guest (All inclusive)
                            </div>

                            <div class="space-y-2 text-left text-xs text-slate-300 mb-6">
                                <div class="flex justify-between">
                                    <span>Food Spread:</span>
                                    <span id="summary-food" class="text-white font-bold">Veg & Non-Veg Multi-Cuisine</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Guest Count:</span>
                                    <span id="summary-guests" class="text-white font-bold">350 Guests</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Tent & Decor:</span>
                                    <span id="summary-tent" class="text-white font-bold">Mandap, Stage & Lighting Included</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a id="calc-whatsapp-btn" href="#" target="_blank" rel="noopener noreferrer"
                               class="w-full py-3.5 px-4 bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl transition flex items-center justify-center gap-2 shadow">
                                <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                                <span>Forward Estimate to WhatsApp</span>
                            </a>
                            <p class="text-[10px] text-slate-400 mt-2 text-center">Final quotation depends on dish selections and lawn dimensions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        let currentEventType = 'Wedding';
        let eventMultiplier = 1.2;
        let currentFoodType = 'Veg & Non-Veg';
        let basePlateCost = 850;

        function setEventType(type, multiplier, btnElement) {
            currentEventType = type;
            eventMultiplier = multiplier;

            document.querySelectorAll('.event-btn').forEach(b => {
                b.classList.remove('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');
                b.classList.add('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            });
            btnElement.classList.remove('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            btnElement.classList.add('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');

            calculateEstimate();
        }

        function setFoodType(type, plateCost, btnElement) {
            currentFoodType = type;
            basePlateCost = plateCost;

            document.querySelectorAll('.food-btn').forEach(b => {
                b.classList.remove('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');
                b.classList.add('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            });
            btnElement.classList.remove('border', 'border-slate-300', 'bg-white', 'text-slate-800');
            btnElement.classList.add('border-2', 'border-amber-500', 'bg-amber-50', 'text-amber-900');

            calculateEstimate();
        }

        function calculateEstimate() {
            const guestSlider = document.getElementById('calc-guests');
            const guests = parseInt(guestSlider.value);
            const includeTent = document.getElementById('calc-tent').checked;

            document.getElementById('guest-count-label').innerText = guests + ' Guests';
            document.getElementById('summary-guests').innerText = guests + ' Guests';
            document.getElementById('summary-food').innerText = currentFoodType;
            document.getElementById('summary-tent').innerText = includeTent ? 'Mandap, Stage & Lighting Included' : 'Food Catering Only';

            const minFoodPlate = Math.round(basePlateCost * (eventMultiplier > 1 ? 1.05 : 0.95));
            const maxFoodPlate = Math.round(minFoodPlate * 1.2);

            let minTotal = guests * minFoodPlate;
            let maxTotal = guests * maxFoodPlate;

            if (includeTent) {
                const tentCostMin = Math.max(45000, guests * 180);
                const tentCostMax = Math.max(70000, guests * 240);
                minTotal += tentCostMin;
                maxTotal += tentCostMax;
            }

            const perPlateMin = Math.round(minTotal / guests);
            const perPlateMax = Math.round(maxTotal / guests);

            const formatINR = (num) => '₹' + num.toLocaleString('en-IN');

            document.getElementById('estimated-total').innerText = formatINR(minTotal) + ' - ' + formatINR(maxTotal);
            document.getElementById('estimated-per-plate').innerText = 'Approx ' + formatINR(perPlateMin) + ' - ' + formatINR(perPlateMax) + ' / guest (' + (includeTent ? 'Food + Tent Decor' : 'Catering Only') + ')';

            const waText = encodeURIComponent(
                "Namaste Patna Caterer & Tent House,\n" +
                "I calculated an estimate on your website:\n" +
                "• Event: " + currentEventType + "\n" +
                "• Guests: " + guests + "\n" +
                "• Food Choice: " + currentFoodType + "\n" +
                "• Tent & Decor Included: " + (includeTent ? "Yes" : "No") + "\n" +
                "• Estimated Range: " + formatINR(minTotal) + " - " + formatINR(maxTotal) + "\n\n" +
                "Please share your detailed dish options and confirm date availability!"
            );
            document.getElementById('calc-whatsapp-btn').href = "https://wa.me/917717702563?text=" + waText;
        }

        document.getElementById('calc-guests').addEventListener('input', calculateEstimate);
        calculateEstimate();
    </script>
    @endpush
@endsection
