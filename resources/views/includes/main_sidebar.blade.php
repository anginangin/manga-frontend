<div id="main-sidebar">
    <section class="block_area block_area_sidebar block_area-realtime">
        <div class="block_area-header">
            @foreach ($bannerAtasMaPop as $bannerAtasMaPop)
            <a href="{{ $bannerAtasMaPop->link }}" target="_blank">
                <img src="{{ config('constant.url.backend').'/banner/'.$bannerAtasMaPop->gambar }}" class="img-fluid mb-2">
            </a>
            @endforeach
            <div class="float-left bah-heading">
                <h2 class="cat-heading">
                    {{ App\Models\Title::select('most_view')->first()->most_view }}
                </h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="block_area-content">
            <div class="cbox cbox-list cbox-realtime">
                <div class="cbox-content">
                    <ul class="nav nav-pills nav-fill nav-tabs anw-tabs">
                        <li class="nav-item">
                            <a data-toggle="tab" href="#chart-today" class="nav-link active">
                                Harian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#chart-week" class="nav-link">
                                Mingguan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#chart-month" class="nav-link">
                                Bulanan
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="chart-today" class="tab-pane show active">
                            <div class="featured-block-ul featured-block-chart">
                                <ul class="ulclear">
                                    @forelse ($dailyViews as $dailyViews)
                                    @if ($dailyViews->today_count != 0)
                                    <li class="item-top">
                                        <div class="ranking-number">
                                            <span>{{ $loop->iteration }}</span>
                                        </div>
                                        <a
                                            href="{{ route('detail', str_replace('/manga/','',$dailyViews->slug)) }}"
                                            class="manga-poster"
                                        >
                                            <img
                                                src="{{
                                                    (!$dailyViews->thumbnail)
                                                    ? str_replace('i2.wp.com/', '', $dailyViews->poster)
                                                    : config('constant.url.api_image').$dailyViews->thumbnail
                                                }}"
                                                class="manga-poster-img lazyload"
                                                alt="{{ $dailyViews->title }}"
                                            />
                                        </a>
                                        <div class="manga-detail">
                                            <h3 class="manga-name">
                                                <a
                                                    href="{{ route('detail', str_replace('/manga/','',$dailyViews->slug)) }}"
                                                    title="{{ $dailyViews->title }}"
                                                >
                                                    {{ $dailyViews->title }}
                                                </a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item fdi-cate">
                                                    @php $genres = json_decode($dailyViews->genre) @endphp
                                                    @foreach ($genres as $genre)
                                                    <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                        {{ $genre->genre }}
                                                        @if( !$loop->last)
                                                        ,
                                                        @endif
                                                    </a>
                                                    @endforeach
                                                </span>
                                                <span class="fdi-item fdi-view">
                                                    {{ number_format($dailyViews->today_count) }}x
                                                    dilihat
                                                </span>
                                                <div class="d-block">
                                                    <small style="visibility: hidden">.</small>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    @endif
                                    @empty
                                    <div class="text-center">
                                        <br>
                                        Data tidak ditemukan.
                                    </div>
                                    @endforelse
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="chart-week" class="tab-pane">
                            <div class="featured-block-ul featured-block-chart">
                                <ul class="ulclear">
                                    @forelse ($weeklyViews as $weeklyViews)
                                    @if ($weeklyViews->this_week != 0)
                                    <li class="item-top">
                                        <div class="ranking-number">
                                            <span>{{ $loop->iteration }}</span>
                                        </div>
                                        <a
                                            href="{{ route('detail', str_replace('/manga/','',$weeklyViews->slug)) }}"
                                            class="manga-poster"
                                        >
                                            <img
                                                src="{{
                                                    (!$weeklyViews->thumbnail)
                                                    ? str_replace('i2.wp.com/', '', $weeklyViews->poster)
                                                    : config('constant.url.api_image') . $weeklyViews->thumbnail
                                                }}"
                                                class="manga-poster-img lazyload"
                                                alt="{{ $weeklyViews->title }}"
                                            />
                                        </a>
                                        <div class="manga-detail">
                                            <h3 class="manga-name">
                                                <a
                                                    href="{{ route('detail', str_replace('/manga/','',$weeklyViews->slug)) }}"
                                                    title="{{ $weeklyViews->title }}"
                                                >
                                                    {{ $weeklyViews->title }}
                                                </a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item fdi-cate">
                                                    @php $genres = json_decode($weeklyViews->genre) @endphp
                                                    @foreach ($genres as $genre)
                                                    <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                        {{ $genre->genre }}
                                                        @if( !$loop->last)
                                                        ,
                                                        @endif
                                                    </a>
                                                    @endforeach
                                                </span>
                                                <span class="fdi-item fdi-view">
                                                    {{ number_format($weeklyViews->this_week) }}x
                                                    dilihat
                                                </span>
                                                <div class="d-block">
                                                    <small style="visibility: hidden">.</small>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    @endif
                                    @empty
                                    <div class="text-center">
                                        <br>
                                        Data tidak ditemukan.
                                    </div>
                                    @endforelse
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="chart-month" class="tab-pane">
                            <div class="featured-block-ul featured-block-chart">
                                <ul class="ulclear">
                                    @php $count = 0 @endphp
                                    @forelse ($monthlyViews as $monthlyViews)
                                    @if ($monthlyViews->this_month != 0)
                                    <li class="item-top">
                                        <div class="ranking-number">
                                            <span>{{ $loop->iteration }}</span>
                                        </div>
                                        <a
                                            href="{{ route('detail', str_replace('/manga/','',$monthlyViews->slug)) }}"
                                            class="manga-poster"
                                        >
                                            <img
                                                src="{{
                                                    (!$monthlyViews->thumbnail)
                                                    ? str_replace('i2.wp.com/', '', $monthlyViews->poster)
                                                    : config('constant.url.api_image') . $monthlyViews->thumbnail
                                                }}"
                                                class="manga-poster-img lazyload"
                                                alt="{{ $monthlyViews->title }}"
                                            />
                                        </a>
                                        <div class="manga-detail">
                                            <h3 class="manga-name">
                                                <a
                                                    href="{{ route('detail', str_replace('/manga/','',$monthlyViews->slug)) }}"
                                                    title="{{ $monthlyViews->title }}"
                                                >
                                                    {{ $monthlyViews->title }}
                                                </a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item fdi-cate">
                                                    @php $genres = json_decode($monthlyViews->genre) @endphp
                                                    @foreach ($genres as $genre)
                                                    <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                        {{ $genre->genre }}
                                                        @if( !$loop->last)
                                                        ,
                                                        @endif
                                                    </a>
                                                    @endforeach
                                                </span>
                                                <span class="fdi-item fdi-view">
                                                    {{ number_format($monthlyViews->this_month) }}x
                                                    dilihat
                                                </span>
                                                <div class="d-block">
                                                    <small style="visibility: hidden">.</small>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    @endif
                                    @empty
                                    <div class="text-center">
                                        <br>
                                        Data tidak ditemukan.
                                    </div>
                                    @endforelse
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @foreach ($bannerBawahMaPop as $bannerBawahMaPop)
            <a href="{{ $bannerBawahMaPop }}" target="_blank">
                <img src="{{ config('constant.url.backend').'/banner/'.$bannerBawahMaPop->gambar }}" class="img-fluid">
            </a>
            @endforeach
        </div>
    </section>
    <div class="clearfix"></div>
</div>
