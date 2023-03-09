<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ App\Models\SEO::select('title')->first()->title }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2" />

    {!! App\Models\SEO::select('meta_tag')->first()->meta_tag !!}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @php
        $web = App\Models\Web::first();
        $setTheme = \DB::table('web_setting')
            ->join('theme_colors', 'theme_colors.id', '=', 'web_setting.theme_id')
            ->first();
        $bannerAtas = App\Models\Banner::where(['posisi' => 'Atas', 'status' => 0])->get();
    @endphp

    @include('includes.style')
    @stack('addon-style')
    @include('layouts.color')
    @foreach (App\Models\Adds::where('posisi', 'HEADER')->get() as $adds)
        @if ($adds->status == 0)
            {!! $adds->script !!}
        @endif
    @endforeach
</head>

<body>
    @foreach (App\Models\Adds::where('posisi', 'BODY')->get() as $adds)
        @if ($adds->status == 0)
            {!! $adds->script !!}
        @endif
    @endforeach
    @include('includes.sidebar')

    <div id="wrapper">
        @include('includes.navbar')

        <div class="clearfix"></div>

        <div class="text-center mb-3">
            @foreach ($bannerAtas as $bannerAtas)
                <a href="{{ $bannerAtas->link }}" target="_blank">
                    <img src="{{ config('constant.url.backend') . '/banner/' . $bannerAtas->gambar }}" class="img-fluid"
                        alt="">
                </a>
            @endforeach
        </div>

        @yield('content')

        @include('includes.footer')

    </div>

    @include('includes.script')
    @stack('addon-script')
</body>

</html>
