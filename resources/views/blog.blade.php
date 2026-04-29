@extends('layouts.app')

@section('title', 'Blog — Neptune Fiduciaries')
@section('meta_description', 'Stay informed with the latest insights on offshore company formation, global licensing, wealth management, and more from Neptune Fiduciaries.')

@section('content')

{{-- ============================================================
     PAGE HERO / BANNER
     ============================================================ --}}
<section class="relative bg-navy py-20 overflow-hidden" style="background-color:#0d2b55;">
    <div class="absolute inset-0 opacity-10"
         style="background-image:radial-gradient(circle at 70% 50%, #c9a44a 0%, transparent 60%);">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="font-body text-gold text-xs uppercase tracking-[0.2em] font-semibold mb-3">
            Neptune Fiduciaries
        </p>
        <h1 class="font-display text-4xl sm:text-5xl font-bold text-white mb-4">Blog</h1>
        <p class="font-body text-white/65 text-lg max-w-xl mx-auto">
            Insights, updates, and expert perspectives on global financial services.
        </p>
    </div>
</section>


{{-- ============================================================
     BLOG LISTING
     ============================================================ --}}
<section class="py-20 bg-slate" style="background-color:#f4f7fb;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">

            @forelse($posts ?? [] as $post)

                <article class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col group hover:shadow-xl transition-shadow duration-300">
                    @if($post->featured_image)
                    <div class="aspect-video overflow-hidden">
                        <a href="{{ url('/blog/' . $post->slug) }}">
                            <img src="{{ $post->featured_image }}" alt="{{ $post->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </a>
                    </div>
                    @else
                    {{-- Placeholder thumbnail --}}
                    <div class="aspect-video bg-gradient-to-br from-navy/80 to-ocean flex items-center justify-center">
                        <svg class="w-10 h-10 text-white/30" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </div>
                    @endif

                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-3 mb-3 font-body text-xs text-gray-400">
                            <span>{{ $post->published_at?->format('M d, Y') ?? 'Unpublished' }}</span>
                            @if($post->category)
                            <span class="px-2 py-0.5 bg-ocean/10 text-ocean rounded-full font-medium">
                                {{ $post->category }}
                            </span>
                            @endif
                        </div>

                        <h2 class="font-display text-lg font-bold text-navy mb-2 flex-1 leading-snug group-hover:text-ocean transition-colors duration-200">
                            <a href="{{ url('/blog/' . $post->slug) }}">{{ $post->title }}</a>
                        </h2>

                        <p class="font-body text-gray-500 text-sm leading-relaxed mb-5">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->body), 130) }}
                        </p>

                        <a href="{{ url('/blog/' . $post->slug) }}"
                           class="self-start inline-flex items-center gap-1.5 px-4 py-2 border border-navy text-navy text-xs font-semibold rounded hover:bg-navy hover:text-white transition-colors duration-200">
                            Read Article
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </article>

            @empty

                {{-- Placeholder cards --}}
                @for($i = 1; $i <= 6; $i++)
                <article class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
                    <div class="aspect-video bg-gradient-to-br from-slate-200 to-slate-300 animate-pulse"></div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="h-3 w-20 bg-gray-200 rounded animate-pulse"></span>
                            <span class="h-3 w-16 bg-gray-200 rounded animate-pulse"></span>
                        </div>
                        <h2 class="font-display text-lg font-bold text-navy mb-2">
                            Blog Post Title Placeholder {{ $i }}
                        </h2>
                        <p class="font-body text-gray-400 text-sm leading-relaxed flex-1">
                            A short excerpt summarising the article will appear here once posts are published.
                        </p>
                        <a href="#"
                           class="mt-5 self-start inline-block px-4 py-2 border border-gray-300 text-gray-400 text-xs font-semibold rounded cursor-not-allowed">
                            Read Article
                        </a>
                    </div>
                </article>
                @endfor

            @endforelse
        </div>

        {{-- ============================================================
             PAGINATION / LOAD MORE
             ============================================================ --}}
        @if(!empty($posts) && $posts instanceof \Illuminate\Pagination\LengthAwarePaginator && $posts->hasMorePages())
        <div class="mt-14 flex justify-center">
            <a href="{{ $posts->nextPageUrl() }}"
               class="inline-flex items-center gap-2 px-8 py-3.5 bg-navy text-white font-body font-semibold text-sm rounded hover:bg-ocean transition-colors duration-200">
                Load More Articles
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
        @endif

    </div>
</section>

@endsection