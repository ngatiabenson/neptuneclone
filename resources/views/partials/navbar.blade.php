{{-- ============================================================
     NAVBAR
     ============================================================ --}}
<header class="sticky top-0 z-50 bg-navy shadow-md">

    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-20">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex-shrink-0">
            <img src="/images/logo.png" alt="Neptune Fiduciaries" class="h-12 w-auto">
        </a>

        {{-- Desktop Links --}}
        <ul class="hidden lg:flex items-center gap-1 font-body text-sm font-medium text-white">

            <li>
                <a href="{{ url('/') }}"
                   class="px-3 py-2 rounded hover:text-gold transition-colors duration-200">Home</a>
            </li>

            <li>
                <a href="{{ url('/about') }}"
                   class="px-3 py-2 rounded hover:text-gold transition-colors duration-200">About Us</a>
            </li>

            {{-- Offshore Company Registration --}}
            <li class="relative nav-group">
                <button class="flex items-center gap-1 px-3 py-2 rounded hover:text-gold transition-colors duration-200 focus:outline-none">
                    Offshore Company Registration
                    <svg class="w-3.5 h-3.5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <ul class="dropdown-panel hidden absolute top-full left-0 mt-1 w-64 bg-white text-gray-800 rounded shadow-xl py-2 border-t-2 border-gold z-50">
                    @foreach([
                        ['IBC Formation',                          '/corporate/ibc-formation'],
                        ['Registered Agent Services',              '/corporate/registered-agent-services'],
                        ['Trust and Foundation Registration',      '/corporate/trust-and-foundation-registration'],
                        ['Nominee Director & Shareholder Access',  '/corporate/nominee-director-and-shareholder-access'],
                        ['Bank Account Opening',                   '/corporate/bank-account-opening'],
                        ['Accounting and Auditing Services',       '/corporate/accounting-and-auditing'],
                        ['Legal Opinions of Distinction',          '/corporate/legal-opinions-of-distinction'],
                    ] as [$label, $href])
                    <li>
                        <a href="{{ url($href) }}"
                           class="block px-4 py-2 text-sm hover:bg-slate hover:text-ocean transition-colors duration-150">
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            {{-- Global Licensing --}}
            <li class="relative nav-group">
                <button class="flex items-center gap-1 px-3 py-2 rounded hover:text-gold transition-colors duration-200 focus:outline-none">
                    Global Licensing
                    <svg class="w-3.5 h-3.5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <ul class="dropdown-panel hidden absolute top-full left-0 mt-1 w-56 bg-white text-gray-800 rounded shadow-xl py-2 border-t-2 border-gold z-50">
                    @foreach([
                        ['Brokerage / Forex',                   '/licensing/brokerage-forex'],
                        ['Gambling & Gaming',                   '/licensing/gaming-and-gambling'],
                        ['Insurance',                           '/licensing/insurance'],
                        ['Banking',                             '/licensing/banking'],
                        ['Cryptocurrencies & Digital Assets',   '/licensing/digital-assets'],
                    ] as [$label, $href])
                    <li>
                        <a href="{{ url($href) }}"
                           class="block px-4 py-2 text-sm hover:bg-slate hover:text-ocean transition-colors duration-150">
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            {{-- Other Services --}}
            <li class="relative nav-group">
                <button class="flex items-center gap-1 px-3 py-2 rounded hover:text-gold transition-colors duration-200 focus:outline-none">
                    Other Services
                    <svg class="w-3.5 h-3.5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <ul class="dropdown-panel hidden absolute top-full left-0 mt-1 w-72 bg-white text-gray-800 rounded shadow-xl py-2 border-t-2 border-gold z-50">
                    @foreach([
                        ['Aircraft & Shipping Registration',         '/other-services/aircraft-and-shipping-registration'],
                        ['Assets & Investment Advisory',             '/other-services/assets-and-investments-advisory'],
                        ['Credit and Bond Institutions',             '/other-services/credit-and-bond-institutions'],
                        ['Data Reporting',                           '/other-services/data-reporting'],
                        ['Electronic & Money Services Businesses',   '/other-services/electronic-and-money-services-business'],
                        ['Investments and Funds',                    '/other-services/investment-funds'],
                        ['Limited Liability Companies',              '/other-services/limited-liability-companies'],
                        ['Pension Services',                         '/other-services/pension-services'],
                        ['Trademark Registration',                   '/other-services/trademark-registration'],
                        ['Trust Services',                           '/other-services/trust-services'],
                        ['Virtual Office Services',                  '/other-services/virtual-office-services'],
                    ] as [$label, $href])
                    <li>
                        <a href="{{ url($href) }}"
                           class="block px-4 py-2 text-sm hover:bg-slate hover:text-ocean transition-colors duration-150">
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="{{ url('/jurisdictions') }}"
                   class="px-3 py-2 rounded hover:text-gold transition-colors duration-200">Jurisdictions</a>
            </li>

            <li>
                <a href="{{ url('/blog') }}"
                   class="px-3 py-2 rounded hover:text-gold transition-colors duration-200">Blog</a>
            </li>

            <li>
                <a href="{{ url('/contact') }}"
                   class="ml-2 px-5 py-2.5 rounded bg-gold text-navy font-semibold text-sm hover:bg-gold-light transition-colors duration-200 whitespace-nowrap">
                    Contact Us
                </a>
            </li>
        </ul>

        {{-- Mobile hamburger --}}
        <button id="mobile-open" aria-label="Open menu"
                class="lg:hidden text-white hover:text-gold focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>

</header>

{{-- ============================================================
     MOBILE MENU (slide-in from right)
     ============================================================ --}}
<div id="mobile-menu"
     class="fixed inset-y-0 right-0 z-[999] w-80 bg-navy-900 text-white flex flex-col shadow-2xl overflow-y-auto">

    <div class="flex items-center justify-between px-5 py-5 border-b border-navy-700">
        <img src="/images/logo.png" alt="Neptune Fiduciaries" class="h-10 w-auto">
        <button id="mobile-close" aria-label="Close menu" class="text-white hover:text-gold focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <ul class="flex flex-col px-5 py-6 gap-1 font-body text-sm">
        <li><a href="{{ url('/') }}"         class="block py-2.5 border-b border-white/10 hover:text-gold">Home</a></li>
        <li><a href="{{ url('/about') }}"    class="block py-2.5 border-b border-white/10 hover:text-gold">About Us</a></li>

        <li class="pt-2 pb-1 text-gold text-xs uppercase tracking-widest font-semibold">Offshore Company Registration</li>
        @foreach([
            ['IBC Formation',                        '/corporate/ibc-formation'],
            ['Registered Agent Services',            '/corporate/registered-agent-services'],
            ['Trust & Foundation Registration',      '/corporate/trust-and-foundation-registration'],
            ['Nominee Director & Shareholder',       '/corporate/nominee-director-and-shareholder-access'],
            ['Bank Account Opening',                 '/corporate/bank-account-opening'],
            ['Accounting & Auditing',                '/corporate/accounting-and-auditing'],
            ['Legal Opinions of Distinction',        '/corporate/legal-opinions-of-distinction'],
        ] as [$label, $href])
        <li><a href="{{ url($href) }}" class="block py-2 pl-3 border-b border-white/10 hover:text-gold text-white/80">{{ $label }}</a></li>
        @endforeach

        <li class="pt-3 pb-1 text-gold text-xs uppercase tracking-widest font-semibold">Global Licensing</li>
        @foreach([
            ['Brokerage / Forex',           '/licensing/brokerage-forex'],
            ['Gambling & Gaming',           '/licensing/gaming-and-gambling'],
            ['Insurance',                   '/licensing/insurance'],
            ['Banking',                     '/licensing/banking'],
            ['Cryptocurrencies & Digital',  '/licensing/digital-assets'],
        ] as [$label, $href])
        <li><a href="{{ url($href) }}" class="block py-2 pl-3 border-b border-white/10 hover:text-gold text-white/80">{{ $label }}</a></li>
        @endforeach

        <li class="pt-3 pb-1 text-gold text-xs uppercase tracking-widest font-semibold">Other Services</li>
        @foreach([
            ['Aircraft & Shipping Registration', '/other-services/aircraft-and-shipping-registration'],
            ['Assets & Investment Advisory',     '/other-services/assets-and-investments-advisory'],
            ['Limited Liability Companies',      '/other-services/limited-liability-companies'],
            ['Virtual Office Services',          '/other-services/virtual-office-services'],
        ] as [$label, $href])
        <li><a href="{{ url($href) }}" class="block py-2 pl-3 border-b border-white/10 hover:text-gold text-white/80">{{ $label }}</a></li>
        @endforeach

        <li class="pt-3">
            <a href="{{ url('/jurisdictions') }}" class="block py-2.5 border-b border-white/10 hover:text-gold">Jurisdictions</a>
        </li>
        <li><a href="{{ url('/blog') }}"    class="block py-2.5 border-b border-white/10 hover:text-gold">Blog</a></li>
        <li>
            <a href="{{ url('/contact') }}"
               class="mt-4 block text-center px-5 py-3 rounded bg-gold text-navy font-semibold hover:bg-gold-light transition-colors">
                Contact Us
            </a>
        </li>
    </ul>
</div>

{{-- Mobile menu overlay backdrop --}}
<div id="mobile-backdrop"
     class="hidden fixed inset-0 z-[998] bg-black/50"
     aria-hidden="true"></div>

@push('scripts')
<script>
    const openBtn      = document.getElementById('mobile-open');
    const closeBtn     = document.getElementById('mobile-close');
    const menu         = document.getElementById('mobile-menu');
    const backdrop     = document.getElementById('mobile-backdrop');

    function openMenu()  { menu.classList.add('open'); backdrop.classList.remove('hidden'); document.body.style.overflow = 'hidden'; }
    function closeMenu() { menu.classList.remove('open'); backdrop.classList.add('hidden'); document.body.style.overflow = ''; }

    openBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    backdrop.addEventListener('click', closeMenu);
</script>
@endpush