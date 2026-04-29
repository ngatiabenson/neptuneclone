@extends('layouts.app')

@section('title', 'Neptune Fiduciaries — Grow Your Wealth With a Trusted Advisor')
@section('meta_description', 'Neptune Fiduciaries offers expert financial advisory and offshore management solutions tailored to your unique needs.')

@section('content')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section class="relative min-h-[92vh] flex items-center bg-navy-900 overflow-hidden"
         style="background-color:#0d2b55;">
    {{-- Background image with overlay --}}
    <div class="absolute inset-0">
        <img src="/images/hero-bg.jpg" alt=""
             class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-navy/90 via-navy/70 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="max-w-2xl">
            <p class="text-gold font-body text-sm uppercase tracking-[0.2em] font-semibold mb-4">
                Elevate your financial horizon with us.
            </p>
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Grow your wealth with a trusted advisor
            </h1>
            <p class="font-body text-white/75 text-lg leading-relaxed mb-10">
                Neptune Fiduciaries offers expert financial advisory and offshore management
                solutions tailored to your unique needs. We navigate the complexities of wealth
                management, ensuring your financial voyage is smooth sailing.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/about') }}"
                   class="inline-block px-8 py-3.5 bg-gold text-navy font-body font-semibold text-sm rounded hover:bg-gold-light transition-colors duration-200">
                    Learn More
                </a>
                <a href="{{ url('/contact') }}"
                   class="inline-block px-8 py-3.5 border border-white/40 text-white font-body font-medium text-sm rounded hover:border-gold hover:text-gold transition-colors duration-200">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ============================================================
     GLOBAL SERVICES
     ============================================================ --}}
<section class="py-20 bg-slate" style="background-color:#f4f7fb;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-navy mb-4">Our Global Services</h2>
            <p class="font-body text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Neptune Fiduciaries offers a comprehensive range of services tailored to meet the diverse
                needs of our clients — wealth management, estate planning, corporate structuring, and more.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach([
                [
                    'img'   => '/images/company-2.png',
                    'alt'   => 'Offshore Company Formation',
                    'title' => 'Offshore Company Formation',
                    'desc'  => 'Expert advice on acquiring an offshore company. With services in over 60 jurisdictions, Neptune Fiduciaries handles all company formation needs from paperwork to legal requirements.',
                ],
                [
                    'img'   => '/images/nep-2.jpg',
                    'alt'   => 'Global Licensing',
                    'title' => 'Licensing',
                    'desc'  => 'Our extensive array of licensing opportunities spans financial services, Forex, Cryptocurrencies, Gambling, EMI, PSP, SVF, DLT, and MSO across multiple jurisdictions.',
                ],
                [
                    'img'   => '/images/nep-3.jpg',
                    'alt'   => 'Bank Account Opening',
                    'title' => 'Bank Account Opening',
                    'desc'  => 'Open a bank account in over 20 countries and manage it online. Apply now for flexible and secure banking services powered by Neptune Fiduciaries.',
                ],
            ] as $service)
            <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col group hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ $service['img'] }}" alt="{{ $service['alt'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="font-display text-xl font-bold text-navy mb-3">{{ $service['title'] }}</h3>
                    <p class="font-body text-gray-600 text-sm leading-relaxed flex-1">{{ $service['desc'] }}</p>
                    <a href="{{ url('/about') }}"
                       class="mt-5 self-start inline-block px-5 py-2.5 border border-navy text-navy text-sm font-semibold rounded hover:bg-navy hover:text-white transition-colors duration-200">
                        Read More
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- ============================================================
     OUR FOCUS
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="rounded-xl overflow-hidden shadow-lg">
                <img src="/images/about-2.jpg" alt="Our Focus" class="w-full h-full object-cover">
            </div>

            <div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-navy mb-6">Our Focus</h2>
                <div class="space-y-4 font-body text-gray-600 leading-relaxed">
                    <p>
                        We focus on delivering business solutions to diverse clientele — Multinational
                        Corporates, HNWIs, Fund Operators, Professional Firms, and Private Clients.
                    </p>
                    <p>
                        Under the impetus of a growing international clientele, we have expanded our
                        offering from corporate and fund administration to a wider spectrum of services
                        linked to technology, outsourcing, private wealth management, and corporate
                        finance advisory.
                    </p>
                    <p>
                        We are part of a global network of fiduciary and corporate service providers
                        with a presence in many jurisdictions through our international network of partners.
                    </p>
                </div>
                <a href="{{ url('/about') }}"
                   class="mt-8 inline-block px-7 py-3 bg-navy text-white font-body font-semibold text-sm rounded hover:bg-ocean transition-colors duration-200">
                    About Neptune
                </a>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     WHY CHOOSE US — STATS
     ============================================================ --}}
<section class="py-20 bg-navy" style="background-color:#0d2b55;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white mb-4">Why Choose Us</h2>
            <p class="font-body text-white/65 max-w-xl mx-auto leading-relaxed">
                We focus on delivering business solutions to diverse clientele ranging from Multinational
                Corporates to Private Clients worldwide.
            </p>
        </div>

        {{-- Stats grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mb-14">
            @foreach([
                ['28+',    'Employees and legal experts'],
                ['3',      'Offices around the world'],
                ['29',     'Companies incorporated'],
                ['150+',   'Banks connected to our software'],
                ['Online', 'Manage everything online'],
                ['30+',    'Jurisdictions incorporated in'],
            ] as [$num, $label])
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-colors duration-200">
                <span class="block font-display text-3xl font-bold text-gold mb-2">{{ $num }}</span>
                <span class="block font-body text-sm text-white/65 leading-snug">{{ $label }}</span>
            </div>
            @endforeach
        </div>

        {{-- Feature image --}}
        <div class="rounded-xl overflow-hidden shadow-2xl">
            <img src="/images/about-1.jpg" alt="Why Choose Neptune Fiduciaries"
                 class="w-full object-cover max-h-72 object-top">
        </div>

    </div>
</section>


{{-- ============================================================
     CTA BANNER
     ============================================================ --}}
<section class="py-20 bg-slate" style="background-color:#f4f7fb;">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl sm:text-4xl font-bold text-navy mb-5">
            Navigate your financial future <span class="text-ocean">with confidence.</span>
        </h2>
        <p class="font-body text-gray-600 leading-relaxed mb-10 max-w-2xl mx-auto">
            We empower you to reach new heights in financial success. Our team of experienced professionals
            provides tailored strategies and unwavering support to help you elevate your financial journey.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') }}"
               class="px-8 py-3.5 bg-navy text-white font-body font-semibold text-sm rounded hover:bg-ocean transition-colors duration-200">
                Contact Us
            </a>
            <a href="{{ url('/about') }}"
               class="px-8 py-3.5 border border-navy text-navy font-body font-semibold text-sm rounded hover:bg-navy hover:text-white transition-colors duration-200">
                Learn More
            </a>
        </div>
    </div>
</section>


{{-- ============================================================
     TRANSFORM SECTION
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-navy mb-4">
                Transform your financial landscape
            </h2>
            <p class="font-body text-gray-600 max-w-xl mx-auto leading-relaxed">
                Explore a range of options designed to optimise your financial infrastructure and
                pave the way for seamless global operations.
            </p>
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg">
            <img src="/images/about-4.jpg" alt="Transform your financial landscape"
                 class="w-full object-cover max-h-96 object-center">
        </div>
    </div>
</section>

@endsection