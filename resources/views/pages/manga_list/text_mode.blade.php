@extends('layouts.web')
@section('content')
<div class="prebreadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                <li class="breadcrumb-item active">Manga List</li>
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
                            <h2 class="cat-heading">Manga List</h2>
                        </div>
                        <div class="cate-sort float-right">
                            <div class="cs-item">
                                <a href="/manga/image-mode" class="btn btn-sm btn-sort">Image Mode</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="category_block">
                        <div class="c_b-wrap">
                            <div class="c_b-list active alphabet-list">
                                <div class="cbl-row justify-content-center">
                                    @foreach ($groups as $letter => $value)
                                    @if (preg_match("/[a-z]/i", $letter) && $letter != 'other')
                                    <div class="item">
                                        <a href="#{{ $letter }}" class="mb-2">
                                            {{ $letter }}
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="manga_list-sbs">
                        <div class="mls-wrap px-2">
                            @forelse ($groups as $letter => $value)
                            <ul class="list-group list-group-flush">
                                <li id="{{ $letter }}" class="list-group-item active"
                                    style="background-color: #2f2f2f;border:none">
                                    @if ($letter == [0-9])
                                    0-9
                                    @elseif ($letter == 'other')
                                    #
                                    @else
                                    {{ $letter }}
                                    @endif
                                </li>
                                <li class="list-group-item" style="background-color: transparent;color: #fff">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($value as $data)
                                            <div class="col-12 col-md-6 mb-2" style="display: list-item">
                                                <a href="{{ route('detail', $data['slug']) }}">
                                                    <span class="text-white">
                                                        {{ $data['title'] }}
                                                    </span>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @empty
                            <div class="text-center">
                                Manga tidak ditemukan.
                            </div>
                            @endforelse
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            </div>

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
                                        @forelse ($arr_unique as $genre)
                                        <div class="item">
                                            <a href="/genre/{{ $genre }}" title="{{ $genre }}">
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