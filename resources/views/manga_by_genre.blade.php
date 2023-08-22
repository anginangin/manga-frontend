@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('content')
<div class="prebreadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                <li class="breadcrumb-item active">Genre</li>
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
                <section class="block_area block_area_category mt-3">
                    <div class="block_area-header">
                        <div class="bah-heading float-left">
                            <h2 class="cat-heading">
                                @foreach ($genres['genres'] as $selected)
                                @if ($selected['id'] == Request::segment(4))
                                {{ $selected['genre'] }}
                                @endif
                                @endforeach
                            </h2>
                        </div>
                        <div class="cate-sort float-right">
                            <div class="cs-item">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="btn btn-sm btn-sort">
                                    <span class="mr-2">Sort:</span>

                                    Default

                                    <i class="fas fa-angle-down ml-2"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-model" aria-labelledby="ssc-list">
                                    <a class="dropdown-item added" href="/completed?sort=default">Default <i
                                            class="fas fa-check ml-2"></i></a>
                                    <a class="dropdown-item " href="/completed?sort=latest-updated">Latest
                                        Updated </a>
                                    <a class="dropdown-item " href="/completed?sort=score">Score </a>
                                    <a class="dropdown-item " href="/completed?sort=name-az">Name
                                        A-Z </a>
                                    <a class="dropdown-item " href="/completed?sort=release-date">Release
                                        Date </a>
                                    <a class="dropdown-item " href="/completed?sort=most-viewed">Most
                                        Viewed </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="manga_list-sbs">
                        <div class="mls-wrap">
                            @php
                            $genre_count = 0
                            @endphp
                            @foreach ($mangaByGenre as $key => $manga)
                            <div class="item item-spc">
                                <a class="manga-poster"
                                    href="{{ route('detail', str_replace('/manga/','',$manga['slug']['path'])) }}">
                                    <img src="{{ str_replace('/i2.wp.com', '', $manga['poster']) }}"
                                        class="manga-poster-img lazyload" alt="{{ $manga['title'] }}">
                                </a>
                                <div class="manga-detail">
                                    <h3 class="manga-name">
                                        <a href="{{ route('detail', str_replace('/manga/','',$manga['slug']['path'])) }}"
                                            title="{{ $manga['title'] }}">{{ $manga['title'] }}</a>
                                    </h3>
                                    <div class="fd-infor">
                                        <span class="fdi-item fdi-cate">
                                            {{ $manga['chapter'] }}
                                        </span>
                                    </div>
                                    <div class="fd-infor">
                                        <span class="fdi-item fdi-cate">
                                            <strong>
                                                <style>
                                                    .ratings {
                                                        position: relative;
                                                        vertical-align: middle;
                                                        display: inline-block;
                                                        color: #b1b1b1;
                                                        overflow: hidden;
                                                    }

                                                    .full-stars {
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        white-space: nowrap;
                                                        overflow: hidden;
                                                        color: #ffc700;
                                                    }

                                                    .empty-stars:before,
                                                    .full-stars:before {
                                                        content: "\2605\2605\2605\2605\2605";
                                                        font-size: 12pt;
                                                    }

                                                    .empty-stars:before {
                                                        -webkit-text-stroke: 1px #848484;
                                                    }

                                                    .full-stars:before {
                                                        -webkit-text-stroke: 1px #ffc700;
                                                    }

                                                    /* Webkit-text-stroke is not supported on firefox or IE */
                                                    /* Firefox */
                                                    @-moz-document url-prefix() {
                                                        .full-stars {
                                                            color: #ECBE24;
                                                        }
                                                    }
                                                </style>
                                                <div class="ratings">
                                                    <div class="empty-stars"></div>
                                                    <div class="full-stars" style="width:{{ $manga['rating']*10 }}%">
                                                    </div>
                                                </div>
                                            </strong>
                                            <span class="text-white ml-1">{{ $manga['rating'] }}</span>
                                        </span>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="fd-list">

                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @php
                            $genre_count = $key++
                            @endphp
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                        <div class="pre-pagination mt-4">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center">
                                    @php
                                    $page=Request::route('page');
                                    $genre=Request::segment(4);
                                    @endphp
                                    @if ($page > 1)
                                    <li class="page-item"><a class="page-link btn btn-sm btn-secondary"
                                            href="{{ url('/') }}/genre/page/{{ $page-1 }}/{{ $genre }}">
                                            < Previous</a>
                                    </li>
                                    @endif
                                    @if ($genre_count+1 == 20)
                                    <li class="page-item"><a class="page-link btn btn-sm btn-primary"
                                            href="{{ url('/') }}/genre/page/{{ $page+1 }}/{{ $genre }}">Next ></a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
                <!--End: Section Manga list-->
                <div class="clearfix"></div>
            </div>
            <!--/End: main-content-->
            <!--Begin: main-sidebar-->
            <div id="main-sidebar">
                <section class="block_area block_area_sidebar block_area-genres">
                    <div class="block_area-header">
                        <div class="bah-heading">
                            <h2 class="cat-heading">Genres</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div class="category_block mb-0">
                            <div class="c_b-wrap">
                                <div class="c_b-list active">
                                    <div class="cbl-row">
                                        <div class="item item-focus focus-01"><a href="/latest-updated" title=""><i
                                                    class="mr-1">⚡</i>
                                                Latest Updated</a></div>
                                        <div class="item item-focus focus-02"><a href="/new-release" title=""><i
                                                    class="mr-1">✌</i> New Release</a></div>
                                        <div class="item item-focus focus-04"><a href="/most-viewed" title=""><i
                                                    class="mr-1">🔥</i>
                                                Most Viewed</a></div>
                                        <div class="item item-focus focus-05"><a href="/completed" title=""><i
                                                    class="mr-1">✅</i>
                                                Completed</a></div>
                                    </div>
                                    <div class="cbl-row">
                                        @php
                                        $page=0
                                        @endphp
                                        @foreach ($genres['genres'] as $genre)
                                        <div class="item">
                                            <a href="{{ url('/') }}/genre/page/{{ $page+1 }}/{{ $genre['id'] }}"
                                                title="{{ $genre['genre'] }}">{{ $genre['genre'] }}</a>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--/End: main-sidebar-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
