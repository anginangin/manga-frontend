@extends('layouts.web')
@section('title', 'Baca ' . $detailManga['title'] . ' Bahasa Indonesia | Mangapaws')
@section('title_manga', $detailManga['title'])
@section('meta')
<meta name="description" content="Baca Komik {{ $detailManga['title'] }} online bahasa Indonesia gratis dan terupdate hanya di Mangapaws!" />
@endsection
@section('less')
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "ComicSeries",
    "name": "{{ $detailManga['title'] }}",
    "url": "{{ url()->current() }}",
    "author": {
    "@type": "Person",
    "name": "Admin"
    },
    "publisher": {
    "@type": "Organization",
    "name": "Mangapaws"
    },
    "image": "{{ $detailManga['poster'] }}",
    "description": "Baca komik {{ $detailManga['title'] }} bahasa Indonesia terbaru dan terlengkap di Mangapaws",
    "inLanguage": "Indonesian",
    "isPartOf": {
    "@type": "ComicSeries",
    "name": "Mangapaws"
    }
    }
    </script>
@endsection
@section('content')
    <div id="ani_detail">
        <div class="ani_detail-stage">
            <div class="container">
                <div class="detail-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                {{ $detailManga['title'] }}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="anis-content">
                    <div class="anisc-poster">
                        <div class="manga-poster">
                            <img src="{{ !$detailManga['thumbnail']
                                ? $detailManga['poster']
                                : config('constant.url.api_image') . $detailManga['thumbnail'] }}"
                                class="manga-poster-img" alt="{{ $detailManga['title'] }}
                        ">
                        </div>
                    </div>
                    <div class="anisc-detail">
                        <h2 class="manga-name text-color">
                            {{ $detailManga['title'] }}
                        </h2>
                        <div class="manga-name-or">
                            <i class="fas fa-star text-warning mr-2"></i>
                            <strong class="text-color">
                                {{ $ratingValue }}
                            </strong>
                            <small class="text-muted ml-2">
                                ({{ App\Models\Rating::where('manga_id', $detailManga['id'])->count() }} vote)
                            </small>
                        </div>
                        <div id="mal-sync"></div>
                        <div class="manga-buttons">
                            <a href="/read{{ $detailManga->chapters->last()->path }}"
                                class="btn btn-primary btn-play smoothlink">
                                <i class="fas fa-eye mr-2 text-dark"></i>
                                <span class="text-dark">Read Now</span>
                            </a>
                            <div class="dr-fav" id="reading-list-info">
                                @if (Auth::check())
                                    @if (App\Models\Bookmark::where(['manga_id' => $detailManga['id'], 'user_id' => auth()->user()->id])->exists())
                                        <form>
                                            @csrf
                                            <input type="hidden" id="manga_id" name="manga_id"
                                                value="{{ $detailManga['id'] }}">
                                            <input type="hidden" id="user_id" name="user_id"
                                                value="{{ auth()->user()->id }}">
                                            <button type="button" class="btn btn-light btn-fav" id="unbookmark">
                                                <i class="fas fa-bookmark"
                                                    style="color: {{ $setTheme->secondary_color }} !important"></i>
                                            </button>
                                        </form>
                                    @else
                                        <form>
                                            @csrf
                                            <input type="hidden" id="manga_id" name="manga_id"
                                                value="{{ $detailManga['id'] }}">
                                            <input type="hidden" id="user_id" name="user_id"
                                                value="{{ auth()->user()->id }}">
                                            <button type="submit" class="btn btn-light btn-fav" id="bookmark">
                                                <i class="far fa-bookmark"></i>
                                            </button>
                                        </form>
                                    @endif
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="sort-desc">
                            <div class="genres">
                                @php $genres = json_decode($detailManga['genre']) @endphp
                                @foreach ($genres as $genre)
                                    <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                        {{ $genre->genre }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="description text-color text-justify">
                                {{ $detailManga['description'] }}
                            </div>

                            <div class="description-more">
                                <button type="button" data-toggle="modal" data-target="#modaldesc"
                                    class="btn btn-xs text-color">
                                    + Read full
                                </button>
                                <div class="modal fade premodal" id="modaldesc" tabindex="-1" role="dialog"
                                    aria-labelledby="modalldesctitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-color" id="modalldesctitle">
                                                    {{ $detailManga['title'] }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"
                                                    style="background: {{ $setTheme->tertiary_base_color }} !important">
                                                    <span aria-hidden="true" class="text-color">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="description-modal text-color text-justify">
                                                    {{ $detailManga['description'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="anisc-info-wrap">
                                <div class="anisc-info">
                                    @php $tables = json_decode($detailManga['information']) @endphp
                                    @foreach ($tables as $table)
                                        <div class="item item-title">
                                            <span>
                                                @if ($table->value)
                                                    @if ($detailManga->chapters[0]->domain == config('constant.url.komikstation'))
                                                        {{ $table->key != 'Posted By:' ? $table->value : '' }}
                                                    @else
                                                        @if ($table->key != 'Posted By')
                                                            {{ $table->key }}: {{ $table->value }}
                                                        @endif
                                                    @endif
                                                @endif
                                            </span>
                                        </div>
                                    @endforeach
                                    <div class="detail-toggle">
                                        <button type="button" class="btn btn-sm btn-light">
                                            <i class="fas fa-angle-down mr-2"></i>
                                        </button>
                                    </div>
                                    <div class="dt-rate" id="vote-info">
                                        <div class="block-rating ">
                                            <div class="description text-color pt-3">
                                                Berikan penilaian tentang manga ini.
                                            </div>
                                            @if (Auth::check())
                                                @php
                                                    $rate = \App\Models\Rating::where('manga_id', $detailManga['id'])
                                                        ->where('user_id', auth()->user()->id)
                                                        ->first();
                                                @endphp
                                                @if ($rate)
                                                    <div class="description">
                                                        @if ($rate['rating'] == 5)
                                                            <div class="form-group" id="rating-ability-wrapper">
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        @elseif($rate['rating'] == 4)
                                                            <div class="form-group" id="rating-ability-wrapper">
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        @elseif($rate['rating'] == 3)
                                                            <div class="form-group" id="rating-ability-wrapper">
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        @elseif($rate['rating'] == 2)
                                                            <div class="form-group" id="rating-ability-wrapper">
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        @else
                                                            <div class="form-group" id="rating-ability-wrapper">
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star text-warning"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="btnrating btn btn-default btn-sm p-0"
                                                                    style="cursor: default">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        @endif
                                                    @else
                                                        <form>
                                                            <div class="form-group" id="rating-ability-wrapper">
                                                                <input type="hidden" id="manga_id" name="manga_id"
                                                                    value="{{ $detailManga['id'] }}">
                                                                <input type="hidden" id="user_id" name="user_id"
                                                                    value="{{ auth()->user()->id }}">
                                                                <input type="hidden" id="selected_rating"
                                                                    name="selected_rating" value=""
                                                                    required="required">
                                                                <button type="button"
                                                                    class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    data-attr="1" id="rating-star-1">
                                                                    <i class="fa fa-star text-color"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    data-attr="2" id="rating-star-2">
                                                                    <i class="fa fa-star text-color"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    data-attr="3" id="rating-star-3">
                                                                    <i class="fa fa-star text-color"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btnrating btn btn-default btn-sm p-0 mr-2"
                                                                    data-attr="4" id="rating-star-4">
                                                                    <i class="fa fa-star text-color"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                                <button type="button"
                                                                    class="btnrating btn btn-default btn-sm p-0"
                                                                    data-attr="5" id="rating-star-5">
                                                                    <i class="fa fa-star text-color"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                @endif
                                            @else
                                                <div class="form-group" id="rating-ability-wrapper">
                                                    <a href="{{ route('sign-in') }}" class="btn btn-default btn-sm"
                                                        data-attr="1" id="rating-star-1" disabled>
                                                        <i class="fa fa-star text-color" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{ route('sign-in') }}" class="btn btn-default btn-sm"
                                                        data-attr="2" id="rating-star-2" disabled>
                                                        <i class="fa fa-star text-color" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{ route('sign-in') }}" class="btn btn-default btn-sm"
                                                        data-attr="3" id="rating-star-3" disabled>
                                                        <i class="fa fa-star text-color" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{ route('sign-in') }}" class="btn btn-default btn-sm"
                                                        data-attr="4" id="rating-star-4" disabled>
                                                        <i class="fa fa-star text-color" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{ route('sign-in') }}" class="btn btn-default btn-sm"
                                                        data-attr="5" id="rating-star-5" disabled>
                                                        <i class="fa fa-star text-color" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="clearfix"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-wrapper" class="page-layout page-detail">
        <div class="container">
            <div id="mw-2col">
                <div id="main-content">
                    <section id="chapters-list" class="block_area block_area_category block_area_chapters">
                        <div class="block_area-header mb-0">
                            <div class="bah-heading bah-heading-tabs">
                                <ul class="nav nav-tabs chap-tabs">
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#list-chapter"
                                            class="nav-link active show text-color">
                                            List Chapter
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div id="list-chapter" class="tab-pane active show">
                                <div class="chapter-section">
                                    <div class="chapter-s-search">
                                        <form class="preform search-reading-item-form">
                                            <div class="css-icon">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <input class="form-control search-reading-item w-100" id="searchDetail"
                                                type="text" placeholder="Cari Chapter..." autofocus>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <script>
                                    $("#searchDetail").on("keyup", function() {
                                        var entered = parseFloat($(this).val());
                                        $(".chapter-item").each(function() {
                                            var text = parseFloat($(this).attr("data-number"));
                                            if (!isNaN(entered)) {
                                                if (text == entered) {
                                                    $(this).show();
                                                } else {
                                                    $(this).hide();
                                                }
                                            } else {
                                                $(".chapter-item").show();
                                            }
                                        });
                                    });
                                </script>
                                <div class="chapters-list-ul">
                                    <ul class="ulclear reading-list lang-chapters" id="en-chapters">
                                        @foreach ($detailManga->chapters->sortByDesc('chapter') as $chapter)
                                            <li class="item reading-item chapter-item"
                                                data-number="{{ floatval($chapter->chapter) }}">
                                                <a href="/read{{ $chapter->path }}" class="item-link">
                                                    <span class="arrow mr-2">
                                                        <i class="far fa-file-alt text-color"></i>
                                                    </span>
                                                    <span class="name text-color">
                                                        Chapter {{ floatval($chapter->chapter) }}
                                                    </span>
                                                    <span class="item-read">
                                                        <i class="fas fa-glasses mr-1 text-color"></i>
                                                        <span class="text-color">Baca</span>
                                                    </span>
                                                </a>
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>

                    <section class="block_area block_area_category block_area_authors-other">
                        <div class="block_area-header">
                            <div class="bah-heading">
                                <h2 class="cat-heading text-color">
                                    Series Terkait
                                </h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @if (!empty($relatedManga))
                            <div class="manga_list-sbs">
                                <div class="mls-wrap">
                                    @foreach ($relatedManga as $relatedManga)
                                        <div class="item item-spc">
                                            <a class="manga-poster" href="{{ route('detail', $relatedManga['slug']) }}">
                                                <img src="{{ !$relatedManga['thumbnail']
                                                    ? $relatedManga['poster']
                                                    : config('constant.url.api_image') . $relatedManga['thumbnail'] }}"
                                                    class="manga-poster-img lazyload"
                                                    alt="{{ $relatedManga['title'] }}" />
                                            </a>
                                            <div class="manga-detail">
                                                <h3 class="manga-name">
                                                    <a href="{{ route('detail', $relatedManga['slug']) }}"
                                                        title="{{ $relatedManga['title'] }}">
                                                        {{ $relatedManga['title'] }}
                                                    </a>
                                                </h3>
                                                <div class="fd-infor">
                                                    <span class="fdi-item fdi-cate">
                                                        @php $genres = json_decode($relatedManga['genre']) @endphp
                                                        @foreach ($genres as $genre)
                                                            <a href="{{ url('/') }}/genre/{{ $genre->genre }}">
                                                                {{ $genre->genre }}
                                                            </a>,
                                                        @endforeach
                                                    </span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="fd-list">
                                                    @php $i = 0 @endphp
                                                    @foreach ($relatedManga['chapters']->sortByDesc('chapter') as $k => $chapter)
                                                        <div class="fdl-item">
                                                            <div class="chapter">
                                                                <a href="/read{{ $chapter['path'] }}" class="d-inline">
                                                                    <i class="far fa-file-alt mr-2"></i>
                                                                    Chapter {{ floatval($chapter['chapter']) }}
                                                                </a>
                                                            </div>
                                                            <div class="release-time">
                                                                <span class="text-muted"></span>
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
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endif
                    <div class="card"
                        style="background: {{ $setTheme->secondary_base_color }} !important;color: {{ $setTheme->text_color }}">
                        <div class="card-header">
                            @php
                                $komen = DB::table('comments')
                                    ->where('commentable_id', $detailManga['id'])
                                    ->get();
                            @endphp
                            <h5>{{ count($komen) }} Komentar</h5>
                        </div>
                        <div class="card-body">
                            @comments(['model' => $detailManga])
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
<script>
    $(document).ready(function() {
        $('#unbookmark').click(function(e) {
            e.preventDefault();

            var manga_id = $('#manga_id').val();
            var user_id = $('#user_id').val();
            let token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: `/user/unbookmark`,
                type: "POST",
                cache: false,
                data: {
                    manga_id: manga_id,
                    user_id: user_id,
                    _token: token
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
                    }
                    toastr.success(`${response.message}`);
                    $('#reading-list-info').load(document.URL + ' #reading-list-info');
                },
            });
        });

        $('#bookmark').click(function(e) {
            e.preventDefault();

            var manga_id = $('#manga_id').val();
            var user_id = $('#user_id').val();
            let token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: `/user/bookmark`,
                type: "POST",
                cache: false,
                data: {
                    manga_id: manga_id,
                    user_id: user_id,
                    _token: token
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
                    }
                    toastr.success(`${response.message}`);
                    $('#reading-list-info').load(document.URL + ' #reading-list-info');
                },
            });
        });

        $(".btnrating").on('click', (function(e) {
            e.preventDefault();
            var previous_value = $("#selected_rating").val();
            var selected_value = $(this).attr("data-attr");
            var manga_id = $('#manga_id').val();
            var user_id = $('#user_id').val();
            let token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: `/rate`,
                type: "POST",
                cache: false,
                data: {
                    manga_id: manga_id,
                    rating: selected_value,
                    user_id: user_id,
                    _token: token
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
                    }
                    toastr.success(`${response.message}`);
                    $('#vote-info').load(document.URL + ' #vote-info');
                },
            });

            $("#selected_rating").val(selected_value);
            $(".selected-rating").empty();
            $(".selected-rating").html(selected_value);
            for (i = 1; i <= selected_value; ++i) {
                $("#rating-star-" + i).toggleClass('text-warning');
                $("#rating-star-" + i).toggleClass('btn-default');
            }
            for (ix = 1; ix <= previous_value; ++ix) {
                $("#rating-star-" + ix).toggleClass('text-warning');
                $("#rating-star-" + ix).toggleClass('btn-default');
            }
        }));
    });
</script>
@endsection
