@extends('layouts.app')

@section('title', 'About Us | Patna Caterer & Patna Tent House')
@section('meta_description', 'About Patna Caterer & Patna Tent House - Over 15 years of culinary excellence and royal event infrastructure in Boring Road, Patna. Call 7717702563.')

@section('content')
    <!-- About Header -->
    <section class="pt-12 pb-16 sm:pt-16 sm:pb-20 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                15+ Years of Trust in Patna
            </span>
            <h1 class="text-4xl sm:text-6xl font-black text-slate-950 uppercase tracking-tight mb-4">
                Our Story & Hospitality Values
            </h1>
            <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Founded with a singular passion: to deliver unforgettable culinary taste and majestic event infrastructure so Patna families can celebrate with complete peace of mind.
            </p>
        </div>
    </section>

    <!-- Narrative & Values Grid -->
    <section class="pb-20">
        <div class="max-w-7xl 2xl:max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Two Column Story -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="glass-card p-8 sm:p-12 rounded-3xl border border-slate-200">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-700 bg-amber-50 border border-amber-200 px-3 py-1 rounded-full">
                        Based in Boring Road, Patna
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-black uppercase tracking-tight text-slate-950 mt-4 mb-4">
                        Rooted in Bihar's Royal Traditions
                    </h2>
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">
                        In Bihar, hospitality is an emotion. When guests attend a wedding, the taste of the food and the grandeur of the pandal define the memories they take home.
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Over the past 15 years, <strong>Patna Caterer & Patna Tent House</strong> has grown from an intimate local caterer into one of the city's premier turnkey event partners. Located at 233, Rajesh Petrol Building, A N College, Boring Road, our central commissary kitchen and vast equipment depot service celebrations across the entire state.
                    </p>
                    <div class="pt-4 border-t border-slate-200 flex items-center gap-6 text-xs text-slate-700">
                        <div>
                            <span class="block text-2xl font-black text-slate-950 font-mono">1,200+</span>
                            <span class="text-slate-500">Events Hosted</span>
                        </div>
                        <div class="w-px h-8 bg-slate-200"></div>
                        <div>
                            <span class="block text-2xl font-black text-slate-950 font-mono">100%</span>
                            <span class="text-slate-500">In-house Equipment</span>
                        </div>
                        <div class="w-px h-8 bg-slate-200"></div>
                        <div>
                            <span class="block text-2xl font-black text-slate-950 font-mono">4.8★</span>
                            <span class="text-slate-500">Justdial Verified</span>
                        </div>
                    </div>
                </div>

                <!-- Core Pillars -->
                <div class="space-y-6">
                    <div class="glass-card glass-card-hover p-6 rounded-2xl border border-slate-200">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center font-bold">01</div>
                            <h3 class="text-lg font-black uppercase text-slate-950">Pure Desi Ghee & Fresh Sourcing</h3>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed pl-14">
                            We never compromise on health or flavour. Using certified AGMARK spices, pure cow and buffalo desi ghee, and fresh vegetables sourced daily from local farmer markets.
                        </p>
                    </div>

                    <div class="glass-card glass-card-hover p-6 rounded-2xl border border-slate-200">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center font-bold">02</div>
                            <h3 class="text-lg font-black uppercase text-slate-950">Dedicated Culinary Ustads</h3>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed pl-14">
                            Specialized chefs for every cuisine: Traditional Bihari Halwais for Litti & sweets, Lucknowi Ustads for Dum Biryani & gravies, and Continental/Chinese wok masters.
                        </p>
                    </div>

                    <div class="glass-card glass-card-hover p-6 rounded-2xl border border-slate-200">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center font-bold">03</div>
                            <h3 class="text-lg font-black uppercase text-slate-950">Zero Sub-Contracting</h3>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed pl-14">
                            We own our entire inventory: German hangars, waterproof tarpaulins, crockery, warmers, chafing dishes, furniture, and sound-proof generators. No middleman markups or delays.
                        </p>
                    </div>

                    <div class="glass-card glass-card-hover p-6 rounded-2xl border border-slate-200">
                        <div class="flex items-center gap-4 mb-2">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-900 flex items-center justify-center font-bold">04</div>
                            <h3 class="text-lg font-black uppercase text-slate-950">Punctual 3-Hour Readiness</h3>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed pl-14">
                            Our buffets and decor are 100% operational 3 hours prior to guest arrivals. You will never face the embarrassment of last-minute hurried preparations.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Meet Us Banner -->
            <div class="glass-card p-8 sm:p-12 rounded-3xl border border-slate-200 text-center bg-white/90">
                <h3 class="text-2xl sm:text-3xl font-black uppercase text-slate-950 mb-3">
                    Meet Our Event Director
                </h3>
                <p class="text-slate-600 text-sm max-w-xl mx-auto mb-6">
                    Have questions regarding your event date, custom menu combinations, or lawn layouts? We welcome you to visit our Boring Road office for a cup of tea and a detailed chat.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="tel:7717702563" class="px-8 py-3.5 bg-slate-900 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-amber-600 transition">
                        Call +91 7717702563
                    </a>
                    <a href="{{ route('contact') }}" class="px-8 py-3.5 bg-amber-500 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl hover:bg-amber-600 transition shadow">
                        Send An Inquiry Online
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
