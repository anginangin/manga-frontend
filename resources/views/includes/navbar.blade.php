<!-- SUB HEADER -->
@php
    $randomManga    = App\Models\Manga::with('chapters')->inRandomOrder()->first();
    (Auth::check()) ? $notification   = App\Models\Notification::where(['user_id' => auth()->user()->id, 'is_read' => 0])->orderBy('id', 'desc')->get() : '';
@endphp
<div id="sub-header" class="home-sub-header">
    <div class="container">
        <div class="sh-left">
            <div class="float-left">
                @if ($randomManga)    
                <a href="{{ route('detail', $randomManga['slug']) }}" class="sh-item">
                    <i class="fas fa-glasses mr-2 text-color"></i>
                    <span class="text-color">Read Random</span>
                </a>
                <div class="spacing"></div>
                @endif
                <a href="https://zoro.to" target="_blank" class="sh-item">
                    <i class="fas fa-play-circle mr-2 text-color"></i>
                    <span class="text-color">Anime Online</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="sh-right">
            <div class="float-left">
                <div class="sh-item mr-3">
                    <strong class="text-color">Follow us :</strong>
                </div>
                <a target="_blank" href="#" class="sh-item mr-3">
                    <i class="fab fa-reddit-alien mr-2 text-color"></i>
                    <span class="text-color">Reddit</span>
                </a>
                <a target="_blank" href="#" class="sh-item mr-3">
                    <i class="fab fa-twitter mr-2 text-color"></i>
                    <span class="text-color">Twitter</span>
                </a>
                <a target="_blank" href="#" class="sh-item">
                    <i class="fab fa-discord mr-2 text-color"></i>
                    <span class="text-color">Discord</span>
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- SUB HEADER -->

<!-- MAIN HEADER -->
<div id="header" {{ Route::is('homepage') ? 'class=home-header' : '' }} style="{{ Route::is('homepage') ? '' : 'background:'.$setTheme->secondary_color.'!important' }}">
    <div class="container">
        <div id="mobile_menu">
            <i class="fa fa-bars text-color"></i>
        </div>
        <div id="mobile_search">
            <i class="fa fa-search text-color"></i>
        </div>
        <a href="{{ route('homepage') }}" id="logo">
            <img src="{{ config('constant.url.backend').'/logo/'.$web['logo'] }}" alt="logo" />
            <div class="clearfix"></div>
        </a>
        <div id="header_menu">
            <ul class="nav header_menu-list">
                <li class="nav-item">
                    <a href="{{ route('homepage') }}" title="Homepage" class="text-color">
                        Home
                    </a>
                </li>
                <li class="nav-item text-color">
                    <a href="/manga/text-mode" title="Manga List" class="text-color">
                        Manga List
                    </a>
                </li>
                <li class="nav-item text-color">
                    <a href="{{ route('az-list') }}" title="A-Z List" class="text-color">
                        A-Z List
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        @if (Auth::check())
        <div id="header_right" class="user-logged">

            <!-- SEARCH BAR -->
            <div id="search">
                <div class="search-content">
                    <form action="/search" method="get">
                        <input type="text" id="searchManga" name="keyword" class="form-control search-input pl-3" placeholder="Cari Manga..." />
                        <button type="submit" class="search-icon">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    <div class="nav search-result-pop" id="search-suggest" style="display: block;">
                        <div class="result"></div>
                        <div class="results"></div>
                    </div>
                </div>
            </div>
            
            <!-- NOTIFICATION -->
            <div id="login-state" style="float: left;">
                <div class="hr-notifications">
                    <div class="hrn-icon icon-class" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell text-color"></i>
                        @if (count($notification) > 0)    
                        <span class="badge badge-pill badge-danger">{{ count($notification) }}</span>
                        @endif
                    </div>
                    <div class="dropdown-menu dropdown-menu-noti new-noti-list" aria-labelledby="noti-list">
                        <div class="nnl-mark">
                            <form action="{{ route('readAll') }}" method="post">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="ma-btn notify-seen-all text-white float-right" style="background:none !important" data-position="header">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <i class="fas fa-check mr-2 text-color"></i>
                                    <span class="text-color">Tandai sudah dibaca</span>
                                </button>
                            </form>
                        </div>
                        @forelse ($notification->take(5) as $notif)
                        <a class="nnl-item with-poster" href="/read{{ $notif->url }}" style="opacity: 1">
                            <div class="manga-poster">
                                <img src="{{ $notif->thumbnail }}" class="manga-poster-img">
                            </div>
                            <strong class="manga-name text-color">
                                {{ $notif->title }}
                            </strong>
                            <div class="time text-color">{{ \Carbon\Carbon::parse($notif->created_at)->diffForHumans() }}</div>
                        </a>
                        @empty    
                        <div style="display: block; padding: 25px 15px; text-align: center; font-size: 14px;">
                            <div class="block mb-2">
                                <i class="fas fa-box-open text-color" style="font-size: 20px;"></i>
                            </div>
                            <span class="text-color">Tidak ada notifikasi</span>
                        </div>
                        @endforelse
                        <a class="nnl-item nnl-more" href="/user/notifications">
                            <div class="text-center text-color">
                                Lihat semua
                            </div>
                        </a>
                    </div>
                </div>

                <!-- USER SLOT -->
                <div id="user-slot">
                    <div class="header_right-user logged">
                        <div class="dropdown">
                            <div class="btn-avatar" data-toggle="dropdown" aria-expanded="false">
                                @if (auth()->user()->avatar)    
                                <img src="{{ asset('avatar/'.auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}">
                                @else
                                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="{{ auth()->user()->name }}">
                                @endif
                            </div>
                            <div id="user_menu" class="dropdown-menu dropdown-menu-model">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user mr-2 text-color"></i>
                                    <span class="text-color">Profil</span>
                                </a>
                                <a class="dropdown-item" href="/user/bookmark">
                                    <i class="fas fa-bookmark mr-2 text-color"></i>
                                    <span class="text-color">Bookmark</span>
                                </a>
                                <a class="dropdown-item" href="/user/notifications">
                                    <i class="fas fa-bell mr-2 text-color"></i>
                                    <span class="text-color">Notifikasi</span>
                                </a>
                                <a class="dropdown-item di-bottom" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span>Logout</span>
                                    <i class="fas fa-arrow-right ml-2 mr-1"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        @else
        <div id="header_right">
            <div id="search">
                <div class="search-content">
                    <form action="/search" method="get">
                        <input type="text" id="searchManga" name="keyword" class="form-control search-input pl-3" placeholder="Search Manga..." />
                        <button type="submit" class="search-icon">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    <div class="nav search-result-pop" id="search-suggest" style="display: block;">
                        <div class="result"></div>
                    </div>
                </div>
            </div>
            <div id="login-state" style="float: left;">
                <div id="user-slot">
                    <div class="header_right-user">
                        <a href="{{ route('sign-in') }}" class="btn-user btn btn-login">
                            <i class="fas fa-user-circle mr-2 text-color"></i>
                            <span class="text-color">Member</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        @endif
        <div class="clearfix"></div>
    </div>
</div>
<script>
    $(document).ready(function(){
        fetch_customer_data();
        function fetch_customer_data(query = '') {
            $.ajax({
                url:"/live-search",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data) {
                    $('.result').html(data.result_data);
                    $('.results').html(data.all_result);
                    $('#search-loading').css('display', 'none');
                }
            })
        }

        $('#searchManga').on('keyup', function() {
            $('#search-loading').css('display', 'block');
            var query = $(this).val();
            fetch_customer_data(query);
        });
    });
</script>
<!-- MAIN HEADER -->