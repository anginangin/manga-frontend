<!DOCTYPE html>
<html lang="en">

<head>
    <title>Read {{ str_replace("/","",str_replace("-"," ",ucwords($chapter['path']))) }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description"
        content="Read and Download Chainsaw Man (Colored Edition) Chapter 97 in EN Online on MangaReader. No Account Required to Read Manga. Check now!" />
    <meta name="keywords"
        content="Chainsaw Man (Colored Edition) chapter 97, Chainsaw Man (Colored Edition) info, Chainsaw Man (Colored Edition) manga, Chainsaw Man (Colored Edition) download, Chainsaw Man (Colored Edition) read, read Chainsaw Man (Colored Edition) online, read Chainsaw Man (Colored Edition) free" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mangareader.to/read/chainsaw-man-colored-edition-56074/en/chapter-97" />
    <meta property="og:title" content="Read Chainsaw Man (Colored Edition) Chapter 97 in English Online Free" />
    <meta property="og:image" content="https://mangareader.to/images/share.png" />
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="og:description"
        content="Read and Download Chainsaw Man (Colored Edition) Chapter 97 in EN Online on MangaReader. No Account Required to Read Manga. Check now!" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2" />
    <meta name="p:domain_verify" content="af0275499319c533df212167fc646dfb" />
    <link rel="shortcut icon" href="https://mangareader.to/favicon.ico?v=0.1" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://mangareader.to/images/apple-touch-icon.png">
    <link rel="manifest" href="https://mangareader.to/manifest.json">
    <link rel="mask-icon" href="https://mangareader.to/images/safari-pinned-tab.svg" color="#5f25a6">
    <meta name="msapplication-TileColor" content="#5f25a6">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://mangareader.to/css/styles.min.css?v=1.7">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207641274-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-207641274-1');
    </script>
    <script type="text/javascript"
        src="https://mangareader.to//services.vlitag.com/adv1/?q=591701d038949ac7ff56b261301cad42" defer="" async="">
    </script>
    <script>
        var vitag = vitag || {};
    </script>
</head>

<body class="page-reader">
    <script>
        var uiMode = localStorage.getItem('uiMode');
        const body = document.body, btnMode = document.getElementById('toggle-mode'),
        sbBtnMode = document.getElementById('sb-toggle-mode');

        function activeUiMode() {
            if (uiMode === 'dark') {
                btnMode && btnMode.classList.add('active');
                sbBtnMode && sbBtnMode.classList.add('active');
                body.classList.add("darkmode");
            } else {
                btnMode && btnMode.classList.remove('active');
                sbBtnMode && sbBtnMode.classList.remove('active');
                body.classList.remove("darkmode");
            }
        }

        if (uiMode) {
            activeUiMode();
        } else {
            window.matchMedia('(prefers-color-scheme: dark)').matches ? uiMode = 'dark' : uiMode = 'light';
            activeUiMode();
        }
        [btnMode, sbBtnMode].forEach(item => {
            if (item) {
                item.addEventListener('click', function () {
                    this.classList.contains('active') ? uiMode = 'light' : uiMode = 'dark';
                    localStorage.setItem('uiMode', uiMode);
                    activeUiMode();
                });
            }
        })
    </script>
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
    </style>
    <div id="wrapper" data-reading-id="545600" data-reading-by="chap" data-lang-code="en" data-manga-id="56074">
        <!--Begin: Header-->
        <nav class="fixed-top">
            <div id="header" class="header-reader">
                <div class="container">
                    <div class="auto-div">
                        <a href="/" id="logo" class="mr-0">
                            <img src="https://mangareader.to/images/logo.png" alt="logo">
                            <div class="clearfix"></div>
                        </a>
                        <div class="hr-line"></div>
                        <a href="https://mangareader.to/chainsaw-man-colored-edition-56074" class="hr-manga">
                            <h2 class="manga-name">{{ $chapter->manga['title'] }}</h2>
                        </a>
                        <div class="hr-navigation">
                            <div id="reading-list" style="display: initial">
                                <div class="rt-item rt-chap" id="dropdown-chapters">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="btn"><span id="current-chapter">{{
                                            $chapter['chapter'] }}</span><i class="fas fa-angle-down ml-2"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-model dropdown-menu-fixed"
                                        aria-labelledby="ssc-list" x-placement="bottom-start"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(15px, 317px, 0px);">
                                        <div class="chapter-list-read">
                                            <div class="chapter-section">
                                                <div class="chapter-s-search">
                                                    <form class="preform search-reading-item-form">
                                                        <div class="css-icon"><i class="fas fa-search"></i></div>
                                                        <input class="form-control search-reading-item" type="text"
                                                            placeholder="Number of Chapter" autofocus="autofocus"
                                                            autocomplete="off">
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="chapters-list-ul" style="z-index: 5">

                                                <ul class="ulclear reading-list lang-chapters active" id="en-chapters"
                                                    style="">
                                                    @foreach ($chapters as $item)
                                                    @foreach ($item['chapters'] as $value)
                                                    <li class="item reading-item chapter-item">
                                                        <a href="#" class="item-link"
                                                            onClick="location.href={{ $value->path }}">
                                                            <span class="arrow mr-2">
                                                                <i class="fas fa-caret-right"></i>
                                                            </span>
                                                            <span class="name">{{ $value->chapter }}</span>
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
                            <div class="rt-item rt-navi">
                                <button type="button" class="btn btn-navi" onclick="prevChapterVolume()"><i
                                        class="fas fa-arrow-left mr-2"></i>
                                </button>
                            </div>
                            <div class="rt-item rt-navi right">
                                <button type="button" class="btn btn-navi" onclick="nextChapterVolume()"><i
                                        class="fas fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="float-right hr-right">
                            <div class="hr-comment mr-2">
                                <a href="javascript:;" class="btn btn-sm hrr-btn">
                                    <i class="far fa-comment-alt"></i>
                                    <span class="number">1282</span>
                                    <span class="hrr-name">Comments</span>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="hr-setting mr-2" style="display: none">
                                <a class="btn btn-sm hrr-btn"><i class="fas fa-cog"></i><span
                                        class="hrr-name">Settings</span></a>
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
        </nav>
        <!--End: Header-->
        <div class="clearfix"></div>
        <div class="mr-tools mrt-top">
            <div class="container">
                <div class="read_tool">
                    <div class="float-left">
                        <div class="rt-item">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn">Reading Mode: <span id="current-mode">- Select -</span> <i
                                    class="fas fa-angle-down ml-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-model" aria-labelledby="ssc-list">
                                <a class="dropdown-item mode-item" data-value="vertical"
                                    href="javascript:;">Vertical</a>
                                <a class="dropdown-item mode-item" data-value="horizontal"
                                    href="javascript:;">Horizontal</a>
                            </div>
                        </div>
                        <div class="rt-item">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn">Reading Direction: <span id="current-direction"></span> <i
                                    class="fas fa-angle-down ml-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-model" aria-labelledby="ssc-list">
                                <a class="dropdown-item direction-item" data-value="rtl" href="javascript:;">RTL</a>
                                <a class="dropdown-item direction-item" data-value="ltr" href="javascript:;">LTR</a>
                            </div>
                        </div>
                        <div class="rt-item">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn">Quality: <span id="current-quality">Medium</span> <i
                                    class="fas fa-angle-down ml-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-model" aria-labelledby="ssc-list">
                                <a class="dropdown-item quality-item" data-value="high">High</a>
                                <a class="dropdown-item quality-item" data-value="medium">Medium</a>
                                <a class="dropdown-item quality-item" data-value="low">Low</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="float-right">
                        <div class="rt-item" id="rt-close">
                            <button type="button" class="btn"><i class="fas fa-times mr-2"></i>Close</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div id="images-content">
            <div class="text-center">
                <div class="container">
                    @foreach ($image['image'] as $image)
                    <img src="{{ $image }}" class="img-fluid">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="read-comment">
            <div class="rc-close"><span aria-hidden="true">×</span></div>
            <div class="comments-wrap">
                <div class="sc-header">
                    <div class="sc-h-title">28 Comments</div>
                    <div class="sc-h-sort">
                        <a class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-angle-down mr-2"></i>Sort by</a>
                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal" aria-labelledby="ssc-list">
                            <a class="dropdown-item cm-sort" data-value="top" href="javascript:;">Top<i
                                    class="fas fa-check ml-2" style="display: none;"></i></a>
                            <a class="dropdown-item cm-sort active" data-value="newest" href="javascript:;">Newest<i
                                    class="fas fa-check ml-2"></i></a>
                            <a class="dropdown-item cm-sort" data-value="oldest" href="javascript:;">Oldest<i
                                    class="fas fa-check ml-2" style="display: none;"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="content-comments">
                    <div class="comment-input">

                        <div class="user-avatar"><img class="user-avatar-img" src="/images/no-avatar.jpg"></div>

                        <div class="ci-form">
                            <div class="user-name">

                                You must be <a class="link-highlight" href="javascript:;" data-toggle="modal"
                                    data-target="#modal-auth">login</a>
                                to post a comment

                            </div>
                            <form class="preform comment-form">
                                <div class="loading-absolute bg-white" style="display: none;">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                                <textarea class="form-control form-control-textarea" id="df-cm-content" name="content"
                                    maxlength="3000" placeholder="Leave a comment" required=""></textarea>
                                <div class="ci-buttons" id="df-cm-buttons" style="display: none;">
                                    <div class="ci-b-left">
                                        <div class="cb-li"><a class="btn btn-sm btn-spoil"><i
                                                    class="fas fa-check mr-2"></i>Spoil?</a>
                                        </div>
                                    </div>
                                    <div class="ci-b-right">
                                        <div class="cb-li"><a class="btn btn-sm btn-secondary"
                                                id="df-cm-close">Close</a></div>
                                        <div class="cb-li">
                                            <button class="btn btn-sm btn-primary ml-2">Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cw_list">

                        <div class="cw_l-line" id="cm-266160">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/tha/15.jpg" alt="Hina">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">Hina</div>

                                    <div class="time">7 days ago</div>
                                </div>
                                <div class="ibody is-spoil">

                                    <p>Maybe in this manga we can see lord jashin</p>


                                    <div class="show-spoil my-3">
                                        <button type="button" class="btn btn-sm btn-light">Show spoil</button>
                                    </div>

                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="266160">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="266160" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">2</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="266160" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="266160">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="266160">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-266160">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-266048">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/zoro_chibi/avatar2-01.png"
                                    alt="Bishwas Kumar Jena">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">Bishwas Kumar Jena</div>

                                    <div class="time">8 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>yo...wasnt this in an arc in the anime itself...or is there something else here
                                        and im
                                        just tripping?</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="266048">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="266048" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">1</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="266048" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="266048">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="266048">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-266048">

                                <div class="rep-more rep-in">
                                    <button type="button" class="btn btn-sm cm-btn-show-rep" data-id="266048">
                                        <i class="fas fa-caret-down mr-2"></i><span>2 replies</span>
                                    </button>
                                </div>
                                <div class="replies-wrap" id="replies-266048" style="display: none;">

                                </div>

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-266038">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/one_piece/user-02.jpeg"
                                    alt="Sardine">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">Sardine</div>

                                    <div class="time">8 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>SUG maj kok</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="266038">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="266038" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">1</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="266038" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="266038">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="266038">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-266038">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-264718">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/chainsaw/08.png"
                                    alt="Pixelz2025">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">Pixelz2025</div>

                                    <div class="time">9 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>I hope they do a Minato : Naruto previous generations</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="264718">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="264718" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">2</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="264718" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="264718">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="264718">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-264718">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-264714">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/dragon_ball/av-db-01.jpeg"
                                    alt="Mahii">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">Mahii</div>

                                    <div class="time">9 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>Instead of this side stories mashashi can draw about old generations</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="264714">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="264714" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">1</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="264714" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="264714">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="264714">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-264714">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-263912">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/zoro_chibi/avatar-05.png"
                                    alt="deez notz">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">deez notz</div>

                                    <div class="time">10 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>this was already covered in anime why did i take soo long to release it here</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="263912">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="263912" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="263912" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="263912">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="263912">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-263912">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-263904">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/zoro_chibi/avatar-05.png"
                                    alt="deez notz">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">deez notz</div>

                                    <div class="time">10 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>i guess kurenai family is dumb as **** why the **** she picking a fight with dude
                                        she is
                                        sure to not defeat</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="263904">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="263904" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="263904" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="263904">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="263904">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-263904">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-260556">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/zoro_chibi/avatar2-02.png"
                                    alt="freak">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">freak</div>

                                    <div class="time">14 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>i love how I'm not the only one who hates boruto .</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="260556">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="260556" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">3</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="260556" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="260556">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="260556">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-260556">

                                <div class="rep-more rep-in">
                                    <button type="button" class="btn btn-sm cm-btn-show-rep" data-id="260556">
                                        <i class="fas fa-caret-down mr-2"></i><span>2 replies</span>
                                    </button>
                                </div>
                                <div class="replies-wrap" id="replies-260556" style="display: none;">

                                </div>

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-258986">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/dragon_ball/av-db-01.jpeg"
                                    alt="Mfaadel">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">Mfaadel</div>

                                    <div class="time">16 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>I need side stories about the rest of the of casts of Naruto.
                                        I NEED MOOORRREE!!!!</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="258986">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="258986" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">2</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="258986" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="258986">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="258986">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-258986">

                            </div>
                        </div>

                        <div class="cw_l-line" id="cm-258788">
                            <div class="user-avatar">
                                <img class="user-avatar-img"
                                    src="https://img.mreadercdn.com/_m/100x100/100/avatar/zoro_chibi/avatar2-04.png"
                                    alt="The Yellow Flash">
                            </div>
                            <div class="info">
                                <div class="ihead">

                                    <div class="user-name">The Yellow Flash</div>

                                    <div class="time">16 days ago</div>
                                </div>
                                <div class="ibody ">

                                    <p>Better than my grandson at the least</p>


                                </div>
                                <div class="ibottom">
                                    <div class="ib-li ib-reply" data-id="258788">
                                        <a class="btn"><i class="fas fa-reply mr-1"></i>Reply</a>
                                    </div>
                                    <div class="ib-li ib-like">
                                        <a class="btn cm-btn-vote " data-id="258788" data-type="1">
                                            <i class="far fa-thumbs-up mr-1"></i><span class="value">4</span>
                                        </a>
                                    </div>
                                    <div class="ib-li ib-dislike">
                                        <a class="btn cm-btn-vote " data-id="258788" data-type="0">
                                            <i class="far fa-thumbs-down mr-1"></i><span class="value"></span>
                                        </a>
                                    </div>

                                    <div class="ib-li">
                                        <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-h mr-1"></i>More</a>
                                        <div class="dropdown-menu dropdown-menu-model dropdown-menu-normal"
                                            aria-labelledby="ssc-list">

                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="1"
                                                data-id="258788">Report
                                                Spam</a>
                                            <a class="dropdown-item cm-report" href="javascript:;" data-type="2"
                                                data-id="258788">Report
                                                Spoil</a>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="replies" id="block-reply-258788">

                                <div class="rep-more rep-in">
                                    <button type="button" class="btn btn-sm cm-btn-show-rep" data-id="258788">
                                        <i class="fas fa-caret-down mr-2"></i><span>1 replies</span>
                                    </button>
                                </div>
                                <div class="replies-wrap" id="replies-258788" style="display: none;">

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="rep-more mt-3">
                        <button type="button" class="btn btn-sm" id="cm-view-more" data-page="2">
                            <i class="fas fa-caret-down mr-2"></i><span>View more</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var recaptchaV3SiteKey = '6LfQbGQcAAAAAL1I4ef6T7XEuPi19tYPVtaotny9',
            recaptchaV2SiteKey = '6LfVbmQcAAAAAP8gL4mAxtJG0gU0bhuuDwgyBnnJ';
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfQbGQcAAAAAL1I4ef6T7XEuPi19tYPVtaotny9&hl=en">
    </script>

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
    <script id="syncData" type="application/json">
        {"page":"chapter", "name":"Chainsaw Man (Colored Edition)","manga_id":"56074","mal_id":"","anilist_id":"","base_url":"https://mangareader.to","manga_url":"https://mangareader.to/chainsaw-man-colored-edition-56074","selector_position":"#mal-sync"}
    </script>
    <script src="https://mangareader.to/js/read.min.js?v=4.6" async defer></script>
</body>

</html>