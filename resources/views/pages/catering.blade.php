@extends('layouts.app')

@section('title', 'Catering & Food Menus | Patna Caterer & Patna Tent House')
@section('meta_description', 'Explore rich multi-cuisine catering menus by Patna Caterer. Authentic Champaran Ahuna Handi, Bihari Litti Chokha, live Chaat counters, North Indian, Mughlai & Desserts. Call 7717702563.')

@section('content')
    <!-- Catering Header -->
    <section class="pt-12 pb-16 sm:pt-16 sm:pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                Pure Desi Ghee & Fresh Ingredients
            </span>
            <h1 class="text-4xl sm:text-6xl font-black text-slate-950 uppercase tracking-tight mb-4">
                Grand Catering & Authentic Cuisines
            </h1>
            <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Prepared by experienced Halwais and Awadhi ustads under strict FSSAI hygiene standards. Every recipe is tailored to your family's preferences and regional traditions.
            </p>
        </div>
    </section>

    <!-- Menu Categories Grid -->
    <section class="pb-20">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Category 1: Bihari Heritage -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-1 rounded">
                            Patna Specialty
                        </span>
                        <span class="text-xs text-slate-400 font-mono">01</span>
                    </div>
                    <h3 class="text-xl font-black uppercase text-slate-950 mb-2">Authentic Bihari Delicacies</h3>
                    <p class="text-xs text-slate-500 mb-6">Slow-cooked in clay pots with whole roasted garlic, mustard oil, and pure desi ghee.</p>
                    <ul class="space-y-3 text-xs text-slate-700">
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Champaran Ahuna Handi Mutton</span>
                            <span class="text-slate-400 text-[11px]">Earthen Pot Wood Coal</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Special Litti with Pure Desi Ghee</span>
                            <span class="text-slate-400 text-[11px]">Coal Roasted</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Smoky Baingan & Tamatar Bharta</span>
                            <span class="text-slate-400 text-[11px]">Garlic & Green Chilli</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Bihari Mustard Fish Curry</span>
                            <span class="text-slate-400 text-[11px]">Rohu / Katla</span>
                        </li>
                        <li class="flex justify-between items-center py-1">
                            <span class="font-semibold">Dal Puri, Chana Ghooghni & Kheer</span>
                            <span class="text-slate-400 text-[11px]">Traditional Bhoj</span>
                        </li>
                    </ul>
                </div>

                <!-- Category 2: North Indian & Mughlai -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-1 rounded">
                            Royal Feast
                        </span>
                        <span class="text-xs text-slate-400 font-mono">02</span>
                    </div>
                    <h3 class="text-xl font-black uppercase text-slate-950 mb-2">North Indian & Mughlai</h3>
                    <p class="text-xs text-slate-500 mb-6">Rich aromatic gravies, charcoal tandoor breads, and dum-cooked basmati rice.</p>
                    <ul class="space-y-3 text-xs text-slate-700">
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Dal Makhani (Slow-Cooked Overnight)</span>
                            <span class="text-slate-400 text-[11px]">White Butter</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Paneer Lababdar / Shahi Paneer</span>
                            <span class="text-slate-400 text-[11px]">Cashew Gravy</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Lucknowi Dum Biryani (Veg/Chicken)</span>
                            <span class="text-slate-400 text-[11px]">Burani Raita</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Butter Chicken & Mutton Rogan Josh</span>
                            <span class="text-slate-400 text-[11px]">Kashmiri Mirch</span>
                        </li>
                        <li class="flex justify-between items-center py-1">
                            <span class="font-semibold">Live Tandoor: Garlic Naan & Kulchas</span>
                            <span class="text-slate-400 text-[11px]">Fresh From Clay Oven</span>
                        </li>
                    </ul>
                </div>

                <!-- Category 3: Live Chaat Stalls -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-1 rounded">
                            Live Counters
                        </span>
                        <span class="text-xs text-slate-400 font-mono">03</span>
                    </div>
                    <h3 class="text-xl font-black uppercase text-slate-950 mb-2">Live Chaat & Street Food</h3>
                    <p class="text-xs text-slate-500 mb-6">Crisp, tangy, sweet, and spicy delicacies cooked live at dedicated food booths.</p>
                    <ul class="space-y-3 text-xs text-slate-700">
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Banarasi Tamatar Chaat (Kulhad)</span>
                            <span class="text-slate-400 text-[11px]">Ghee Roasted</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Kolkata Style Puchka (4 Paani)</span>
                            <span class="text-slate-400 text-[11px]">Hing, Pudina, Meetha</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Delhi Dahi Papdi & Moong Bhalla</span>
                            <span class="text-slate-400 text-[11px]">Sweet Chilled Curd</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Tawa Aloo Tikki with Ragda</span>
                            <span class="text-slate-400 text-[11px]">Desi Ghee Crisp</span>
                        </li>
                        <li class="flex justify-between items-center py-1">
                            <span class="font-semibold">Amritsari Paneer Pakora & Pav Bhaji</span>
                            <span class="text-slate-400 text-[11px]">Butter Toasted</span>
                        </li>
                    </ul>
                </div>

                <!-- Category 4: Oriental & Continental -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-1 rounded">
                            Global Flavours
                        </span>
                        <span class="text-xs text-slate-400 font-mono">04</span>
                    </div>
                    <h3 class="text-xl font-black uppercase text-slate-950 mb-2">Chinese & Continental</h3>
                    <p class="text-xs text-slate-500 mb-6">Crispy appetizers, wok-tossed noodles, fried rice, and fresh pasta counters.</p>
                    <ul class="space-y-3 text-xs text-slate-700">
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Chilli Paneer & Crispy Corn</span>
                            <span class="text-slate-400 text-[11px]">Scallion Pepper</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Veg Hakka Noodles & Fried Rice</span>
                            <span class="text-slate-400 text-[11px]">Wok Tossed</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Live Pasta Station (Alfredo/Arrabbiata)</span>
                            <span class="text-slate-400 text-[11px]">Penne & Fusilli</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Steamed & Fried Dimsums</span>
                            <span class="text-slate-400 text-[11px]">Spicy Chilli Garlic</span>
                        </li>
                        <li class="flex justify-between items-center py-1">
                            <span class="font-semibold">Honey Chilli Lotus Stem / Potatoes</span>
                            <span class="text-slate-400 text-[11px]">Sesame Garnish</span>
                        </li>
                    </ul>
                </div>

                <!-- Category 5: Halwai Mithai & Desserts -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-1 rounded">
                            Halwai Mastery
                        </span>
                        <span class="text-xs text-slate-400 font-mono">05</span>
                    </div>
                    <h3 class="text-xl font-black uppercase text-slate-950 mb-2">Mithai & Dessert Lounge</h3>
                    <p class="text-xs text-slate-500 mb-6">Rich khoya sweets, saffron syrups, and hot live desserts cooked on site.</p>
                    <ul class="space-y-3 text-xs text-slate-700">
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Live Crisp Jalebi with Thick Rabdi</span>
                            <span class="text-slate-400 text-[11px]">Hot Kadai</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Hot Gulab Jamun / Kala Jamun</span>
                            <span class="text-slate-400 text-[11px]">Desi Ghee</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Moong Dal Halwa / Gajar Halwa</span>
                            <span class="text-slate-400 text-[11px]">Almond Pistachio</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Matka Malai Kulfi & Falooda</span>
                            <span class="text-slate-400 text-[11px]">Rose Saffron</span>
                        </li>
                        <li class="flex justify-between items-center py-1">
                            <span class="font-semibold">Brownie with Hot Chocolate Fudge</span>
                            <span class="text-slate-400 text-[11px]">Vanilla Scoop</span>
                        </li>
                    </ul>
                </div>

                <!-- Category 6: Welcome Drinks & Refreshments -->
                <div class="glass-card glass-card-hover p-8 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-2.5 py-1 rounded">
                            First Sips
                        </span>
                        <span class="text-xs text-slate-400 font-mono">06</span>
                    </div>
                    <h3 class="text-xl font-black uppercase text-slate-950 mb-2">Welcome Drinks & Beverages</h3>
                    <p class="text-xs text-slate-500 mb-6">Chilled artisanal mocktails for summers and hot kulhad drinks for winter evenings.</p>
                    <ul class="space-y-3 text-xs text-slate-700">
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Fresh Mint Virgin Mojito & Blue Lagoon</span>
                            <span class="text-slate-400 text-[11px]">Crushed Ice</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Traditional Spiced Sattu Sharbat</span>
                            <span class="text-slate-400 text-[11px]">Roasted Jeera</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Kesar Badam Thandai / Milk Shake</span>
                            <span class="text-slate-400 text-[11px]">Pistachio Saffron</span>
                        </li>
                        <li class="flex justify-between items-center py-1 border-b border-slate-100">
                            <span class="font-semibold">Kulhad Masala Chai & Ginger Tea</span>
                            <span class="text-slate-400 text-[11px]">Steaming Hot</span>
                        </li>
                        <li class="flex justify-between items-center py-1">
                            <span class="font-semibold">Italian Espresso & Cappuccino Coffee</span>
                            <span class="text-slate-400 text-[11px]">Bean to Cup</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom CTA Banner -->
            <div class="mt-16 glass-card p-8 sm:p-12 rounded-3xl border border-amber-200 text-center bg-gradient-to-r from-amber-50 to-orange-50">
                <h3 class="text-2xl sm:text-3xl font-black uppercase tracking-tight text-slate-950 mb-3">
                    Want a Customized Menu for Your Event?
                </h3>
                <p class="text-slate-600 text-sm max-w-xl mx-auto mb-6">
                    We invite you to our central kitchen at 233, Rajesh Petrol Building, A N College, Boring Road for a menu planning and tasting consultation.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="https://wa.me/917717702563?text=Hi%20Patna%20Caterer,%20please%20send%20your%20full%20menu%20options"
                       target="_blank" rel="noopener noreferrer"
                       class="px-8 py-3.5 bg-emerald-600 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-emerald-700 transition shadow">
                        Request Menu PDF on WhatsApp
                    </a>
                    <a href="{{ route('contact') }}" class="px-8 py-3.5 bg-slate-900 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-amber-600 transition">
                        Book a Tasting Session
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
