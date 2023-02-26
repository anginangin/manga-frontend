@extends('layouts.web')
@section('content')
<div id="main-wrapper">
    <div class="container">
        <div id="mw-2col">
            <!--Begin: main-content-->
            <div id="main-content">
                <!--Begin: Section Manga list-->
                <section class="block_area block_area_continue">
                    <div class="block_area-header block_area-header-tabs">
                        <div class="float-left bah-heading">
                            <h2 class="cat-heading">Continue Reading</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="manga_list-continue">
                        <div class="mlc-wrap">

                            <div class="clearfix"></div>
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
            <!--/End: main-content-->
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
                                <li class=""><a href="/user/profile" class="mp-item"><i
                                            class="fas fa-user mr-3"></i>Profile</a></li>
                                <li class="active"><a href="/user/continue-reading" class="mp-item"><i
                                            class="fas fa-glasses mr-3"></i>Continue Reading</a></li>
                                <li class=""><a href="/user/reading-list" class="mp-item"><i
                                            class="fas fa-bookmark mr-3"></i>Reading List</a></li>
                                <li class=""><a href="/user/notifications" class="mp-item"><i
                                            class="fas fa-bell mr-3"></i>Notifications</a></li>
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