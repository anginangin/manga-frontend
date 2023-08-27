@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('less')
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W24X52C');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W24X52C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @endsection
    @section('content')
        <div class="deslide-wrap">
            <div class="container">
                <div id="slider">
                    <div class="swiper-wrapper">
                        @foreach ($latestUpdate as $slider)
                            <div class="swiper-slide">
                                <div class="deslide-item">
                                    <a href="{{ route('detail', $slider['slug']) }}" class="deslide-cover">
                                        <img class="manga-poster-img"
                                            src="{{ !$slider['thumbnail'] ? str_replace('https://', 'https://i2.wp.com/', $slider['poster']) : config('constant.url.api_image') . $slider['thumbnail'] }}"
                                            alt="{{ $slider['title'] }}" />
                                    </a>
                                    <div class="deslide-poster">
                                        <a href="{{ route('detail', $slider['slug']) }}" class="manga-poster">
                                            <img src="{{ !$slider['thumbnail'] ? str_replace('https://', 'https://i2.wp.com/', $slider['poster']) : config('constant.url.api_image') . $slider['thumbnail'] }}"
                                                class="manga-poster-img" alt="{{ $slider['title'] }}" />
                                        </a>
                                    </div>
                                    <div class="deslide-item-content">
                                        <div class="desi-head-title">
                                            <a title="{{ $slider['title'] }}" href="{{ route('detail', $slider['slug']) }}">
                                                {{ $slider['title'] }}
                                            </a>
                                        </div>
                                        <div class="sc-detail">
                                            <div class="scd-item mb-3 text-justify">
                                                {{ substr($slider['description'], 0, 200) . '...' }}
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="desi-buttons">
                                            {{-- <a href="#" class="btn btn-slide-read mr-2">Read Now</a> --}}
                                            <a href="{{ route('detail', $slider['slug']) }}" class="btn btn-slide-info">
                                                View Info
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-navigation">
                        <div class="swiper-button swiper-button-next">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="swiper-button swiper-button-prev">
                            <i class="fas fa-angle-left"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div id="text-home">
            <div class="container">
                <!--Begin: text home-->
                <div class="text-home">
                    <div class="text-home-main">
                        {{ $webSetting['description'] }}
                    </div>
                    <div class="text-center d-block">
                        @foreach ($bannerTengah as $bannerTengah)
                            <a href="{{ $bannerTengah->link }}" target="_blank">
                                <img src="{{ config('constant.url.backend') . '/banner/' . $bannerTengah->gambar }}"
                                    class="img-fluid mb-3" alt="">
                            </a>
                        @endforeach
                    </div>
                </div>
                <!--/End: text home-->
            </div>
        </div>

        <div id="manga-trending">
            <div class="container">
                <section class="block_area block_area_trending mb-0 mt-3">
                    <div class="block_area-header">
                        <div class="bah-heading">
                            <h2 class="cat-heading">
                                {{ App\Models\Title::select('slider_trending')->first()->slider_trending }}
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div class="trending-list" id="trending-home" style="display: none">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    @foreach ($trendings as $trending)
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="manga-poster">
                                                    <a class="link-mask"
                                                        href="{{ route('detail', str_replace('/manga/', '', $trending->manga->slug)) }}"></a>
                                                    <img src="{{ !$trending->manga->thumbnail
                                                        ? str_replace('https://', 'https://i2.wp.com/', $trending->manga->poster)
                                                        : config('constant.url.api_image') . $trending->manga->thumbnail }}"
                                                        class="manga-poster-img lazyload"
                                                        alt="{{ $trending->manga->title }}" />
                                                </div>
                                                <div class="number">
                                                    <span>{{ $loop->iteration }}</span>
                                                    <div class="anime-name">
                                                        {{ substr($trending->manga->title, 0, 25) . '...' }}</div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="trending-navi">
                                <div class="navi-next">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                <div class="navi-prev"><i class="fas fa-angle-left"></i></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- GENRE -->
        <br>
        <div class="category_block category_block-home">
            <div class="container">
                <div class="c_b-wrap">
                    <div class="c_b-list">
                        <div class="cbl-row">
                            @foreach ($fixGenre as $genre)
                                <div class="item">
                                    <a href="{{ url('/') }}/genre/{{ $genre }}" title="{{ $genre }}">
                                        {{ $genre }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- GENRE -->


        {{-- <div id="manga-featured">
    <div class="container">
        <section class="block_area block_area_featured">
            <div class="block_area-header">
                <div class="bah-heading">
                    <h2 class="cat-heading">
                        {{ App\Models\Title::select('atas_rilisan_terbaru')->first()->atas_rilisan_terbaru }}
                    </h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
                <div class="featured-list" id="featured-03">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($sliders as $slider)
                            <div class="swiper-slide">
                                <div class="mg-item-basic">
                                    <div class="manga-poster">
                                        <a class="link-mask"
                                            href="{{ route('detail', str_replace('/manga/','',$slider->manga['slug'])) }}"></a>
                                        <span class="tick tick-item tick-lang"></span>
                                        <img src="{{
                                                            (!$slider->manga['thumbnail'])
                                                            ? $slider->manga['poster']
                                                            : config('constant.url.api_image').$slider->manga['thumbnail'] }}"
                                            class="manga-poster-img lazyload" alt="{{ $slider->manga['title'] }}" />
                                    </div>
                                    <div class="manga-detail">
                                        <h3 class="manga-name">
                                            <a href="{{ route('detail', str_replace('/manga/','',$slider->manga['slug'])) }}"
                                                title="{{ $slider->manga['title'] }}">
                                                {{ $slider->manga['title'] }}
                                            </a>
                                        </h3>
                                        <div class="fd-infor">
                                            @php $genres = json_decode($slider->manga['genre']) @endphp
                                            @foreach (array_slice($genres, 0, 2) as $genre)
                                            <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                {{ $genre->genre }}
                                                @if (!$loop->last)
                                                ,
                                                @endif
                                            </a>
                                            @endforeach
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="featured-navi">
                        <div class="navi-next">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="navi-prev">
                            <i class="fas fa-angle-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> --}}

        <div id="main-wrapper">
            <div class="container">
                <div id="mw-2col">
                    <!-- LATEST UPDATES -->
                    <div id="main-content">
                        {{-- PROJECT UPDATE --}}
                        {{-- <section class="block_area block_area_home">
                    <div class="block_area-header block_area-header-tabs">
                        <div class="float-left bah-heading">
                            <h2 class="cat-heading">Project Update</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-content">
                        <div id="latest-chap">
                            <div class="manga_list-sbs">
                                <div class="mls-wrap">
                                    @foreach (array_slice($list_update, 0, 10) as $project_update)
                                    <div class="item item-spc">
                                        <a class="manga-poster"
                                            href="{{ route('detail', str_replace('/manga/','',$project_update['slug'])) }}">
                                            <img src="{{ str_replace('https://', 'https://i2.wp.com/', $project_update['poster']) }}"
                                                class="manga-poster-img lazyload"
                                                alt="{{ $project_update['title'] }}" />
                                        </a>
                                        <div class="manga-detail">
                                            <h3 class="manga-name">
                                                <a href="{{ route('detail', str_replace('/manga/','',$project_update['slug'])) }}"
                                                    title="{{ $project_update['title'] }}">{{
                                                    $project_update['title'] }}</a>
                                            </h3>
                                            <div class="fd-list">
                                                @foreach ($project_update['chapters'] as $chapter)
                                                <div class="fdl-item">
                                                    <div class="chapter">
                                                        <a href="{{ route('read', $chapter['url']) }}" class="d-inline">
                                                            <i class="far fa-file-alt mr-2"></i>
                                                            {{ $chapter['chapter'] }}
                                                        </a>
                                                        <span class="text-muted" style="right: 0;position:absolute">
                                                            {{ $chapter['posted'] }}
                                                        </span>
                                                    </div>
                                                    <div class="release-time"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                        <div class="clearfix"></div>

                        {{-- RILISAN TERBARU --}}
                        <section class="block_area block_area_home" style="position: initial !important;">
                            <div class="block_area-header block_area-header-tabs">
                                <div class="float-left bah-heading">
                                    <h2 class="cat-heading">
                                        {{ App\Models\Title::select('rilisan_terbaru')->first()->rilisan_terbaru }}
                                    </h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-content">
                                <div id="latest-chap">
                                    <div class="manga_list-sbs">
                                        <div class="mls-wrap">
                                            @forelse ($latestUpdate as $manga)
                                                <div class="item item-spc">
                                                    <a class="manga-poster" href="{{ route('detail', $manga['slug']) }}">
                                                        {{-- @if ($manga['updated_at']->isToday())
                                                <span class="tick tick-item tick-lang">NEW</span>
                                            @endif --}}
                                                        <img src="{{ !$manga['thumbnail'] ? str_replace('https://', 'https://i2.wp.com/', $manga['poster']) : config('constant.url.api_image') . $manga['thumbnail'] }}"
                                                            class="manga-poster-img lazyload"
                                                            alt="{{ $manga['title'] }}" />
                                                    </a>
                                                    <div class="manga-detail">
                                                        <h3 class="manga-name">
                                                            <a href="{{ route('detail', $manga['slug']) }}"
                                                                title="{{ $manga['title'] }}">
                                                                {{ $manga['title'] }}
                                                            </a>
                                                        </h3>
                                                        <div class="fd-infor">
                                                            <span class="fdi-item fdi-cate">
                                                                @php $genres = json_decode($manga['genre']) @endphp
                                                                @foreach ($genres as $genre)
                                                                    <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                                        {{ $genre->genre }}
                                                                        @if (!$loop->last)
                                                                            ,
                                                                        @endif
                                                                    </a>
                                                                @endforeach
                                                            </span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="fd-list">
                                                            @php $i = 0 @endphp
                                                            @foreach ($manga['chapters']->sortByDesc('chapter') as $k => $chapter)
                                                                <div class="fdl-item">
                                                                    <div class="chapter">
                                                                        <a href="/read{{ $chapter['path'] }}"
                                                                            class="d-inline">
                                                                            <i class="far fa-file-alt mr-2"></i>
                                                                            Chapter {{ floatval($chapter['chapter']) }}
                                                                        </a>
                                                                    </div>
                                                                    <div class="release-time">
                                                                        {{-- @if ($manga['updated_at']->isToday())
                                                            @if ($chapter['updated_at']->isToday())
                                                                <span class="badge badge-warning">NEW</span>
                                                                @endif
                                                                @endif --}}
                                                                        {{-- @if ($loop->first)
                                                            <span class="badge badge-warning">NEW</span>
                                                        @endif --}}
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                @if (++$i == 3)
                                                                @break
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        @empty
                                            Data tidak ditemukan.
                                        @endforelse
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="pre-pagination mt-4">
                                        {{ $latestUpdate->onEachSide(0)->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- LATEST UPDATES -->

                <!-- MOST VIEWED -->
                @include('includes.main_sidebar', compact('dailyViews', 'weeklyViews', 'monthlyViews'))
                <!-- MOST VIEWED -->

                <div class="text-center">
                    @foreach ($bannerRekomendasi as $bannerRekomendasi)
                        <a href="{{ $bannerRekomendasi->link }}" target="_blank">
                            <img src="{{ config('constant.url.backend') . '/banner/' . $bannerRekomendasi->gambar }}"
                                class="img-fluid">
                        </a>
                    @endforeach
                </div>

                <br><br>

                <section class="block_area block_area_featured" style="position: initial">

                    <div class="block_area-content">

                        <div class="block_area-header">
                            <div class="clearfix"></div>

                            <div class="bah-heading">
                                <h2 class="cat-heading">
                                    {{ App\Models\Title::select('rekomendasi')->first()->rekomendasi }}
                                </h2>
                            </div>
                        </div>
                        <div class="featured-list" id="featured-04">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($recommended as $recommended)
                                        <div class="swiper-slide">
                                            <div class="mg-item-basic">
                                                <div class="manga-poster">
                                                    <a class="link-mask"
                                                        href="{{ route('detail', str_replace('/manga/', '', $recommended->manga['slug'])) }}"></a>
                                                    <span class="tick tick-item tick-lang"></span>
                                                    <img src="{{ !$recommended->manga['thumbnail']
                                                        ? str_replace('https://', 'https://i2.wp.com/', $recommended->manga['poster'])
                                                        : config('constant.url.api_image') . $recommended->manga['thumbnail'] }}"
                                                        class="manga-poster-img lazyload"
                                                        alt="{{ $recommended->manga['title'] }}" />
                                                </div>
                                                <div class="manga-detail">
                                                    <h3 class="manga-name">
                                                        <a href="{{ route('detail', str_replace('/manga/', '', $recommended->manga['slug'])) }}"
                                                            title="{{ $recommended->manga['title'] }}">
                                                            {{ $recommended->manga['title'] }}
                                                        </a>
                                                    </h3>
                                                    <div class="fd-infor">
                                                        @php $genres = json_decode($recommended->manga['genre']) @endphp
                                                        @foreach (array_slice($genres, 0, 2) as $genre)
                                                            <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                                {{ $genre->genre }}
                                                                @if (!$loop->last)
                                                                    ,
                                                                @endif
                                                            </a>
                                                        @endforeach
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="featured-navi">
                                <div class="navi-next">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                <div class="navi-prev">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
