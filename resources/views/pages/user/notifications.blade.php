@extends('layouts.web')
@section('content')
<div id="main-wrapper">
    <div class="container">
        <div id="mw-2col">
            <div id="main-content">
                <!--Begin: Section Manga list-->
                <section class="block_area block_area_profile">
                    <div class="block_area-header">
                        <div class="bah-heading">
                            <h2 class="cat-heading">Notifikasi</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div class="inbox-list">
                            <div class="inbox-tabs">
                                <div class="float-right">
                                    <form action="{{ route('readAll') }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <button type="submit" class="btn btn-sm btn-blank notify-seen-all" style="font-size: 12px;"><i class="fas fa-check mr-1"></i>
                                            Tandai semua telah dibaca 
                                        </button>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="inbox-item-list">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped">
                                        <tbody>
                                            @forelse ($notifications as $notif)
                                            @if ($notif->is_read == 0)
                                            <tr class="text-white font-weight-bold">
                                                <a href="/read{{ $notif->url }}">
                                                    <td class="text-center"><img src="{{ $notif->thumbnail }}" style="max-height: 50px"></td>
                                                    <td>
                                                        {{ $notif->title }}
                                                        <br>
                                                        <small>{{ \Carbon\Carbon::parse($notif->created_at)->diffForHumans() }}</small>
                                                    </td>
                                                    <td>
                                                        <a href="/read{{ $notif->url }}" class="btn btn-sm btn-warning text-dark font-weight-bold p-2">
                                                            Lihat
                                                        </a>
                                                    </td>
                                                </a>    
                                            </tr>
                                            @else
                                            <tr class="text-muted">
                                                <td class="text-center"><img src="{{ $notif->thumbnail }}" style="max-height: 45px"></td>
                                                <td>
                                                    {{ $notif->title }}
                                                    <br>
                                                    <small>{{ \Carbon\Carbon::parse($notif->created_at)->diffForHumans() }}</small>
                                                </td>
                                                <td>
                                                    <a href="/read{{ $notif->url }}" class="btn btn-warning btn-sm text-dark p-2">
                                                        Lihat
                                                    </a>
                                                </td>
                                            </tr>
                                            @endif    
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-white text-center">Tidak ada notifikasi</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pre-pagination float-right">
                                    {{ $notifications->onEachSide(0)->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="pre-pagination mt-4">
                            <nav aria-label="Page navigation">

                            </nav>
                        </div>
                    </div>
                </section>
                <!--End: Section Manga list-->
                <div class="clearfix"></div>
            </div>
            <!--Begin: main-sidebar-->
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
                                <li class="">
                                    <a href="/user/bookmark" class="mp-item">
                                        <i class="fas fa-bookmark mr-3"></i>
                                        Bookmark
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="/user/notifications" class="mp-item">
                                        <i class="fas fa-bell mr-3"></i>
                                        Notifikasi
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
            <!--/End: main-sidebar-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection