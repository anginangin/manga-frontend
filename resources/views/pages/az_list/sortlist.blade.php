@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('content')
<div class="prebreadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">A-Z List</li>
            </ol>
        </nav>
    </div>
</div>
<div id="main-wrapper" class="page-layout page-category">
    <div class="container">
        <div id="mw-2col">
            <!--Begin: main-content-->
            <div id="main-content">
                <!--Begin: Section Manga list-->
                <section class="block_area block_area_category">
                    <div class="block_area-header">
                        <div class="bah-heading float-left">
                            <h2 class="cat-heading">A-Z List</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="category_block">
                        <div class="c_b-wrap">
                            <div class="c_b-list active alphabet-list">
                                <div class="cbl-row">
                                    <div class="item"><a href="/az-list">All</a></div>
                                    <div class="item"><a href="/az-list/other">#</a></div>
                                    <div class="item"><a href="/az-list/0-9">0-9</a></div>
                                    <div class="item"><a href="/az-list/A">A</a></div>
                                    <div class="item"><a href="/az-list/B">B</a></div>
                                    <div class="item"><a href="/az-list/C">C</a></div>
                                    <div class="item"><a href="/az-list/D">D</a></div>
                                    <div class="item"><a href="/az-list/E">E</a></div>
                                    <div class="item"><a href="/az-list/F">F</a></div>
                                    <div class="item"><a href="/az-list/G">G</a></div>
                                    <div class="item"><a href="/az-list/H">H</a></div>
                                    <div class="item"><a href="/az-list/I">I</a></div>
                                    <div class="item"><a href="/az-list/J">J</a></div>
                                    <div class="item"><a href="/az-list/K">K</a></div>
                                    <div class="item"><a href="/az-list/L">L</a></div>
                                    <div class="item"><a href="/az-list/M">M</a></div>
                                    <div class="item"><a href="/az-list/N">N</a></div>
                                    <div class="item"><a href="/az-list/O">O</a></div>
                                    <div class="item"><a href="/az-list/P">P</a></div>
                                    <div class="item"><a href="/az-list/Q">Q</a></div>
                                    <div class="item"><a href="/az-list/R">R</a></div>
                                    <div class="item"><a href="/az-list/S">S</a></div>
                                    <div class="item"><a href="/az-list/T">T</a></div>
                                    <div class="item"><a href="/az-list/U">U</a></div>
                                    <div class="item"><a href="/az-list/V">V</a></div>
                                    <div class="item"><a href="/az-list/W">W</a></div>
                                    <div class="item"><a href="/az-list/X">X</a></div>
                                    <div class="item"><a href="/az-list/Y">Y</a></div>
                                    <div class="item"><a href="/az-list/Z">Z</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="manga_list-sbs">
                        <div class="mls-wrap">
                            @forelse ($groups as $key => $value)
                            @foreach ($data as $key => $azlist)
                            <div class="item item-spc">
                                <a class="manga-poster" href="{{ route('detail', $azlist['slug']) }}">
                                    <img
                                        src="{{
                                            (!$azlist['thumbnail'])
                                            ? str_replace('https://', 'https://i2.wp.com/', $azlist['poster'])
                                            : config('constant.url.api_image').$azlist['thumbnail']
                                        }}"
                                        class="manga-poster-img lazyload"
                                        alt="{{ $azlist['title'] }}"
                                    >
                                </a>
                                <div class="manga-detail">
                                    <h3 class="manga-name">
                                        <a href="{{ route('detail', $azlist['slug']) }}"
                                            title="{{ $azlist['title'] }}">{{
                                            $azlist['title'] }}</a>
                                    </h3>
                                    <div class="fd-infor">
                                        @php $arr = json_decode($azlist['genre']) @endphp
                                        @foreach ($arr as $genre)
                                        <a href="{{ url('/') }}/genre/{{ $genre->genre }}">{{ $genre->genre }}</a>,
                                        @endforeach
                                    </div>
                                    <div class="fd-list">
                                        @php $i = 0 @endphp
                                        @foreach ($azlist['chapters']->sortByDesc('chapter') as $k => $chapter)
                                        <div class="fdl-item">
                                            <div class="chapter">
                                                <a href="/read{{ $chapter['path'] }}" class="d-inline">
                                                    <i class="far fa-file-alt mr-2"></i>
                                                    Chapter {{ floatval($chapter['chapter']) }}
                                                </a>
                                            </div>
                                            <div class="release-time"></div>
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
                            @endforeach
                            @empty
                            <div class="text-center">
                                Manga tidak ditemukan.
                            </div>
                            @endforelse
                            <div class="clearfix"></div>
                        </div>
                        <div class="pre-pagination mt-4">
                            {{ $data->onEachSide(0)->links() }}
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            </div>
            @include('includes.main_sidebar', compact('dailyViews', 'weeklyViews', 'monthlyViews'))
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
