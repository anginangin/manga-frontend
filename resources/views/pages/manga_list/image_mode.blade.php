@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('content')
<div class="prebreadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Manga List
                </li>
            </ol>
        </nav>
    </div>
</div>
<div id="main-wrapper" class="page-layout page-category">
    <div class="container">
        <div id="mw-2col">
            <div id="main-content">
                <section class="block_area block_area_category">
                    <div class="block_area-header">
                        <div class="bah-heading float-left">
                            <h2 class="cat-heading">
                                Manga List
                            </h2>
                        </div>
                        <div class="cate-sort float-right">
                            <div class="cs-item">
                                <a href="/manga/text-mode" class="btn btn-sm btn-sort">
                                    Text Mode
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="manga_list-sbs">
                        <div class="mls-wrap">
                            @forelse ($image_mode as $key => $data)
                            <div class="item item-spc">
                                <a class="manga-poster" href="{{ route('detail', $data['slug']) }}">
                                    <img
                                        src="{{
                                            (!$data['thumbnail'])
                                            ? str_replace('https://', 'https://i2.wp.com/', $data['poster'])
                                            : config('constant.url.api_image').$data['thumbnail'] }}"
                                        class="manga-poster-img lazyload"
                                        alt="{{ $data['title'] }}"
                                    >
                                </a>
                                <div class="manga-detail">
                                    <h3 class="manga-name">
                                        <a href="{{ route('detail', $data['slug']) }}" title="{{ $data['title'] }}">
                                            {{ $data['title'] }}
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <span class="fdi-item fdi-cate">
                                            @php $asu = json_decode($data['genre']) @endphp
                                            @foreach ($asu as $genre)
                                            <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                {{ $genre->genre }}
                                            </a>,
                                            @endforeach
                                        </span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="fd-list">
                                        @php $i = 0 @endphp
                                        @foreach ($data['chapters']->sortByDesc('chapter') as $k => $chapter)
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
                            @empty
                            <div class="text-center">
                                Manga tidak ditemukan.
                            </div>
                            @endforelse
                            <div class="clearfix"></div>
                        </div>
                        <div class="pre-pagination mt-4">
                            {{ $image_mode->onEachSide(0)->links() }}
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            </div>

            <div id="main-sidebar">
                <section class="block_area block_area_sidebar block_area-genres">
                    <div class="block_area-header">
                        <div class="bah-heading">
                            <h2 class="cat-heading">
                                Genres
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div class="category_block mb-0">
                            <div class="c_b-wrap">
                                <div class="c_b-list active">
                                    <div class="cbl-row">
                                        @forelse ($arr_unique as $genre)
                                        <div class="item">
                                            <a href="{{ url('/') }}/genre/{{ $genre }}" title="{{ $genre }}">
                                                {{ $genre}}
                                            </a>
                                        </div>
                                        @empty
                                        Genre tidak ditemukan.
                                        @endforelse
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
