<!doctype html>
<html lang="en">

<head>
    @php 
        $web            = App\Models\Web::first();
    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ config('constant.url.backend').'/logo/'.$web['icon'] }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('constant.url.backend').'/logo/'.$web['icon'] }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
    <title>Register</title>
    @php 
        $setTheme = \DB::table('web_setting')->join('theme_colors', 'theme_colors.id', '=', 'web_setting.theme_id')->first(); 
        $web = App\Models\Web::first();
    @endphp
    <style>
        html,
        body {
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: {{ $setTheme->primary_base_color }};
            color: {{ $setTheme->text_color }};
        }

        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            margin: auto;
            background: {{ $setTheme->secondary_base_color }};
            border-radius: 14px;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 14px;
            background: {{ $setTheme->tertiary_base_color }};
            border: 1px solid {{ $setTheme->tertiary_base_color }};
            color: #ffffff;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <form class="form-signin" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="text-center">
            <a href="{{ route('homepage') }}">
                <img class="mb-4 img-fluid" src="{{ config('constant.url.backend').'/logo/'.$web['icon'] }}" alt="" style="max-height: 60px">
            </a>
            <h5 class="mb-3 font-weight-normal text-white">Buat Akun</h5>
        </div>
        <div class="form-group">
            <small>Nama Anda</small>
            <input id="name" type="text" class="form-control mt-2 @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <small>Alamat Email</small>
            <input id="email" type="email" class="form-control mt-2 @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="name@email.com">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <small>Password</small>
            <input id="password" type="password" class="form-control mt-2 @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <small>Konfirmasi Password</small>
            <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required
                autocomplete="new-password" placeholder="Confirm Password">
        </div>
        <br>
        <button class="btn btn-primary btn-block p-1 text-dark" type="submit"
            style="background: {{ $setTheme->button_color }}; border: 1px solid {{ $setTheme->button_color }}">
            <b>Register</b>
        </button>
        <p class="mt-5 mb-3 text-muted text-center">
            Sudah punya akun? <a href="{{ route('sign-in') }}"
                class="link-highlight register-tab-link text-white">Masuk</a>
        </p>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>