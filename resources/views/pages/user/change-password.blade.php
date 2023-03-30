@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('content')
<div id="main-wrapper">
    <div class="container">
        <div id="mw-2col">
            <div id="main-content">
                <section class="block_area block_area_profile">
                    <div class="block_area-header">
                        <div class="bah-heading">
                            <h2 class="cat-heading">
                                Ganti Password
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <form class="preform preform-center pl-0" style="max-width: 500px !important" method="post" action="{{ route('change_password') }}">
                            @method('PUT')
                            @csrf
                            @if ($errors->all())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                            <div class="form-group">
                                <label class="prelabel" for="pro5-currentpass">Password Saat Ini</label>
                                <input type="password" class="form-control" name="current_password">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="pro5-pass">Password Baru</label>
                                <input type="password" class="form-control" name="new_password">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="pro5-confirm">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" name="confirm_new_password">
                            </div>
                            <div class="form-group">
                                <button id="btnSubmit" class="btn btn-block btn-primary btn-sm">Submit</button>
                            </div>
                        </form>
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
                                    <a href="{{ route('profile') }}" class="mp-item">
                                        <i class="fas fa-user mr-3"></i>
                                        Profil
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('bookmark-list') }}" class="mp-item">
                                        <i class="fas fa-bookmark mr-3"></i>
                                        Bookmark
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('notifications') }}" class="mp-item">
                                        <i class="fas fa-bell mr-3"></i>
                                        Notifikasi
                                    </a>
                                </li>
                                <li class="active">
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
