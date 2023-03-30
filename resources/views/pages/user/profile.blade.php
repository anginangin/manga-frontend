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
                                Profil
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <form class="preform preform-center" method="post" action="{{ route('change_avatar') }}" enctype="multipart/form-data">
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
                            <input type="hidden" name="old_avatar" value="{{ auth()->user()->avatar }}">
                            <div class="profile-avatar">
                                @if (auth()->user()->avatar)
                                <img class="img-fluid img-preview" src="{{ asset('avatar/'.auth()->user()->avatar) }}">
                                @else
                                <img class="img-fluid img-preview" src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}">
                                @endif
                                <label for="upload-photo" style="cursor: pointer">Ubah Avatar</label>
                                <input type="file" name="avatar" id="upload-photo" style="opacity: 0;position: absolute; z-index: -1" />
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="pro5-email">Alamat Email</label>
                                <input type="email" class="form-control" disabled="" id="pro5-email" value="{{ auth()->user()->email }}">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="pro5-name">Nama</label>
                                <input type="text" class="form-control" id="pro5-name" disabled="" name="name" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="pro5-name">Tanggal Terdaftar</label>
                                <input type="text" class="form-control" id="pro5-name" disabled="" name="name" value="{{ date('d F Y', strtotime(auth()->user()->created_at)) }}">
                            </div>
                            {{-- <div class="block">
                                <a class="btn btn-xs btn-blank" data-toggle="collapse" href="#show-changepass">
                                    <i class="fas fa-key mr-2"></i>
                                    Ubah Password
                                </a>
                            </div>
                            <div id="show-changepass" class="collapse mt-3">
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
                            </div> --}}
                            <div class="form-group">
                                <button id="btnSubmit" class="btn btn-block btn-primary btn-sm" style="display: none">Submit</button>
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
                                <li class="active">
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
@push('addon-script')
    <script>
        $(document).ready(function(){
            $('#upload-photo').on('change', function(e) {
                const image = document.querySelector('#upload-photo');
                const imagePreview = document.querySelector('.img-preview');

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                    imagePreview.src = oFREvent.target.result;
                    $('#btnSubmit').css('display', 'block');
                }
            });
        });
    </script>
@endpush
