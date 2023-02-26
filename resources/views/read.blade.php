<!DOCTYPE html>
<html lang="en">
<head>
    @php $web = App\Models\Web::first() @endphp
    <title>Read {{ str_replace("/","",str_replace("-"," ",ucwords($chapter['path']))) }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2" />
    <meta name="p:domain_verify" content="af0275499319c533df212167fc646dfb" />
    <link rel="shortcut icon" href="{{ config('constant.url.backend').'/logo/'.$web['icon'] }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('constant.url.backend').'/logo/'.$web['icon'] }}">
    <link rel="manifest" href="https://mangareader.to/manifest.json">
    <link rel="mask-icon" href="https://mangareader.to/images/safari-pinned-tab.svg" color="#5f25a6">
    <meta name="msapplication-TileColor" content="#5f25a6">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    @include('layouts.color')

    <style>
        .headpost,
        #content.readercontent .bixbox,
        #content.readercontent .chdesc,
        .chnav,
        .kln,
        .scrollToTop,
        .chaptertags,
        #footer,
        .center,
        #histats_counter,
        #close-teaser,
        .socialts,
        #readerarea-loading,
        .th,
        .readingnav.rnavbot {
            display: none !important;
        }

        img.curdown {
            cursor: default !important;
        }

        #content {
            overflow: hidden;
            max-width: 1220px;
            margin: 0 auto;
            margin-top: 0 !important;
            position: relative;
            padding-bottom: 0 !important;
        }
        .modal-backdrop{
            z-index: 0 !important;
        }
    </style>
</head>

<body class="page-reader">
    <div id="wrapper" data-reading-id="545600" data-reading-by="chap" data-lang-code="en" data-manga-id="56074">
        <div id="header" class="header-reader">
            <div class="container">
                <div class="auto-div">
                    <a href="/" id="logo" class="mr-0" style="height: auto;">
                        <img src="{{ config('constant.url.backend').'/logo/'.$web['icon'] }}" alt="logo" class="img-fluid" style="max-height: 60px; margin-top: auto">
                        <div class="clearfix"></div>
                    </a>
                    <div class="hr-line"></div>
                    <a href="{{ route('detail', $chapter->manga['slug']) }}" class="hr-manga">
                        <h2 class="manga-name">
                            {{ $chapter->manga['title'] }}
                        </h2>
                    </a>
                    <div class="hr-navigation">
                        <div id="reading-list" style="display: initial">
                            <div class="rt-item rt-chap" id="dropdown-chapters">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn">
                                    <span id="current-chapter">
                                        Chapter {{ floatval($chapter['chapter']) }}
                                    </span>
                                    <i class="fas fa-angle-down ml-2"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-model dropdown-menu-fixed" aria-labelledby="ssc-list" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(15px, 317px, 0px);">
                                    <div class="chapter-list-read">
                                        <div class="chapter-section">
                                            <div class="chapter-s-search">
                                                <form class="preform search-reading-item-form">
                                                    <div class="css-icon">
                                                        <i class="fas fa-search"></i>
                                                    </div>
                                                    <input class="form-control search-reading-item" type="text" placeholder="Cari Chapter..." autofocus="autofocus" autocomplete="off">
                                                </form>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                        <script>
                                            $(".search-reading-item").on("keyup", function() {
                                                var entered = parseFloat($(this).val());
                                                $(".chapter-item").each(function () {
                                                    var text = parseFloat($(this).attr("data-number"));
                                                    if(!isNaN(entered)) {
                                                        if(text == entered) {
                                                            $(this).show();
                                                        } else {
                                                            $(this).hide();
                                                        }
                                                    }
                                                    else {
                                                        $(".chapter-item").show();
                                                    }
                                                });
                                            });
                                        </script>
                                        <div class="chapters-list-ul">
                                            <ul class="ulclear reading-list lang-chapters active">
                                                @foreach ($chapters as $item)
                                                    @foreach ($item['chapters'] as $value)
                                                    <li class="item chapter-item" data-number="{{ floatval($value->chapter) }}">
                                                        <a href="/read{{ $value->path }}" class="item-link">
                                                            <span class="arrow mr-2">
                                                                <i class="fas fa-caret-right"></i>
                                                            </span>
                                                            <span class="name">Chapter {{ floatval($value->chapter) }}</span>
                                                        </a>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rt-item rt-navi d-block">
                            @if (isset($prevSlug))
                            <a href="/read{{ $prevSlug['path'] }}" class="btn btn-navi">
                                <i class="fas fa-arrow-left mr-2"></i>
                            </a>
                            @endif
                        </div>
                        <div class="rt-item rt-navi right d-block">
                            @if (isset($nextSlug))
                            <a href="/read{{ $nextSlug['path'] }}" class="btn btn-navi">
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="float-right hr-right">
                        <div class="hr-comment mr-2">
                            <a href="javascript:;" class="btn btn-sm hrr-btn">
                                @php $komen = DB::table('comments')->where('commentable_id', $chapter['manga']['id'])->get() @endphp
                                <i class="far fa-comment-alt"></i>
                                <span class="number">{{ count($komen) }}</span>
                                <span class="hrr-name">Komentar</span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="hr-informasi mr-2">
                            <a href="{{ route('detail', $chapter->manga['slug']) }}" class="btn btn-sm hrr-btn">
                                <i class="far fa-info"></i>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="hr-info mr-2">
                            <a href="/manga/{{ $chapter->manga['slug'] }}" class="btn btn-sm hrr-btn"><i
                                    class="fas fa-info"></i><span class="hrr-name">Manga
                                    Detail</span></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="hr-fav" id="reading-list-info"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ad-toggle"><i class="fas fa-expand-arrows-alt"></i></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="images-content">
            <div class="text-center">
                <div class="container">
                    <br><br><br>
                    {{-- @foreach ($chapterImages as $key => $image)
                    <img class="img-fluid" src="{{ config('constant.url.api_image').$image->image }}" />
                    @endforeach --}}
                    @if ($chapter['domain'] == config('constant.url.komiktap'))
                    @foreach ($image as $key => $image)
                    @if(strpos($image, '.jpg') == TRUE || strpos($image, '.png') == TRUE || strpos($image, '.jpeg') ==
                    TRUE || strpos($image, '.webp') == TRUE) {
                    <img class="img-fluid" src="{{ $image }}" />
                    @endif
                    @endforeach
                    @else
                    @foreach ($image['image'] as $key => $image)
                    <img class="img-fluid" src="{{ $image }}" />
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="mr-tools mrt-bottom my-5">
            <div class="container">
                <div class="read_tool">
                    <div class="float-left" id="ver-prev-cv">
                        <div class="rt-item">
                            @if (isset($prevSlug))
                            <a href="/read{{ $prevSlug['path'] }}" class="btn btn-navi">
                                <i class="fas fa-arrow-left mr-2"></i>Prev Chapter
                            </a>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="float-right" id="ver-next-cv">
                        <div class="rt-item">
                            @if (isset($nextSlug))
                            <a href="/read{{ $nextSlug['path'] }}" class="btn btn-navi">
                                Next Chapter<i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div id="read-comment">
            <div class="rc-close"><span aria-hidden="true">×</span></div>
            <div class="comments-wrap">
                <div class="sc-header">
                    @php $komen = DB::table('comments')->where('commentable_id', $chapter['manga']['id'])->get() @endphp
                    <div class="sc-h-title">{{ count($komen) }} Komentar</div>
                    <div class="clearfix"></div>
                </div>
                <div id="content-comments">
                    <br>
                    @comments(['model' => $chapter['manga']])
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center fixed-bottom">
        @php $bannerBawah = App\Models\Banner::where(['posisi' => 'Bawah', 'status' => 0])->get() @endphp
        @foreach ($bannerBawah as $bannerBawah)
        <img src="{{ config('constant.url.backend').'/banner/'.$bannerBawah->gambar }}" class="img-fluid" alt="">
        @endforeach
    </footer>
    @foreach (App\Models\Adds::get() as $adds)
    @if ($adds->status == 0)
    {!! $adds->script !!}
    @endif
    @endforeach
    <script>
        var recaptchaV3SiteKey = '6LfQbGQcAAAAAL1I4ef6T7XEuPi19tYPVtaotny9',
            recaptchaV2SiteKey = '6LfVbmQcAAAAAP8gL4mAxtJG0gU0bhuuDwgyBnnJ';
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfQbGQcAAAAAL1I4ef6T7XEuPi19tYPVtaotny9&hl=en"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript"
        src="https://mangareader.to//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61310d692ddb96c6" defer async>
    </script>
    <script type="text/javascript" src="https://mangareader.to/js/app.min.js?v=2.1"></script>
    <script>
        if ('serviceWorker' in navigator) {
        window.addEventListener('load', function () {
            navigator.serviceWorker.register('/sw.js');
        });
    }
    </script>
    <script src="https://mangareader.to/js/read.min.js?v=4.6" async defer></script>
</body>

</html>
