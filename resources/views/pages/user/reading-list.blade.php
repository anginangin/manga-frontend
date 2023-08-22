@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('content')
<div id="main-wrapper">
    <div class="container">
        <div id="mw-2col">
            <div id="main-content">
                <section class="block_area block_area_fav">
                    <div class="block_area-header">
                        <div class="float-left bah-heading">
                            <h2 class="cat-heading">Bookmark</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="manga_list-sbs" id="manga-bookmarked">
                        <div class="mls-wrap">
                            @foreach ($bookmark as $manga)
                                <div class="item item-spc">
                                    <div class="dr-fav">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-circle btn-light btn-fav">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-model" aria-labelledby="ssc-list">
                                            <form id="bookmark-form">
                                                @csrf
                                                <input type="hidden" id="manga_id{{ $manga['id'] }}" name="manga_id" value="{{ $manga['id'] }}">
                                                <input type="hidden" id="user_id{{ auth()->user()->id }}" name="user_id" value="{{ auth()->user()->id }}">
                                                <button type="button" class="btn btn-block btn-sm text-danger" id="removeBookmark{{ $manga['id'] }}">
                                                    Hapus Bookmark
                                                </button>
                                            </form>
                                            <script>
                                                $(document).ready(function(){
                                                    $("#removeBookmark{{ $manga['id'] }}").click(function(e) {
                                                        e.preventDefault();

                                                        var manga_id = $("#manga_id{{ $manga['id'] }}").val();
                                                        var user_id = $("#user_id{{ auth()->user()->id }}").val();
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
                                                            success:function(response){
                                                                toastr.options = {
                                                                "closeButton" : true,
                                                                "progressBar" : true,
                                                                "positionClass": "toast-bottom-right",
                                                                }
                                                                toastr.success(`${response.message}`);
                                                                $('#manga-bookmarked').load(document.URL + ' #manga-bookmarked');
                                                            },
                                                        });
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <a class="manga-poster" href="{{ route('detail', $manga['slug']) }}">
                                        <img src="{{
                                            (!$manga['thumbnail'])
                                            ? str_replace('i2.wp.com/', '', str_replace('i2.wp.com/', '', $manga['poster']))
                                            : config('constant.url.api_image').$manga['thumbnail']
                                        }}" class="manga-poster-img lazyload" alt="{{ $manga['title'] }}" />
                                    </a>
                                    <div class="manga-detail">
                                        <h3 class="manga-name">
                                            <a href="{{ route('detail', $manga['slug']) }}" title="{{ $manga['title'] }}">
                                                {{$manga['title'] }}
                                            </a>
                                        </h3>
                                        <div class="fd-infor">
                                            <span class="fdi-item fdi-cate">
                                                @php $genres = json_decode($manga['genre']) @endphp
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
                                            @foreach ($manga['chapters']->sortByDesc('chapter') as $k => $chapter)
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
                        <div class="pre-pagination mt-4">
                            <nav aria-label="Page navigation">

                            </nav>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            </div>
            <div id="main-sidebar">
                <section class="block_area block_area_sidebar block_area-profile">
                    <div class="block_area-header">
                        <div class="float-left bah-heading">
                            <h2 class="cat-heading">Profile Menu</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div class="menu-profiles">
                            <ul class="ulclear">
                                <li class="">
                                    <a href="/user/profile" class="mp-item">
                                        <i class="fas fa-user mr-3"></i>
                                        Profil
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="/user/bookmark" class="mp-item">
                                        <i class="fas fa-bookmark mr-3"></i>
                                        Bookmark
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/user/notifications" class="mp-item">
                                        <i class="fas fa-bell mr-3"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('ganti-password') }}" class="mp-item">
                                        <i class="fas fa-lock mr-3"></i>
                                        Ganti Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
