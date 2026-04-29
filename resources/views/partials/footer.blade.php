{{-- ============================================================
     FOOTER
     ============================================================ --}}
<footer class="bg-navy-900 text-white font-body" style="background-color:#071a36;">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Col 1 — Brand --}}
            <div class="flex flex-col gap-4">
                <a href="{{ url('/') }}">
                    <img src="/images/logo-light.png" alt="Neptune Fiduciaries" class="h-12 w-auto">
                </a>
                <p class="text-sm text-white/70 leading-relaxed">
                    We offer global solutions for businesses and individuals looking to go global.
                </p>
                <div class="flex items-center gap-4 mt-1">
                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/neptunefiduciaries" target="_blank" rel="noopener"
                       aria-label="Facebook"
                       class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold transition-colors duration-200">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M22 12A10 10 0 1 0 10 21.95V14.9H7.5v-2.9H10V9.8c0-2.47 1.49-3.83 3.73-3.83 1.08 0 2.2.2 2.2.2v2.43h-1.24c-1.22 0-1.6.76-1.6 1.54V12h2.73l-.44 2.9H13.1v7.05A10 10 0 0 0 22 12z"/></svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/neptunefiduciaries" target="_blank" rel="noopener"
                       aria-label="Instagram"
                       class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold transition-colors duration-200">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                    {{-- Twitter / X --}}
                    <a href="https://www.twitter.com/neptunefiduciaries" target="_blank" rel="noopener"
                       aria-label="Twitter"
                       class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold transition-colors duration-200">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Col 2 — Quick Links --}}
            <div>
                <h4 class="text-gold font-display font-semibold text-base mb-5 tracking-wide">Quick Links</h4>
                <ul class="space-y-2.5 text-sm text-white/70">
                    @foreach([
                        ['About Us',      '/about'],
                        ['Services',      '/corporate/ibc-formation'],
                        ['Jurisdictions', '/jurisdictions'],
                        ['Blog',          '/blog'],
                        ['Contact Us',    '/contact'],
                    ] as [$label, $href])
                    <li>
                        <a href="{{ url($href) }}"
                           class="hover:text-gold transition-colors duration-200 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-gold/50 flex-shrink-0"></span>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 3 — Locations --}}
            <div>
                <h4 class="text-gold font-display font-semibold text-base mb-5 tracking-wide">Our Offices</h4>
                <ul class="space-y-4 text-sm text-white/70">
                    @foreach([
                        ['St. Vincent & Grenadines', 'Suite 504, Griffith Corporate Centre, Beachmont Kingston'],
                        ['Seychelles',               'Oceanic House, Providence Estate, Mahe'],
                        ['Mauritius',                'Renganaden Seeneevassen Building, Cnr Hennessy Street, Port Louis'],
                        ['Kenya',                    'Delta Corner Annex, Ring Rd Westlands Ln, Nairobi'],
                    ] as [$country, $address])
                    <li>
                        <span class="block text-white font-medium text-xs uppercase tracking-wider mb-0.5">{{ $country }}</span>
                        <span class="leading-snug">{{ $address }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 4 — Contact --}}
            <div>
                <h4 class="text-gold font-display font-semibold text-base mb-5 tracking-wide">Contact Us</h4>
                <ul class="space-y-3 text-sm text-white/70">
                    <li>
                        <a href="mailto:info@neptunecorporate.com"
                           class="hover:text-gold transition-colors duration-200 flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-gold/60" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            info@neptunecorporate.com
                        </a>
                    </li>
                    <li>
                        <a href="mailto:sales@neptunecorporate.com"
                           class="hover:text-gold transition-colors duration-200 flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-gold/60" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            sales@neptunecorporate.com
                        </a>
                    </li>
                </ul>

                <a href="{{ url('/contact') }}"
                   class="mt-6 inline-block px-5 py-2.5 rounded bg-gold text-navy text-sm font-semibold hover:bg-gold-light transition-colors duration-200">
                    Get In Touch
                </a>
            </div>

        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-white/40">
            <p>&copy; {{ date('Y') }} Neptune Fiduciaries Group. All rights reserved.</p>
            <p>Designed for global business excellence.</p>
        </div>
    </div>

</footer>