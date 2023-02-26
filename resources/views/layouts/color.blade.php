<?php
    $setTheme = \DB::table('web_setting')->join('theme_colors', 'theme_colors.id', '=', 'web_setting.theme_id')->first();
?>
<style>
    @charset "utf-8";
    @import url(https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap);

    html {
        position: relative;
    }

    body {
        background: {{ $setTheme->primary_base_color }};
        font-family: Poppins, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        color: {{ $setTheme->text_color }};
        font-size: 14px;
        line-height: 1.4em;
        font-weight: 400;
        padding: 0;
        margin: 0;
        -webkit-text-size-adjust: none;
    }

    a {
        color: {{ $setTheme->text_color }};
        text-decoration: none !important;
        outline: 0;
        -moz-outline: none;
    }

    a:hover {
        color: {{ $setTheme->primary_color }};
    }

    .btn,
    button {
        font-weight: 500;
        font-size: 16px;
        padding: 0.5rem 0.8rem;
        box-shadow: none !important;
        outline: 0 !important;
        border: none !important;
    }

    .btn-sm {
        font-size: 14px;
    }

    .btn-lg {
        font-size: 18px;
    }

    b,
    strong {
        font-weight: 600;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 600;
    }

    .btn-radius {
        border-radius: 30px;
    }

    .btn-primary,
    .btn-tab.active {
        background: {{ $setTheme->button_color }} !important;
        color: #111 !important;
        border-color: {{ $setTheme->button_color }} !important;
    }

    .btn-primary:hover,
    .btn-tab.active:hover {
        background: {{ $setTheme->button_color }} !important;
        border-color: {{ $setTheme->button_color }} !important;
    }

    .btn-focus {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
        border-color: {{ $setTheme->primary_color }} !important;
    }

    .btn-focus:hover {
        background: {{ $setTheme->primary_color }} !important;
        border-color: {{ $setTheme->primary_color }} !important;
    }

    .btn-secondary,
    .btn-tab {
        background: #555 !important;
        border-color: #555 !important;
        color: {{ $setTheme->text_color }};
    }

    .btn-secondary:hover,
    .btn-tab:hover {
        background: #666 !important;
        border-color: #666 !important;
    }

    .btn-tab {
        font-size: 14px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .btn-light {
        background: {{ $setTheme->text_color }};
        border-color: {{ $setTheme->text_color }};
        color: #111 !important;
    }

    .btn-trans {
        background: 0 0 !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .new-btn {
        font-size: 14px;
        padding: 0.6rem 1rem;
        border-radius: 0.3rem;
    }

    .new-btn-sm {
        font-size: 13px;
        padding: 0.5rem 0.8rem;
        border-radius: 0.3rem;
    }

    .new-btn-xs {
        font-size: 11px;
        padding: 0.4rem 0.6rem;
        border-radius: 0.3rem;
    }

    .new-btn-lg {
        font-size: 16px;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
    }

    .text-primary {
        color: {{ $setTheme->primary_color }} !important;
    }

    .dot {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #666;
        display: inline-block;
        margin: 3px 6px;
    }

    .h2-heading {
        font-size: 2em !important;
        margin-bottom: 0;
        color: {{ $setTheme->text_color }};
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .iframe16x9 {
        width: 100%;
        position: relative;
        padding-bottom: 56.25%;
    }

    .iframe16x9 iframe {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100% !important;
        height: 100% !important;
    }

    .ad-toggle,
    .manga-poster-ahref i,
    .manga-poster-ahref:after,
    .manga-poster-ahref:before,
    .manga-poster-img,
    .read-tips .read-tips-keyboard {
        transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
        -moz-transition: all 0.5s ease 0s;
    }

    #header.header-home,
    #sidebar_menu,
    .block-rating .button-rate,
    .deslide-item .deslide-poster,
    .manga-poster-ahref:after,
    .mp-desc,
    .mrt-top,
    .mrt-top .read_tool,
    .page-reader-ver #header,
    .rl-loaded,
    .rl-text,
    .toggle-onoff * {
        transition: all 0.2s ease 0s;
        -webkit-transition: all 0.2s ease 0s;
        -moz-transition: all 0.2s ease 0s;
    }

    .block_area,
    .film-poster,
    .nav-item,
    .nav-item>a,
    .search-content input.search-input {
        position: relative;
    }

    .manga-poster {
        width: 100%;
        padding-bottom: 148%;
        position: relative;
        overflow: hidden;
        background: {{ $setTheme->secondary_base_color }};
    }

    .character-thumb .character-thumb-img,
    .manga-poster .manga-poster-img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .manga-poster .link-mask {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        z-index: 98;
    }

    .character-thumb {
        position: relative;
        width: 100%;
        padding-bottom: 100%;
        overflow: hidden;
        border-radius: 50%;
    }

    .highlight-text {
        color: {{ $setTheme->button_color }};
    }

    .mat-icon {
        display: inline-flex;
        vertical-align: bottom;
    }

    .ctn-item .ctn-detail .manga-detail .manga-name,
    .mg-item-basic .manga-name,
    .text-cut {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .container {
        max-width: 1400px;
        width: 100%;
        padding: 0 30px;
    }

    #wrapper {
        width: 100%;
        position: relative;
        margin: 0 auto;
    }

    #header {
        background: {{ $setTheme->primary_base_color }} !important;
        height: 80px;
        padding: 5px 0;
        position: relative;
        z-index: 100;
        margin-bottom: 25px;
    }

    #header .container {
        position: relative;
    }

    #header #logo {
        display: block;
        height: 50px;
        margin: 10px 40px 10px 0;
        float: left;
    }

    #header #logo img {
        height: 100%;
        width: auto;
        float: left;
    }

    #header #logo span {
        line-height: 40px;
        font-size: 20px;
        font-weight: 600;
        color: {{ $setTheme->text_color }} !important;
    }

    #mobile_menu,
    #mobile_search {
        padding: 0;
        color: {{ $setTheme->text_color }};
        cursor: pointer;
        position: absolute;
        top: 15px;
        z-index: 4;
        width: 40px;
        height: 40px;
        text-align: center;
        left: 6px;
        background: 0 0;
        border-radius: 3px;
        display: none;
    }

    #mobile_menu.active i,
    #mobile_search.active i {
        color: {{ $setTheme->button_color }};
    }

    #mobile_menu i,
    #mobile_search i {
        font-size: 24px;
        line-height: 40px;
        height: 40px;
    }

    #header_menu {
        height: 40px;
        margin: 15px 0;
        float: left;
    }

    #header_menu .container {
        position: relative;
    }

    #header_menu ul.header_menu-list {
        list-style: none;
        padding: 0;
        display: block;
    }

    #header_menu ul.header_menu-list .nav-item {
        display: inline-block;
        margin: 0;
        margin-right: 20px;
        position: relative;
    }

    #header_menu ul.header_menu-list .nav-item>a {
        height: 40px;
        cursor: pointer;
        line-height: 40px;
        margin: 0;
        padding: 0 10px;
        color: {{ $setTheme->text_color }};
        display: inline-block;
        font-size: 16px;
        font-weight: 500;
        font-family: Poppins;
    }

    #header_menu ul.header_menu-list .nav-item>a>span {
        display: none;
    }

    #header_menu ul.header_menu-list .nav-item:hover>a {
        color: {{ $setTheme->button_color }};
    }

    #header_menu .header_menu-sub {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 150px;
        border-radius: 12px;
        background: {{ $setTheme->text_color }};
        z-index: 102;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    }

    #header_menu .header_menu-sub ul.sub-menu {
        padding: 8px;
        text-align: left;
        list-style: none;
        overflow: hidden;
    }

    #header_menu .header_menu-sub ul.sub-menu li a {
        padding: 6px 10px;
        display: block;
        font-size: 14px;
        border-radius: 8px;
    }

    #header_menu .header_menu-sub ul.sub-menu li:hover a {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    #sub-header {
        height: 50px;
        background: {{ $setTheme->primary_color }};
        z-index: 9;
        position: relative;
        color: #eee;
    }

    #sub-header .container {
        position: relative;
        font-size: 14px;
    }

    #sub-header .sh-item {
        line-height: 30px;
        height: 30px;
        display: block;
        margin: 10px 0;
        float: left;
    }

    #sub-header a.sh-item {
        cursor: pointer;
        color: {{ $setTheme->text_color }};
    }

    #sub-header #toggle-light span:before {
        content: "Light";
        width: 33px;
        display: inline-block;
    }

    .light-mode #sub-header #toggle-light span:before {
        content: "Dark";
    }

    .chap-badge {
        display: inline-block;
        font-size: 12px;
        font-weight: 600;
        line-height: 24px;
        padding: 0 8px;
        background: #ff3d13;
        color: {{ $setTheme->text_color }};
        border-radius: 3px;
    }

    .header-group {
        float: left;
        height: 40px;
        margin: 15px 0;
        margin-left: 60px;
        text-align: left;
    }

    .Mangareader-group {
        position: relative;
    }

    .Mangareader-group .zrg-title {
        float: left;
        margin-right: 20px;
    }

    .Mangareader-group .zrg-title .top {
        display: block;
        margin-bottom: 3px;
        font-weight: 400;
        opacity: 0.5;
    }

    .Mangareader-group .zrg-title .bottom {
        font-weight: 600;
        color: {{ $setTheme->text_color }};
        text-transform: uppercase;
    }

    .Mangareader-group .zrg-list {
        float: left;
    }

    .Mangareader-group .zrg-list .item {
        float: left;
        margin-right: 10px;
    }

    .Mangareader-group .zrg-list .item .zr-social-button {
        display: inline-block;
        height: 40px;
        font-size: 13px;
        font-weight: 400;
        padding: 10px 10px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }

    .Mangareader-group .zrg-list .item .zr-social-button.dc-btn {
        background: #6f85d5;
        color: {{ $setTheme->text_color }};
    }

    .Mangareader-group .zrg-list .item .zr-social-button.tl-btn {
        background: #08c;
        color: {{ $setTheme->text_color }};
    }

    .Mangareader-group .zrg-list .item i {
        font-size: 22px;
        line-height: 20px;
        vertical-align: text-bottom;
    }

    #header_right {
        float: right;
        padding: 15px 0;
    }

    #header_right #search-toggle {
        display: inline-block;
    }

    #header .btn-user {
        height: 40px;
        line-height: 40px;
        padding: 0 15px;
        font-weight: 400;
        color: {{ $setTheme->text_color }};
    }

    #header.active {
        z-index: 102;
    }

    #header #search-toggle .btn-on-header {
        font-size: 20px;
    }

    #header #search-toggle.active .btn-on-header {
        background: {{ $setTheme->button_color }};
        color: {{ $setTheme->text_color }};
    }

    .header_right-user .dropdown-menu-model {
        transform: none !important;
        top: 100% !important;
        left: auto !important;
        right: 0 !important;
        bottom: auto !important;
    }

    .header_right-user .dropdown-menu-model .dropdown-item {
        background: {{ $setTheme->text_color }} !important;
        font-size: 13px;
        color: #111 !important;
    }

    .header_right-user .dropdown-menu-model .dropdown-item i {
        font-size: 12px;
    }

    .header_right-user .dropdown-menu-model .dropdown-item.active,
    .header_right-user .dropdown-menu-model .dropdown-item:hover {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .header_right-user .dropdown-menu-model .dropdown-item.di-bottom {
        background: {{ $setTheme->button_color }} !important;
        color: #111 !important;
    }

    .header_right-user.logged .btn-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        padding: 0;
        border: 3px solid {{ $setTheme->text_color }};
        cursor: pointer;
        background: #a7b7f9;
        position: relative;
        overflow: hidden;
    }

    .header_right-user.logged .btn-avatar img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .header_right-user.logged .btn-avatar span {
        font-weight: 600;
        font-size: 1.2em;
        line-height: 34px;
        color: {{ $setTheme->text_color }};
    }

    .hr-notifications {
        display: block;
        float: left;
        margin-right: 20px;
        position: relative;
    }

    .hr-notifications .hrn-icon {
        width: 40px;
        height: 40px;
        cursor: pointer;
        border-radius: 50%;
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
        text-align: center;
        line-height: 40px;
        position: relative;
    }

    .hr-notifications.show .hrn-icon {
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->primary_color }};
    }

    .hr-notifications .hrn-icon .number {
        position: absolute;
        font-weight: 600;
        top: -5px;
        right: -10px;
        height: 20px;
        border-radius: 10px;
        line-height: 20px;
        min-width: 20px;
        font-size: 12px;
        padding: 0 3px;
        color: {{ $setTheme->text_color }};
        background: {{ $setTheme->button_color }};
    }

    .hr-notifications .hrn-icon i {
        font-size: 16px;
    }

    .pii {
        fill: {{ $setTheme->text_color }};
    }

    #sub-header .sh-left {
        float: left;
    }

    #sub-header .sh-right {
        float: right;
    }

    #sub-header .spacing {
        width: 1px;
        height: 30px;
        float: left;
        margin: 10px 30px;
        background: rgba(255, 255, 255, 0.1);
    }

    #header.home-header {
        background: {{ $setTheme->secondary_color }};
        height: 90px;
        padding-top: 20px;
        padding-bottom: 0;
    }

    #user-slot {
        float: left;
    }

    #search {
        width: 340px;
        margin: 0;
        margin-right: 15px;
        float: left;
    }

    .search-content {
        position: relative;
    }

    .search-content input.search-input {
        height: 40px;
        color: #111;
        padding-right: 40px;
        padding-left: 60px;
        font-size: 13px;
        font-weight: 400;
        background: {{ $setTheme->text_color }};
        border-radius: 8px;
        border: none;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05) !important;
    }

    .search-content input.search-input:focus {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .search-content .search-icon {
        width: 40px;
        height: 40px;
        background: 0 0;
        border: none;
        padding: 0 10px;
        line-height: 40px;
        display: inline-block;
        color: {{ $setTheme->text_color }};
        text-align: center;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 2;
    }

    .search-content .filter-icon {
        height: 26px;
        cursor: pointer;
        line-height: 26px;
        font-size: 11px;
        background: #e9daff;
        color: {{ $setTheme->primary_color }};
        padding: 0 6px;
        border-radius: 6px;
        position: absolute;
        left: 7px;
        top: 7px;
        z-index: 3;
    }

    .search-content .filter-icon:hover {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .search-content .search-content {
        position: relative;
    }

    .search-content .search-result-pop {
        background: {{ $setTheme->secondary_base_color }};
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 43px;
        right: 0;
        z-index: 6;
        list-style: none;
        display: none;
    }

    .search-content .search-result-pop.active {
        display: block;
    }

    .search-content .search-result-pop .nav-item {
        display: block;
        text-align: left;
        padding: 10px;
        width: 100%;
        border-bottom: 1px dashed #eee;
        cursor: pointer;
    }

    .search-content .search-result-pop .nav-item:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .search-content .search-result-pop .nav-item .manga-poster {
        float: left;
        width: 50px;
        padding-bottom: 70px;
        border-radius: 6px;
    }

    .search-content .search-result-pop .nav-item .srp-detail {
        padding-left: 65px;
        padding-top: 0.7rem;
        font-size: 12px;
    }

    .search-content .search-result-pop .nav-item .srp-detail .manga-name {
        font-size: 14px;
        font-weight: 500;
        line-height: 1.2em;
        max-width: 100%;
        margin-bottom: 8px;
        height: 18px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: 500;
    }

    .search-content .search-result-pop .nav-bottom {
        padding: 15px;
        background: {{ $setTheme->primary_color }} !important;
        font-weight: 500;
        color: {{ $setTheme->text_color }};
        text-align: center;
        border-bottom: none;
    }

    #header .header-home-add {
        display: none;
    }

    .sht-heading {
        font-size: 2.2em;
        font-weight: 400;
        margin: 0 0 30px;
        color: {{ $setTheme->text_color }};
    }

    .sht-heading strong {
        font-weight: 600;
    }

    #main-wrapper {
        padding-bottom: 70px;
        min-height: calc(100vh - 434px);
    }

    .bah-setting .btn,
    .btn-in-headcat {
        margin: 4px 0;
    }

    #suggest {
        margin-bottom: 30px;
        padding: 0;
        overflow: hidden;
    }

    .premodal .btn-sm.btn-filter-item {
        min-width: 50px;
        font-size: 12px;
        line-height: 1em;
        padding: 8px 11px;
        float: left;
        margin: 3px 6px 3px 0;
        color: {{ $setTheme->text_color }};
        border: 1px solid #363a4d;
    }

    .premodal .btn-sm.btn-filter-item.active {
        border-color: {{ $setTheme->button_color }};
        background: #3d3e39;
        color: {{ $setTheme->button_color }};
    }

    .block_area {
        display: block;
        margin-bottom: 40px;
    }

    .block_area_sidebar {
        margin-bottom: 30px;
    }

    .block_area .block_area-header {
        margin-bottom: 15px;
        display: block;
        width: 100%;
    }

    .block_area .block_area-header .cat-heading {
        font-size: 24px !important;
        line-height: 40px;
        font-weight: 600;
        padding: 0;
        margin: 0;
        color: {{ $setTheme->text_color }};
    }

    .block_area .block_area-header .viewmore .btn {
        padding: 4px 0;
        font-size: 12px;
        margin: 5px 0;
    }

    .block_area .block_area-header-tabs .bah-tab {
        float: left;
        margin-left: 20px;
    }

    .block_area .block_area-header-tabs .pre-tabs {
        border-bottom: none;
        margin-top: 3.5px;
        margin-bottom: 0;
    }

    .block_area .block_area-header-tabs .pre-tabs .nav-item {
        margin-bottom: 0;
        margin-right: 10px;
    }

    .block_area .block_area-description {
        font-weight: 400;
        font-size: 1.1em;
        line-height: 1.4em;
        margin-bottom: 30px;
    }

    .block_area_home .category_filter {
        margin-top: -10px;
    }

    .block_area_home .btn-in-headcat {
        margin: 2px 0;
    }

    .cate-sort {
        display: block;
    }

    .cate-sort .cs-item {
        float: left;
        margin: 4px 0;
        position: relative;
    }

    .cate-sort .btn-sort {
        border: 1px solid #888 !important;
        color: {{ $setTheme->text_color }};
        box-shadow: none;
        padding: 0 10px;
        line-height: 30px;
    }

    .box-bg {
        padding: 1.5rem;
        background: {{ $setTheme->text_color }};
    }

    .pre-tabs {
        border: none;
    }

    .pre-tabs .nav-item {
        font-size: 16px;
        font-weight: 400;
        margin-right: 10px;
    }

    .pre-tabs .nav-item .nav-link {
        padding: 15px 10px;
        line-height: 1.2em;
        font-size: 14px;
        background: 0 0 !important;
        border: none;
        border-radius: 0;
        border-bottom: 2px solid transparent;
    }

    .pre-tabs .nav-item .nav-link.active {
        color: {{ $setTheme->button_color }};
        border-color: {{ $setTheme->button_color }};
    }

    .pre-tabs-min {
        margin-bottom: 15px;
    }

    .pre-tabs-min .nav-item {
        margin-right: 10px;
        margin-bottom: 0;
    }

    .pre-tabs-min .nav-item .nav-link {
        padding: 8px 10px;
        min-width: 80px;
        text-align: center;
        border-bottom: none !important;
        font-weight: 500 !important;
        background: 0 0 !important;
        font-size: 13px;
        border-radius: 4px;
    }

    .pre-tabs-min .nav-item .nav-link.active {
        color: {{ $setTheme->text_color }} !important;
        background: {{ $setTheme->primary_color }} !important;
    }

    .anw-tabs {
        border-bottom: none;
        background: {{ $setTheme->secondary_base_color }};
        margin: 15px 0;
        border-radius: 4px;
        overflow: hidden;
    }

    .anw-tabs .nav-item {
        margin-bottom: 0;
    }

    .anw-tabs .nav-item .nav-link {
        border: none;
        border-radius: 0;
        font-size: 14px;
        font-weight: 500;
        line-height: 40px;
        padding: 0 10px;
    }

    .anw-tabs .nav-item .nav-link:hover {
        color: {{ $setTheme->primary_color }};
    }

    .anw-tabs .nav-item .nav-link.active {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .bah-tab-min .anw-tabs {
        margin: 2px 0 0;
    }

    .manga-poster-ahref i,
    .manga-poster-ahref:before {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: {{ $setTheme->button_color }};
    }

    .manga_list {
        display: block;
    }

    .manga_list .manga_list-wrap {
        margin: 0 -7px;
        list-style: none;
        padding: 0;
    }

    .manga_list .manga_list-wrap .item {
        width: calc(20% - 14px);
        margin: 0 7px 30px;
        float: left;
        position: relative;
    }

    .manga_list .manga_list-wrap .item:nth-of-type(5n + 1) {
        clear: both;
    }

    .manga_list-wrap .item .manga-poster {
        margin-bottom: 5px;
        display: inline-block;
    }

    .manga_list-wrap .item .manga-poster .manga-poster-ahref {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: inline-block;
    }

    .manga_list .manga_list-wrap .item .film-poster {
        border-radius: 0;
        padding-bottom: 130%;
    }

    .manga_list .manga_list-wrap .item .manga-detail {
        font-size: 14px;
    }

    .manga_list .manga_list-wrap .item .manga-detail .manga-name {
        font-size: 1em;
        line-height: 1.4em;
        margin: 0;
        font-weight: 500;
        margin-bottom: 5px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .manga_list .manga_list-wrap .item .manga-detail .fd-infor {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-size: 0.95em;
    }

    .manga_list .manga_list-wrap .item .manga-detail .description {
        display: none;
    }

    .manga_list .manga_list-wrap .item .manga-detail .film-infor {
        margin-bottom: 2px;
    }

    .mp-desc {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        cursor: grab;
        padding: 10px;
        background: rgba(255, 255, 255, 0.95);
        z-index: 99;
        opacity: 0;
        transform: scale(1.2);
        transition-delay: 0.1s;
    }

    .mp-desc p {
        font-size: 12px;
        margin-bottom: 0;
        line-height: 1.2;
        margin-bottom: 3px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .mp-desc p.alias-name {
        white-space: normal;
        text-overflow: unset;
    }

    .mp-desc p i {
        width: 16px;
        text-align: center;
    }

    .mp-desc p.chapter {
        margin-bottom: 5px;
    }

    .mp-desc .btn {
        font-size: 0.9em;
        padding: 0.4rem;
    }

    .mp-desc .mpd-buttons {
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
    }

    .mp-desc .mpd-buttons .btn-light {
        background: {{ $setTheme->text_color }} !important;
    }

    .item:hover .manga-poster .mp-desc {
        opacity: 1;
        transform: scale(1);
    }

    .tick {
        position: absolute;
        bottom: 5px;
        left: 5px;
        z-index: 10;
    }

    .tick-item {
        font-size: 12px;
        font-weight: 500;
        display: inline-block;
        line-height: 25px;
        padding: 0 6px;
        border-radius: 3px;
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
        margin-right: 3px;
    }

    .tick-item.tick-rate {
        background: #21aa3d;
        color: {{ $setTheme->text_color }};
        bottom: auto !important;
        top: 5px;
        left: auto;
        right: 5px;
    }

    .tick-item.tick-rate i {
        transform: scale(0.8);
    }

    .tick-item.tick-quality {
        background: #ffdd95;
        color: {{ $setTheme->text_color }};
    }

    .tick-item.tick-chap {
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
        bottom: auto;
        top: 5px;
    }

    .tick-item.tick-lang {
        background: #99f42c;
        color: {{ $setTheme->text_color }};
        bottom: auto;
        left: 5px;
        top: 5px;
        font-weight: 700;
    }

    .tick-item.tick-vol {
        background: {{ $setTheme->button_color }};
        color: #000;
        bottom: auto;
        left: 0;
        bottom: 0;
        right: 0;
        margin: 0;
        padding: 0 10px;
        text-align: center;
        line-height: 32px;
        font-size: 14px;
        border-radius: 0;
        font-weight: 700;
    }

    .flv-list .item {
        width: 100% !important;
        margin: 0 0 5px !important;
    }

    .flv-list .item .film-poster {
        width: 100px;
        padding-bottom: 148px;
        float: left;
        margin-right: 20px;
    }

    .pre-pagination .pagination .page-item {
        margin: 5px;
    }

    .pre-pagination .pagination .page-item .page-link {
        border-radius: 4px;
        border: none;
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
        font-weight: 500;
        line-height: 1em;
    }

    .pre-pagination .pagination .page-item .page-link:hover {
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->primary_color }};
    }

    .pre-pagination .pagination .page-item.active .page-link {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
        cursor: default;
    }

    .pre-pagination .pagination-lg .page-item .page-link {
        padding: 0 10px;
        line-height: 40px;
        font-size: 16px;
        border-radius: 6px;
        min-width: 40px;
        text-align: center;
    }

    .film-list-ul {
        list-style: none;
        padding: 0;
    }

    .modal-backdrop.show {
        background: #111;
        opacity: 0.9;
    }

    .premodal .modal-content {
        border-radius: 0;
        border: none;
    }

    .premodal .modal-content .modal-header {
        border-bottom: 0;
        border-radius: 0;
        padding: 30px 30px 0;
        position: relative;
        display: block;
    }

    .premodal .modal-content .modal-header .modal-title {
        text-align: center;
        font-weight: 600;
    }

    .premodal .modal-content .close {
        position: absolute;
        top: 0;
        right: 0;
        color: {{ $setTheme->text_color }};
        margin: 0;
        width: 40px;
        height: 40px;
        border-radius: 0 20px 0 20px;
        background: {{ $setTheme->text_color }};
        z-index: 3;
        text-align: center;
        line-height: 40px;
        display: inline-block;
        padding: 0;
        opacity: 1;
        text-shadow: none;
    }

    .premodal .modal-content .close:hover {
        opacity: 1;
        background: {{ $setTheme->button_color }};
        color: {{ $setTheme->text_color }};
    }

    .premodal .modal-content .modal-body {
        padding: 20px 30px 30px;
    }

    .premodal-login .modal-content .modal-body {
        padding: 20px 60px 20px;
    }

    .premodal .modal-content .modal-footer {
        padding-bottom: 30px;
        display: block;
        background: 0 0;
        border-top: none;
    }

    .preform .form-group {
        margin-bottom: 20px;
    }

    .preform .form-control {
        font-size: 13px;
        border-radius: 3px;
        border: none !important;
        background: {{ $setTheme->tertiary_base_color }} !important;
        box-shadow: none !important;
        padding: 0.75rem 1.25rem;
        height: auto;
    }

    .preform .form-control:disabled {
        color: #aaa;
    }

    .preform .prelabel {
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 400;
        letter-spacing: 1px;
    }

    .preform .custom-control-label {
        line-height: 1.5rem;
    }

    .block_area_mal {
        max-width: 500px;
        margin: 50px auto;
        padding: 50px;
        border: 3px solid #f4f4f4;
        border-radius: 20px;
    }

    .block_area_mal .description p {
        font-size: 13px;
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }

    .text-forgot {
        line-height: 1.5rem;
    }

    .link-highlight {
        color: {{ $setTheme->primary_color }} !important;
        cursor: pointer;
    }

    .modal-logo {
        text-align: center;
    }

    .modal-logo img {
        height: 40px;
        width: auto;
    }

    .premodal .modal-logo {
        margin-top: -10px;
    }

    .premodal .alert {
        font-size: 13px;
        line-height: 1.4em;
        border-radius: 0;
    }

    .premodal .btn {
        padding: 0.75rem 0.75rem;
        font-size: 14px;
    }

    .premodal .btn.btn-primary {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
        border: none !important;
    }

    .premodal .btn.btn-secondary {
        background: #e9daff !important;
        color: {{ $setTheme->primary_color }} !important;
        border: none !important;
    }

    #sidebar_menu_bg {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(32, 33, 37, 0.8);
        z-index: 103;
        display: none;
    }

    #sidebar_menu_bg.active {
        display: block;
    }

    #sidebar_menu {
        position: fixed;
        z-index: 101;
        left: -260px;
        opacity: 0;
        top: 0;
        bottom: 0;
        overflow: hidden;
        width: 260px;
        padding: 0;
        background: {{ $setTheme->primary_base_color }};
    }

    #sidebar_menu.active {
        opacity: 1;
        left: 0;
        z-index: 104;
    }

    #sidebar_menu .sidebar_menu-list {
        display: block;
        position: absolute;
        top: 60px;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: auto;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #sidebar_menu .sidebar_menu-list::-webkit-scrollbar {
        display: none;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item {
        display: block;
        width: 100%;
        border-bottom: 1px solid #f6f6f6;
        position: relative;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item>.nav-link {
        display: block;
        padding: 10px 15px;
        font-size: 13px;
        font-weight: 500;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item>.nav-link:hover {
        color: {{ $setTheme->primary_color }};
    }

    #sidebar_menu .sidebar_menu-list>.nav-item>.toggle-submenu {
        position: absolute;
        top: 0;
        right: -10px;
        padding: 10px;
        z-index: 3;
        cursor: pointer;
        display: none;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav {
        margin-bottom: 20px;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item {
        display: block;
        width: 49%;
        margin-right: 1%;
        float: left;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item>.nav-link {
        font-size: 12px;
        padding: 6px 15px;
        color: {{ $setTheme->text_color }};
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item>.nav-link:hover {
        color: {{ $setTheme->primary_color }};
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item:nth-of-type(n + 11) {
        display: none;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item.nav-more {
        display: block !important;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item.nav-more .nav-link {
        cursor: pointer;
        font-weight: 400;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav.active>.nav-item {
        display: block !important;
    }

    #sidebar_menu .sidebar_menu-list>.nav-item .nav.active>.nav-item.nav-more {
        display: none !important;
    }

    .types-sub {
        padding: 0 15px 10px;
    }

    .types-sub .ts-item {
        padding: 6px 10px;
        display: inline-block;
        font-size: 12px;
        line-height: 1.2;
        border-radius: 6px;
        background-color: #e9daff;
        color: {{ $setTheme->primary_color }};
        width: 100px;
        margin: 0 2px 6px 0;
    }

    #sidebar_menu .toggle-sidebar {
        padding: 0;
        text-align: center;
        width: 40px;
        height: 40px;
        background: {{ $setTheme->tertiary_base_color }};
        color: {{ $setTheme->text_color }};
        border-radius: 50%;
        top: 10px;
        left: 15px;
        position: absolute;
    }

    #sidebar_menu .with-icon i {
        vertical-align: bottom;
        font-size: 20px;
        margin-right: 10px;
    }

    .body-hidden {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
    }

    .loading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .loading>div {
        width: 18px;
        height: 18px;
        background-color: {{ $setTheme->primary_color }};
        border-radius: 100%;
        display: inline-block;
        -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    .loading .span1 {
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    .loading .span2 {
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    @-webkit-keyframes sk-bouncedelay {

        0%,
        100%,
        80% {
            -webkit-transform: scale(0);
        }

        40% {
            -webkit-transform: scale(1);
        }
    }

    @keyframes sk-bouncedelay {

        0%,
        100%,
        80% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        40% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .loading-relative {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
        min-height: 50px;
    }

    .loading-absolute {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 7;
        opacity: 0.7;
    }

    .loading-relative.loading-box,
    .manga-poster .loading-relative {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.3);
    }

    .search-result-pop .loading-relative {
        min-height: 160px;
    }

    .bah-filter .btn-in-headcat {
        border-radius: 3px;
        font-size: 14px;
        padding: 7px 10px;
        border: none;
        line-height: 24px;
        margin: 0;
    }

    .bah-filter .btn-in-headcat i {
        font-size: 24px;
    }

    .manga_list .manga_list-wrap .item .film-detail-fix {
        position: relative;
        bottom: auto;
        left: auto;
        right: auto;
        text-align: left;
        background: 0 0;
        padding: 10px 0;
    }

    .manga_list .manga_list-wrap .item .film-detail-fix .film-name {
        margin-bottom: 5px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        max-width: 100%;
    }

    .manga_list .manga_list-wrap .item .film-detail-fix .fd-infor {
        line-height: 16px;
    }

    .manga_list .manga_list-wrap .item .film-detail-fix .fd-infor .dot {
        margin: 3px 5px;
    }

    .manga_list .manga_list-wrap .item .film-detail-fix .fd-infor .fdi-type {
        font-size: 12px;
        font-family: arial;
        line-height: 1em;
        padding: 2px 4px;
        background: #ecc761;
        color: #231414;
        border-radius: 3px;
        font-weight: 600;
    }

    #footer {
        padding: 0;
        color: {{ $setTheme->text_color }};
        position: relative;
        background: {{ $setTheme->primary_base_color }};
        text-align: center;
    }

    #footer a {
        color: {{ $setTheme->text_color }};
    }

    #footer .container {
        position: relative;
        z-index: 3;
    }

    #footer .footer-logo {
        display: inline-block;
    }

    #footer .footer-logo img {
        width: auto;
        height: 60px;
    }

    #footer .footer-top {
        display: block;
        margin: 0 auto 20px;
        text-align: center;
        position: relative;
    }

    .footer-links {
        margin-bottom: 10px;
        text-align: center;
    }

    .footer-links ul {
        padding: 0;
    }

    .footer-links ul li {
        display: inline-block;
        margin: 10px 20px;
    }

    .footer-links ul li a {
        height: 30px;
        line-height: 30px;
    }

    #footer .btn-up {
        width: 30px;
        height: 30px;
        position: absolute;
        top: 0;
        right: 15px;
        background: #363a4d;
        color: {{ $setTheme->text_color }};
        padding: 0;
        line-height: 30px;
    }

    #footer-about {
        padding: 30px 0;
    }

    #footer-about .about-text {
        margin: 0 auto 20px;
        line-height: 1.4em;
        opacity: 0.5;
    }

    #footer-about .copyright {
        margin-bottom: 20px !important;
        opacity: 0.5;
    }

    #footer .toggle-footer .tf-item {
        display: inline-block;
        margin: 0 20px 0 0;
    }

    .footer-joingroup {
        float: left;
    }

    .footer-joingroup .Mangareader-group {
        display: inline-block;
        padding: 0 0 0 30px;
        border-left: 1px solid #444;
        font-size: 12px;
    }

    .footer-joingroup .Mangareader-group .zrg-title {
        padding-left: 5px;
    }

    .footer-joingroup .Mangareader-group .zrg-list .item:last-of-type {
        margin-right: 0;
    }

    .footer-toggle-block {
        background: rgba(255, 255, 255, 0.05);
        padding: 10px 0;
    }

    .tf-item .dub-toggle {
        margin-top: 0;
    }

    .tf-item .dub-toggle .dt-dub {
        background: 0 0;
    }

    .tf-item .dub-toggle .dt-status {
        border-radius: 5px;
    }

    .ftaz {
        display: inline-block;
        padding-right: 20px;
        margin-right: 20px;
        border-right: 1px solid rgba(255, 255, 255, 0.3);
        line-height: 1em;
        font-size: 1.4em;
        font-weight: 600;
    }

    .footer-az {
        margin: 0 0 10px;
    }

    ul.az-list {
        font-size: 0;
        margin-top: 10px;
    }

    ul.az-list li {
        margin: 0 10px 10px 0;
        display: inline-block;
    }

    ul.az-list li a {
        font-size: 14px;
        padding: 4px 8px;
        display: inline-block;
        background: #363a4d;
        border-radius: 3px;
    }

    ul.az-list li a:hover,
    ul.az-list li.active a {
        color: {{ $setTheme->text_color }};
        background: {{ $setTheme->button_color }};
    }

    .main-az {
        margin-bottom: 20px;
    }

    .main-az ul.az-list {
        margin: 0 -3px;
    }

    .main-az ul.az-list li {
        width: calc(3.7% - 6px);
        margin: 3px;
    }

    .main-az ul.az-list li a {
        font-size: 15px;
        padding: 8px 3px;
        display: block;
        text-align: center;
    }

    .page-az .container {
        max-width: 1160px;
        padding: 0 15px;
    }

    .breadcrumb-item+.breadcrumb-item:before {
        content: "•";
    }

    .dps-spacing {
        margin: 50px 0;
        height: 10px;
        background: rgba(255, 255, 255, 0.05);
        display: block;
    }

    .heading-name {
        font-size: 1.8em;
        line-height: 1.3em;
        margin: 0 0 15px;
        font-weight: 400;
        color: {{ $setTheme->button_color }};
    }

    .btn-xs {
        font-size: 12px;
        padding: 2px 4px;
        line-height: 1em;
    }

    .btn-xs i {
        font-size: 12px;
    }

    #mask-overlay {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 102;
        background: rgba(11, 11, 11, 0.98);
        display: none;
    }

    #mask-overlay.active {
        display: block;
    }

    .information_page {
        max-width: 1420px;
        margin: 0 auto;
    }

    .information_page .h2-heading,
    .information_page .h3-heading,
    .information_page .h4-heading {
        font-size: 2em;
        line-height: 1.3em;
        margin-bottom: 10px;
        color: {{ $setTheme->text_color }};
    }

    .information_page .h3-heading {
        font-size: 1.5em;
    }

    .information_page .h4-heading {
        font-size: 1.2em;
    }

    .information_page p {
        line-height: 1.6em;
        font-size: 14px;
        font-weight: 300;
        margin-bottom: 1em;
    }

    .article-infor {
        font-size: 1.1em;
        line-height: 1.6em;
    }

    .article-infor a {
        color: {{ $setTheme->primary_color }};
    }

    .article-infor p {
        line-height: 1.6em;
    }

    .article-infor .h4-heading {
        font-size: 1.3em;
        line-height: 1.6em;
        margin-bottom: 15px;
    }

    .prebreadcrumb {
        margin-bottom: 25px;
        overflow: hidden;
        position: relative;
        z-index: 3;
    }

    .prebreadcrumb .breadcrumb {
        padding: 0;
        background: 0 0;
        margin: 0;
    }

    .prebreadcrumb .breadcrumb .breadcrumb-item {
        color: #111 !important;
    }

    .form-control-textarea {
        max-width: 100%;
        min-width: 100%;
    }

    .profile-avatar img {
        height: 120px;
        width: auto;
    }

    .block_area_manager .list-group-item {
        background: 0 0;
        border-color: #222;
        color: #aaa;
    }

    .detail-infor {
        padding-right: 240px;
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .blank_page {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .container-404 {
        padding: 200px 0 100px;
    }

    .container-404 .c4-big {
        font-size: 120px;
        font-weight: 600;
        color: {{ $setTheme->text_color }};
        line-height: 1em;
        margin-bottom: 20px;
    }

    .container-404 .c4-big-img {
        width: 100%;
        max-width: 800px;
        margin: 0 auto 30px;
    }

    .container-404 .c4-big-img img {
        max-height: 200px;
        max-width: 100%;
    }

    .container-404 .c5-big-img {
        margin: 0 auto 30px;
    }

    .container-404 .c5-big-img img {
        max-width: 300px;
        width: 100%;
        height: auto;
    }

    .container-404 .c4-medium {
        font-size: 30px;
        font-weight: 400;
        line-height: 1.2em;
        margin-bottom: 10px;
    }

    .container-404 .c4-small {
        font-size: 14px;
        font-weight: 400;
        line-height: 1.3em;
        margin-bottom: 30px;
    }

    .contact-form {
        width: 100%;
        max-width: 600px;
    }

    .ulclear,
    .ulclear li {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .episode-list {
        position: relative;
    }

    .detail-extend-toggle {
        display: none;
    }

    .breadcrumb-item {
        line-height: 1.4em;
        margin-bottom: 3px;
    }

    .breadcrumb-item+.breadcrumb-item:before,
    .breadcrumb-item.active {
        color: #aaa;
    }

    .slcs-ul {
        max-height: 350px;
        overflow: auto;
    }

    #text-home {
        //background: {{ $setTheme->secondary_color }};
        color: {{ $setTheme->text_color }};
    }

    .text-home {
        line-height: 1.6em;
        padding: 20px 0;
    }

    .text-home a {
        color: {{ $setTheme->text_color }} !important;
        font-weight: 600;
    }

    .text-home .btn-expand {
        display: none;
    }

    #manga-featured {
        margin-bottom: 20px;
        width: 100%;
        overflow: hidden;
    }

    .premodal .modal-content .modal-body p {
        line-height: 1.4em;
    }

    @media screen and (max-width: 479px) {
        .rl-reason .custom-control {
            display: block;
            margin-right: 0;
        }

        .report-btn .btn {
            margin: 0 0 10px 0 !important;
            display: block;
            width: 100%;
        }
    }

    .premodal.premodal-large .modal-dialog {
        max-width: 600px;
    }

    .premodal.premodal-large .modal-dialog .modal-content {
        border-radius: 20px;
    }

    .premodal .modal-content {
        background: {{ $setTheme->primary_base_color }};
        border-radius: 20px;
    }

    .premodal .category_filter .category_filter-content {
        background: 0 0;
        border: none;
        padding: 0;
    }

    .row-select .ni-head {
        top: 10px !important;
    }

    .form-check-inline {
        width: 150px;
    }

    .description-modal {
        letter-spacing: 0.5px;
        line-height: 1.5em;
    }

    .description-modal p {
        line-height: 1.5em;
    }

    .premodal-filter .modal-content {
        background: #2a2e3c url("../images/filter.jpg") top center no-repeat;
    }

    .premodal-filter .modal-header {
        padding: 20px 30px !important;
        padding-bottom: 0 !important;
    }

    .premodal-filter .modal-title {
        font-size: 1.5em;
        line-height: 1.3em;
    }

    .premodal-filter .modal-body {
        padding-bottom: 40px !important;
    }

    .small-page {
        max-width: 800px;
        margin: 0 auto;
    }

    .noti-list .noti-item {
        padding: 1rem;
        background: #f5f5f5;
        margin-bottom: 10px;
        padding-left: 60px;
        position: relative;
    }

    .noti-list .noti-item .icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        margin-top: -12px;
        opacity: 0.5;
    }

    .noti-list .noti-item.new .icon {
        opacity: 1;
        color: {{ $setTheme->button_color }};
    }

    .noti-list .noti-item.new {
        background: {{ $setTheme->text_color }};
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
    }

    .noti-list .noti-item .time {
        font-size: 12px;
        margin-bottom: 10px;
    }

    .noti-list .noti-item p {
        margin-bottom: 0 !important;
        opacity: 0.5;
    }

    .new-noti-list .nnl-mark {
        background: #f6f6f6;
        overflow: hidden;
    }

    .new-noti-list .nnl-mark .ma-btn {
        font-size: 12px;
        display: block;
        cursor: pointer;
        padding: 10px 15px;
    }

    .new-noti-list .nnl-mark .ma-btn:hover {
        color: {{ $setTheme->primary_color }};
    }

    .text-light {
        color: #111 !important;
    }

    .news-list.news-list-default .news-item {
        width: 49%;
    }

    .news-list.news-list-default .news-item .avatar.avatar-solid {
        width: 24px;
        height: 24px;
        font-size: 14px;
        line-height: 24px;
    }

    .news-list.news-list-default .news-item .info .name {
        float: left;
    }

    .news-list.news-list-default .news-item .info .time {
        float: right;
    }

    .news-list.news-list-default .news-item .news-title {
        font-size: 1.3em;
    }

    .news-list.news-list-default .news-item .ni-body .news-thumb-2 {
        width: 200px;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        right: auto;
        top: 0;
        overflow: hidden;
        display: inline-block;
    }

    .news-list.news-list-default .news-item .ni-body .news-thumb-2 img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .news-list.news-list-default .news-item .ni-body {
        padding-right: 0;
        padding-left: 220px;
        height: 118px;
        overflow: hidden;
    }

    .article-news {
        font-size: 16px;
        line-height: 1.5em;
        font-weight: 400;
    }

    .article-news .news-heading {
        margin: 0 0 20px;
        font-size: 24px;
    }

    .article-news .time {
        opacity: 0.5;
        margin-bottom: 10px;
    }

    .article-news img {
        max-width: 100%;
    }

    .medium-page {
        margin: 0 auto;
    }

    .btn-quality,
    .btn-trailer {
        border: 1px solid {{ $setTheme->text_color }} !important;
        color: {{ $setTheme->text_color }};
    }

    .watching_player-control .btn-download {
        color: #f7d200 !important;
    }

    .block_area .block_area-header .viewmore .btn,
    .detail_page .detail_page-watch .detail_page-infor .description .btn-default {
        color: #aaa;
    }

    .bah-setting .btn,
    .btn-in-headcat {
        background: #71797d;
        color: {{ $setTheme->text_color }};
        border-color: #71797d;
    }

    #header.header-home {
        background: rgba(32, 33, 37, 0) !important;
    }

    #header.header-home.fixed {
        background: rgba(32, 33, 37, 0.95) !important;
    }

    .deslide-wrap {
        //background-color: {{ $setTheme->secondary_color }};
        margin-top: -165px;
        padding-top: 165px;
    }

    .deslide {
        width: 100%;
        position: relative;
        padding-bottom: 500px;
        padding-top: 100px;
        overflow: hidden;
    }

    .deslide-item {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .deslide-item .deslide-item-content {
        max-width: 600px;
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 30px;
        z-index: 3;
        color: {{ $setTheme->text_color }};
        padding: 0 30px;
    }

    .deslide-item .desi-sub-text {
        font-size: 18px;
        line-height: 1.3em;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .deslide-item .desi-head-title {
        font-size: 32px;
        line-height: 1.3;
        font-weight: 600;
        margin-bottom: 15px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .deslide-item .desi-head-title a {
        color: {{ $setTheme->text_color }};
    }

    .deslide-item .desi-description {
        font-size: 13px;
        line-height: 1.5em;
        font-weight: 300;
        margin-bottom: 1rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .deslide-item .deslide-cover {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        opacity: 0.4;
    }

    .deslide-item .deslide-cover img {
        position: absolute;
        object-fit: cover;
        width: 120%;
        height: 120%;
        top: -10%;
        left: -10%;
        opacity: 1;
        filter: blur(8px);
    }

    .deslide-item .deslide-poster {
        position: absolute;
        top: -130px;
        left: 750px;
        width: 400px;
        transform: scale(1.2);
        opacity: 0;
    }

    .swiper-slide-active .deslide-item .deslide-poster {
        opacity: 1;
        top: -100px;
        transform: scale(1);
    }

    .deslide-item .deslide-poster .manga-poster {
        display: inline-block;
        transform: rotate(15deg);
        border: 20px solid {{ $setTheme->text_color }};
        box-shadow: 0 30px 30px rgba(0, 0, 0, 0.2);
    }

    .swiper-notification,
    .swiper-pagination {
        display: none;
    }

    #anime-featured {
        margin-bottom: 40px;
    }

    .featured-block-ul {
        margin-bottom: 20px;
    }

    .featured-block-ul li {
        position: relative;
        padding: 25px 60px 25px 80px;
        overflow: hidden;
    }

    .featured-block-ul li .manga-poster {
        width: 60px;
        height: auto;
        padding-bottom: 0;
        border-radius: 0;
        position: absolute;
        top: 20px;
        bottom: 0;
        left: 0;
        z-index: 2;
    }

    .featured-block-ul li .manga-detail {
        font-size: 14px;
        line-height: 1.4em;
        display: block;
    }

    .featured-block-ul li .manga-detail .fd-infor {
        overflow: hidden;
        font-size: 0.9em;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .featured-block-ul li .manga-detail .fd-infor .fdi-item.fdi-chapter {
        display: block;
        margin-top: 2px;
    }

    .featured-block-ul li .manga-detail .fd-infor .d-block .fdi-item.fdi-chapter {
        display: inline-block;
        margin-top: 2px;
        margin-right: 15px;
    }

    .featured-block-ul li .manga-detail .fd-infor .fdi-item.fdi-chapter a {
        color: {{ $setTheme->primary_color }};
        font-weight: 600;
    }

    .featured-block-ul li .manga-detail .manga-name,
    .table_schedule-list li .manga-detail .manga-name {
        font-size: 15px;
        font-weight: 600;
        line-height: 1.4em;
        margin-bottom: 5px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .featured-block-ul li .manga-rating {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        font-size: 30px;
        color: #7f7e99;
        opacity: 0.3;
        font-weight: 600;
    }

    .featured-block-ul li:hover .manga-rating {
        opacity: 0.6;
    }

    .mr-ranking {
        width: 100px;
        text-align: center;
        opacity: 0.8;
    }

    .more a {
        display: block;
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        padding: 13px 10px;
        cursor: pointer;
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
        border-radius: 6px;
        margin-top: 15px;
    }

    .more a:hover {
        background: #451184;
        color: {{ $setTheme->text_color }};
    }

    .f-more {
        margin-top: 30px;
    }

    .f-more a {
        margin-top: 20px;
        font-size: 16px;
    }

    .fdi-rate {
        color: {{ $setTheme->button_color }};
    }

    .fdi-chapter {
        color: #888;
    }

    .news-anif-block-ul li {
        padding-left: 125px !important;
        padding-right: 20px !important;
    }

    .news-anif-block-ul li .film-poster {
        width: 80px;
    }

    #mw-2col {
        margin: 0 0 30px;
    }

    #main-content {
        width: calc(66.66% - 20px);
        float: left;
        margin: 0 20px 0 0;
    }

    #main-sidebar {
        width: calc(33.33% - 20px);
        float: right;
        margin: 0 0 40px 20px;
    }

    .cbox {
        background: #363a4d;
        padding: 20px;
    }

    .cbox.cbox-genres {
        padding: 15px;
        background: #2a2e3c;
        display: inline-block;
        width: 100%;
        position: relative;
    }

    .cbox.cbox-genres ul {
        margin: 0 -1% 0;
        overflow: hidden;
    }

    .cbox.cbox-genres ul li {
        float: left;
        width: 31.33%;
        margin: 0 1% 3px;
    }

    .cbox.cbox-genres ul li a {
        display: block;
        padding: 9px 10px;
        border-radius: 3px;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 100%;
        overflow: hidden;
        font-size: 12px;
        font-weight: 500;
        color: {{ $setTheme->text_color }};
    }

    .cbox.cbox-genres ul li a:hover {
        background: #414248;
    }

    ul.color-list li:nth-of-type(7n) a {
        border-color: #86e3ce;
        color: #86e3ce;
    }

    ul.color-list li:nth-of-type(7n + 1) a {
        border-color: #d0e6a5;
        color: #d0e6a5;
    }

    ul.color-list li:nth-of-type(7n + 2) a {
        border-color: #ffdd95;
        color: #ffdd95;
    }

    ul.color-list li:nth-of-type(7n + 3) a {
        border-color: #fc887b;
        color: #fc887b;
    }

    ul.color-list li:nth-of-type(7n + 4) a {
        border-color: #ccabda;
        color: #ccabda;
    }

    ul.color-list li:nth-of-type(7n + 5) a {
        border-color: #abccd8;
        color: #abccd8;
    }

    ul.color-list li:nth-of-type(7n + 6) a {
        border-color: #d8b2ab;
        color: #d8b2ab;
    }

    .cbox.cbox-list {
        padding: 0;
        background: #2a2e3c;
    }

    .cbox.cbox-list .cbox-content {
        padding: 5px 20px;
    }

    .cbox.cbox-list .featured-block-ul li {
        padding: 15px 0 15px 80px;
        background: 0 0 !important;
        margin-bottom: 10px;
    }

    .cbox.cbox-list .featured-block-ul li:last-of-type {
        border: none;
    }

    .cbox.cbox-list .featured-block-ul li .manga-poster {
        left: 0;
        width: 60px;
        top: calc(50%);
        transform: translateY(-50%);
        bottom: auto;
        padding-bottom: 80px;
    }

    .cbox.cbox-list .featured-block-ul li .film-fav {
        right: 5px;
    }

    .cbox.cbox-list .featured-block-chart li {
        overflow: unset;
        padding-right: 60px;
    }

    .cbox.cbox-list .featured-block-chart li .ranking-number {
        position: absolute;
        width: 40px;
        height: 40px;
        text-align: center;
        right: 0;
        top: 8px;
        cursor: default;
        background: #f5f5f5;
    }

    .cbox.cbox-list .featured-block-chart li .ranking-number span {
        font-weight: 600;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .cbox.cbox-list .featured-block-chart li.item-top .ranking-number {
        background: {{ $setTheme->secondary_base_color }};
    }

    .cbox.cbox-list .featured-block-chart li.item-top .ranking-number span {
        color: {{ $setTheme->primary_color }} !important;
    }

    .cbox.cbox-list .featured-block-chart li:hover .ranking-number span {
        color: {{ $setTheme->primary_color }};
    }

    .cbox.cbox-list .featured-block-chart li .manga-detail {
        min-height: auto;
    }

    .cbox.cbox-list .featured-block-chart li .manga-detail .fdi-chapter a {
        color: {{ $setTheme->primary_color }};
        font-weight: 500;
    }

    .cbox.cbox-list .featured-block-chart li .manga-detail .fdi-cate {
        display: none;
    }

    .table_schedule .table_schedule-list li {
        position: relative;
        padding: 15px 0;
        border-bottom: 1px dashed #ccc;
    }

    .table_schedule .table_schedule-list li:last-of-type {
        border-bottom: none;
    }

    .table_schedule .table_schedule-list li .time {
        position: absolute;
        top: 50%;
        font-weight: 600;
        transform: translateY(-50%);
        left: 0;
        padding: 0;
        text-align: left;
        width: 60px;
        color: {{ $setTheme->primary_color }};
        font-size: 14px;
    }

    .table_schedule .table_schedule-list li .manga-detail {
        padding-left: 60px;
        position: relative;
        padding-right: 110px;
    }

    .table_schedule .table_schedule-list li .manga-detail .manga-name {
        margin-bottom: 0;
        line-height: 24px;
    }

    .table_schedule .table_schedule-list li .manga-detail .fd-play {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
    }

    .table_schedule .table_schedule-list li .manga-detail .fd-play .btn-play {
        color: {{ $setTheme->primary_color }};
        font-size: 12px;
        position: relative;
    }

    .table_schedule .table_schedule-list li .manga-detail .fd-play .btn-play i {
        font-size: 8px;
        position: relative;
        top: -2px;
        color: #7f7e99;
    }

    .table_schedule .table_schedule-list li:hover .manga-detail .fd-play .btn-play {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .table_schedule .table_schedule-list li:hover .manga-detail .fd-play .btn-play i {
        color: {{ $setTheme->text_color }};
    }

    .table_schedule .table_schedule-date {
        padding: 0 40px;
        position: relative;
        margin-bottom: 10px;
    }

    .table_schedule .table_schedule-date .swiper-container {
        border-radius: 6px;
    }

    .table_schedule .table_schedule-date .tsd-item {
        background: {{ $setTheme->secondary_base_color }};
        text-align: center;
        padding: 10px;
        border-radius: 6px;
        cursor: pointer;
    }

    .table_schedule .table_schedule-date .tsd-item:hover {
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->primary_color }};
    }

    .table_schedule .table_schedule-date .tsd-item span {
        font-weight: 600;
        font-size: 14px;
    }

    .table_schedule .table_schedule-date .tsd-item .date {
        font-size: 12px;
    }

    .table_schedule .table_schedule-date .tsd-item.active {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }} !important;
    }

    .block_area_sidebar .table_schedule {
        background: 0 0;
    }

    .block_area_sidebar .table_schedule .table_schedule-date {
        padding: 0 36px;
        margin-bottom: 10px;
    }

    .block_area_sidebar .table_schedule .table_schedule-list li {
        padding: 15px 0;
    }

    .block_area_sidebar .table_schedule .table_schedule-list li .time {
        width: 50px;
        text-align: left;
    }

    .block_area_sidebar .table_schedule .table_schedule-list li .manga-detail {
        padding-left: 60px;
    }

    .block_area_sidebar .table_schedule .ts-navigation .btn {
        top: 0;
        bottom: 0;
        left: 0;
        background: 0 0;
        box-shadow: none;
    }

    .block_area_sidebar .table_schedule .ts-navigation .btn.tsn-next {
        left: auto;
        right: 0;
    }

    .page-schedule .container {
        max-width: 1000px;
    }

    .page-schedule .manga-poster {
        position: absolute;
        left: 70px;
        width: 50px;
        padding-bottom: 50px;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    .page-schedule .table_schedule .table_schedule-list li {
        padding: 25px 20px;
    }

    .page-schedule .table_schedule .table_schedule-list li .manga-detail {
        padding-left: 115px;
    }

    .ts-navigation .btn {
        position: absolute;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        left: 0;
        bottom: 0;
        top: 0;
        width: 30px;
        height: auto;
        border-radius: 6px;
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
        padding: 0;
        text-align: center;
        z-index: 9;
    }

    .ts-navigation .btn i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .ts-navigation .btn.tsn-next {
        left: auto;
        right: 0;
    }

    .btn-showmore {
        font-size: 12px;
        padding: 8px 12px;
        background: #3c4255;
        color: {{ $setTheme->text_color }} !important;
    }

    .btn-showmore:before {
        content: "Show more";
    }

    .sb-genre-less li:nth-of-type(n + 25) {
        display: none;
    }

    .cbox-genres.active .sb-genre-less li {
        display: block !important;
    }

    .cbox-genres.active .btn-showmore:before {
        content: "Show less";
    }

    #ani_detail {
        margin-top: -25px;
        position: relative;
    }

    #ani_detail .ani_detail-stage {
        width: 100%;
        background: {{ $setTheme->primary_base_color }};
        display: inline-block;
        margin-bottom: 30px;
        position: relative;
    }

    #ani_detail .anis-content {
        padding: 60px 0;
    }

    #ani_detail .prebreadcrumb {
        margin: 0;
        font-size: 12px;
        color: {{ $setTheme->text_color }};
    }

    .detail-breadcrumb {
        margin-top: 20px;
        display: none;
    }

    .detail-breadcrumb .breadcrumb {
        background: #300c5c;
        font-size: 0.9em;
        color: {{ $setTheme->text_color }};
        border-radius: 30px;
        margin-bottom: 0 !important;
        padding: 0.75rem 1.5rem;
    }

    .detail-breadcrumb .breadcrumb a {
        color: {{ $setTheme->text_color }};
    }

    .detail-breadcrumb .breadcrumb-item,
    .detail-breadcrumb .breadcrumb-item::before {
        color: {{ $setTheme->text_color }};
    }

    .detail-toggle {
        display: none;
    }

    .detail-toggle .btn:after {
        content: "Lihat detail";
    }

    .detail-toggle.active .btn:after {
        content: "Tutup detail";
    }

    .detail-toggle.active .btn i {
        transform: rotate(180deg);
    }

    .anis-content {
        position: relative;
    }

    .anis-content .anisc-poster {
        width: 180px;
        position: absolute;
        top: 60px;
        left: 0;
    }

    .anis-content .anisc-poster .manga-poster {
        border-radius: 10px;
        border: 3px solid {{ $setTheme->text_color }};
        overflow: hidden;
    }

    .anis-content .anisc-detail {
        padding-left: 210px;
        padding-right: calc(33.33% + 40px);
        min-height: 300px;
        color: {{ $setTheme->text_color }};
    }

    .anis-content .anisc-detail .manga-name {
        font-size: 28px;
        line-height: 1.3em;
        margin-bottom: 10px;
        color: {{ $setTheme->text_color }};
    }

    .anis-content .anisc-detail .manga-name-or {
        font-size: 16px;
        line-height: 1.4em;
        margin-bottom: 20px;
    }

    .anis-content .anisc-detail .manga-name-or span {
        margin: 0 5px;
        opacity: 0.3;
    }

    .anis-content .anisc-detail .sort-desc {
        text-align: left;
    }

    .anis-content .anisc-detail .sort-desc>.description {
        font-weight: 300;
        margin-bottom: 5px;
        text-align: left;
        color: {{ $setTheme->text_color }};
        line-height: 1.5em;
        font-size: 13px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .anis-content .anisc-detail .manga-buttons {
        margin-bottom: 2rem;
    }

    .anis-content .anisc-detail .manga-buttons .btn {
        padding: 0 1rem;
        line-height: 42px;
        border-radius: 0.4rem;
    }

    .anis-content .anisc-detail .manga-buttons .btn-fav {
        padding: 0;
        width: 42px;
        margin-left: 10px;
        background: {{ $setTheme->text_color }} !important;
    }

    .anis-content .anisc-detail .manga-buttons .btn-fav.active i,
    .anis-content .anisc-detail .manga-buttons .btn-fav:hover i {
        font-weight: 900;
        color: #a75fff;
    }

    .anis-content .anisc-detail .manga-buttons .btn i {
        transform: scale(0.8);
    }

    .anis-content .anisc-detail .manga-buttons .dr-fav {
        display: inline-block;
        position: relative;
    }

    .anis-content .anisc-detail .genres {
        margin-bottom: 0.75rem;
    }

    .anis-content .anisc-detail .genres a {
        display: inline-block;
        margin: 0 4px 6px 0;
        font-size: 0.85em;
        padding: 0.25rem 0.5rem;
        background: {{ $setTheme->tertiary_base_color }};
        color: {{ $setTheme->text_color }};
        border-radius: 0.3rem;
    }

    .manga-comment {
        display: inline-block;
        vertical-align: top;
        height: 42px;
        padding-left: 2rem;
        margin-left: 2rem;
        border-left: 1px solid rgba(255, 255, 255, 0.1);
    }

    .manga-comment a.btn-comment {
        position: relative;
        color: {{ $setTheme->text_color }} !important;
        display: block;
    }

    .manga-comment a.btn-comment i {
        color: {{ $setTheme->button_color }};
        font-size: 12px;
    }

    .manga-comment a.btn-comment span {
        display: block;
        font-size: 12px;
        opacity: 0.5;
    }

    @media screen and (min-width: 1300px) {
        .anis-content .anisc-info-wrap {
            position: absolute;
            top: 60px;
            right: 0;
            bottom: 0;
            width: calc(33.33% - 20px);
            overflow: hidden;
        }

        .anis-content .anisc-info {
            position: absolute;
            top: 0;
            max-height: 95%;
            overflow: auto;
            left: 0;
            bottom: auto;
            right: 0;
            padding-bottom: 170px;
        }

        #ani_detail .dt-rate {
            position: absolute;
            left: 0;
            bottom: 0;
        }
    }

    .social-in-box {
        margin-top: 20px;
    }

    .anis-content .anisc-info a {
        color: {{ $setTheme->text_color }};
    }

    .anis-content .anisc-info .item {
        margin-bottom: 2px;
        color: {{ $setTheme->text_color }};
        font-size: 0.9em;
    }

    .anis-content .anisc-info .item:last-of-type {
        margin-bottom: 0;
    }

    .anis-content .anisc-info .item .item-head {
        font-weight: 600;
        margin-bottom: 10px;
        margin-right: 5px;
    }

    .anis-content .anisc-info .item-list .item-head {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .anis-content .anisc-info .item-list a {
        font-weight: 500;
        color: {{ $setTheme->text_color }};
    }

    .anis-content .anisc-info .item-list a:after {
        content: ", ";
    }

    .anis-content .anisc-info .item-list a:last-of-type:after {
        display: none;
    }

    .anis-cover-wrap {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
    }

    .anis-cover {
        position: absolute;
        top: -20px;
        left: -20px;
        right: -20px;
        bottom: -20px;
        background-size: cover;
        background-position: center center;
        filter: blur(15px);
        opacity: 0.3;
    }

    .block_area_chapters {
        overflow: hidden;
    }

    .chap-tabs {
        border-bottom: 5px solid {{ $setTheme->primary_color }};
    }

    .chap-tabs .nav-item {
        margin-bottom: -5px;
    }

    .chap-tabs .nav-item .nav-link {
        border: none !important;
        padding: 0 20px;
        line-height: 45px;
        font-weight: 500;
    }

    .chap-tabs .nav-item .nav-link.active {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .chapters-list {
        display: block;
        position: relative;
        color: {{ $setTheme->text_color }};
        margin-bottom: 50px;
    }

    .chapters-list .chapters-list-title {
        font-size: 24px !important;
        font-weight: 600;
        margin: 20px 0 30px;
    }

    .chapters-list-ul ul {
        margin: 0;
        max-height: 490px;
        overflow: auto;
    }

    .chapters-list-ul ul .item {
        display: block;
        width: 100%;
        margin: 0 0 1px;
        font-size: 12px;
    }

    .chapters-list-ul ul .item a {
        padding: 15px;
        padding-right: 100px;
        padding-left: 30px;
        display: block;
        position: relative;
        border-radius: 0;
        background: {{ $setTheme->tertiary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    .chapters-list-ul ul .item a:hover {
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->primary_color }} !important;
    }

    .chapters-list-ul ul .item a:hover:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: {{ $setTheme->primary_color }};
    }

    .chapters-list-ul ul .item.active a {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .chapters-list-ul ul .item.active a .arrow {
        color: {{ $setTheme->text_color }} !important;
        opacity: 1;
    }

    .chapters-list-ul ul .item .item-read {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 0.3rem;
        padding: 0.25rem 0.5rem;
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->primary_color }};
    }

    .chapter-list-read .chapters-list-ul ul .item .item-read {
        display: none !important;
    }

    .chapters-list-ul ul .item.highlight .item-read,
    .chapters-list-ul ul .item:hover .item-read {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .chapters-list-ul ul .item .arrow {
        position: absolute;
        left: 15px;
    }

    .chapters-list-ul ul .item .name {
        font-weight: 500;
        font-size: 13px;
        max-width: 100%;
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    .chapters-list-ul ul .item.highlight a {
        background: {{ $setTheme->text_color }} !important;
        color: {{ $setTheme->primary_color }} !important;
        box-shadow: 0 0 0 2px {{ $setTheme->primary_color }} inset;
        position: relative;
        z-index: 5;
    }

    .w-hide {
        display: none;
    }

    .character-list {
        border-radius: 6px;
        overflow: hidden;
    }

    .character-list .cl-item {
        position: relative;
        padding: 0;
        margin-bottom: 15px;
    }

    .character-list .cl-item .character-thumb {
        width: 45px;
        padding-bottom: 45px;
        display: inline-block;
    }

    .character-list .cl-item .cli-info {
        position: absolute;
        left: 60px;
        top: 5px;
        right: 15px;
    }

    .character-list .cl-item .cli-info .cl-name {
        font-size: 14px;
        line-height: 1.3em;
        margin-bottom: 3px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .character-list .cl-item .cli-info .sub {
        font-size: 11px;
        color: #888;
        line-height: 1em;
    }

    .chapter-section {
        padding: 10px;
        background: {{ $setTheme->tertiary_base_color }};
        margin-bottom: 0;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 100;
    }

    .chapter-section .chapter-s-lang {
        float: left;
    }

    .chapter-section .chapter-s-lang button.btn {
        box-shadow: none !important;
        border: none !important;
        height: 32px;
        padding: 5px 5px;
        font-size: 14px;
        font-weight: 500;
    }

    .chapter-section .chapter-s-search {
        float: right;
        width: 100%;
        position: relative;
    }

    .chapter-section .chapter-s-search .css-icon {
        left: 10px;
        top: 0;
        bottom: 0;
        line-height: 32px;
        position: absolute;
        font-size: 12px;
    }

    .chapter-section .chapter-s-search .css-icon i {
        color: {{ $setTheme->text_color }};
    }

    .chapter-section .chapter-s-search .preform .form-control {
        height: 32px;
        font-size: 13px;
        padding-left: 35px;
        box-shadow: none !important;
    }

    .chapter-section .dropdown-menu-model .dropdown-item {
        background: {{ $setTheme->text_color }} !important;
        color: #111 !important;
    }

    .chapter-section .dropdown-menu-model .dropdown-item:hover {
        background: #f5f5f5 !important;
    }

    .chapter-section .dropdown-menu-model .dropdown-item.active {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .item-keyword {
        font-size: 13px;
        font-weight: 400;
        color: {{ $setTheme->text_color }};
        background: {{ $setTheme->secondary_base_color }};
        line-height: 1em;
        padding: 5px 8px;
        border-radius: 4px;
        display: inline-block;
        margin: 0 3px 5px 0;
    }

    .item-keyword:hover {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .sbs-text {
        margin-bottom: 30px;
    }

    .sbs-text .sbst-row {
        margin-bottom: 20px;
        position: relative;
        line-height: 1.5em;
        font-size: 13px;
        overflow: hidden;
    }

    .sbs-text .sbst-row:last-of-type {
        border-bottom: none;
    }

    .sbs-text .sbst-row .title {
        float: left;
        width: 160px;
        display: block;
    }

    .sbs-text .sbst-row .title span {
        padding: 6px 0;
        line-height: 1.2em;
        font-weight: 500;
        margin: 3px;
        display: block;
        text-align: left;
    }

    .sbs-text .sbst-row .sr-items {
        position: relative;
        overflow: hidden;
    }

    .sbs-text .sbst-row .sr-items a {
        display: block;
        line-height: 1.2em;
        padding: 6px 10px;
        color: {{ $setTheme->text_color }};
        border-radius: 6px;
        background: {{ $setTheme->secondary_base_color }};
        margin: 3px;
        float: left;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .sbs-text .sbst-row .sr-items a:hover {
        color: {{ $setTheme->text_color }};
        background: {{ $setTheme->primary_color }};
    }

    .anisc-keyword {
        margin-top: 30px;
        margin-bottom: 0;
    }

    .keyword-list .dib {
        line-height: 26px;
        display: block;
        float: left;
    }

    .keyword-list .item-keyword {
        font-size: 12px;
        line-height: 24px;
        float: left;
        padding: 0 8px;
        margin: 0 5px 5px 0;
        border: 1px solid #43454d;
        white-space: nowrap;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #discussion *,
    .featured-navi>div,
    .no-select,
    .ssc-list {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .dropdown-menu-model {
        border: none;
        min-width: 150px;
        background: {{ $setTheme->text_color }};
        padding: 0;
        border-radius: 6px;
        overflow: hidden;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu-model .dropdown-item {
        padding: 8px 12px;
        font-size: 14px;
        font-weight: 400;
        color: {{ $setTheme->text_color }};
    }

    .dropdown-menu-model .dropdown-item.added,
    .dropdown-menu-model .dropdown-item:hover {
        background: #f8f1ff;
        color: {{ $setTheme->primary_color }};
    }

    .dropdown-menu-model .dropdown-item.active {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .dr-fav .dropdown-menu-model .dropdown-item.added i {
        float: right;
        transform: scale(0.8);
        margin-top: 2px;
    }

    .profile-header {
        padding: 40px 0 0;
        margin-top: -30px;
        margin-bottom: 40px;
        background: #2a2e3c !important;
        text-align: center;
        overflow: hidden;
        position: relative;
    }

    .profile-header:before {
        content: "";
        position: absolute;
        top: -20px;
        left: -20px;
        right: -20px;
        bottom: -20px;
        filter: blur(20px);
        opacity: 0.3;
        background-size: cover;
        background-position: 50% 25%;
        background-image: url("../../images/thumbs/avatar.jpg");
    }

    .profile-header .container {
        z-index: 3;
        position: relative;
    }

    .profile-box-header {
        margin-bottom: 25px;
    }

    .profile-box-header .more {
        padding-top: 9px;
    }

    .ph-title {
        font-size: 30px;
        line-height: 1.4em;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .profile-avatar {
        width: 140px;
        position: absolute;
        left: 0;
        top: 20px;
        text-align: center;
    }

    .profile-avatar img {
        width: 140px;
        height: 140px;
        overflow: hidden;
        cursor: pointer;
        border-radius: 50%;
        margin-bottom: 1rem;
    }

    .profile-avatar .pa-edit {
        font-size: 12px;
        color: {{ $setTheme->primary_color }};
        cursor: pointer;
    }

    .profile-box-account {
        max-width: 600px;
        margin: 0 auto 20px;
    }

    .profile-box-account .block_area-content {
        padding: 30px;
        background: #2a2e3c;
    }

    .profile-list {
        max-width: 1400px;
        margin: 0 auto;
    }

    .layout-profile-inbox .inbox-list {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }

    .ph-tabs .pre-tabs {
        text-align: center;
        display: block;
        width: 100%;
    }

    .ph-tabs .pre-tabs .nav-item {
        display: inline-block;
        margin: 0 15px;
    }

    .inbox-item {
        padding: 20px;
        margin-bottom: 10px;
        background: {{ $setTheme->secondary_base_color }};
        opacity: 0.5;
    }

    .inbox-item:hover {
        opacity: 1;
    }

    .inbox-item .highlight-text {
        color: {{ $setTheme->text_color }};
    }

    .inbox-item.new .highlight-text {
        color: {{ $setTheme->primary_color }};
    }

    .inbox-item.with-poster {
        padding-left: 100px;
        position: relative;
    }

    .inbox-item.with-avatar {
        padding-left: 80px;
        position: relative;
    }

    .inbox-item .manga-poster {
        width: 80px;
        padding-bottom: 0;
        height: auto;
        top: 0;
        bottom: 0;
        position: absolute;
        left: 0;
    }

    .inbox-item .user-avatar {
        width: 50px;
        padding-bottom: 50px;
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
    }

    .inbox-item .ii-title {
        font-weight: 500;
        font-size: 16px;
        line-height: 1.4em;
        margin-bottom: 5px;
    }

    .inbox-item .ii-content {
        margin-bottom: 0;
        font-size: 13px;
        line-height: 1.4em;
    }

    .inbox-item.new {
        opacity: 1;
    }

    .inbox-tabs {
        overflow: hidden;
        margin-bottom: 1rem;
    }

    .remove-fav {
        position: absolute;
        z-index: 9;
        top: 5px;
        right: 5px;
        font-size: 14px;
        width: 26px;
        height: 26px;
        line-height: 26px;
        text-align: center;
        display: inline-block;
        border-radius: 50%;
        background: #ff5c4d;
        color: {{ $setTheme->text_color }};
    }

    .loading-box {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #111;
    }

    .cbox-list .loading-relative .loading .span2,
    .cbox-list .loading-relative .loading .span3 {
        display: none;
    }

    .cfc-item {
        padding: 15px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .cfc-item .ni-head {
        font-weight: 500;
        display: block;
        margin-bottom: 10px;
    }

    .cfc-item.cfc-button {
        border: none;
    }

    .show-more {
        color: #aaa;
    }

    .actor-page-wrap {
        max-width: 1200px;
        margin: 60px auto;
        position: relative;
        padding-left: 240px;
        padding-bottom: 30px;
        z-index: 4;
    }

    .actor-page-wrap .prebreadcrumb {
        font-size: 12px;
    }

    .actor-page-wrap .avatar {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        left: 0;
    }

    .actor-page-wrap .avatar img {
        width: 100%;
        height: 100%;
        position: absolute;
        object-fit: cover;
    }

    .actor-page-wrap .apw-detail {
        margin-bottom: 30px;
    }

    .actor-page-wrap .apw-detail .name {
        font-size: 30px;
        line-height: 1.1em;
        margin-bottom: 10px;
    }

    .actor-page-wrap .apw-detail .sub-name {
        font-size: 14px;
        margin-bottom: 20px;
    }

    .actor-page-wrap .apw-detail .bio {
        line-height: 1.5em;
        font-size: 13px;
        margin-bottom: 20px;
    }

    .actor-page-wrap .apw-detail .c-info {
        margin-bottom: 40px;
        padding-bottom: 30px;
        border-bottom: 2px solid #eee;
        font-size: 13px;
    }

    .actor-page-wrap .apw-detail .c-info .block {
        margin-bottom: 5px;
        display: inline-block;
        width: 300px;
    }

    .actor-page-wrap .apw-detail .c-info .title {
        font-weight: 500;
    }

    .sub-box {
        display: block;
        margin-bottom: 30px;
    }

    .sub-box .sub-box-head {
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .sub-box.sub-box-actor .sub-box-list {
        margin: 0 -0.5%;
    }

    .sub-box .sub-box-list .per-info {
        margin: 0 0.5% 5px;
        height: 60px;
        width: 49%;
        float: left;
        background: {{ $setTheme->secondary_base_color }};
    }

    .sub-box.sub-box-film .cbox.cbox-list {
        background: {{ $setTheme->secondary_base_color }};
    }

    .page-actor {
        position: relative;
    }

    .actor-cover {
        position: absolute;
        top: -112px;
        left: 0;
        right: 0;
        height: 90%;
    }

    .actor-cover:before {
        content: "";
        z-index: 2;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background: #1e212b;
        background: -moz-linear-gradient(0deg, #1e212b 0, rgba(30, 33, 43, 0) 100%);
        background: -webkit-linear-gradient(0deg,
                #1e212b 0,
                rgba(30, 33, 43, 0) 100%);
        background: linear-gradient(0deg, #1e212b 0, rgba(30, 33, 43, 0) 100%);
    }

    .server-notice {
        text-align: center;
        display: block;
        margin-bottom: 15px;
        padding: 15px;
        opacity: 0.8;
    }

    .stx-center {
        padding: 60px 30px;
        text-align: center;
        background: {{ $setTheme->secondary_base_color }};
        border-radius: 20px;
        margin: 0 0 50px;
    }

    .stx-center .stx-title {
        margin: 0;
        color: {{ $setTheme->primary_color }};
    }

    .stx-center .description {
        margin: 20px auto 0;
        font-size: 1.1em;
        line-height: 1.4em;
        max-width: 600px;
    }

    .zr-news.zr-news-grid {
        margin: 0 -1%;
    }

    .zr-news.zr-news-grid .item {
        width: 23%;
        margin: 0 1% 30px;
        float: left;
    }

    .zr-news.zr-news-grid .item .zr-news-infor {
        min-height: 140px;
        background: #2a2e3c;
        padding: 15px;
        margin-top: -4px;
    }

    .zr-news.zr-news-grid .item .zr-news-thumb {
        margin-bottom: 0;
    }

    .zr-news .item .zr-news-thumb {
        width: 100%;
        padding-bottom: 56%;
        position: relative;
        overflow: hidden;
        display: inline-block;
        margin-bottom: 10px;
    }

    .zr-news .item .zr-news-thumb img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .zr-news .item .zrn-title .news-title {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.4em;
        margin: 0 0 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .zr-news .item .description {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-size: 13px;
        color: #666;
    }

    .zr-news.zr-news-list .item {
        margin-bottom: 20px;
        position: relative;
        padding-left: 350px;
        min-height: 260px;
    }

    .zr-news.zr-news-list .item:last-of-type {
        border-bottom: none;
    }

    .zr-news.zr-news-list .item .news-title {
        font-size: 24px;
        margin-bottom: 15px;
        -webkit-line-clamp: 3;
    }

    .zr-news.zr-news-list .item .zr-news-thumb {
        position: absolute;
        top: 0;
        left: 0;
        width: 320px;
        padding-bottom: 220px;
    }

    .zr-news.zr-news-list .item .description {
        -webkit-line-clamp: 3;
        font-size: 16px;
        line-height: 1.5em;
        margin-bottom: 25px;
    }

    .zr-news.zr-news-list .item.item-more {
        min-height: auto;
        padding: 0;
        margin: 0;
    }

    .zr-news.zr-news-list .item.item-more .btn-sm {
        padding: 10px 10px;
        background: #5c5d63;
        color: {{ $setTheme->text_color }};
    }

    .time-posted {
        font-size: 0.9em;
    }

    .news-article {
        font-size: 16px;
        line-height: 1.5em;
        margin-bottom: 80px;
    }

    .news-article .img-in-post {
        max-width: 100%;
        margin: 0 auto 20px;
    }

    .news-article .time-posted {
        margin-bottom: 20px;
    }

    .news-article .news-title {
        font-size: 2.4em;
        font-weight: 600;
        margin-bottom: 15px;
        color: {{ $setTheme->primary_color }};
    }

    .news-article .description {
        margin-bottom: 15px;
    }

    .news-article .medium-size {
        font-weight: 600;
        font-size: 22px;
        margin-bottom: 20px;
    }

    .block_area_sidebar .zr-news.zr-news-list .item {
        padding-left: 140px;
        margin-bottom: 20px;
        min-height: 80px;
    }

    .block_area_sidebar .zr-news.zr-news-list .item:last-of-type {
        border-bottom: none;
    }

    .block_area_sidebar .zr-news.zr-news-list .item .zr-news-thumb {
        width: 120px;
        padding-bottom: 80px;
        margin-bottom: 0;
        position: absolute !important;
        left: 0 !important;
        top: 0 !important;
    }

    .block_area_sidebar .zr-news.zr-news-list .item .news-title {
        font-size: 15px;
        line-height: 1.4em;
        -webkit-line-clamp: 2;
        margin-bottom: 5px;
    }

    .block_area_sidebar .zr-news.zr-news-list .item .description {
        font-size: 13px;
        -webkit-line-clamp: 2;
        margin-bottom: 10px;
        display: none;
    }

    .premodal.premodal-characters .modal-dialog {
        max-width: 860px;
    }

    .premodal-characters .character-list {
        margin: -5px;
        overflow: hidden;
    }

    .premodal-characters .character-list .cl-item {
        float: left;
        width: calc(33.33% - 10px);
        margin: 10px 5px;
        display: block;
    }

    .premodal-characters .character-list .cl-item .cli-info {
        left: 55px;
        top: 0;
    }

    .dt-rate {
        max-width: 300px;
        width: 100%;
    }

    .dt-rate .block-rating {
        margin-top: 0;
    }

    .block-rating {
        margin: 30px 0 0;
        width: 100%;
        background: {{ $setTheme->primary_color }};
        border-radius: 10px;
        overflow: hidden;
        color: {{ $setTheme->text_color }};
    }

    .block-rating .rating-result {
        position: relative;
        padding: 15px;
    }

    .block-rating .rating-result .rr-title {
        font-weight: 600;
        font-size: 14px;
    }

    .block-rating .rating-result .progress {
        height: 5px;
        background: rgba(255, 255, 255, 0.2);
        margin-top: 10px;
    }

    .block-rating .rating-result .progress .progress-bar {
        background-color: #cae962 !important;
    }

    .block-rating .rating-result .rr-mark strong {
        font-size: 16px;
        font-weight: 600;
        margin-right: 5px;
    }

    .block-rating .rating-result .rr-mark i {
        transform: scale(0.8);
    }

    .block-rating .description {
        margin: 0 0 15px;
        padding: 0;
        text-align: center !important;
        font-size: 13px;
    }

    .block-rating .button-rate {
        margin: 0;
        overflow: hidden;
        opacity: 1;
    }

    .block-rating .button-rate button {
        width: 50%;
        margin: 0;
        float: left;
        display: block;
        background: {{ $setTheme->text_color }};
        border-radius: 0;
        opacity: 0.88;
        padding: 0.5rem;
    }

    .block-rating .button-rate button.rate-good {
        opacity: 0.98;
    }

    .block-rating .button-rate button.rate-normal {
        opacity: 0.93;
    }

    .block-rating .button-rate button span {
        font-size: 14px;
        font-weight: 500;
    }

    .block-rating .button-rate button:hover {
        opacity: 1;
    }

    .block-rating.rated .button-rate button {
        opacity: 0.5;
        filter: grayscale(1);
    }

    .block-rating.rated .button-rate button.emo-rated {
        opacity: 1 !important;
        filter: none;
    }

    .block-rating .button-rate button {
        width: 33.33%;
        color: #111 !important;
        font-size: 20px;
        box-shadow: none !important;
    }

    .block-rating .button-rate button span {
        display: block;
        margin: 2px 0 0 !important;
        font-size: 12px;
    }

    @media screen and (min-width: 1300px) {
        .anis-content .anisc-info {
            padding-bottom: 140px;
        }
    }

    @media screen and (min-width: 760px) {
        .anisc-info .block-rating {
            background: 0 0;
            border-left: 2px solid {{ $setTheme->secondary_color }};
            padding: 5px 0 5px 20px;
        }

        .anisc-info .block-rating .rating-result .rr-title {
            display: none;
        }

        .anisc-info .block-rating .rating-result {
            padding: 0 0 2px;
        }

        .anisc-info .block-rating .rating-result .rr-mark strong {
            font-size: 14px;
        }

        .anisc-info .block-rating .description {
            font-size: 11px;
            margin-bottom: 5px;
            text-align: left !important;
            padding: 0;
        }

        .anisc-info .block-rating .button-rate {
            padding: 5px 0 0;
        }

        .anisc-info .block-rating .button-rate button {
            width: calc(33.33% - 10px);
            margin: 0 10px 0 0;
            font-size: 16px;
            border-radius: 12px;
        }

        .anisc-info .block-rating .button-rate button span {
            margin: 0 !important;
            font-size: 11px;
        }
    }

    .manga_list-continue .mlc-wrap,
    .manga_list-sbs .mls-wrap {
        margin: 0 -7px;
    }

    .manga_list-continue .mlc-wrap .item,
    .manga_list-sbs .mls-wrap .item {
        float: left;
        width: calc(50% - 14px);
        padding: 0;
        margin: 0 7px 40px;
        position: relative;
    }

    .manga_list-sbs .mls-wrap .item .manga-poster {
        width: 140px;
        position: absolute;
        top: 0;
        left: 0;
        height: auto;
        padding-bottom: 200px;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail {
        width: calc(100% - 160px);
        float: right;
        position: relative;
        min-height: 200px;
        padding-right: 10px;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .manga-name {
        font-size: 20px;
        line-height: 1.4em;
        margin: 0 0 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .manga_list-sbs .mls-wrap .item.item-spc .manga-detail .manga-name {
        -webkit-line-clamp: 1;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-infor {
        margin-bottom: 15px;
        display: block;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-list {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-right: 10px;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item {
        display: block;
        padding: 10px 0;
        border-bottom: 1px dashed {{ $setTheme->text_color }};
        font-size: 0.9em;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item:last-of-type {
        border-bottom: none;
        padding-bottom: 0;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .chapter {
        float: left;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .chapter a {
        max-width: 180px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block;
        color: {{ $setTheme->secondary_color }};
        font-weight: 500;
    }

    .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .release-time {
        float: right;
    }

    .manga_list-sbs .mls-wrap .item .description {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-weight: 400;
        font-size: 13px;
    }

    .manga_list-sbs .mls-wrap .item .fdi-cate {
        font-size: 13px;
        color: #7f7e99;
    }

    .manga_list-sbs.one-item .mls-wrap .item {
        width: calc(100% - 14px);
    }

    .manga_list-sbs.one-item.ranking-list .mls-wrap .item {
        padding-right: 130px;
    }

    .manga_list-sbs.one-item .mls-wrap .item .fdi-view {
        font-size: 13px;
    }

    .manga_list-sbs.one-item .mls-wrap .item .description {
        -webkit-line-clamp: 2;
    }

    .manga_list-continue .mlc-wrap .item {
        margin-bottom: 14px;
    }

    .page-ranking .manga_list-sbs.one-item .mls-wrap .item .description {
        -webkit-line-clamp: 3;
    }

    .mr-ranking {
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        right: 0;
        background: #d4c4e8;
    }

    .mr-ranking span {
        font-size: 3em;
        color: {{ $setTheme->primary_color }};
        font-weight: 600;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .block_area_fav .item .dr-fav {
        width: 30px;
        text-align: center;
        font-size: 14px;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 9;
    }

    .block_area_fav .item .dr-fav .btn {
        border: none !important;
        background: 0 0 !important;
    }

    .dr-fav .dropdown-menu-model {
        transform: none !important;
        top: 100% !important;
        right: 0 !important;
        left: auto !important;
    }

    .dr-fav .dropdown-menu-model .dropdown-item {
        font-size: 13px;
        padding: 6px 12px;
        font-weight: 500;
        line-height: 1.8;
    }

    .preform-center {
        max-width: 580px;
        margin: 0 auto 30px;
        padding-left: 200px;
        position: relative;
    }

    .block_area_fav .manga_list-sbs .mls-wrap .item .manga-detail .manga-name {
        margin-right: 30px;
    }

    .cbox.cbox-list.cbox-realtime {
        background: 0 0;
    }

    .cbox.cbox-list.cbox-realtime .cbox-content {
        padding: 0;
    }

    .category_block.category_block-home {
        background: {{ $setTheme->primary_base_color }};
        margin-bottom: 20px;
    }

    .category_block {
        margin-bottom: 30px;
    }

    .category_block .c_b-wrap {
        position: relative;
        padding: 0;
    }

    .category_block .c_b-list .item {
        float: left;
        margin: 0 5px 5px 0;
    }

    .category_block .c_b-list .item a {
        padding: 0 10px;
        min-width: 40px;
        text-align: center;
        line-height: 30px;
        border-radius: 6px;
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
        font-weight: 400;
        font-size: 13px;
        display: inline-block;
    }

    .category_block .c_b-list .item.item-focus a {
        color: #111 !important;
    }

    .category_block .c_b-list .item a span {
        color: #111 !important;
    }

    .category_block .c_b-list .item.active a {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .category_block .c_b-list .item a i {
        font-style: normal;
    }

    .category_block .c_b-list .item a span {
        font-size: 12px;
        color: #7f7e99;
        margin-left: 5px;
        display: none;
    }

    .category_block .c_b-list .item:nth-of-type(n + 22) {
        display: none;
    }

    .category_block .c_b-list.active .item {
        display: inline-block !important;
    }

    .category_block .c_b-list.active .item.item-more {
        display: none !important;
    }

    .category_block .c_b-list .item.item-more {
        display: inline-block !important;
    }

    .category_block .c_b-list .item.item-more a {
        background: {{ $setTheme->text_color }};
        border-color: transparent;
        color: {{ $setTheme->text_color }};
        cursor: pointer;
    }

    .category_block .cbl-more {
        position: absolute;
        bottom: 0;
        text-align: center;
        left: 0;
        right: 0;
    }

    .category_block .cbl-more .cbl-more-toggle {
        line-height: 40px;
        display: block;
        color: {{ $setTheme->text_color }};
    }

    .focus-01 a {
        background: #d0e6a5 !important;
        color: {{ $setTheme->text_color }};
    }

    .focus-02 a {
        background: #ffdd95 !important;
        color: {{ $setTheme->text_color }};
    }

    .focus-03 a {
        background: #fc887b !important;
        color: {{ $setTheme->text_color }};
    }

    .focus-04 a {
        background: #ccabda !important;
        color: {{ $setTheme->text_color }};
    }

    .focus-05 a {
        background: #abccd8 !important;
        color: {{ $setTheme->text_color }};
    }

    .focus-06 a {
        background: #fdbcb0 !important;
        color: {{ $setTheme->text_color }};
    }

    .hr-chapter {
        float: left;
        position: relative;
        background: rgba(255, 255, 255, 0.1);
        width: 360px;
        height: 70px;
        margin-left: 20px;
        padding-left: 20px;
        border-left: 1px solid rgba(255, 255, 255, 0.1);
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hr-chapter .hrc-block {
        position: absolute;
        cursor: pointer;
        top: 50%;
        left: 20px;
        right: 0;
        padding-right: 40px;
        transform: translateY(-50%);
        display: inline-block;
    }

    .hr-chapter .hrc-block .manga-name {
        font-size: 16px;
        font-weight: 600;
        color: {{ $setTheme->text_color }};
        margin: 0 0 3px;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .hr-chapter .hrc-block .manga-chapter {
        font-size: 14px;
        color: {{ $setTheme->text_color }};
        font-weight: 500;
    }

    .hr-chapter .hrc-block .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        width: 60px;
        text-align: center;
    }

    .hr-chapter .hrc-block .arrow i {
        font-size: 20px;
        color: {{ $setTheme->text_color }};
    }

    .hr-comment {
        float: left;
    }

    .hr-fav {
        float: left;
    }

    .hr-info,
    .hr-setting {
        float: left;
    }

    .hr-right .hrr-btn .hrr-name {
        display: none;
    }

    .hrr-btn {
        height: 40px;
        width: 40px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 6px;
        margin: 15px 0;
        padding: 0;
        line-height: 40px;
        color: {{ $setTheme->text_color }} !important;
    }

    .hrr-btn.active i {
        color: {{ $setTheme->button_color }};
    }

    .hr-navigation .dropdown-menu-model,
    .mr-tools .dropdown-menu-model {
        max-height: 320px;
        overflow: auto;
        background: {{ $setTheme->text_color }};
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2);
    }

    .hr-navigation .dropdown-menu-model .dropdown-item,
    .mr-tools .dropdown-menu-model .dropdown-item {
        line-height: 1.4em;
        font-size: 14px;
    }

    .mr-tools .dropdown-menu-model .dropdown-item {
        font-size: 12px;
        cursor: pointer;
    }

    .mr-tools .btn-chapter {
        text-align: left;
    }

    .mr-tools .btn-chapter i.fas {
        float: right;
        margin-top: 2px;
    }

    .hr-navigation .dropdown-menu-fixed {
        position: absolute !important;
        margin: 0;
        top: 100% !important;
        bottom: auto !important;
        left: 0 !important;
        height: calc(100vh - 200px) !important;
        max-height: 495px;
        background: {{ $setTheme->secondary_base_color }};
        transform: none !important;
        box-shadow: 0 40px 40px rgba(0, 0, 0, 0.4);
        border-radius: 0;
        min-width: auto;
        width: 100%;
        z-index: 9999;
    }

    .chapter-list-read .chapter-section {
        border-top: none;
        background: {{ $setTheme->secondary_base_color }};
    }

    .chapter-list-read .chapter-section .chapter-s-search {
        width: 100%;
        float: none;
    }

    .chapter-list-read .chapters-list-ul {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 52px;
        max-height: none;
        background: {{ $setTheme->secondary_base_color }};
    }

    .chapter-list-read .chapters-list-ul ul {
        max-height: 100%;
        padding: 2px;
    }

    .chapter-list-read .chapters-list-ul ul .item {
        float: left;
        margin: 2px;
        width: calc(25% - 4px);
    }

    .chapter-list-read .chapters-list-ul ul .item .item-time {
        display: none;
    }

    .chapter-list-read .chapters-list-ul ul .item .arrow {
        display: none;
    }

    .chapter-list-read .chapters-list-ul ul .item a {
        padding: 3px 15px;
        font-size: 12px;
    }

    .chapter-list-read .chapters-list-ul ul .item a .name {
        font-size: 12px;
    }

    .chapter-list-read .chapter-section {
        margin-bottom: 0;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
        position: relative;
        z-index: 9;
    }

    .dropdown-menu-model.dmm-chapters {
        min-width: 360px;
        max-height: 400px;
        overflow: auto;
        border-radius: 0;
        background: {{ $setTheme->text_color }};
    }

    .dropdown-menu-model.dmm-chapters .dropdown-item {
        color: {{ $setTheme->text_color }};
        padding: 12px 20px;
    }

    .dropdown-menu-model.dmm-chapters .dropdown-item:hover {
        background: {{ $setTheme->secondary_base_color }};
    }

    .dropdown-menu-model.dmm-chapters .dropdown-item.active {
        color: {{ $setTheme->text_color }};
        background: #576291 !important;
    }

    .mr-tools .container {
        position: relative;
    }

    .read_tool {
        padding: 10px 15px;
        border-radius: 0 0 10px 10px;
        position: relative;
        background: #777;
        display: none;
    }

    .mr-tools.mrt-bottom .read_tool {
        padding: 15px;
        border-radius: 10px;
        position: relative;
        background: #222;
        display: block !important;
    }

    .read_tool.active {
        display: block;
    }

    .read_tool .rt-item {
        position: relative;
        float: left;
    }

    .read_tool .float-left .rt-item {
        margin-right: 15px;
    }

    .read_tool .float-right .rt-item {
        margin-left: 15px;
    }

    .read_tool .rt-item .btn {
        box-shadow: none;
        color: {{ $setTheme->text_color }};
        background: 0 0;
        font-size: 12px;
    }

    .read_tool .rt-item .btn span {
        color: {{ $setTheme->button_color }};
        font-weight: 500;
    }

    .read_tool .rt-item .btn.btn-navi {
        background: #3c4259;
        border-color: #576291;
    }

    .mr-tools.mrt-bottom .read_tool .rt-item .btn {
        background: #444 !important;
        font-weight: 500;
        border: none !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .page-read .container {
        max-width: 1400px;
    }

    .page-read.page-read-hoz .container {
        padding: 0;
        position: absolute;
        top: 80px;
        bottom: 0;
        left: 0;
        right: 0;
        max-width: none;
    }

    .container-reader-chapter {
        text-align: center;
        transform-origin: top;
    }

    .container-reader-chapter .iv-card {
        display: block;
        width: auto;
        margin: 0 auto 20px;
        min-height: 200px;
        text-align: center;
        position: relative;
    }

    .container-reader-chapter.no-margin .iv-card {
        margin: 0 auto;
        line-height: 1;
        font-size: 0;
    }

    .container-reader-chapter.no-margin {
        padding-bottom: 30px;
    }

    .container-reader-chapter.zoom-100 {
        transform: scale(1);
    }

    .container-reader-chapter.zoom-75 {
        transform: scale(0.75);
    }

    .container-reader-chapter.zoom-50 {
        transform: scale(0.5);
    }

    .container-reader-chapter.zoom-25 {
        transform: scale(0.25);
    }

    .container-reader-chapter .image-vertical {
        display: inline-block;
        max-width: 100%;
        height: auto;
        position: relative;
        z-index: 2;
    }

    .card-loading .c-l-area {
        position: absolute;
        text-align: center;
        z-index: 1;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        width: 100%;
        max-width: 400px;
        padding: 2rem;
        color: {{ $setTheme->text_color }};
    }

    .paper-loading {
        width: 60px;
        height: 60px;
        background-color: #3a3a3a;
        margin: 15px auto;
        position: relative;
        overflow: hidden;
        border-radius: 10px 0 10px 0;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .paper-loading::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        animation: paper-loading 1s infinite;
        background: #6a6a6a;
        background: linear-gradient(270deg, #6a6a6a 0, #5a5a5a 73%);
        z-index: 3;
        transform-origin: left center;
    }

    .paper-loading::after {
        content: "M";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        font-size: 24px;
        font-weight: 700;
        color: #8a8a8a;
        background: #5a5a5a;
        line-height: 60px;
        text-align: center;
        width: 100%;
        opacity: 0;
        animation: m-loading 1s infinite;
    }

    @keyframes paper-loading {
        0% {
            transform: scale(1, 1);
        }

        100% {
            transform: scale(0.001, 1);
        }
    }

    @keyframes m-loading {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    #header.header-reader {
        margin-bottom: 0;
        background: {{ $setTheme->secondary_base_color }} !important;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 103;
    }

    .hr-line {
        float: left;
        width: 1px;
        height: 40px;
        margin: 15px 30px;
        background: rgba(255, 255, 255, 0.1);
    }

    .hr-manga {
        float: left;
        height: 70px;
        width: 200px;
        position: relative;
    }

    .hr-manga .manga-name {
        font-size: 14px;
        color: {{ $setTheme->text_color }};
        line-height: 1.3em;
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .hr-navigation {
        float: left;
        margin: 20px 0;
        margin-left: 20px;
    }

    .hr-navigation .rt-item {
        float: left;
        height: 30px;
        line-height: 30px;
        position: relative;
        margin-right: 10px;
    }

    .hr-navigation .rt-item.rt-chap {
        position: unset;
    }

    .hr-navigation .rt-item .btn {
        color: {{ $setTheme->text_color }};
        border: none !important;
        height: 30px;
        background: {{ $setTheme->tertiary_base_color }};
        box-shadow: none !important;
        font-size: 13px;
        font-weight: 500;
        padding: 0 10px;
        line-height: 30px;
    }

    .hr-navigation .rt-item.show .btn {
        background: {{ $setTheme->button_color }} !important;
        color: #111 !important;
    }

    .read-setting {
        position: absolute;
        cursor: pointer;
        font-size: 13px;
        padding: 0 10px;
        line-height: 28px;
        font-weight: 500;
        background: #464e74;
        color: {{ $setTheme->text_color }};
        bottom: -28px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 0 0 10px 10px;
        z-index: 2;
    }

    /* body.page-reader {
        background: #111 !important;
    } */

    body.page-reader #logo {
        margin-left: 0 !important;
    }

    body.light-mode {
        color: {{ $setTheme->text_color }};
        background: #f7f7f7;
    }

    body.light-mode a {
        color: {{ $setTheme->text_color }};
    }

    body.light-mode #manga-featured,
    body.light-mode #text-home {
        background-color: {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
    }

    body.light-mode .featured-block .featured-block-header {
        color: {{ $setTheme->text_color }};
    }

    .container-reader-chapter {
        padding-top: 100px;
    }

    .read-tips .read-tips-follow {
        position: fixed;
        top: -120px;
        left: 50%;
        z-index: 100;
        transform: translateX(-50%);
        width: 280px;
        animation-name: tips-follow;
        animation-delay: 1s;
        animation-duration: 3s;
        -webkit-animation-duration: 3s;
        -o-animation-duration: 3s;
        opacity: 0;
    }

    .read-tips .rtf-content {
        background: {{ $setTheme->text_color }};
        box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        padding: 15px;
        font-size: 14px;
        font-weight: 400;
        position: relative;
        text-align: center;
    }

    .read-tips .read-tips-follow .notice {
        margin-top: 15px;
        padding: 12px;
        border-radius: 10px;
        background: {{ $setTheme->secondary_base_color }};
        font-size: 13px;
        text-align: left;
    }

    .read-tips .read-tips-follow .notice .highlight-text {
        color: #451184;
        font-weight: 700;
    }

    .read-tips .read-tips-follow .rtf-content .arrow {
        margin-bottom: 5px;
    }

    .rtf-content .arrow i {
        font-size: 30px;
        color: #451184;
    }

    .rtf-content .arrow i:nth-of-type(2) {
        opacity: 0.8;
    }

    .rtf-content .arrow i:nth-of-type(3) {
        opacity: 0.6;
    }

    .rtf-content .arrow i:nth-of-type(4) {
        opacity: 0.4;
    }

    .rtf-content.rtl .arrow {
        transform: rotate(180deg);
    }

    .read-tips-keyboard {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        width: 300px;
        animation-name: tips-keyboard;
        animation-duration: 10s;
        -webkit-animation-duration: 10s;
        -o-animation-duration: 10s;
        opacity: 0.15;
    }

    .read-tips-keyboard:hover {
        opacity: 1 !important;
        height: auto !important;
    }

    .read-tips-keyboard .rtk-content {
        color: {{ $setTheme->text_color }};
        padding: 5px;
    }

    .rtk-content .title {
        font-weight: 500;
        margin: 10px 10px 15px;
        font-size: 20px;
        line-height: 1.3em;
    }

    .ad-toggle,
    .read-tips-keyboard .kb-icon {
        background: {{ $setTheme->text_color }};
        cursor: pointer;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
        width: 32px;
        height: 32px;
        font-size: 0;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        position: absolute;
        top: -45px;
        left: 0;
        display: none;
    }

    .read-tips-keyboard .kb-icon i {
        font-size: 16px;
        color: {{ $setTheme->text_color }};
        line-height: 32px;
    }

    .rtk-content .item {
        font-size: 11px;
        display: block;
        margin: 10px;
        float: left;
        width: calc(50% - 20px);
    }

    .rtk-content .item span {
        width: 26px;
        height: 26px;
        line-height: 24px;
        font-weight: 500;
        display: inline-block;
        margin-right: 10px;
        border-radius: 5px;
        background: {{ $setTheme->text_color }};
        border-bottom: 2px solid #eee;
        color: {{ $setTheme->text_color }};
        text-align: center;
    }

    .rtk-content .item-hide {
        margin: 10px;
        cursor: pointer;
        color: #ccc;
        color: #ccc;
    }

    .rtk-hide .kb-icon {
        display: inline-block;
    }

    .rtk-hide .rtk-content {
        display: none;
    }

    .read-tips-layout {
        position: fixed;
        bottom: auto;
        left: calc(50%);
        top: 50%;
        transform: translate(-50%, -50%);
        background: {{ $setTheme->text_color }};
        border-radius: 10px;
        box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.1);
        max-width: 360px;
        width: 92%;
        padding: 25px;
        z-index: 8;
    }

    .read-tips-layout .rtl-head {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .read-tips-layout .rtl-row {
        margin-top: 5px;
        display: inline-block;
        cursor: pointer;
        width: 100%;
        padding: 10px;
        background: {{ $setTheme->secondary_base_color }};
        border-radius: 5px;
    }

    .read-tips-layout .rtl-row:hover {
        background: #a770ec;
    }

    .read-tips-layout .rtl-row:hover .label-row {
        color: {{ $setTheme->text_color }} !important;
    }

    .read-tips-layout .rtl-row .checked {
        float: right;
        line-height: 32px;
        font-size: 16px;
        color: {{ $setTheme->text_color }};
        opacity: 0;
    }

    .read-tips-layout .rtl-row:hover .checked {
        opacity: 1;
    }

    .read-tips-layout .description {
        margin-bottom: 20px;
        font-size: 13px;
    }

    .read-tips-layout .rtl-btn {
        width: 32px;
        height: 32px;
        cursor: pointer;
        border-radius: 6px;
        overflow: hidden;
        background: #666;
        position: relative;
        display: block;
        float: left;
        margin-right: 15px;
    }

    .read-tips-layout .label-row {
        font-size: 14px;
        font-weight: 500;
        line-height: 32px;
        float: left;
        color: #111 !important;
    }

    .read-tips-layout .rtl-btn:after,
    .read-tips-layout .rtl-btn:before {
        content: "";
        background: #666;
        position: absolute;
        opacity: 1;
        z-index: 3;
    }

    .read-tips-layout .rtl-btn span {
        display: block;
        background: {{ $setTheme->text_color }};
        border-radius: 3px;
        width: 12px;
        height: 16px;
        float: left;
    }

    .read-tips-layout .rtl-btn.rtl-ver:before {
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
    }

    .read-tips-layout .rtl-btn.rtl-ver:after {
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
    }

    .read-tips-layout .rtl-btn.rtl-hoz:before {
        top: 0;
        left: 0;
        bottom: 0;
        width: 6px;
    }

    .read-tips-layout .rtl-btn.rtl-hoz:after {
        bottom: 0;
        top: 0;
        right: 0;
        width: 6px;
    }

    .read-tips-layout .rtl-btn.rtl-ver span {
        margin: 2px 0;
    }

    .read-tips-layout .rtl-btn.rtl-ver .rtl-container {
        width: 12px;
        left: 10px;
        position: absolute;
        top: -14px;
        height: 100px;
    }

    .read-tips-layout .rtl-btn.rtl-ver .rtl-container {
        animation: rtl-ver-show 3s infinite;
    }

    .read-tips-layout .rtl-btn.rtl-hoz .rtl-container {
        height: 16px;
        left: -8px;
        position: absolute;
        top: 8px;
        width: 96px;
    }

    .read-tips-layout .rtl-btn.rtl-hoz .rtl-container {
        animation: rtl-hoz-show 3s infinite;
    }

    .read-tips-layout .rtl-btn.rtl-hoz span {
        margin: 0 2px;
    }

    .read-tips-layout .rtl-btn.active {
        background: #43599b;
    }

    .read-tips-layout .rtl-btn.active:after,
    .read-tips-layout .rtl-btn.active:before {
        background: #43599b;
    }

    .page-read-setting {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        background: #111;
    }

    .page-read-setting .anis-cover {
        opacity: 0.2;
    }

    @keyframes rtl-ver-show {
        0% {
            top: -14px;
        }

        100% {
            top: -94px;
        }
    }

    @keyframes rtl-hoz-show {
        0% {
            left: -8px;
        }

        100% {
            left: -72px;
        }
    }

    .mr-tools.mrt-bottom .container {
        max-width: 1000px;
    }

    .container-reader-hoz {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding-bottom: 60px;
        background: #111;
    }

    .container-reader-hoz #divslide {
        height: 100%;
        padding: 0;
    }

    .container-reader-hoz #divslide .divslide-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 60px;
        opacity: 0;
        animation: dswrap-show 0.5s forwards;
        animation-delay: 0.5s;
    }

    @keyframes dswrap-show {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .container-reader-hoz .ds-image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #111;
    }

    .container-reader-hoz .ds-image .image-horizontal {
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        object-fit: contain;
        z-index: 2;
    }

    .container-reader-hoz .ds-item .ds-image.dsi-b {
        display: none;
    }

    .nabu-fill {
        display: none;
    }

    .ds-image .sc-btn {
        width: 30%;
        padding: 25px 30px;
        border-right: 3px solid gold;
        border-radius: 0;
        text-align: right;
        position: absolute;
        right: 0;
        bottom: 50%;
        transform: translateY(50%);
        z-index: 106;
    }

    @media screen and (min-width: 760px) {
        .ds-image .sc-btn.rtl {
            border-right: none;
            border-left: 3px solid gold;
            text-align: left;
            right: auto;
            left: 0;
        }
    }

    .ds-image .sc-btn .block {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 20px;
        color: {{ $setTheme->text_color }};
    }

    .ds-image .sc-btn .block .name-chapt {
        font-size: 14px;
        font-weight: 400;
        opacity: 0.5;
        margin-top: 5px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .photo-navigation .photo-button.photo-button-next.swiper-button-disabled {
        display: none;
    }

    @keyframes tips-follow {
        0% {
            opacity: 0;
            filter: blur(10px);
            top: 120px;
        }

        5% {
            opacity: 1;
            filter: blur(0px);
            top: 150px;
        }

        95% {
            opacity: 1;
            filter: blur(0px);
            top: 150px;
        }

        100% {
            opacity: 0;
            filter: blur(10px);
            top: -120px;
        }
    }

    @keyframes tips-keyboard {
        0% {
            opacity: 0;
            height: auto;
        }

        20% {
            opacity: 1;
            height: auto;
        }

        80% {
            opacity: 1;
            height: auto;
        }

        100% {
            opacity: 0.15;
            height: auto;
        }
    }

    .navi-setting {
        position: absolute;
        z-index: 99;
        right: 15px;
        bottom: 10px;
        color: {{ $setTheme->text_color }};
    }

    .navi-setting .btn {
        color: #666;
        box-shadow: none !important;
    }

    .navi-setting .dropdown-menu {
        transform: none !important;
        top: auto !important;
        left: auto !important;
        bottom: 105% !important;
        right: 0 !important;
    }

    .navi-buttons {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 60px;
        color: {{ $setTheme->text_color }};
        background: #1a1a1a;
        z-index: 9;
    }

    .navi-buttons .nabu-page {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .navi-buttons .nabu-page>span {
        display: inline-block;
        padding: 6px 15px;
        border-radius: 0.5rem;
        font-size: 1.1em;
        opacity: 0.4;
        font-weight: 700;
    }

    .navi-buttons .nabu {
        position: absolute;
        z-index: 99;
        left: 0;
        bottom: 0;
        width: 33.33%;
        top: 0;
        bottom: 0;
        text-align: right;
        padding: 10px 0;
        display: block;
    }

    .navi-buttons .nabu.disabled {
        opacity: 0.2;
    }

    .navi-buttons .nabu.nabu-right {
        left: auto;
        right: 0;
        text-align: left;
    }

    .navi-buttons .navi-button {
        height: 40px;
        line-height: 40px;
        outline: 0 !important;
        box-shadow: none !important;
        overflow: hidden;
        display: inline-block;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        color: {{ $setTheme->text_color }};
    }

    .navi-buttons .navi-button.navi-button-next.swiper-button-disabled {
        display: none;
    }

    .navi-buttons .navi-button i {
        line-height: 40px;
        color: {{ $setTheme->button_color }};
    }

    .navi-buttons .navi-button.navi-button-prev i {
        float: left;
        margin-right: 10px;
    }

    .navi-buttons .navi-button.navi-button-next i {
        float: right;
        margin-left: 10px;
    }

    .photo-navigation .photo-button {
        position: absolute;
        left: 0;
        width: 30%;
        top: 0;
        bottom: 60px;
        text-align: center;
        cursor: pointer;
        outline: 0 !important;
        box-shadow: none !important;
        z-index: 9;
    }

    .photo-navigation .photo-button.photo-button-next {
        left: auto;
        right: 0;
    }

    .photo-navigation .photo-button.disabled {
        display: none;
    }

    .photo-pagination {
        z-index: 11;
        position: absolute;
        width: 100%;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .photo-pagination.swiper-pagination-fraction {
        font-weight: 600;
        font-size: 18px;
        line-height: 40px;
        display: inline-block;
        width: auto;
        padding: 0 8px;
        color: #666;
        border-radius: 6px;
    }

    .photo-pagination .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        margin: 5px;
        border-radius: 50%;
        background: #ccc;
    }

    .photo-pagination .swiper-pagination-bullet-active {
        width: 30px;
        border-radius: 5px;
        background: gold;
    }

    #main-wrapper.page-read-hoz {
        margin-bottom: 0 !important;
        min-height: auto !important;
        position: relative;
        height: 100vh;
        background: #111;
        overflow: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    #main-wrapper.page-read-hoz::-webkit-scrollbar {
        display: none;
    }

    .object-cover {
        position: absolute !important;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background-size: cover;
        background-position: center center;
        filter: blur(8px);
        opacity: 0.3;
    }

    .mrt-top {
        position: absolute;
        top: 70px;
        left: 0;
        right: 0;
        z-index: 102;
    }

    .mrt-top .read_tool {
        background: #222;
    }

    #read-comment {
        margin-top: 30px;
    }

    #read-comment .block_area_rcomment {
        max-width: 940px;
        background: {{ $setTheme->text_color }};
        padding: 20px;
        border-radius: 10px;
    }

    .page-read {
        padding-bottom: 0 !important;
    }

    .page-reader .dt-rate {
        margin: 30px auto;
        max-width: 380px;
    }

    .page-reader .dt-rate .block-rating {
        position: relative;
        margin: 0;
    }

    .page-reader .dt-rate .block-rating .description {
        display: inline-block;
        width: 100%;
        color: {{ $setTheme->text_color }};
    }

    .page-reader .dt-rate .block-rating .description p {
        margin-bottom: 10px;
    }

    .page-reader .dt-rate .block-rating .manga-name {
        font-size: 18px;
        color: {{ $setTheme->text_color }};
        line-height: 1.4em;
        margin: 0 0 5px;
        padding: 0 20px;
    }

    .page-reader .dt-rate .block-rating .manga-name a {
        color: {{ $setTheme->text_color }};
    }

    .hr-comment .number {
        display: none;
    }

    .sc-dt-rate {
        position: absolute;
        top: calc(50% - 60px);
        left: 50%;
        transform: translate(-50%, -50%);
        width: 240px;
        z-index: 100;
    }

    .sc-dt-rate .block-rating {
        background: 0 0;
        margin: 0;
        color: {{ $setTheme->text_color }};
    }

    .sc-dt-rate .block-rating .rating-result {
        padding: 0;
        margin-bottom: 15px;
    }

    .sc-dt-rate .block-rating .description {
        padding: 0;
        text-align: left;
        font-size: 12px;
    }

    .sc-dt-rate .block-rating .rating-result .rr-title {
        display: none;
    }

    .sc-dt-rate .block-rating .button-rate button {
        float: none;
        display: inline-block;
        width: 100%;
        padding: 0 15px;
        border-radius: 6px;
        margin: 5px 0;
        line-height: 36px;
        font-size: 14px;
        text-align: left;
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
        opacity: 1;
        filter: none !important;
    }

    .sc-dt-rate .block-rating .button-rate button.emo-rated,
    .sc-dt-rate .block-rating .button-rate button:hover {
        background: {{ $setTheme->button_color }};
        color: {{ $setTheme->text_color }};
    }

    .sc-dt-rate .block-rating .button-rate button span {
        display: inline-block;
        margin: 0 0 0 10px !important;
        font-size: 13px;
    }

    .below-rate {
        position: absolute;
        top: calc(50% + 80px);
        left: 50%;
        transform: translateX(-50%);
        width: 240px;
    }

    .page-reader .sc-dt-rate .block-rating {
        border-radius: 0;
    }

    .mobile-show {
        display: none;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        border-radius: 0;
        background: rgba(0, 0, 0, 0.1);
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.3);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    .btn,
    .custom-select,
    .item,
    .noselect,
    .page-read>*,
    .read-setting,
    .read-tips,
    .sb-uimode {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .dropdown-menu-noti {
        width: 280px;
        background: {{ $setTheme->text_color }};
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        color: {{ $setTheme->text_color }};
        border: none;
        padding: 0;
        border-radius: 10px;
        overflow: hidden;
        transform: none !important;
        top: 100% !important;
        left: auto !important;
        right: 0 !important;
        bottom: auto !important;
    }

    .dropdown-menu-noti .nnl-head {
        padding: 12px 15px;
        background: {{ $setTheme->primary_color }};
    }

    .dropdown-menu-noti .pre-tabs-min .nav-item .nav-link {
        padding: 5px 6px;
        font-size: 12px;
        background: 0 0 !important;
        line-height: 1.5em !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .dropdown-menu-noti .pre-tabs-min .nav-item .nav-link.active {
        background: {{ $setTheme->text_color }} !important;
        color: #111 !important;
    }

    .dropdown-menu-noti .dropdown-item {
        background: 0 0 !important;
        border-bottom: 1px solid #4a4d59;
    }

    .dropdown-menu-noti .dropdown-item:hover {
        background: #eee !important;
    }

    .new-noti-list .nnl-item {
        border-bottom: 1px solid #eee;
        display: block;
        font-size: 12px;
        line-height: 1.5em;
        font-weight: 400;
        padding: 10px 15px;
        position: relative;
        opacity: 0.4;
    }

    .new-noti-list .nnl-item.new {
        opacity: 1;
    }

    .new-noti-list .nnl-item.with-poster {
        padding-left: 64px;
        min-height: 78px;
    }

    .new-noti-list .nnl-item.with-avatar {
        padding-left: 64px;
        min-height: 78px;
    }

    .new-noti-list .nnl-item .user-avatar {
        width: 36px;
        padding-bottom: 36px;
        position: absolute;
        left: 15px;
        top: 15px;
    }

    .new-noti-list .nnl-item .manga-poster {
        width: 36px;
        padding-bottom: 0;
        height: 47px;
        bottom: 0;
        position: absolute;
        left: 15px;
        top: 15px;
    }

    .new-noti-list .nnl-item:hover {
        background: #f6f6f6 !important;
        color: {{ $setTheme->primary_color }};
    }

    .new-noti-list .nnl-item strong {
        font-weight: 600;
    }

    .new-noti-list .nnl-item .time {
        display: block;
        font-size: 10px;
        margin-top: 3px;
    }

    .new-noti-list .nnl-item.nnl-more {
        opacity: 1;
        background: #f6f6f6 !important;
    }

    .menu-profiles li {
        margin-bottom: 5px;
    }

    .menu-profiles li .mp-item {
        display: block;
        padding: 12px 15px;
        border-radius: 6px;
        overflow: hidden;
        background: {{ $setTheme->secondary_base_color }};
    }

    .menu-profiles li.active .mp-item {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    #manga-trending {
        background: {{ $setTheme->primary_color }};
        overflow: hidden;
        padding: 20px 0;
        margin-bottom: 30px;
    }

    #manga-trending .cat-heading {
        color: {{ $setTheme->text_color }};
    }

    .trending-list {
        padding-right: 40px;
        padding-left: 40px;
        margin: 0 -40px 20px;
        position: relative;
        opacity: 0;
        height: 0;
        animation: trending-show 0s forwards;
        animation-delay: 0.5s;
    }

    .trending-navi>div {
        position: absolute;
        right: 0;
        top: 50%;
        z-index: 9;
        width: 40px;
        height: auto;
        top: 0;
        bottom: 0;
        text-align: center;
        cursor: pointer;
    }

    .trending-navi .navi-prev {
        left: auto;
        left: 0;
    }

    .trending-navi>div>i {
        position: absolute;
        font-size: 36px;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: #d08bff;
    }

    .trending-navi>div.navi-next>i {
        left: auto;
        right: 0;
    }

    @keyframes trending-show {
        from {
            opacity: 0;
            height: 0;
        }

        to {
            opacity: 1;
            height: auto;
        }
    }

    .trending-list .item .number {
        padding-top: 10px;
        padding-left: 40px;
        color: {{ $setTheme->text_color }};
        position: relative;
    }

    .trending-list .item .number span {
        position: absolute;
        left: 0;
        top: 12px;
        width: 30px;
        text-align: left;
        font-size: 1.5em;
        font-weight: 700;
    }

    @media screen and (min-width: 1366px) {
        .trending-list .item {
            width: 100%;
            height: auto;
            padding-bottom: 115%;
            position: relative;
            display: inline-block;
            overflow: hidden;
        }

        .trending-list .item .number {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            overflow: hidden;
            width: 40px;
            text-align: center;
            font-weight: 600;
            cursor: default;
            background: #451184;
            background: linear-gradient(0deg, rgba(69, 17, 132, 0) 0, #451184 100%);
        }

        .trending-list .item .number span {
            position: absolute;
            bottom: 0;
            top: auto;
            font-size: 30px;
            line-height: 40px;
            width: 40px;
            text-align: left;
            color: {{ $setTheme->text_color }};
            z-index: 9;
            left: 0;
            transform: rotate(-90deg);
        }

        .trending-list .item .number .anime-name {
            transform: translate(-80px, 80px) rotate(-90deg);
            padding: 10px;
            color: {{ $setTheme->text_color }};
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 200px;
            height: 40px;
            text-align: left;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .trending-list .item .manga-poster {
            display: inline-block;
            position: absolute;
            width: auto;
            left: 40px;
            right: 0;
            top: 0;
            bottom: 0;
            padding-bottom: 0;
            height: auto;
            margin-bottom: 0;
        }
    }

    .social-home-block {
        position: relative;
        padding-left: 70px;
        min-height: 45px;
        margin-top: 20px;
    }

    .social-home-block .shb-left {
        float: left;
        margin-right: 15px;
    }

    .social-home-block .shb-left strong {
        display: block;
    }

    .social-home-block .addthis_inline_share_toolbox {
        float: left;
        clear: none !important;
        padding-top: 2px;
    }

    .social-home-block .shb-icon {
        position: absolute;
        top: 0;
        left: 0;
        width: 48px;
        height: 48px;
        background-image: url("../images/share.gif");
        background-size: 110px 110px;
        background-position: center 25%;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .social-home-block .btn {
        font-weight: 400 !important;
    }

    .text-home-main {
        margin-bottom: 40px;
    }

    .featured-list {
        position: relative;
    }

    .featured-navi {
        position: absolute;
        top: -55px;
        right: 0;
        z-index: 9;
    }

    .featured-navi>div {
        width: 40px;
        height: 40px;
        cursor: pointer;
        border-radius: 50%;
        background: #f5f5f5;
        color: {{ $setTheme->text_color }};
        text-align: center;
        display: block;
        float: right;
        margin-left: 6px;
    }

    .featured-navi>div:hover {
        background: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
    }

    .featured-navi>div>i {
        line-height: 40px;
        font-size: 1.2em;
    }

    .featured-navi>div.swiper-button-disabled {
        background: #f5f5f5 !important;
        color: #111 !important;
        opacity: 0.5;
        cursor: default;
    }

    #manga-featured .block_area {
        margin-bottom: 20px;
    }

    .mg-item-basic:hover .manga-poster .mp-desc {
        opacity: 1;
        transform: scale(1);
    }

    .mg-item-basic .manga-detail {
        padding: 10px 0;
    }

    .mg-item-basic .manga-name {
        font-size: 1em;
        line-height: 1.4;
    }

    .mg-item-basic .fd-infor {
        font-size: 0.9em;
        color: #8f95aa;
    }

    .mg-item-basic .fd-infor a {
        color: {{ $setTheme->text_color }};
    }

    .mg-item-basic .fd-infor .fdi-chapter a {
        color: {{ $setTheme->primary_color }};
        font-weight: 600;
    }

    .mg-item-basic .fd-infor a:hover {
        color: {{ $setTheme->primary_color }};
    }

    .ad-toggle {
        top: auto;
        left: auto;
        bottom: 13px;
        left: 15px;
        display: none;
    }

    .ad-toggle i {
        line-height: 32px;
        color: {{ $setTheme->text_color }};
        font-size: 16px;
    }

    body.body-home #header {
        background-color: #451184;
    }

    body.body-home #header #search {
        display: none;
    }

    body.body-home #footer {
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
    }

    body.body-home #footer a {
        color: {{ $setTheme->text_color }};
    }

    body.body-home #footer .about-text,
    body.body-home #footer .copyright {
        opacity: 1 !important;
    }

    #home {
        min-height: calc(100vh - 339px);
        padding-bottom: 30px;
    }

    #home .top-home {
        background-color: #451184;
        color: {{ $setTheme->text_color }};
        padding: 80px 0 60px;
        position: relative;
        margin-bottom: 40px;
        background-image: url("../images/top-home.jpg");
        background-size: cover;
        background-position: center center;
    }

    #home .top-home:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 100px;
        background: #451184;
        background: linear-gradient(0deg, rgba(69, 17, 132, 0) 0, #451184 100%);
    }

    #home .content-home {
        line-height: 1.5;
        max-width: 1000px;
        margin: 0 auto;
    }

    #home .A1headline {
        font-size: 1.8em;
        line-height: 1.3;
        margin-bottom: 1rem;
    }

    #home .A2headline {
        font-size: 1.4em;
        line-height: 1.3;
        margin-bottom: 1rem;
    }

    .checked-list {
        margin-bottom: 2rem;
    }

    .checked-list li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .checked-list li::before {
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        position: absolute;
        left: 0;
        color: {{ $setTheme->primary_color }};
    }

    #xsearch {
        margin-bottom: 3rem;
    }

    #xsearch .search-content {
        padding-right: 70px;
        margin-bottom: 1.5rem;
    }

    #xsearch .search-content .search-icon {
        position: absolute;
        right: 0;
        top: 0;
        width: 60px;
        padding: 0;
        line-height: 80px;
        height: 60px;
        border-radius: 50%;
        font-size: 1.3em;
        text-align: center;
        line-height: 60px;
        background: {{ $setTheme->button_color }};
        cursor: pointer;
    }

    #xsearch .search-content input.search-input {
        height: 60px;
        font-size: 18px;
        border-radius: 30px !important;
        padding: 0.5rem 2rem;
    }

    .top-content {
        max-width: 720px;
        margin: 0 auto;
        text-align: center;
    }

    .top-content .description {
        margin-bottom: 1.5rem;
    }

    .xhashtag {
        position: relative;
        padding-left: 100px;
        text-align: left;
    }

    .xhashtag a {
        color: {{ $setTheme->text_color }};
        white-space: nowrap;
        max-width: 210px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .xhashtag a:hover {
        color: {{ $setTheme->text_color }};
    }

    .xhashtag .title {
        font-weight: 600;
        position: absolute;
        left: 0;
        line-height: 25px;
    }

    .xhashtag .item {
        font-size: 0.9em;
        color: #d1b4f7;
        border: 1px solid #7a6397;
        padding: 2px 10px;
        border-radius: 20px;
        margin: 0 2px 6px 0;
        display: inline-block;
    }

    .xbuttons .btn {
        padding: 1rem 2rem;
        font-size: 1.2em;
        border-radius: 0.75rem;
    }

    .xbuttons .btn i {
        animation: home-btn 0.3s infinite;
        position: relative;
    }

    @keyframes home-btn {
        0% {
            right: -3px;
        }

        100% {
            right: 0;
        }
    }

    .volume-list-ul .manga_list .manga_list-wrap .item .manga-poster {
        margin-bottom: 0 !important;
    }

    .volume-list-ul .manga_list .manga_list-wrap .item {
        margin-bottom: 10px !important;
    }

    .user-avatar {
        display: inline-block;
        width: 100%;
        padding-bottom: 100%;
        height: 0;
        position: relative;
        border-radius: 50%;
        overflow: hidden;
    }

    .user-avatar .user-avatar-img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .fav-tabs>.pre-tabs-min {
        float: left;
        margin-bottom: 0;
    }

    .fav-tabs>.item-order {
        float: right;
    }

    .fav-tabs>.item-order .bhsi-name {
        line-height: 29.6px;
        padding: 0 8px;
        border: 1px solid #4c4f57;
        border-radius: 4px;
        font-size: 13px;
        cursor: pointer;
    }

    .fav-tabs>.item-order .bhsi-name span {
        opacity: 0.5;
    }

    .fav-tabs .pre-tabs-min .nav-item .nav-link {
        font-size: 13px;
        font-weight: 500;
    }

    .fav-tabs .dropdown-menu-model .dropdown-item {
        font-size: 13px;
    }

    .comment-input,
    .cw_list .cw_l-line {
        position: relative;
        padding-left: 55px;
        margin: 0.75rem 0;
        font-size: 13px;
        display: inline-block;
        width: 100%;
    }

    .comment-input .user-avatar,
    .cw_list .cw_l-line .user-avatar {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        padding-bottom: 40px;
    }

    .cw_l-line .ihead {
        display: block;
        margin-bottom: 3px;
    }

    .cw_l-line .ihead>div {
        display: inline;
        white-space: nowrap;
    }

    .cw_l-line .ihead>div.user-name {
        font-weight: 500;
    }

    .cw_l-line .ihead>div.time {
        font-size: 0.9em;
        color: #666;
        margin-left: 15px;
    }

    .cw_l-line .ihead>div.chapt {
        font-size: 0.9em;
        color: #666;
        margin-left: 15px;
        float: right;
    }

    .cw_l-line .ibody {
        margin-bottom: 0.5rem;
    }

    .cw_l-line .ibody p {
        margin-bottom: 0;
        line-height: 1.5;
        overflow-wrap: break-word;
    }

    .cw_l-line .ibody p a.tag-name {
        color: {{ $setTheme->primary_color }};
    }

    .cw_l-line .ibody.is-spoil p {
        display: none;
    }

    .cw_l-line .ibody.is-spoil p:last-of-type {
        display: block;
        white-space: nowrap;
        max-width: 500px;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        filter: blur(3px);
    }

    .cw_l-line .ibottom .ib-li {
        display: inline;
        margin-right: 1rem;
        position: relative;
    }

    .cw_l-line .ibottom .ib-li .btn {
        padding: 0;
        font-size: 0.9em;
    }

    .cw_l-line .ibottom .ib-li .btn:hover {
        color: {{ $setTheme->primary_color }};
    }

    .cw_l-line .ibottom .ib-li .btn.active {
        color: {{ $setTheme->primary_color }};
    }

    .cw_l-line .ibottom .ib-li.ib-like .btn.active i::before {
        font-weight: 900;
    }

    .cw_l-line .ibottom .ib-li.ib-dislike .btn.active {
        color: #ff6969;
    }

    .cw_l-line .ibottom .ib-li.ib-dislike .btn.active i::before {
        font-weight: 900;
    }

    .cw_l-line .replies {
        padding-top: 0.5rem;
    }

    .comment-input.is-reply,
    .cw_l-line .replies>div>.cw_l-line {
        padding-left: 45px;
    }

    .comment-input.is-reply .user-avatar,
    .cw_l-line .replies>div>.cw_l-line>.user-avatar {
        width: 30px;
        padding-bottom: 30px;
    }

    .cw_l-line .btn-light {
        background: #e2e6ea !important;
    }

    .dis-hover {
        background-color: {{ $setTheme->text_color }} !important;
        cursor: pointer;
    }

    .dd-mute .btn {
        padding: 0.3rem 0.5rem !important;
        border: none !important;
        background-color: #f4f6f9 !important;
        text-align: left;
        margin-top: 8px !important;
    }

    .dd-mute .btn:hover {
        background-color: #ffc8c8 !important;
        color: #111 !important;
    }

    .dd-mute .btn i {
        margin-left: 0 !important;
    }

    @media screen and (max-width: 379px) {
        .dd-mute .btn i {
            display: none;
        }
    }

    div.user-name.is-level-x span {
        font-size: 9px;
        line-height: 1;
        margin-left: 5px;
        color: #767880;
        border: 1px solid #767880;
        padding: 1px 3px;
        border-radius: 0.25rem;
        text-transform: uppercase;
    }

    div.user-name.is-level-a {
        color: #f4a103;
    }

    div.user-name.is-level-b {
        color: #ff4854;
    }

    div.user-name.is-level-c {
        color: #70b354;
    }

    div.user-name.is-level-d {
        color: #4598ec;
    }

    div.user-name.is-level-mute {
        color: #aaa;
        text-decoration: line-through;
    }

    .badg-level {
        width: 16px;
        height: 16px;
        background-size: cover;
        background-position: center center;
        display: inline-block;
        margin-right: 5px;
        vertical-align: sub;
    }

    .badg-level.level-a {
        background-image: url(../images/level-a.png);
    }

    .badg-level.level-b {
        background-image: url(../images/level-b.png);
    }

    .badg-level.level-c {
        background-image: url(../images/level-c.png);
    }

    .badg-level.level-d {
        background-image: url(../images/level-d.png);
    }

    .badg-level.level-mute {
        background-image: url(../images/level-muted.png);
    }

    .show-spoil .btn {
        font-size: 11px;
    }

    .rep-more .btn {
        color: {{ $setTheme->primary_color }};
        font-size: 13px;
        font-weight: 600;
        padding: 0;
        box-shadow: none !important;
    }

    .rep-in .btn span::before {
        content: "View ";
    }

    .rep-in .btn.active span::before {
        content: "Hide ";
    }

    .rep-in .btn.active i {
        transform: rotate(180deg);
    }

    .sc-header {
        position: relative;
    }

    .sc-header .sc-h-title {
        line-height: 32px;
        font-weight: 600;
        font-size: 1em;
        float: left;
        margin-right: 1rem;
    }

    .sc-header .sc-h-from {
        float: left;
        position: relative;
        padding-right: 1rem;
        margin-right: 1rem;
    }

    .sc-header .sc-h-from:before {
        content: "";
        position: absolute;
        top: 5px;
        bottom: 5px;
        right: 0;
        width: 1px;
        background-color: {{ $setTheme->text_color }};
    }

    .sc-header .sc-h-from .btn {
        padding: 0;
        line-height: 32px;
    }

    .sc-header .sc-h-sort {
        float: right;
    }

    .sc-header .sc-h-sort .btn {
        padding: 0;
        line-height: 32px;
    }

    .ci-form .preform {
        position: relative;
    }

    .comment-input .user-name {
        margin-bottom: 0.75rem;
    }

    .comment-input.is-reply {
        margin-bottom: 0;
    }

    .comment-input .ci-buttons {
        margin-top: 0.5rem;
    }

    .comment-input .ci-buttons .cb-li {
        float: left;
    }

    .comment-input .ci-buttons .cb-li .btn {
        font-size: 13px;
        padding: 0.3rem 0.5rem;
        line-height: 1.4;
        border: none !important;
        box-shadow: none !important;
    }

    .comment-input .ci-buttons .cb-li .btn.btn-spoil {
        padding: 0.3rem 0;
    }

    .comment-input .ci-buttons .ci-b-left {
        float: left;
    }

    .comment-input .ci-buttons .ci-b-right {
        float: right;
    }

    .comment-input .ci-buttons .ci-b-right .btn-secondary {
        background: 0 0 !important;
    }

    .comment-input .ci-buttons .btn-primary {
        background: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    .comment-input .ci-emo {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }

    .comment-input .ci-emo .cb-icon {
        font-size: 16px;
        width: 40px;
        line-height: 40px;
        text-align: center;
        color: #9d9fa6;
    }

    .comment-input .preform textarea.form-control {
        resize: none;
        box-shadow: none !important;
        height: 65px;
        padding: 0.5rem 0.75rem !important;
        line-height: 1.2;
        border: 1px solid #ccc !important;
        background: {{ $setTheme->text_color }} !important;
    }

    .comment-input .preform textarea.form-control.emo-on {
        padding-right: 40px !important;
    }

    .comment-input.is-reply .preform textarea.form-control {
        height: 50px;
    }

    .emo-list {
        overflow: hidden;
        width: 360px;
        padding: 10px;
    }

    .emo-list .el-item {
        float: left;
        width: 16.6%;
        text-align: center;
        padding: 20px 0;
        font-size: 26px;
        cursor: pointer;
    }

    .emo-list .el-item:hover {
        background: {{ $setTheme->secondary_base_color }};
        border-radius: 6px;
    }

    .cb-li .btn.btn-spoil i {
        float: left;
        width: 16px;
        height: 16px;
        line-height: 16px;
        margin-top: 1px;
        text-align: center;
        border-radius: 50%;
        display: block;
        background-color: {{ $setTheme->text_color }};
        font-size: 0;
    }

    .cb-li .btn.btn-spoil.active i {
        background-color: {{ $setTheme->primary_color }};
        color: {{ $setTheme->text_color }};
        font-size: 10px;
    }

    #read-comment {
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
        padding: 15px;
        display: none;
    }

    body.show-comment {
        overflow: hidden;
        height: 100%;
    }

    body.show-comment #read-comment {
        position: fixed;
        display: block;
        left: 0;
        right: 0;
        top: 0;
        margin: 0;
        bottom: 0;
        z-index: 110;
    }

    .comments-wrap {
        position: absolute;
        padding: 15px;
        padding-top: 5px;
        top: 40px;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .comments-wrap::-webkit-scrollbar {
        display: none;
    }

    .comments-wrap .sc-header {
        position: fixed;
        height: 50px;
        top: 0;
        left: 0;
        width: calc(100% - 55px);
        padding: 10px 15px;
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
        z-index: 9;
    }

    #read-comment .rc-close {
        display: inline-block;
        cursor: pointer;
        width: 50px;
        line-height: 50px;
        text-align: center;
        position: absolute;
        top: 0;
        right: 0;
        background: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
        font-size: 30px;
    }

    .cw_l-line .ibottom .ib-li .dropdown-menu-model .dropdown-item {
        font-size: 13px;
        padding: 6px 12px;
    }

    @media screen and (min-width: 1024px) {
        #read-comment {
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.4);
        }

        .comments-wrap .sc-header {
            width: 500px;
            left: auto;
            right: 0;
        }

        body.show-comment #read-comment {
            width: 500px;
            border-radius: 0;
            left: auto;
        }

        #read-comment .rc-close {
            left: -50px;
            right: auto;
            box-shadow: 0 5px 0 0 rgba(0, 0, 0, 0.2);
        }

        body.show-comment {
            overflow: visible;
            height: 100%;
        }
    }

    #filter-block {
        margin: 20px auto 40px;
    }

    #toggle-filter {
        display: none;
    }

    #filter-block.filter-hide #cate-filter {
        display: none;
    }

    #filter-block.filter-hide {
        text-align: center;
    }

    #filter-block.filter-hide #toggle-filter {
        display: block;
        margin: 0 auto 0;
    }

    ::-webkit-scrollbar {
        width: 15px;
    }

    ::-webkit-scrollbar-track {
        border-radius: 0;
        background: rgba(0, 0, 0, 0.2);
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 0;
        background: rgba(255, 255, 255, 0.4);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .cfc-min-block {
        position: relative;
        margin: 0;
    }

    .cfc-min-block .cmb-item {
        float: left;
        margin: 0 8px 8px 0;
        border: 1px solid #555;
        border-radius: 6px;
        padding: 3px 12px;
    }

    .cfc-min-block .cmb-item .ni-head {
        font-weight: 500;
        margin-right: 5px;
        float: left;
        font-size: 13px;
        width: auto;
        display: block;
        line-height: 32px;
    }

    .cfc-min-block .cmb-item .btn-sm {
        border: none;
        color: #cae962;
        font-size: 12px;
        line-height: 1.1em;
        background: 0 0;
        padding: 6px 0;
        padding-right: 20px;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        position: relative;
    }

    .cfc-min-block .cmb-item .btn-sm i {
        position: absolute;
        right: 0;
    }

    .cfc-min-block .cmb-item .nl-item {
        display: block;
        float: left;
    }

    .cmb-date .nli-select {
        float: left;
    }

    .cfc-item {
        margin-bottom: 40px;
    }

    .cfc-item .ni-head {
        font-weight: 500;
        display: block;
        margin-bottom: 10px;
    }

    .cfc-item.cfc-button {
        border: none;
    }

    .nl-item {
        position: relative;
    }

    .nli-select .custom-select {
        font-size: 13px;
        height: 32px;
        line-height: 32px;
        cursor: pointer;
        color: {{ $setTheme->primary_color }};
        background: {{ $setTheme->text_color }};
        border: none;
        max-width: 140px;
        text-overflow: ellipsis;
        padding: 0 5px;
        box-shadow: none !important;
    }

    .cmb-rated .nli-select .custom-select {
        max-width: 110px;
    }

    .cmbg-wrap .item {
        display: block;
        cursor: pointer;
        float: left;
        margin: 0 6px 6px 0;
        font-size: 13px;
        padding: 0 0.75rem;
        line-height: 1.7rem;
        background: {{ $setTheme->secondary_base_color }};
        border-radius: 0.25rem;
    }

    .cmbg-wrap .item.active {
        background: #eedfff;
        color: {{ $setTheme->primary_color }};
    }

    .s-tabs {
        border: 1px solid {{ $setTheme->primary_color }};
        border-radius: 4px;
    }

    .s-tabs .nav-item .nav-link {
        padding: 0 0.3rem;
        line-height: 20px;
        font-size: 11px;
    }

    .s-tabs .nav-item .nav-link.active {
        background: #f1eafb;
        color: {{ $setTheme->primary_color }};
    }

    .item-spc-tabs .s-tabs {
        display: inline-block;
        overflow: hidden;
        margin-top: -5px;
    }

    .item-spc-tabs .s-tabs .nav-item {
        float: left;
    }

    .continue-list {
        position: relative;
    }

    .ctn-item {
        background: #f8f3ff;
        border-radius: 20px;
        width: 100%;
        position: relative;
        padding: 20px;
    }

    .ctn-item .ctn-detail {
        width: 100%;
        position: relative;
        font-size: 0.9em;
    }

    .ctn-item .ctn-detail .manga-poster {
        width: 100px;
        padding-bottom: 140px;
        border-radius: 10px;
        float: left;
    }

    .ctn-item .ctn-detail .manga-detail {
        margin-left: 120px;
        position: relative;
        padding-bottom: 40px;
        min-height: 140px;
    }

    .ctn-item .ctn-detail .manga-detail .manga-name {
        font-size: 1.1em;
        padding-right: 15px;
        -webkit-line-clamp: 3;
    }

    .ctn-item .ctn-detail .manga-detail .reading-load {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: {{ $setTheme->text_color }};
        border-radius: 6px;
        overflow: hidden;
    }

    .ctn-item .ctn-detail .manga-detail .reading-load .rl-loaded {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        background: #e9daff;
    }

    .ctn-item .ctn-detail .manga-detail .reading-load .rl-text {
        display: block;
        text-align: center;
        position: relative;
        z-index: 3;
        font-weight: 500;
        color: {{ $setTheme->primary_color }};
        font-size: 12px;
        padding: 0.4rem 0;
    }

    .ctn-item .ctn-detail .manga-detail .reading-load:hover .rl-text {
        color: {{ $setTheme->text_color }};
    }

    .ctn-item .ctn-detail .manga-detail .reading-load:hover .rl-loaded {
        background: {{ $setTheme->primary_color }};
        width: 100% !important;
    }

    .ctn-item .ctn-detail .manga-detail .dr-remove {
        position: absolute;
        top: -5px;
        right: -15px;
    }

    .ctn-item .ctn-detail .manga-detail .dr-remove .btn-remove {
        width: 30px;
        line-height: 30px;
        padding: 0;
    }

    .ctn-item .ctn-detail .manga-detail .dr-remove .dropdown-item {
        font-size: 12px !important;
        background: {{ $setTheme->text_color }} !important;
        cursor: pointer;
    }

    .dmm-topright {
        transform: none !important;
        right: 0 !important;
        top: 100% !important;
        left: auto !important;
        bottom: auto !important;
    }

    .dmm-topleft {
        transform: none !important;
        left: 0 !important;
        top: 100% !important;
        right: auto !important;
        bottom: auto !important;
    }

    .continue-home {
        margin: -40px auto 40px;
        padding: 30px 0 40px;
        background: {{ $setTheme->text_color }};
        border-bottom: 1px solid #eee;
    }

    .continue-home .block_area {
        margin-bottom: 0;
    }

    .dmm-multi .dropdown-item.selected {
        background-color: #f8f1ff;
        color: {{ $setTheme->primary_color }};
        position: relative;
        padding-right: 20px;
    }

    .dmm-multi .dropdown-item.selected:after {
        content: "\f00c";
        font-weight: 900;
        font-family: "Font Awesome 5 Free";
        position: absolute;
        right: 10px;
        font-size: 11px;
    }

    .cmb-language .dropdown-menu {
        border: 1px solid #333;
        right: -15px !important;
    }

    .cmb-language .dropdown-item {
        font-size: 13px;
    }

    .avatar-list {
        margin: 0 -10px;
    }

    .avatar-list .item {
        float: left;
        margin: 10px;
        width: calc(25% - 20px);
        position: relative;
        cursor: pointer;
    }

    .avatar-list .item .profile-avatar {
        width: 100%;
        height: 0;
        padding-bottom: 100%;
        transform: scale(0.9);
        border-radius: 50%;
        position: relative;
        top: auto;
        left: auto;
    }

    .avatar-list .item .profile-avatar img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
    }

    .avatar-list .item.active .profile-avatar {
        box-shadow: 0 0 0 10px #e9daff;
    }

    .pre-tabs-hashtag {
        text-align: center;
        display: block;
    }

    .pre-tabs-hashtag .nav-item {
        margin: 0 3px 7px !important;
        display: inline-block;
    }

    .pre-tabs-hashtag .nav-item .nav-link {
        min-width: auto !important;
        line-height: 2em;
        font-size: 12px;
        padding: 0 8px !important;
        border-radius: 5px;
        font-weight: 400 !important;
    }

    .pre-tabs-hashtag .nav-item .nav-link.active {
        color: {{ $setTheme->primary_color }} !important;
        background: #e9daff !important;
    }

    .toggle-onoff {
        position: relative;
        cursor: pointer;
        height: 14px;
        width: 40px;
        border-radius: 10px;
        background-color: #ccc;
        margin: 10px 0;
        display: block;
    }

    .toggle-onoff span {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        position: absolute;
        top: -3px;
        bottom: -3px;
        left: 0;
        background: {{ $setTheme->secondary_base_color }};
    }

    .toggle-onoff:hover span {
        box-shadow: 0 0 0 8px rgba(0, 0, 0, 0.03);
    }

    .toggle-onoff.active {
        background: #cca3ff;
    }

    .toggle-onoff.active span {
        background: {{ $setTheme->primary_color }};
        left: 20px;
    }

    .toggle-onoff.active:hover span {
        box-shadow: 0 0 0 8px rgba(204, 163, 255, 0.2);
    }

    #toast-container>div {
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1) !important;
        background-color: {{ $setTheme->text_color }};
        border-radius: 8px !important;
        padding: 15px 15px 15px 55px;
        width: 100%;
        max-width: 280px;
        font-size: 13px;
        opacity: 0.98;
        border: none !important;
        background-image: none !important;
    }

    #toast-container>div:before {
        content: "";
        background-color: {{ $setTheme->text_color }};
        width: 25px;
        height: 25px;
        border-radius: 50%;
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-position: center center;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    #toast-container>div.toast-success {
        background-color: {{ $setTheme->secondary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
        background-image: none !important;
    }

    #toast-container>div.toast-success:before {
        background-image: url("../images/toast-success.svg");
    }

    #toast-container>div.toast-warning {
        background-color: #f0d35d !important;
        color: #000 !important;
        background-image: none !important;
    }

    #toast-container>div.toast-warning:before {
        background-image: url("../images/toast-warning.svg");
    }

    #toast-container>div.toast-info {
        background-color: #415fd2 !important;
        color: {{ $setTheme->text_color }} !important;
        background-image: none !important;
    }

    #toast-container>div.toast-info:before {
        background-image: url("../images/toast-info.svg");
    }

    #toast-container>div.toast-error {
        background-color: #fc887b;
        color: #000 !important;
        background-image: none !important;
    }

    #toast-container>div.toast-error:before {
        background-image: url("../images/toast-warning.svg");
    }

    .page-promote {
        max-width: 840px;
        margin: 0 auto;
    }

    .page-promote a {
        color: {{ $setTheme->primary_color }};
    }

    .page-promote .ppo-intro {
        margin-bottom: 2rem;
    }

    .page-promote .ppo-embed textarea {
        resize: none;
        border-radius: 0;
        font-size: 13px;
    }

    .d-block-border {
        padding: 2rem;
        background-color: {{ $setTheme->text_color }};
        box-shadow: 0 10px 30px 0 rgba(69, 17, 132, 0.1);
        border-radius: 1rem;
        margin-bottom: 2rem;
    }

    .mba-title {
        font-weight: 500;
        margin-bottom: 0.75rem;
    }

    #sidebar_menu .sb-uimode {
        position: absolute;
        top: 12px;
        right: 15px;
        width: auto;
        padding: 8px 12px;
        background: #444;
        color: {{ $setTheme->text_color }} !important;
        border-radius: 20px;
        font-size: 12px;
    }

    #sidebar_menu .sb-uimode.active {
        background-color: #f2f2f2;
        color: #111 !important;
    }

    #discussion {
        margin-bottom: 50px;
        margin-top: -32px;
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    #discussion .dis-wrap {
        position: relative;
        padding: 70px 0 0 300px;
        min-height: 400px;
    }

    #discussion .d_w-icon {
        position: absolute;
        left: -100px;
        bottom: 0;
        width: 400px;
        height: 400px;
    }

    #discussion .d_w-icon img {
        position: absolute;
        height: 100%;
        left: 0;
        bottom: 0;
    }

    #discussion .d_w-list {
        width: 100%;
        position: relative;
    }

    #discussion .d_w-list .d_w_l-title {
        font-weight: 600;
        font-size: 1.2em;
        margin-bottom: 1.5rem;
    }

    #discussion .discussion-bg {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        overflow: hidden;
    }

    #discussion .discussion-bg img {
        width: 110%;
        height: auto;
        margin: 0 -5%;
    }

    #discussion .pre-tabs {
        margin-bottom: 0;
    }

    #discussion .pre-tabs .nav-item {
        margin-right: 5px;
    }

    #discussion .pre-tabs .nav-item .nav-link {
        background-color: transparent !important;
        min-width: 90px;
        font-size: 12px;
        padding: 7px 10px;
        border: 1px solid transparent !important;
        border-radius: 20px;
    }

    #discussion .pre-tabs .nav-item .nav-link.active {
        color: {{ $setTheme->primary_color }} !important;
        background-color: {{ $setTheme->text_color }} !important;
        border-color: {{ $setTheme->primary_color }} !important;
    }

    #discussion .display-toggle {
        position: absolute;
        top: 0;
        right: 0;
        padding: 5px 0;
    }

    #discussion .display-toggle .toggle-onoff {
        float: left;
        margin: 3px 0;
        transform: scale(0.8);
        transform-origin: center right;
    }

    #discussion .display-toggle .to-text {
        float: left;
        margin-right: 5px;
        font-size: 12px;
        font-weight: 500;
        line-height: 20px;
    }

    #discussion.ds-hide {
        margin: 0 0 20px;
        background: 0 0 !important;
    }

    #discussion.ds-hide .dis-wrap {
        min-height: 42px;
        padding: 0;
    }

    #discussion.ds-hide .d_w-icon,
    #discussion.ds-hide .d_w-list .tab-content,
    #discussion.ds-hide .discussion-bg,
    #discussion.ds-hide .pre-tabs {
        display: none;
    }

    #discussion.ds-hide .display-toggle {
        padding: 10px 15px;
        border: 1px solid #ccc;
        min-width: 190px;
        border-radius: 10px;
        right: auto;
        left: 50%;
        transform: translateX(-50%);
    }

    .dwl-ul {
        padding: 0;
        position: relative;
        margin-right: -20px;
        margin-left: -20px;
        min-height: 310px;
    }

    .dwl-ul .dwl-item {
        cursor: grab;
        padding: 1rem;
        background-color: {{ $setTheme->text_color }};
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border-radius: 0.75rem;
        position: relative;
        font-size: 12px;
        line-height: 1.4;
    }

    .dwl-ul .dwl-item>.comment-avatar {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        padding-bottom: 0;
        position: absolute;
        left: 1rem;
        top: 1rem;
    }

    .dwl-ul .dwl-item>.comment-inline {
        margin: 0;
    }

    .dwl-ul .dwl-item .text-cut {
        -webkit-line-clamp: 6;
        margin-bottom: 1rem;
        font-size: 1.2em;
        font-family: "Roboto Slab";
        height: 8.4em;
    }

    .dwl-ul .dwl-item .about {
        margin-bottom: 0.75rem;
        padding-left: 45px;
    }

    .dwl-ul .dwl-item .about>div {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .dwl-ul .dwl-item .about>div.username {
        font-weight: 600;
    }

    .dwl-ul .dwl-item .on-chapt {
        margin: 0;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .dwl-ul .dwl-item .on-chapt a {
        color: {{ $setTheme->primary_color }};
        font-weight: 500;
    }

    .dwl-ul .dwl-item .stats {
        margin-bottom: 0.75rem;
        display: none;
    }

    .dwl-ul .dwl-item .stats>div {
        display: inline;
        margin-right: 0.5rem;
    }

    .dwl-ul .swiper-slide {
        width: auto;
        padding: 20px 0 60px;
    }

    .dwl-ul .swiper-container {
        padding: 0 20px;
    }

    .dwl-ul .swiper-container:before {
        content: "";
        width: 15px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        background: {{ $setTheme->text_color }};
        background: linear-gradient(90deg, {{ $setTheme->text_color }} 0, rgba(255, 255, 255, 0) 100%);
        z-index: 9;
    }

    .dwl-ul .swiper-container:after {
        content: "";
        width: 15px;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        background: {{ $setTheme->text_color }};
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, {{ $setTheme->text_color }} 100%);
        z-index: 9;
    }

    .dwl-ul .swiper-container .swiper-scrollbar {
        left: 20px;
        right: 20px;
        width: calc(100% - 40px);
        bottom: 0;
        height: 3px;
        opacity: 0.5;
    }

    .comment-focus>.info>.ibody {
        background-color: #eee3ff;
        padding: 0.5rem;
        border-radius: 0.4rem;
    }

    #change-mode span.lm {
        display: none;
    }

    #change-mode.active span.dm {
        display: none;
    }

    #change-mode.active span.lm {
        display: inline;
    }

    .sb-uimode {
        width: 100px;
        cursor: pointer;
    }

    .sb-uimode .text-lm {
        display: none;
    }

    .sb-uimode.active .text-dm {
        display: none;
    }

    .sb-uimode.active .text-lm {
        display: inline;
    }

    .sb-uimode.active .fa-moon:before {
        content: "\f185";
    }

    body.darkmode {
        background-color: {{ $setTheme->primary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .checked-list li::before,
    body.darkmode .text-primary {
        color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode .btn,
    body.darkmode .chapter-section .chapter-s-search .css-icon i,
    body.darkmode a {
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .cbox.cbox-list .featured-block-chart li .manga-detail .fdi-chapter a,
    body.darkmode .dwl-ul .dwl-item .on-chapt a,
    body.darkmode .inbox-item .highlight-text,
    body.darkmode .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .chapter a,
    body.darkmode .news-article .news-title,
    body.darkmode .rtf-content .arrow i,
    body.darkmode .table_schedule .table_schedule-list li .manga-detail .fd-play .btn-play,
    body.darkmode .table_schedule .table_schedule-list li .time,
    body.darkmode a:hover {
        color: {{ $setTheme->secondary_color }};
    }

    body.darkmode #sidebar_menu .sidebar_menu-list>.nav-item .nav>.nav-item>.nav-link:hover,
    body.darkmode #sidebar_menu .sidebar_menu-list>.nav-item>.nav-link:hover,
    body.darkmode .anw-tabs .nav-item .nav-link:hover,
    body.darkmode .cw_l-line .ibody p a.tag-name,
    body.darkmode .cw_l-line .ibottom .ib-li .btn.active,
    body.darkmode .cw_l-line .ibottom .ib-li .btn:hover,
    body.darkmode .featured-block-ul li .manga-detail .fd-infor .fdi-item.fdi-chapter a,
    body.darkmode .mr-ranking span,
    body.darkmode .read-tips .read-tips-follow .notice .highlight-text,
    body.darkmode .stx-center .stx-title {
        color: {{ $setTheme->secondary_color }};
    }

    body.darkmode #footer,
    body.darkmode .category_block.category_block-home,
    body.darkmode .continue-home {
        background-color: {{ $setTheme->primary_base_color }};
    }

    body.darkmode .dwl-ul .swiper-container:after,
    body.darkmode .dwl-ul .swiper-container:before {
        display: none;
    }

    body.darkmode #read-comment,
    body.darkmode #read-comment .rc-close,
    body.darkmode #sidebar_menu,
    body.darkmode .anw-tabs,
    body.darkmode .category_block .c_b-list .item a,
    body.darkmode .cbox.cbox-list .featured-block-chart li .ranking-number,
    body.darkmode .comments-wrap .sc-header,
    body.darkmode .ctn-item,
    body.darkmode .dwl-ul .dwl-item,
    body.darkmode .inbox-item,
    body.darkmode .item-keyword,
    body.darkmode .premodal .modal-content,
    body.darkmode .read-tips .rtf-content,
    body.darkmode .read-tips-layout,
    body.darkmode .stx-center {
        background-color: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode #ani_detail .ani_detail-stage,
    body.darkmode .chapters-list-ul ul .item a,
    body.darkmode .cmbg-wrap .item,
    body.darkmode .d-block-border,
    body.darkmode .featured-navi>div,
    body.darkmode .sbs-text .sbst-row .sr-items a {
        background-color: {{ $setTheme->secondary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode #header.home-header,
    body.darkmode #text-home,
    body.darkmode .deslide-wrap {
        //background-color: {{ $setTheme->primary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .featured-navi>div.swiper-button-disabled,
    body.darkmode .menu-profiles li .mp-item,
    body.darkmode .mr-ranking,
    body.darkmode .table_schedule .table_schedule-date .tsd-item {
        background-color: {{ $setTheme->secondary_base_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .menu-profiles li .mp-item.active {
        background-color: {{ $setTheme->secondary_base_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .anis-content .anisc-detail .genres a:hover,
    body.darkmode .chapters-list-ul ul .item:hover a,
    body.darkmode .cmbg-wrap .item.active,
    body.darkmode .cmbg-wrap .item:hover,
    body.darkmode .profile-avatar .pa-edit,
    body.darkmode .sbs-text .sbst-row .sr-items a:hover {
        color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode .chapters-list-ul ul .item .item-read,
    body.darkmode .pre-pagination .pagination .page-item .page-link {
        background-color: {{ $setTheme->tertiary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .menu-profiles li.active .mp-item,
    body.darkmode .pre-pagination .pagination .page-item.active .page-link,
    body.darkmode .table_schedule .table_schedule-date .tsd-item.active,
    body.darkmode .table_schedule .table_schedule-list li .manga-detail .fd-play .btn-play:hover {
        background-color: {{ $setTheme->primary_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .premodal .btn.btn-primary {
        background-color: {{ $setTheme->secondary_color }} !important;
        color: #111 !important;
    }

    body.darkmode .mp-desc .mpd-buttons .btn-light,
    body.darkmode .ts-navigation .btn {
        background-color: {{ $setTheme->secondary_base_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .dwl-ul .dwl-item>.comment-avatar {
        border-color: transparent;
    }

    body.darkmode #discussion .pre-tabs .nav-item .nav-link.active {
        background: 0 0 !important;
        color: {{ $setTheme->secondary_color }} !important;
        border-color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode .block_area .block_area-header .cat-heading {
        color: {{ $setTheme->text_color }};
    }

    body.darkmode #header {
        background: {{ $setTheme->secondary_color }};
    }

    body.darkmode .dwl-ul .swiper-container .swiper-scrollbar {
        background: {{ $setTheme->tertiary_base_color }};
    }

    body.darkmode #manga-trending {
        background: #2c2c2c;
        background: linear-gradient(0deg, #2c2c2c 0, {{ $setTheme->primary_base_color }} 100%);
    }

    body.darkmode #discussion .discussion-bg {
        filter: grayscale(1);
        opacity: 0.5;
        z-index: -1;
    }

    body.darkmode .trending-list .item .number {
        background: #4f4f4f;
        background: linear-gradient(0deg, rgba(79, 79, 79, 0) 0, #4f4f4f 100%);
    }

    body.darkmode .category_block .c_b-list .item a span,
    body.darkmode .cw_l-line .ihead>div.time {
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .mg-item-basic .fd-infor a {
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .mg-item-basic .fd-infor a:hover {
        color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode #sidebar_menu .sidebar_menu-list>.nav-item,
    body.darkmode .block_area_mal,
    body.darkmode .cbox.cbox-list .featured-block-chart li .manga-detail .fdi-view,
    body.darkmode .continue-home,
    body.darkmode .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item,
    body.darkmode .search-content .search-result-pop .nav-item,
    body.darkmode .table_schedule .table_schedule-list li {
        border-color: {{ $setTheme->tertiary_base_color }};
    }

    body.darkmode .new-noti-list .nnl-item {
        border-color: #4f4f4f;
    }

    body.darkmode .mp-desc {
        background: #4f4f4f;
    }

    body.darkmode .ctn-item .ctn-detail .manga-detail .reading-load .rl-loaded,
    body.darkmode .read-tips .read-tips-follow .notice {
        background: {{ $setTheme->tertiary_base_color }};
    }

    body.darkmode .ctn-item .ctn-detail .manga-detail .reading-load .rl-text {
        color: {{ $setTheme->secondary_color }};
    }

    body.darkmode .ctn-item .ctn-detail .manga-detail .reading-load {
        background: 0 0;
    }

    body.darkmode .cbox.cbox-list .featured-block-chart li.item-top .ranking-number span,
    body.darkmode .link-highlight {
        color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode #header_menu .header_menu-sub,
    body.darkmode .search-content .search-result-pop {
        background: {{ $setTheme->tertiary_base_color }};
    }

    body.darkmode .dropdown-menu-model {
        background: #4f4f4f;
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .hr-navigation .dropdown-menu-fixed {
        background-color: #222 !important;
    }

    body.darkmode #sidebar_menu .toggle-sidebar,
    body.darkmode .ctn-item .ctn-detail .manga-detail .dr-remove .dropdown-item,
    body.darkmode .dropdown-menu-model .dropdown-item,
    body.darkmode .dropdown-menu-noti {
        background: {{ $setTheme->tertiary_base_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode #header_menu .header_menu-sub ul.sub-menu li:hover a,
    body.darkmode .dropdown-menu-model .dropdown-item.active,
    body.darkmode .dropdown-menu-model .dropdown-item.added,
    body.darkmode .dropdown-menu-model .dropdown-item.selected,
    body.darkmode .dropdown-menu-model .dropdown-item:hover,
    body.darkmode .new-noti-list .nnl-item:hover {
        background: #4f4f4f !important;
        color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode .new-noti-list .nnl-item.nnl-more,
    body.darkmode .new-noti-list .nnl-mark {
        background: #4f4f4f !important;
    }

    body.darkmode .new-noti-list .nnl-mark a:hover {
        color: {{ $setTheme->secondary_color }} !important;
    }

    body.darkmode .header_right-user .dropdown-menu-model .dropdown-item.di-bottom {
        background-color: {{ $setTheme->button_color }} !important;
        color: #111 !important;
    }

    body.darkmode #home .top-home {
        background: {{ $setTheme->secondary_base_color }} !important;
    }

    body.darkmode #home .top-home:before {
        background: {{ $setTheme->secondary_base_color }};
        background: linear-gradient(0deg, rgba(47, 47, 47, 0) 0, {{ $setTheme->secondary_base_color }} 73%);
    }

    body.darkmode .xhashtag .item {
        border-color: #6f6f6f;
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .xhashtag .item:hover {
        color: {{ $setTheme->secondary_color }};
    }

    body.body-home.darkmode #footer {
        color: {{ $setTheme->text_color }};
    }

    body.body-home.darkmode #footer a {
        color: {{ $setTheme->text_color }};
    }

    .prebreadcrumb .breadcrumb .breadcrumb-item,
    body.darkmode .cate-sort .btn-sort {
        color: #aaa !important;
    }

    body.darkmode .manga_list-sbs .mls-wrap .item {
        padding: 1em;
        margin-bottom: 20px;
        border-radius: 0.75em;
        background-color: {{ $setTheme->secondary_base_color }};
    }

    body.darkmode .manga_list-sbs .mls-wrap .item .manga-poster {
        top: 1em;
        left: 1em;
    }

    body.darkmode .anis-content .anisc-detail .genres a,
    body.darkmode .anis-content .anisc-detail .manga-buttons .btn-fav,
    body.darkmode .chapter-section,
    body.darkmode .preform .form-control,
    body.darkmode .premodal .modal-content .close,
    body.darkmode .types-sub .ts-item {
        background-color: {{ $setTheme->tertiary_base_color }} !important;
        color: {{ $setTheme->text_color }} !important;
    }

    body.darkmode .chapter-section .chapter-s-search .preform .form-control {
        background-color: #5f5f5f !important;
    }

    body.darkmode .preform .form-control::placeholder {
        color: {{ $setTheme->text_color }};
        opacity: 0.4;
    }

    body.darkmode .anis-content .anisc-detail .manga-name-or,
    body.darkmode .anis-content .anisc-detail .manga-name-or span,
    body.darkmode .zr-news .item .description {
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .s-tabs {
        border-color: #f1eafb;
    }

    body.darkmode .nli-select .custom-select {
        background-color: {{ $setTheme->primary_base_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .btn-light {
        color: {{ $setTheme->text_color }} !important;
        background: 0 0 !important;
    }

    body.darkmode .toggle-onoff {
        background: {{ $setTheme->tertiary_base_color }};
    }

    body.darkmode .toggle-onoff span {
        background: #6f6f6f;
    }

    body.darkmode .toggle-onoff.active {
        background: {{ $setTheme->primary_color }};
    }

    body.darkmode .toggle-onoff.active span {
        background: #cca3ff;
    }

    body.darkmode .desi-buttons .btn {
        color: #111 !important;
    }

    body.darkmode .comment-input .preform textarea.form-control {
        border-color: #5f5f5f !important;
    }

    body.darkmode .cb-li .btn.btn-spoil.active i {
        background: {{ $setTheme->secondary_color }};
        color: {{ $setTheme->text_color }};
    }

    body.darkmode .page-promote .ppo-embed .form-control[readonly] {
        background: #4f4f4f;
        color: {{ $setTheme->text_color }};
        border-color: transparent;
    }

    body.darkmode .chapter-list-read .chapter-section {
        background-color: #333 !important;
    }

    body.darkmode .chapter-list-read .chapter-section .chapter-s-search .preform .form-control {
        background-color: #444 !important;
    }

    body.darkmode .comment-focus>.info>.ibody {
        background-color: #746095;
    }

    .add-manga {
        position: relative;
        cursor: pointer;
        margin-top: 15px;
        display: block;
        font-size: 12px;
        line-height: 1.35;
        font-weight: 500;
        padding: 10px 12px;
        border-radius: 0.45rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: {{ $setTheme->text_color }} !important;
    }

    .add-manga:before {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        right: 2px;
        bottom: 2px;
        border-radius: 0.35rem;
        background-color: #310566;
    }

    .add-manga>div {
        position: relative;
        z-index: 3;
    }

    .add-manga .add-manga-icon {
        margin-right: 10px;
    }

    .add-manga .add-manga-icon img {
        width: 26px;
        height: 26px;
    }

    .add-manga .add-manga-inner span {
        display: block;
    }

    .cr-title {
        font-weight: 600;
        font-size: 1.1em;
        margin-bottom: 1.5rem;
    }

    .cr-title .manga-icon img {
        width: 24px;
        height: 24px;
    }

    .content-related {
        position: relative;
        max-height: 500px;
        overflow: auto;
    }

    .content-related .item {
        display: flex;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px dashed rgba(255, 255, 255, 0.2);
        justify-content: space-between;
        font-size: 12px;
    }

    .content-related .item:last-of-type {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .content-related .item .cr-poster {
        width: 90px;
        height: 132px;
        overflow: hidden;
        border-radius: 0.4rem;
        position: relative;
        display: block;
    }

    .content-related .item .cr-poster img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .content-related .item .cr-about {
        width: calc(100% - 110px);
    }

    .content-related .item .cr-name {
        margin: 0 0 0.6rem;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.3;
    }

    .content-related .item .cr-others {
        margin-bottom: 0.25rem;
        font-size: 11px;
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
    }

    .content-related .item .cr-desc {
        opacity: 0.5;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 1rem;
    }

    .content-related .item .cr-buttons .btn {
        font-weight: 500;
        font-size: 12px;
        padding: 8px;
        border: none !important;
        background-color: #cae962;
        color: {{ $setTheme->text_color }};
    }

    .premodal-manga .modal-content {
        background: #35373d;
        color: {{ $setTheme->text_color }};
    }

    .premodal-manga .modal-content a {
        color: {{ $setTheme->text_color }};
    }

    .premodal-manga .modal-content a:hover {
        color: {{ $setTheme->button_color }};
    }

    #slider {
        background: #20152d;
        overflow: hidden;
        z-index: 1;
        position: relative;
        display: block;
        padding-right: 0;
        width: 100%;
        padding-bottom: 33%;
        border-radius: 0;
    }

    #slider .swiper-slide .slide-mask {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(12, 12, 12, 0.5);
    }

    #slider .swiper-slide {
        position: relative;
        overflow: hidden;
        background: #20152d;
    }

    #slider .swiper-slide .slide-photo {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    #slider .swiper-slide .slide-photo img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #slider .sc-detail {
        font-size: 1em;
        display: block;
        font-weight: 400;
        margin-bottom: 30px;
    }

    #slider .sc-detail .dot {
        background: {{ $setTheme->text_color }};
        width: 4px;
        height: 4px;
        margin: 2px 10px;
        opacity: 0.5;
    }

    #slider .sc-detail .scd-item {
        display: block;
        margin-bottom: 10px;
    }

    #slider .sc-detail .scd-item.scd-genres span {
        display: inline-block;
        margin: 0 3px 6px 0;
        border: 1px solid rgba(255, 255, 255, 0.5);
        padding: 0.3rem 0.5rem;
        line-height: 1;
        border-radius: 0.2rem;
        font-size: 0.8em;
    }

    #slider .sc-detail .scd-item i {
        font-size: 0.8em;
        position: relative;
        top: -1px;
    }

    #slider .sc-detail .scd-item .quality {
        display: inline-block;
        padding: 3px 4px;
        background: #ff6e30;
        color: {{ $setTheme->text_color }};
        border-radius: 5px;
        line-height: 1em;
        font-weight: 600;
        font-size: 12px;
    }

    #slider .swiper-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        right: 0;
        bottom: 0;
    }

    .desi-buttons {
        display: block;
    }

    .desi-buttons .btn {
        background: {{ $setTheme->button_color }};
        color: {{ $setTheme->text_color }};
        font-weight: 500;
        font-size: 14px;
        line-height: 40px;
        padding: 0 20px;
        border-radius: 4px;
    }

    .desi-buttons .btn-slide-read {
        background: {{ $setTheme->button_color }};
        color: {{ $setTheme->text_color }};
    }

    .swiper-container {
        margin: 0 auto;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .swiper-container-no-flexbox .swiper-slide {
        float: left;
    }

    .swiper-container-vertical>.swiper-wrapper {
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        -ms-flex-direction: column;
        -webkit-flex-direction: column;
        flex-direction: column;
    }

    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
    }

    .swiper-container-android .swiper-slide,
    .swiper-wrapper {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .swiper-container-multirow>.swiper-wrapper {
        -webkit-box-lines: multiple;
        -moz-box-lines: multiple;
        -ms-fles-wrap: wrap;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .swiper-container-free-mode>.swiper-wrapper {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        margin: 0 auto;
    }

    .swiper-slide {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .swiper-slide img {
        width: 100%;
    }

    .swiper-container .swiper-notification {
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        opacity: 0;
        z-index: -1000;
        display: none;
    }

    .swiper-wp8-horizontal {
        -ms-touch-action: pan-y;
        touch-action: pan-y;
    }

    .swiper-wp8-vertical {
        -ms-touch-action: pan-x;
        touch-action: pan-x;
    }

    .swiper-button-next,
    .swiper-button-prev {
        z-index: 10;
        cursor: pointer;
    }

    .swiper-button-next.swiper-button-disabled,
    .swiper-button-prev.swiper-button-disabled {
        opacity: 0.35;
        cursor: auto;
        pointer-events: none;
    }

    .swiper-button-prev.swiper-button-black,
    .swiper-container-rtl .swiper-button-next.swiper-button-black {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
    }

    .swiper-button-prev.swiper-button-white,
    .swiper-container-rtl .swiper-button-next.swiper-button-white {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
    }

    .swiper-button-next.swiper-button-black,
    .swiper-container-rtl .swiper-button-prev.swiper-button-black {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
    }

    .swiper-button-next.swiper-button-white,
    .swiper-container-rtl .swiper-button-prev.swiper-button-white {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
    }

    .swiper-pagination {
        position: absolute;
        text-align: center;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        z-index: 10;
    }

    .swiper-pagination.swiper-pagination-hidden {
        opacity: 0;
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        margin: 3px;
        display: inline-block;
        border-radius: 100%;
        opacity: 1;
        background: {{ $setTheme->text_color }};
        vertical-align: middle;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
        cursor: pointer;
    }

    .swiper-pagination-white .swiper-pagination-bullet {
        background: {{ $setTheme->text_color }};
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #ffc107;
        margin: 0;
    }

    .swiper-pagination-white .swiper-pagination-bullet-active {
        background: {{ $setTheme->text_color }};
    }

    .swiper-pagination-black .swiper-pagination-bullet-active {
        background: #000;
    }

    .swiper-container-vertical>.swiper-pagination {
        right: 10px;
        top: 50%;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate(0, -50%);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
    }

    .swiper-container-vertical>.swiper-pagination .swiper-pagination-bullet {
        margin: 5px 0;
        display: block;
    }

    .swiper-container-horizontal>.swiper-pagination {
        bottom: 20px;
        top: auto;
        right: 20px;
        left: auto;
        width: 50%;
        text-align: right;
    }

    .swiper-container-horizontal>.swiper-pagination .swiper-pagination-bullet {
        margin: 5px;
    }

    .swiper-container-3d {
        -webkit-perspective: 1200px;
        -moz-perspective: 1200px;
        -o-perspective: 1200px;
        perspective: 1200px;
    }

    .swiper-container-3d .swiper-cube-shadow,
    .swiper-container-3d .swiper-slide,
    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top,
    .swiper-container-3d .swiper-wrapper {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10;
    }

    .swiper-container-3d .swiper-slide-shadow-left {
        background-image: -webkit-gradient(linear,
                left top,
                right top,
                from(rgba(0, 0, 0, 0.5)),
                to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(right,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(right,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(right,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: linear-gradient(to left,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
    }

    .swiper-container-3d .swiper-slide-shadow-right {
        background-image: -webkit-gradient(linear,
                right top,
                left top,
                from(rgba(0, 0, 0, 0.5)),
                to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(left,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(left,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: linear-gradient(to right,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
    }

    .swiper-container-3d .swiper-slide-shadow-top {
        background-image: -webkit-gradient(linear,
                left top,
                left bottom,
                from(rgba(0, 0, 0, 0.5)),
                to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: linear-gradient(to top,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
    }

    .swiper-container-3d .swiper-slide-shadow-bottom {
        background-image: -webkit-gradient(linear,
                left bottom,
                left top,
                from(rgba(0, 0, 0, 0.5)),
                to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(top,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(top,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(top,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
        background-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0));
    }

    .swiper-container-coverflow .swiper-wrapper {
        -ms-perspective: 1200px;
    }

    .swiper-container-fade.swiper-container-free-mode .swiper-slide {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .swiper-container-fade .swiper-slide {
        pointer-events: none;
    }

    .swiper-container-fade .swiper-slide-active {
        pointer-events: auto;
    }

    .swiper-container-cube {
        overflow: visible;
    }

    .swiper-container-cube .swiper-slide {
        pointer-events: none;
        visibility: hidden;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        width: 100%;
        height: 100%;
    }

    .swiper-container-cube.swiper-container-rtl .swiper-slide {
        -webkit-transform-origin: 100% 0;
        -moz-transform-origin: 100% 0;
        -ms-transform-origin: 100% 0;
        transform-origin: 100% 0;
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-next,
    .swiper-container-cube .swiper-slide-next+.swiper-slide,
    .swiper-container-cube .swiper-slide-prev {
        pointer-events: auto;
        visibility: visible;
    }

    .swiper-container-cube .swiper-cube-shadow {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.6;
        -webkit-filter: blur(50px);
        filter: blur(50px);
    }

    .swiper-container-cube.swiper-container-vertical .swiper-cube-shadow {
        z-index: 0;
    }

    .swiper-scrollbar {
        border-radius: 10px;
        position: relative;
        -ms-touch-action: none;
        background: #e2e6ea;
    }

    .swiper-container-horizontal>.swiper-scrollbar {
        position: absolute;
        left: 1%;
        bottom: 3px;
        z-index: 50;
        height: 5px;
        width: 98%;
    }

    .swiper-container-vertical>.swiper-scrollbar {
        position: absolute;
        right: 3px;
        top: 1%;
        z-index: 50;
        width: 5px;
        height: 98%;
    }

    .swiper-scrollbar-drag {
        height: 100%;
        width: 100%;
        position: relative;
        background: #a2a9b0;
        border-radius: 10px;
        left: 0;
        top: 0;
    }

    .swiper-scrollbar-cursor-drag {
        cursor: move;
    }

    .swiper-lazy-preloader {
        width: 42px;
        height: 42px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -21px;
        margin-top: -21px;
        z-index: 10;
        -webkit-transform-origin: 50%;
        -moz-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        animation: swiper-preloader-spin 1s steps(12, end) infinite;
    }

    .swiper-lazy-preloader:after {
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%201.220120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(1.22060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(1.52060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(1.82060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        background-position: 50%;
        -webkit-background-size: 100%;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .swiper-lazy-preloader-white:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%201.220120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(1.22060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(1.52060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(1.82060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    @-webkit-keyframes swiper-preloader-spin {
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes swiper-preloader-spin {
        100% {
            transform: rotate(360deg);
        }
    }

    .swiper-navigation {
        position: absolute;
        bottom: 40px;
        right: 40px;
        width: 100px;
        height: auto;
        z-index: 10;
    }

    .swiper-button {
        background: {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        font-size: 16px;
        text-align: center;
        display: inline-block;
        margin: 0 5px;
        float: right;
    }

    .swiper-button:hover {
        background: {{ $setTheme->button_color }};
        color: {{ $setTheme->text_color }};
    }

    .toast-title {
        font-weight: 700;
    }

    .toast-message {
        -ms-word-wrap: break-word;
        word-wrap: break-word;
    }

    .toast-message a,
    .toast-message label {
        color: {{ $setTheme->text_color }};
    }

    .toast-message a:hover {
        color: #ccc;
        text-decoration: none;
    }

    .toast-close-button {
        position: relative;
        right: -0.3em;
        top: -0.3em;
        float: right;
        font-size: 20px;
        font-weight: 700;
        color: {{ $setTheme->text_color }};
        -webkit-text-shadow: 0 1px 0 {{ $setTheme->text_color }};
        text-shadow: 0 1px 0 {{ $setTheme->text_color }};
        opacity: 0.8;
        line-height: 1;
    }

    .toast-close-button:focus,
    .toast-close-button:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: 0.4;
    }

    .rtl .toast-close-button {
        left: -0.3em;
        float: left;
        right: 0.3em;
    }

    button.toast-close-button {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none;
    }

    .toast-top-center {
        top: 0;
        right: 0;
        width: 100%;
    }

    .toast-bottom-center {
        bottom: 0;
        right: 0;
        width: 100%;
    }

    .toast-top-full-width {
        top: 0;
        right: 0;
        width: 100%;
    }

    .toast-bottom-full-width {
        bottom: 0;
        right: 0;
        width: 100%;
    }

    .toast-top-left {
        top: 12px;
        left: 12px;
    }

    .toast-top-right {
        top: 12px;
        right: 12px;
    }

    .toast-bottom-right {
        right: 12px;
        bottom: 12px;
    }

    .toast-bottom-left {
        bottom: 12px;
        left: 12px;
    }

    #toast-container {
        position: fixed;
        z-index: 999999;
        pointer-events: none;
    }

    #toast-container * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    #toast-container>div {
        position: relative;
        pointer-events: auto;
        overflow: hidden;
        margin: 0 0 6px;
        padding: 15px 15px 15px 50px;
        width: 300px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        background-position: 15px center;
        background-repeat: no-repeat;
        -moz-box-shadow: 0 0 12px {{ $setTheme->text_color }};
        -webkit-box-shadow: 0 0 12px {{ $setTheme->text_color }};
        box-shadow: 0 0 12px {{ $setTheme->text_color }};
        color: {{ $setTheme->text_color }};
        opacity: 0.8;
    }

    #toast-container>div.rtl {
        direction: rtl;
        padding: 15px 50px 15px 15px;
        background-position: right 15px center;
    }

    #toast-container>div:hover {
        -moz-box-shadow: 0 0 12px #000;
        -webkit-box-shadow: 0 0 12px #000;
        box-shadow: 0 0 12px #000;
        opacity: 1;
        cursor: pointer;
    }

    #toast-container>.toast-info {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important;
    }

    #toast-container>.toast-error {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important;
    }

    #toast-container>.toast-success {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important;
    }

    #toast-container>.toast-warning {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important;
    }

    #toast-container.toast-bottom-center>div,
    #toast-container.toast-top-center>div {
        width: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    #toast-container.toast-bottom-full-width>div,
    #toast-container.toast-top-full-width>div {
        width: 96%;
        margin-left: auto;
        margin-right: auto;
    }

    .toast {
        background-color: #030303;
    }

    .toast-success {
        background-color: #51a351;
    }

    .toast-error {
        background-color: #bd362f;
    }

    .toast-info {
        background-color: #2f96b4;
    }

    .toast-warning {
        background-color: #f89406;
    }

    .toast-progress {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 4px;
        background-color: #000;
        opacity: 0.4;
    }

    @media all and (max-width: 240px) {
        #toast-container>div {
            padding: 8px 8px 8px 50px;
            width: 11em;
        }

        #toast-container>div.rtl {
            padding: 8px 50px 8px 8px;
        }

        #toast-container .toast-close-button {
            right: -0.2em;
            top: -0.2em;
        }

        #toast-container .rtl .toast-close-button {
            left: -0.2em;
            right: 0.2em;
        }
    }

    @media all and (min-width: 241px) and (max-width: 480px) {
        #toast-container>div {
            padding: 8px 8px 8px 50px;
            width: 18em;
        }

        #toast-container>div.rtl {
            padding: 8px 50px 8px 8px;
        }

        #toast-container .toast-close-button {
            right: -0.2em;
            top: -0.2em;
        }

        #toast-container .rtl .toast-close-button {
            left: -0.2em;
            right: 0.2em;
        }
    }

    @media all and (min-width: 481px) and (max-width: 768px) {
        #toast-container>div {
            padding: 15px 15px 15px 50px;
            width: 25em;
        }

        #toast-container>div.rtl {
            padding: 15px 50px 15px 15px;
        }
    }

    @media screen and (max-width: 1599px) {
        .read-tips .read-tips-keyboard {
            width: 140px;
        }

        .rtk-content .item {
            width: calc(100% - 20px);
        }

        .trending-list {
            margin: 0 0 10px;
            padding-left: 0;
            padding-right: 0;
        }

        .trending-navi {
            position: absolute;
            top: -55px;
            right: 0;
        }

        .trending-navi>div {
            position: relative;
            top: auto;
            left: auto !important;
            right: auto !important;
            bottom: auto !important;
            transform: none;
            display: block;
            height: 40px;
            width: 40px;
            margin-left: 6px;
            border-radius: 50%;
            background: {{ $setTheme->secondary_base_color }};
            text-align: center;
            float: right;
        }

        .trending-navi>div>i {
            position: relative;
            top: auto;
            left: 0;
            right: 0;
            transform: none;
            line-height: 40px;
            font-size: 1.2em;
            color: {{ $setTheme->text_color }};
        }

        body.darkmode .trending-navi>div {
            background: #4f4f4f;
            color: {{ $setTheme->text_color }};
        }

        body.darkmode .trending-navi>div.swiper-button-disabled {
            opacity: 0.5;
        }

        body.darkmode .trending-navi>div i {
            color: {{ $setTheme->text_color }};
        }

        .container {
            padding-left: 20px;
            padding-right: 20px;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image {
            width: calc(50% - 3px) !important;
        }
    }

    @media screen and (max-width: 1399px) {
        #sidebar_menu {
            z-index: 103;
        }

        .read-tips .read-tips-keyboard {
            left: 10px;
            bottom: 10px;
        }

        #search {
            width: 320px;
        }

        #discussion .d_w-icon {
            left: -150px;
        }

        #discussion .dis-wrap {
            padding-left: 230px;
        }

        .dwl-ul .swiper-container:after,
        .dwl-ul .swiper-container:before {
            display: none;
        }

        #header.header-reader .hr-navigation .rt-item.rt-read .btn .d-block,
        #header.header-reader .hr-navigation .rt-item.rt-read .btn .name {
            display: none !important;
        }

        .page-reader-ver #wrapper #header {
            position: fixed;
        }

        .page-reader-ver #wrapper.top-hide #header {
            position: absolute;
            transform: translateY(-100%);
        }

        .page-reader-ver #wrapper .mrt-top {
            position: fixed;
            opacity: 1;
        }

        .page-reader-ver #wrapper.top-hide .mrt-top {
            transform: translateY(-300%);
            opacity: 0;
        }

        #header.header-reader .hr-comment i:before {
            font-weight: 900;
            color: {{ $setTheme->button_color }};
        }

        body.darkmode .chapter-list-read .chapter-section {
            background-color: #222 !important;
        }

        body.darkmode .chapter-list-read .chapter-section .chapter-s-search .preform .form-control {
            background-color: #444 !important;
        }
    }

    @media screen and (max-width: 1299px) {
        #sub-header {
            display: none;
        }

        #mobile_menu {
            display: inline-block;
        }

        #mobile_search {
            display: inline-block;
            left: auto;
            right: 60px;
        }

        #header .btn-user {
            font-size: 0;
            padding: 0;
            width: 40px;
            margin-right: -8px;
        }

        #header .btn-user i {
            font-size: 24px;
            margin-right: 0 !important;
            line-height: 40px;
        }

        #main-wrapper {
            min-height: calc(100vh - 520px);
        }

        #header {
            height: 70px;
            padding: 0;
        }

        #header.home-header {
            padding: 0;
            height: 70px;
            margin-bottom: 0;
        }

        body.darkmode #header.home-header {
            background: {{ $setTheme->secondary_color }};
        }

        #header_menu ul.header_menu-list .nav-item>a {
            font-size: 14px;
        }

        #header_right {
            position: static;
            top: 0;
            background: 0 0;
        }

        #header_right.user-logged .hr-notifications {
            margin-right: 60px;
        }

        body.body-hidden {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }

        #header #logo span {
            font-size: 16px;
        }

        #search {
            top: 70px;
            left: 0;
            margin: 0;
            bottom: auto;
            width: 100%;
            display: block;
            position: absolute;
            background: {{ $setTheme->primary_base_color }};
            padding: 15px 10px;
            display: none;
        }

        body.darkmode #search {
            background: {{ $setTheme->secondary_color }};
        }

        body.darkmode .trending-list .item .number {
            background: 0 0 !important;
        }

        #search.active {
            right: auto;
            display: block;
        }

        #search .search-result-pop {
            left: -15px;
            right: -15px;
        }

        #search .search-result-pop .nav-item {
            padding: 15px;
        }

        #search .search-result-pop .nav-item .film-poster {
            width: 40px;
            padding-bottom: 55px;
        }

        #search .search-result-pop .nav-item .srp-detail {
            padding-top: 5px;
            padding-left: 55px;
        }

        #search .search-result-pop .nav-item .srp-detail .film-name {
            height: 16px;
            line-height: 1.2em;
            font-size: 14px;
        }

        #search .search-result-pop .nav-bottom {
            margin-left: 15px;
            margin-right: 15px;
            margin-bottom: 15px;
        }

        .search-content input.search-input {
            border-radius: 5px;
        }

        .header_right-user.logged .btn-avatar {
            width: 30px;
            height: 30px;
            margin: 5px 0;
        }

        .header_right-user.logged .dropdown-menu {
            top: 90%;
            border: none;
        }

        #header #logo {
            margin-left: 40px;
        }

        .deslide-wrap {
            margin-top: 0;
            padding-top: 0;
        }

        .deslide-wrap .container {
            padding: 0;
        }

        .text-home-main {
            margin-bottom: 15px;
        }

        .block_area .block_area-header .cat-heading {
            font-size: 20px !important;
        }

        .article-infor {
            font-size: 1em;
            line-height: 1.5em;
        }

        .article-infor .h4-heading {
            font-size: 1.2em;
        }

        #main-content,
        #main-sidebar {
            width: 100%;
            float: none;
            margin: 0 0 30px;
        }

        #mw-2col {
            margin: 0;
        }

        .anis-content .anisc-detail .manga-name {
            font-size: 30px;
        }

        .anis-content .anisc-detail .description-more {
            margin-bottom: 20px;
        }

        .read-tips-keyboard {
            left: 0;
            bottom: 0;
            background: rgba(19, 21, 28, 0.9);
            border-radius: 0 20px 0 0;
        }

        .navi-buttons.custom-left-hand {
            transform: none;
            left: 30px;
        }

        .navi-buttons.custom-right-hand {
            transform: none;
            margin: 0;
            right: 30px;
        }

        .read-tips-keyboard {
            display: none !important;
        }

        .ad-toggle {
            right: auto;
            left: 15px;
        }

        #ani_detail .anis-content {
            padding: 60px 0;
            min-height: 580px;
        }

        .anis-content .anisc-poster {
            top: 50px;
            width: 260px;
            left: auto;
            right: 30px;
        }

        .anis-content .anisc-poster .manga-poster {
            padding-bottom: 290px;
            border-radius: 20px;
            border: 4px solid {{ $setTheme->text_color }};
        }

        .anis-content .anisc-detail {
            min-height: auto;
            padding-left: 0;
        }

        #ani_detail .dt-rate {
            position: absolute;
            bottom: auto;
            top: 440px;
            right: 30px;
            max-width: 260px;
        }

        #ani_detail .dt-rate .block-rating {
            margin-top: 0;
        }

        .featured-block .featured-block-header {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .preform-center {
            margin: 0;
        }

        .manga_list-continue .mlc-wrap .item {
            width: calc(33.33% - 14px);
        }

        .page-read.page-read-hoz .container {
            top: 70px;
        }
    }

    @media screen and (max-width: 1199px) {
        .deslide-item .desi-head-title {
            font-size: 30px;
        }

        .deslide-item .desi-sub-text {
            font-size: 16px;
        }

        .deslide-item .deslide-item-content {
            padding: 0;
        }

        .deslide-item .deslide-poster {
            left: 625px;
            transform: none !important;
        }

        .deslide-item .deslide-poster {
            top: -100px !important;
        }

        .hr-navigation .rt-item .btn.btn-navi {
            font-size: 0;
            width: 30px;
            height: 30px;
            padding: 0;
        }

        .hr-navigation .rt-item .btn.btn-navi i {
            font-size: 13px;
            line-height: 30px;
            margin: 0 !important;
        }

        .hr-line,
        .hr-manga {
            display: none;
        }
    }

    @media screen and (max-width: 1023px) {
        #manga-featured {
            padding: 30px 0;
        }

        .deslide-item .deslide-poster {
            left: 580px;
            width: 300px;
            top: -70px !important;
        }

        .deslide-item .deslide-item-content {
            width: 460px;
        }

        .hr-fav {
            display: none;
        }

        .hr-info,
        .hr-setting {
            display: inline-block;
        }

        .hr-info {
            margin-right: 0 !important;
        }

        .read-setting {
            display: none;
        }

        .hr-navigation .dropdown-menu-fixed {
            margin-top: 20px;
        }

        .page-read.page-read-hoz .container {
            top: 70px;
        }

        .container-reader-hoz {
            bottom: 0;
            padding-bottom: 60px;
        }

        .container-reader-chapter {
            padding-top: 90px;
        }

        #header_menu {
            display: none;
        }

        #ani_detail .dt-rate,
        .anis-content .anisc-poster {
            right: 0;
        }

        #ani_detail .anis-content {
            padding-left: 0;
        }

        .actor-page-wrap .avatar {
            position: relative;
            top: auto;
            left: auto;
            margin: 0 auto 20px;
        }

        .actor-page-wrap {
            margin: 30px auto;
            padding-left: 0;
        }

        .actor-page-wrap .apw-detail .name,
        .actor-page-wrap .apw-detail .sub-name {
            text-align: center;
        }

        .text-home-main {
            display: none;
        }

        .text-home {
            padding: 15px 0;
            margin-bottom: 20px;
        }

        body.darkmode #text-home {
            background-color: {{ $setTheme->secondary_base_color }};
        }

        .social-home-block {
            margin-top: 0;
        }

        .mp-desc {
            display: none;
        }

        #manga-trending {
            padding: 0;
            background: 0 0;
        }

        #manga-trending .cat-heading {
            color: {{ $setTheme->text_color }};
        }

        body.darkmode #manga-trending {
            background: 0 0;
        }

        body.darkmode #manga-trending .cat-heading {
            color: {{ $setTheme->text_color }};
        }

        .trending-list .item .number {
            color: {{ $setTheme->text_color }};
        }

        body.darkmode .trending-list .item .number {
            color: {{ $setTheme->text_color }};
        }

        #slider .sc-detail .scd-item.scd-genres,
        .deslide-item .desi-sub-text,
        .swiper-navigation {
            display: none;
        }

        .manga_list-continue .mlc-wrap .item {
            width: calc(50% - 14px);
        }

        .manga_list-continue .mlc-wrap .item .ctn-item {
            border-radius: 10px;
        }

        .cmb-space {
            clear: both;
        }

        .hr-navigation {
            position: absolute;
            left: 200px;
            right: 160px;
            margin-left: 0;
        }

        .hr-navigation .dropdown-menu-fixed {
            width: auto;
            left: -200px !important;
            right: -160px !important;
        }

        #discussion .dis-wrap {
            padding-top: 20px;
            padding-left: 0;
        }

        #discussion {
            margin-bottom: 30px;
            margin-top: 0;
            background: #f3eefa;
        }

        #discussion .discussion-bg {
            display: none;
        }

        #discussion .d_w-icon {
            display: none;
        }

        body.darkmode #discussion {
            background: {{ $setTheme->secondary_base_color }};
        }

        body.darkmode .dwl-ul .dwl-item {
            background: {{ $setTheme->tertiary_base_color }};
        }

        .dwl-ul {
            min-height: auto;
        }

        .dwl-ul .swiper-slide {
            padding-bottom: 40px;
        }

        #discussion .dis-wrap {
            min-height: auto;
        }
    }

    @media screen and (max-width: 860px) {
        .container {
            padding: 0 15px;
        }

        #mobile_search {
            right: 50px;
        }

        #header #logo {
            margin-left: 40px;
        }

        .manga_list-sbs .mls-wrap .item {
            width: calc(100% - 14px);
        }

        .manga_list .manga_list-wrap .item {
            width: calc(25% - 14px) !important;
        }

        .manga_list .manga_list-wrap .item:nth-of-type(5n + 1) {
            clear: unset;
        }

        .manga_list .manga_list-wrap .item:nth-of-type(4n + 1) {
            clear: both;
        }

        .deslide-item .desi-head-title {
            font-size: 20px;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .deslide-item .deslide-poster .manga-poster {
            border: 10px solid {{ $setTheme->text_color }};
        }

        .deslide-item .deslide-poster {
            left: auto;
            right: -30px;
        }

        .text-home .btn-expand,
        .text-home .text-home-main {
            display: none;
        }

        .social-home-block {
            margin-top: 0;
        }

        #slider .sc-detail .scd-item.scd-genres {
            display: none;
        }

        .navi-buttons.custom-left-hand {
            left: 0;
        }

        .anis-content .anisc-poster {
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            width: 140px;
            z-index: 9;
            margin: 0 auto 15px;
        }

        .anis-content .anisc-poster .manga-poster {
            padding-bottom: 148%;
            border-radius: 15px;
        }

        .anis-content .anisc-detail {
            padding-right: 0;
            text-align: center;
            padding-left: 0;
            min-height: auto;
        }

        .anis-content .anisc-detail .manga-name {
            font-size: 24px;
        }

        .anis-content .anisc-detail .manga-buttons .btn {
            margin: 7px;
        }

        .manga-comment {
            display: block;
            margin: 1rem 0 0;
            text-align: center;
            padding: 0;
            border: none;
        }

        .manga-comment a.btn-comment {
            display: inline-block;
        }

        .anis-content .anisc-detail .description-more {
            text-align: left;
            margin-bottom: 20px;
        }

        #ani_detail .anis-content {
            padding: 50px 0 20px;
            min-height: auto;
        }

        .add-manga {
            margin: 15px -5px 0;
            font-size: 11px;
        }

        .add-manga>div {
            justify-content: center;
        }

        .anis-content .anisc-info-wrap {
            position: relative;
            min-height: 160px;
            padding-right: 280px;
            padding-top: 10px;
        }

        #ani_detail .dt-rate {
            top: 0;
            bottom: auto;
        }

        .block_area_chapters {
            margin: -30px -15px 30px;
            padding: 20px 15px;
        }

        .premodal-characters .character-list .cl-item {
            width: calc(50% - 10px);
        }

        .hr-navigation .rt-lang .btn span {
            display: none;
        }

        .fav-tabs>.pre-tabs-min {
            float: none;
            margin-bottom: 0.5rem;
        }

        .fav-tabs>.pre-tabs-min .nav-item {
            margin: 0 5px 5px 0;
        }

        .fav-tabs>.item-order {
            float: none;
            display: inline-block;
        }

        .cmbg-wrap {
            max-height: 250px;
            overflow: auto;
        }

        .cmbg-wrap .item {
            font-size: 12px;
            padding: 0 0.5rem;
            line-height: 1.5rem;
        }

        .cfc-min-block .cmb-item .ni-head {
            font-size: 12px;
            line-height: 28px;
        }

        .nli-select .custom-select {
            height: 28px;
            line-height: 28px;
            padding: 0;
        }

        .cfc-min-block .cmb-item {
            margin: 0 6px 6px 0;
            padding: 0 6px;
        }

        #discussion .pre-tabs .nav-item .nav-link {
            border: none !important;
        }

        #discussion .pre-tabs .nav-item .nav-link.active {
            background-color: {{ $setTheme->primary_color }} !important;
            color: {{ $setTheme->text_color }} !important;
        }

        .dwl-ul .dwl-item {
            width: 190px;
        }
    }

    @media screen and (max-width: 759px) {
        .deslide-item .deslide-item-content {
            width: calc(100% - 340px);
            padding: 0;
        }

        .page-reader .block-rating {
            max-width: 320px;
            margin: 30px auto !important;
        }

        .page-reader .sc-dt-rate .block-rating {
            margin: 0 !important;
            width: 100% !important;
        }

        .page-reader .block-rating>div {
            display: block;
        }

        .block-rating .rating-result {
            display: block;
        }

        .detail-toggle {
            display: block;
            text-align: center;
        }

        .detail-toggle .btn-light {
            background: 0 0 !important;
            color: {{ $setTheme->text_color }} !important;
            border: none !important;
            box-shadow: none !important;
        }

        .anis-content .anisc-detail .sort-desc>.description {
            margin-bottom: 0;
            -webkit-line-clamp: 3;
        }

        .anis-content .anisc-detail .description-more,
        .anis-content .anisc-detail .genres,
        .anis-content .anisc-detail .sort-desc>.description,
        .anisc-info-wrap .item {
            display: none;
        }

        #ani_detail .anis-content {
            padding-bottom: 90px;
        }

        .social-in-box {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #ani_detail .dt-rate {
            position: absolute;
            bottom: 0;
            left: -15px;
            right: -15px;
            top: auto;
            margin: 0;
            max-width: none !important;
            width: auto;
        }

        #ani_detail .dt-rate .block-rating {
            border-radius: 0;
            height: 85px;
        }

        #ani_detail .dt-rate .block-rating .description {
            text-align: center !important;
            /* padding-left: 15px;
        margin-bottom: 0; */
        }

        #ani_detail .dt-rate .block-rating .button-rate {
            text-align: center;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
        }

        #ani_detail .dt-rate .block-rating .button-rate>.btn {
            width: 75px;
            background: #8348cc;
            height: 100%;
            margin-left: 1px;
            padding: 0;
            opacity: 1;
        }

        #ani_detail .dt-rate .block-rating .button-rate button span {
            display: none;
        }

        #ani_detail .dt-rate .block-rating .rating-result {
            padding-bottom: 10px;
        }

        #ani_detail .dt-rate .block-rating .rating-result .rr-title {
            display: none;
        }

        #ani_detail .dt-rate .block-rating.rated .button-rate>.btn {
            background: 0 0;
        }

        #ani_detail .dt-rate .block-rating.rated .button-rate>.btn.emo-rated {
            background: #c89bff !important;
        }

        .anis-content .anisc-info-wrap {
            padding-right: 0;
            min-height: auto;
            padding-top: 0;
            position: static;
            font-size: 13px;
            text-align: center;
        }

        #ani_detail .anis-content.active .anisc-info-wrap .item {
            display: block;
            margin-bottom: 3px;
        }

        .anis-content.active .anisc-detail .description-more,
        .anis-content.active .anisc-detail .genres {
            display: block;
            text-align: center;
        }

        .anis-content.active .anisc-detail .sort-desc>.description {
            display: -webkit-box;
            text-align: justify;
        }

        .description-more {
            display: block;
            text-align: left;
            margin-bottom: 20px;
            margin-top: 5px;
        }

        .dt-rate {
            margin: 0 auto;
        }

        .anis-content .anisc-detail .manga-buttons,
        .anis-content .anisc-detail .manga-name-or {
            margin-bottom: 15px;
        }

        .hr-chapter {
            width: 240px;
        }

        #header.header-reader #logo {
            width: 50px;
            overflow: hidden;
        }

        .hr-navigation {
            left: 80px;
        }

        .hr-navigation .dropdown-menu-fixed {
            left: -80px !important;
        }

        .zr-news.zr-news-list .item .zr-news-thumb {
            width: 100%;
            padding-bottom: 56%;
            position: relative;
            top: auto;
            left: auto;
        }

        .zr-news.zr-news-list .item {
            padding-left: 0;
            min-height: auto;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .zr-news.zr-news-list .item .news-title {
            font-size: 16px;
        }

        .zr-news.zr-news-list .item .description {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .news-article .news-title {
            font-size: 2em;
        }

        .ds-image .sc-btn {
            text-align: center;
            transform: none;
            border: none;
            left: 0;
            right: 0;
            top: auto;
            bottom: 0;
            width: auto;
            background: #1a1a1a;
            background: linear-gradient(0deg, #1a1a1a 0, #111 100%);
        }

        .ds-image .sc-btn .block {
            font-size: 14px;
        }

        .ds-image .sc-btn .btn {
            font-size: 13px;
            padding: 6px 10px;
        }

        .sc-dt-rate {
            right: 0;
            width: 200px;
        }

        .below-rate {
            width: 200px;
        }

        .trending-list {
            margin: 0 -15px;
        }

        .trending-list .item .number {
            padding: 10px;
            font-weight: 600;
        }

        #slider .sc-detail,
        .featured-navi,
        .trending-list .item .number span,
        .trending-navi {
            display: none;
        }

        #manga-trending {
            margin-bottom: 15px;
        }

        #manga-featured {
            padding: 0;
        }

        .featured-list {
            margin: 0 -15px;
        }

        .mg-item-basic .manga-detail {
            padding: 10px;
        }

        .mg-item-basic .manga-name {
            -webkit-line-clamp: 3;
            margin-bottom: 5px !important;
        }

        .category_block .c_b-list .item:nth-of-type(n + 10) {
            display: none;
        }

        .mrt-top .read_tool {
            position: relative;
        }

        .mrt-top .read_tool .float-left {
            float: none !important;
            width: 100%;
            padding-right: 80px;
        }

        .mrt-top .read_tool .float-right {
            float: none !important;
            position: absolute;
            top: 10px;
            right: 0;
        }

        .dwl-ul .dwl-item>.comment-avatar {
            width: 30px;
            height: 30px;
        }

        .dwl-ul .dwl-item .about {
            padding-left: 40px;
        }
    }

    @media screen and (max-width: 640px) {
        .manga_list .manga_list-wrap {
            margin: 0 -5px;
        }

        .manga_list .manga_list-wrap .item {
            width: calc(33.33% - 10px) !important;
            margin: 0 5px 20px;
        }

        .manga_list .manga_list-wrap .item:nth-of-type(4n + 1) {
            clear: unset;
        }

        .manga_list .manga_list-wrap .item:nth-of-type(3n + 1) {
            clear: both;
        }

        .block_area-header .cate-sort {
            display: block;
            float: none;
            margin-top: 10px;
            text-align: center;
            width: 100%;
            border-radius: 6px;
        }

        .block_area-header .cate-sort .cs-item {
            margin: 0;
            float: none;
            display: inline-block;
        }

        .block_area .block_area-header .cat-heading {
            line-height: 1.3;
        }

        .page-category .block_area_category .block_area-header .bah-heading {
            float: none !important;
            text-align: center;
        }

        .page-category .block_area .block_area-description {
            text-align: center;
        }

        .mr-ranking {
            width: 60px;
            height: 60px;
        }

        .mr-ranking span {
            font-size: 2em;
        }

        .manga_list-sbs.one-item.ranking-list .mls-wrap .item {
            padding-right: 75px;
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-detail .fd-infor {
            margin-bottom: 5px;
        }

        .manga_list-sbs.one-item .mls-wrap .item .description {
            -webkit-line-clamp: 3 !important;
            font-size: 0.85em;
            line-height: 1.3;
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-detail {
            min-height: 130px;
            width: calc(100% - 110px);
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-detail .manga-name {
            margin-bottom: 5px;
            font-size: 16px;
            line-height: 1.25;
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-poster {
            width: 90px;
            padding-bottom: 130px;
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-detail .fd-list {
            position: relative;
            bottom: auto;
            left: auto;
            right: auto;
        }

        .dropdown-menu-model {
            min-width: 120px;
        }

        .read_tool .rt-item .dropdown-menu-model {
            min-width: 150px;
        }

        .read_tool .float-left .rt-item {
            margin: 5px 10px;
        }

        .mobile-show {
            display: block;
        }

        .read_tool .float-left .rt-item.mobile-hide {
            display: none;
        }

        .photo-pagination.custom-left-hand {
            right: 45px;
        }

        .navi-buttons.custom-right-hand {
            right: 45px;
        }

        .navi-setting {
            right: 5px;
        }

        .premodal-characters .character-list {
            max-height: 400px;
            overflow: auto;
            padding: 10px;
            background: #f5f5f5;
            border-radius: 6px;
        }

        .premodal-characters .character-list .cl-item {
            width: calc(100% - 10px);
            margin: 0 5px 5px;
        }

        .block_area_profile .block_area-content {
            padding: 0 30px;
        }

        .preform-center {
            padding-left: 0;
            max-width: none;
        }

        .preform-center .profile-avatar {
            position: relative;
            top: auto;
            left: auto;
            margin: 1.5rem auto 1.5rem;
        }

        .chapter-list-read .chapters-list-ul ul .item {
            width: calc(33.33% - 4px);
        }

        #home .top-home {
            padding: 50px 0 30px;
            margin-bottom: 20px;
        }

        .continue-home {
            margin-top: -20px;
        }

        #xsearch {
            margin-bottom: 30px;
        }

        #xsearch .search-content {
            padding-right: 60px;
            margin-bottom: 15px;
        }

        #xsearch .search-content input.search-input {
            height: 50px;
            font-size: 14px;
            padding: 1rem 1.5rem;
        }

        #xsearch .search-content .search-icon {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .xhashtag {
            padding-left: 0;
        }

        .xhashtag .item {
            margin: 0 2px 3px 0;
        }

        .xhashtag .item:nth-last-of-type(n + 5) {
            display: none;
        }

        .xhashtag .title {
            position: relative;
            left: auto;
            display: block;
            margin-bottom: 10px;
        }

        .xbuttons .btn {
            display: block;
        }

        .hr-navigation .rt-item.rt-navi {
            display: none;
        }

        .navi-buttons.custom-left-hand .nabu {
            width: 100px;
            text-align: center !important;
        }

        .navi-buttons.custom-left-hand .nabu.nabu-right {
            right: auto;
            left: 0;
        }

        .navi-buttons.custom-left-hand .nabu.nabu-left {
            left: 100px;
        }

        .navi-buttons.custom-left-hand .navi-button {
            margin: 0 20px;
        }

        .navi-buttons.custom-left-hand .nabu-page {
            top: 50%;
            left: auto;
            right: 50px;
            transform: translateY(-50%);
        }

        .continue-list {
            margin: 0 -15px;
        }

        .ctn-item {
            border-radius: 0;
            padding: 20px 15px;
            text-align: center;
            font-size: 13px;
        }

        .ctn-item .ctn-detail .dr-remove {
            right: -5px;
        }

        .ctn-item .ctn-detail .manga-poster {
            float: none;
            border-radius: 5px;
            margin: 0 auto;
        }

        .ctn-item .ctn-detail .manga-detail {
            margin: 10px 0 0;
            min-height: 120px;
            position: static;
        }

        .ctn-item .ctn-detail .manga-detail .manga-name {
            padding-right: 0;
            font-size: 1.2em;
            font-weight: 500;
        }

        .page-category .block_area_category .manga_list-sbs {
            margin-top: 30px;
        }

        .container-404 .c5-big-img img {
            max-width: 200px;
        }

        .block_area_mal {
            margin: 0 auto 30px;
        }

        .block_area .block_area-header-tabs .pre-tabs {
            margin-top: -3px;
        }
    }

    @media screen and (max-width: 575px) {
        .category_block .c_b-wrap {
            background: 0 0;
            padding: 0;
        }

        .category_block-home {
            margin-top: 0;
            margin-bottom: 30px;
        }

        .category_block .c_b-list .item:nth-of-type(n + 10) {
            display: none;
        }

        #manga-featured {
            padding-bottom: 0;
            margin-bottom: 30px;
        }

        .featured-blocks .featured-block {
            width: calc(100% - 40px);
            float: none;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 3px solid #2a2e3c;
        }

        #slider {
            padding-bottom: 200px;
        }

        .hr-chapter .hrc-block .manga-name {
            display: none;
        }

        .hr-chapter {
            width: 180px;
        }

        .dropdown-menu-model.dmm-chapters {
            min-width: 180px;
        }

        .dropdown-menu-model.dmm-chapters .dropdown-item {
            padding: 8px 12px;
        }

        .hr-chapter {
            float: right;
        }

        .deslide-item .desi-head-title {
            font-size: 18px;
            margin-bottom: 0.75rem;
        }

        .deslide-item .desi-description {
            font-size: 12px;
            line-height: 1.3;
            -webkit-line-clamp: 3;
            margin-bottom: 0.75rem;
        }

        .deslide-item .desi-buttons .btn {
            margin-top: 5px;
            min-width: 83px;
        }

        .deslide-item .desi-sub-text {
            font-size: 14px;
        }

        .desi-buttons .btn {
            line-height: 30px;
            padding: 0 10px;
            font-size: 12px;
        }

        .deslide-item .deslide-poster {
            width: 200px;
            top: -50px !important;
        }

        .deslide-item .deslide-item-content {
            width: calc(100% - 240px);
        }

        .hr-fav {
            display: none;
        }

        .hr-navigation .rt-item .btn {
            font-size: 12px;
        }

        .hr-navigation .rt-item.mr-4 {
            margin-right: 0 !important;
        }

        .read_tool {
            padding: 5px;
        }

        .hrr-btn {
            height: 30px;
            width: 30px;
            line-height: 30px;
            margin: 20px 0;
        }

        .hr-navigation {
            right: 120px;
        }

        .hr-navigation .dropdown-menu-fixed {
            right: -120px !important;
        }

        .photo-pagination {
            width: 160px;
        }

        .text-home .text-home-main {
            font-size: 12px;
            line-height: 1.4em;
        }

        .photo-navigation .photo-button {
            width: 80px;
        }

        .contact-form .btn.btn-lg {
            display: block;
        }

        .contact-social-icons {
            text-align: center;
            overflow: hidden;
        }

        .contact-social-icons .btn {
            padding: 6px 15px !important;
            font-size: 13px;
            float: left;
            margin: 0 5px 5px 0;
        }

        .sbs-text .sbst-row .title {
            float: none;
            width: 100%;
            margin-bottom: 10px;
        }

        .sbs-text .sbst-row .title span {
            text-align: left;
            padding: 0;
        }

        .block_area .block_area-header-tabs .bah-tab {
            clear: both;
            overflow: hidden;
            margin-left: 0;
            margin-top: 10px;
        }

        .block_area .block_area-header-tabs .pre-tabs {
            margin-top: 0;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item:nth-child(3) {
            display: none;
        }

        #discussion .display-toggle {
            padding: 3px 0;
            right: -10px;
        }

        #discussion .display-toggle .to-text {
            display: none;
        }

        #discussion.ds-hide .display-toggle .to-text {
            display: block;
        }
    }

    @media screen and (max-width: 480px) {
        .manga_list .manga_list-wrap {
            margin: 0 -10px;
        }

        .manga_list .manga_list-wrap .item {
            width: calc(33.33% - 6px) !important;
            margin: 0 3px 15px;
        }

        .manga_list-sbs .mls-wrap {
            margin: 0 -15px;
        }

        .manga_list-sbs.one-item .mls-wrap .item {
            width: 100%;
        }

        .mr-ranking {
            width: 40px;
        }

        .mr-ranking span {
            font-size: 18px;
        }

        .manga_list-sbs.one-item.ranking-list .mls-wrap .item {
            padding-right: 45px;
        }

        .manga_list-sbs .mls-wrap .item {
            padding: 0 15px;
            margin: 0 0 30px;
            width: calc(100%);
        }

        body.darkmode .manga_list-sbs .mls-wrap .item {
            background: 0 0;
            padding: 0 15px;
        }

        .manga_list-sbs .mls-wrap .item.item-recent {
            margin-bottom: 30px !important;
        }

        .manga_list-sbs .mls-wrap .item .manga-poster {
            width: 80px;
            padding-bottom: 120px;
            bottom: auto;
            left: 15px;
            top: 0;
        }

        body.darkmode .manga_list-sbs .mls-wrap .item .manga-poster {
            left: 15px;
            top: 0;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail {
            width: calc(100% - 95px);
            min-height: 120px;
            padding-right: 0;
        }

        .manga_list-sbs.ranking-list .mls-wrap .item .manga-detail {
            padding-right: 20px;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .manga-name {
            min-height: auto;
            margin-bottom: 5px;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .fd-list {
            position: relative;
            bottom: auto;
            right: auto;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .fd-infor {
            margin-bottom: 0;
        }

        .manga_list-sbs .mls-wrap .item .description {
            line-height: 1.4em;
            display: none;
        }

        .item-spc-tabs .s-tabs {
            margin-top: 8px;
        }

        .category_block .c_b-list.alphabet-list .cbl-row {
            margin: 0 -3px;
        }

        .category_block .c_b-list.alphabet-list .cbl-row .item {
            width: calc(16.66% - 6px);
            margin: 0 3px 6px;
        }

        .category_block .c_b-list.alphabet-list .cbl-row .item a {
            min-width: auto;
            width: 100%;
            padding: 0;
        }

        .prebreadcrumb {
            display: none;
        }

        #ani_detail {
            margin-top: -25px;
        }

        .dt-rate {
            max-width: unset;
        }

        .deslide-item .deslide-poster {
            width: 180px;
            right: -35px;
            top: -20px !important;
        }

        .deslide-item .deslide-item-content {
            width: calc(100% - 180px);
            left: 15px;
        }

        .anis-content .anisc-detail .manga-name {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .anis-content .anisc-detail .manga-name-or {
            font-size: 16px;
        }

        .anis-content .anisc-detail .manga-buttons .btn {
            font-size: 14px;
            font-weight: 500;
        }

        .featured-blocks .featured-block-ul li {
            padding: 20px 0 20px 80px;
        }

        .mobile-show {
            display: block;
        }

        .read-tips-layout {
            left: 0;
            right: 0;
            transform: translateY(-50%);
            margin: 0 auto;
        }

        .chapters-list-ul ul .item .item-read {
            display: none;
        }

        .chapters-list-ul ul .item a {
            padding: 10px 10px 10px 30px;
            font-size: 0.9em;
        }

        .anis-content .anisc-detail .manga-name-or {
            font-size: 12px;
        }

        .chap-tabs {
            border-bottom: none;
            border-radius: 0;
            overflow: hidden;
        }

        .chap-tabs .nav-item {
            width: 50%;
            text-align: center;
            margin: 0;
        }

        .chap-tabs .nav-item .nav-link {
            background: #f5f5f5;
            border-radius: 0;
        }

        #manga-featured .block_area {
            margin-bottom: 0;
        }

        body.darkmode .chap-tabs .nav-item .nav-link {
            background: {{ $setTheme->primary_base_color }};
        }

        body.darkmode .chap-tabs .nav-item .nav-link.active {
            background: {{ $setTheme->primary_color }};
        }

        body.darkmode .chapter-section .chapter-s-search .preform .form-control {
            background: rgba(255, 255, 255, 0.1) !important;
        }
    }

    @media screen and (min-width: 480px) {
        .cbox.cbox-list .featured-block-chart li .manga-detail .fdi-view {
            position: absolute;
            bottom: 15px;
            right: 0;
            padding: 0 6px;
            border: 1px solid {{ $setTheme->text_color }};
            border-radius: 4px;
            color: #aaa;
        }

        .cbox.cbox-list .featured-block-chart li .manga-detail .fdi-cate {
            display: inline;
        }
    }

    @media screen and (max-width: 479px) {
        .social-home-block .addthis_inline_share_toolbox {
            float: none;
            clear: both !important;
            padding-top: 10px;
        }

        .social-home-block .at-share-btn {
            margin: 0 5px 0 0 !important;
        }

        .social-home-block .at-share-btn .at-icon-wrapper,
        .social-in-box .at-share-btn .at-icon-wrapper {
            width: 24px !important;
            height: 24px !important;
            line-height: 24px !important;
        }

        .social-home-block .at-share-btn .at-icon-wrapper svg,
        .social-in-box .at-share-btn .at-icon-wrapper svg {
            width: 24px !important;
            height: 24px !important;
        }

        .manga_list-sbs .mls-wrap .item .tick-item.tick-rate {
            display: none;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .manga-name {
            font-size: 16px;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .release-time {
            display: none;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .chapter {
            float: none;
        }

        .manga_list-sbs .mls-wrap .item .manga-detail .fd-list .fdl-item .chapter a {
            max-width: 100%;
        }

        .block_area_fav .item .dr-fav {
            right: -15px;
            z-index: auto;
        }

        .block_area_fav .manga_list-sbs .mls-wrap .item {
            width: calc(100% - 30px);
        }

        .table_schedule .table_schedule-list li .manga-detail .fd-play {
            position: relative;
            top: auto;
            right: auto;
            transform: none;
        }

        .table_schedule .table_schedule-list li .manga-detail .fd-play button {
            padding: 0;
            background: 0 0 !important;
            color: {{ $setTheme->primary_color }} !important;
        }

        body.darkmode .table_schedule .table_schedule-list li .manga-detail .fd-play button {
            background: 0 0 !important;
            color: {{ $setTheme->text_color }} !important;
        }

        .table_schedule .table_schedule-list li .manga-detail {
            padding-right: 0;
        }

        #header #logo {
            height: 40px;
            margin: 15px 0 15px 40px;
        }

        .fdi-chapter {
            font-size: 12px;
        }

        .premodal-login .modal-content .modal-body {
            padding: 20px;
        }

        .read_tool .rt-item {
            margin: 5px 3px !important;
        }

        .hrr-btn {
            margin: 10px 0;
        }

        #header.header-reader {
            height: 50px;
        }

        #header.header-reader .container {
            padding: 0 5px;
        }

        #header.header-reader #logo {
            height: 40px;
            width: 40px;
            /* margin: 5px 0 5px 0; */
            position: relative;
        }

        .hr-navigation .dropdown-menu-fixed {
            margin-top: 10px;
        }

        .hr-right {
            margin-right: -5px;
        }

        .hr-right>div {
            margin-right: 5px !important;
        }

        .hr-right>div>.hrr-btn {
            background: 0 0;
            font-size: 16px;
        }

        .mrt-top {
            top: 50px;
            left: auto;
            width: 220px;
        }

        .mrt-top .container {
            padding: 0;
        }

        .mrt-top .read_tool {
            border-radius: 0 0 0 6px;
            padding: 0 0 5px;
            background: #222;
        }

        .mrt-top .read_tool .float-left {
            float: none !important;
            width: 100%;
        }

        .mrt-top .read_tool .float-left .rt-item {
            float: none;
            margin: 0 !important;
            width: 100%;
            padding: 5px 5px 0;
        }

        .mrt-top .read_tool .float-left .rt-item .btn {
            display: block;
            width: 100%;
        }

        .container-reader-chapter {
            padding-top: 65px;
        }

        .page-read.page-read-hoz .container {
            top: 50px;
        }

        .hr-navigation .rt-item {
            margin-right: 5px !important;
        }

        .hr-navigation .rt-item .btn {
            height: 30px;
            line-height: 30px;
            border: none !important;
        }

        .hr-navigation .rt-chap .btn i,
        .hr-navigation .rt-lang .btn i,
        .hr-right>div.hr-info {
            display: none !important;
        }

        .hr-navigation {
            margin: 10px 0;
            left: 55px;
            right: 75px;
        }

        .hr-navigation .dropdown-menu-fixed {
            left: -55px !important;
            right: -75px !important;
        }

        .mrt-bottom .read_tool .float-left,
        .mrt-bottom .read_tool .float-right {
            float: none !important;
            display: block;
        }

        .mrt-bottom .read_tool .float-left .rt-item {
            margin: 0 0 10px !important;
            width: 100% !important;
        }

        .mrt-bottom .read_tool .float-right .rt-item {
            width: 100%;
            margin: 0 !important;
        }

        .mrt-bottom .read_tool .rt-item button {
            width: 100%;
        }

        .hr-navigation .dropdown-menu-model .dropdown-item,
        .mr-tools .dropdown-menu-model .dropdown-item {
            font-size: 12px;
        }

        .page-reader .dt-rate {
            margin: 30px auto !important;
            max-width: none;
        }

        .page-reader .block-rating {
            width: calc(100% - 30px);
            max-width: none;
            margin: 0 15px !important;
        }

        .navi-buttons .navi-button {
            font-size: 16px;
        }

        .photo-pagination.swiper-pagination-fraction {
            font-size: 14px;
        }

        .mr-tools.mrt-bottom .read_tool .rt-item .btn {
            padding: 10px 15px;
        }

        .page-schedule .manga-poster {
            display: none;
        }

        .page-schedule .table_schedule .table_schedule-list li .manga-detail {
            padding-left: 50px;
        }

        .page-schedule .table_schedule .table_schedule-list li {
            padding: 15px 20px;
        }

        .block_area_profile .block_area-content {
            padding: 0;
        }

        .news-article .news-title {
            font-size: 1.6em;
        }

        .news-article {
            font-size: 14px;
        }

        .chapter-section .chapter-s-lang,
        .chapter-section .chapter-s-search {
            float: none;
            width: 100%;
        }

        .chapter-section .chapter-s-lang {
            margin-bottom: 10px;
        }

        .chapter-list-read .chapters-list-ul ul .item {
            width: calc(50% - 4px);
        }

        .chapter-list-read .chapters-list-ul ul .item a {
            padding: 3px 10px;
        }

        .manga_list .manga_list-wrap .item .manga-detail .manga-name {
            font-size: 0.85em;
        }

        .manga_list .manga_list-wrap .item .manga-detail .fd-infor {
            font-size: 0.85em;
        }

        #ani_detail .anis-content {
            padding-bottom: 100px;
        }

        #ani_detail .dt-rate .block-rating {
            height: 100px;
        }

        /* #ani_detail .dt-rate .block-rating .description {
        max-width: 180px;
    } */
        #ani_detail .dt-rate .block-rating .button-rate {
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
        }

        #ani_detail .dt-rate .block-rating .button-rate>.btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 5px;
        }

        #ani_detail .dt-rate .block-rating.rated .button-rate>.btn.emo-rated {
            background: {{ $setTheme->text_color }} !important;
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-poster {
            width: 80px;
            padding-bottom: 110px;
        }

        .manga_list-sbs.one-item .mls-wrap .item .manga-detail {
            min-height: 110px;
            width: calc(100% - 95px);
        }

        .dropdown-menu-noti {
            right: -60px !important;
        }

        .sc-header .sc-h-title {
            font-size: 1.1em;
        }

        .comment-input,
        .comment-input .ci-buttons .cb-li .btn,
        .cw_l-line .ibottom .ib-li .btn,
        .cw_list .cw_l-line,
        .rep-more .btn {
            font-size: 12px;
        }

        .cw_l-line .ibottom .ib-li .dropdown-menu-model {
            transform: none !important;
            top: 100% !important;
            right: 0 !important;
            left: auto !important;
        }

        .cw_l-line .ibottom .ib-li .dropdown-menu-model .dropdown-item {
            font-size: 12px;
        }

        .mrt-top .read_tool .float-left {
            padding-right: 0;
        }

        .mrt-top .read_tool .float-right {
            position: relative;
            top: auto;
            right: auto;
            text-align: right;
        }

        .continue-home {
            padding-bottom: 0;
            border-bottom: none;
        }

        .avatar-list .item {
            width: calc(33.33% - 20px);
        }

        .block_area_mal {
            padding: 20px;
            border-radius: 10px;
        }

        .block_area_mal .description p {
            font-size: 12px;
            line-height: 1.3;
            margin-bottom: 0.5rem !important;
        }

        .d-block-border {
            box-shadow: none;
            padding: 0;
            border-radius: 0;
            padding-bottom: 2rem;
            margin-bottom: 2rem;
            border-bottom: 2px solid #eee;
        }

        body.darkmode .d-block-border {
            background: 0 0 !important;
            border-color: {{ $setTheme->secondary_base_color }} !important;
        }

        .page-read .container {
            padding: 0;
        }

        #discussion .pre-tabs .nav-item {
            margin-right: 10px;
        }

        #discussion .pre-tabs .nav-item .nav-link {
            font-size: 12px;
            padding: 6px 8px;
            min-width: auto;
        }

        .dwl-ul {
            margin-left: -15px;
            margin-right: -15px;
        }

        .dwl-ul .swiper-container {
            padding: 0 15px;
        }

        .dwl-ul .dwl-item .text-cut {
            font-size: 1.1em;
        }

        .dwl-ul .dwl-item {
            width: 180px;
        }

        .sc-header .sc-h-title span {
            display: none;
        }

        .comments-wrap .sc-header {
            padding-right: 0;
        }

        .emo-list {
            width: 300px;
        }

        .emo-list .el-item {
            padding: 15px 0;
            font-size: 24px;
        }
    }

    @media screen and (max-width: 380px) {
        .deslide-item .deslide-poster {
            width: 160px;
            right: auto;
            left: 240px;
            top: -20px !important;
        }

        .manga_list .manga_list-wrap .item {
            width: calc(50% - 10px) !important;
            margin: 0 5px 20px;
        }

        .manga_list .manga_list-wrap .item:nth-of-type(3n + 1) {
            clear: unset;
        }

        .manga_list .manga_list-wrap .item:nth-of-type(2n + 1) {
            clear: both;
        }

        .ctn-item .ctn-detail .manga-detail .reading-load .rl-text span {
            display: none;
        }

        .comment-input .user-avatar,
        .cw_list .cw_l-line .user-avatar {
            width: 30px;
            padding-bottom: 30px;
        }

        .comment-input,
        .cw_list .cw_l-line {
            padding-left: 45px;
        }
    }

    @media screen and (max-width: 340px) {
        /* .hr-navigation .rt-item .btn i {
            display: none;
        } */

        .chapter-list-read .chapters-list-ul ul .item {
            width: calc(50% - 4px);
        }
    }

    @media screen and (min-width: 1400px) {
        body.page-reader {
            padding-left: 220px;
        }

        #header.header-reader {
            position: fixed;
            //background: #222 !important;
            right: auto;
            bottom: 0;
            width: 220px;
            height: 100%;
        }

        #header.header-reader .container {
            padding: 0 15px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        #header.header-reader #logo {
            width: 80%;
            margin: 15px 0 0;
            height: auto;
            float: none;
        }

        #header.header-reader #logo img {
            height: auto;
            width: 100%;
        }

        #header.header-reader .hr-line {
            float: none;
            width: 100%;
            height: 1px;
            margin: 15px 0;
        }

        #header.header-reader .hr-manga {
            width: 100%;
            float: none;
            margin-bottom: 20px;
            display: block;
            height: auto;
        }

        #header.header-reader .hr-manga .manga-name {
            transform: none;
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            bottom: auto;
            -webkit-line-clamp: 4;
            font-size: 16px;
            line-height: 1.4em;
        }

        #header.header-reader .hr-navigation {
            float: none;
            margin: 20px 0;
        }

        #header.header-reader .hr-navigation .rt-item {
            float: none;
            margin: 10px 0;
            width: 100%;
            height: auto;
        }

        #header.header-reader .hr-navigation .rt-item .btn {
            width: 100%;
            display: block;
            height: auto;
            padding: 0.25rem;
            font-size: 13px !important;
            background: #333;
            color: {{ $setTheme->text_color }};
        }

        #header.header-reader .hr-navigation .rt-item.rt-navi {
            float: left;
            width: calc(50% - 7.5px);
        }

        #header.header-reader .hr-navigation .rt-item.rt-navi .btn {
            background: #444 !important;
            color: {{ $setTheme->text_color }} !important;
        }

        #header.header-reader .hr-navigation .rt-item.rt-navi.right {
            margin-left: 15px;
        }

        #header.header-reader .hr-navigation .rt-item.rt-read {
            margin-bottom: 20px;
        }

        #header.header-reader .hr-navigation .rt-item.rt-read .btn {
            background: 0 0 !important;
            color: {{ $setTheme->button_color }} !important;
            line-height: 1;
            text-align: left;
            padding: 0;
            padding-left: 20px;
            border-radius: 0;
            border-left: 2px solid {{ $setTheme->button_color }} !important;
        }

        #header.header-reader .hr-navigation .rt-item.rt-read .btn .d-block {
            line-height: 1;
            font-size: 11px;
            margin-bottom: 6px;
            color: {{ $setTheme->text_color }} !important;
        }

        #header.header-reader .hr-navigation .rt-item.rt-read .btn .m-show {
            display: none;
        }

        #header.header-reader .hr-right {
            float: none;
            width: 100%;
            left: 0;
            right: 0;
            padding-left: 10px;
            padding-right: 10px;
            position: absolute;
            bottom: 70px;
            padding-top: 80px;
        }

        #header.header-reader .hr-right>div {
            float: none;
            margin: 5px 0 !important;
        }

        #header.header-reader .hr-right>div>.hrr-btn {
            margin: 0;
            width: 100%;
            text-align: left;
            padding: 0;
            background: 0 0;
        }

        #header.header-reader .hr-right>div>.hrr-btn i {
            width: 30px;
            text-align: center;
        }

        #header.header-reader .hr-comment {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 15px;
            width: 100%;
        }

        body.darkmode #header.header-reader .hr-comment {
            background: rgba(0, 0, 0, 0.1) !important;
        }

        #header.header-reader .hr-comment i {
            font-size: 36px;
            width: 40px !important;
            margin-right: 10px;
            float: left;
            color: {{ $setTheme->button_color }};
        }

        #header.header-reader .hr-comment span.number {
            font-size: 20px;
            line-height: 20px;
            font-weight: 700;
            display: block;
        }

        #header.header-reader .hr-comment .btn .hrr-name {
            margin: 0;
            position: absolute;
            top: 37px;
            line-height: 1;
        }

        .hr-right .hrr-btn .hrr-name {
            display: inline-block;
        }

        .hr-comment .btn .hrr-name {
            margin-left: 0;
        }

        .hr-setting .btn .hrr-name {
            margin-left: 10px;
        }

        .hr-info .btn .hrr-name {
            margin-left: 10px;
        }

        .hr-fav .btn .hrr-name {
            margin-left: 10px;
        }

        .container-reader-chapter {
            padding-top: 20px;
        }

        .container-reader-hoz {
            bottom: 0;
        }

        .mrt-top {
            top: 0;
            position: fixed;
            left: 220px;
        }

        .mrt-top .read_tool {
            display: block !important;
            opacity: 0;
            top: -90px;
        }

        .mrt-top .read_tool.active {
            opacity: 1;
            top: 0;
        }

        .page-read.page-read-hoz .container {
            top: 0;
        }

        .read-tips .read-tips-follow {
            left: calc(50% + 110px);
        }

        #rt-close {
            display: inline-block;
        }

        .read-tips-layout {
            left: calc(50% + 110px);
        }

        .hr-navigation .dropdown-menu-fixed {
            top: 0 !important;
            left: 220px !important;
            bottom: 0 !important;
            height: 100% !important;
            max-height: none !important;
            box-shadow: none !important;
        }

        .chapter-list-read .chapter-section {
            border-top: none;
        }

        .chapter-list-read .chapters-list-ul ul {
            padding: 0;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .chapter-list-read .chapters-list-ul ul::-webkit-scrollbar {
            display: none;
        }

        .chapter-list-read .chapters-list-ul ul .item {
            width: 100%;
            margin: 0 0 1px 0;
        }

        .chapter-list-read .chapters-list-ul ul .item a {
            padding-left: 30px;
        }

        .chapter-list-read .chapters-list-ul ul .item .arrow {
            display: inline-block;
        }

        .chapter-list-read .chapters-list-ul ul .item .item-read {
            display: none;
        }

        .chapter-section .chapter-s-search .css-icon {
            font-size: 12px;
        }

        .ad-toggle {
            display: inline-block;
        }

        .page-reader.pr-full {
            padding-left: 62px;
        }

        .page-reader.pr-full #header {
            width: 62px;
            animation-delay: 1s;
        }

        .page-reader.pr-full #header .auto-div {
            display: none !important;
        }

        .page-reader #header .auto-div {
            display: block;
        }

        .page-reader.pr-full #header:hover .auto-div {
            display: block;
        }

        .page-reader.pr-full .mrt-top {
            left: 62px;
        }

        .page-reader.pr-full .read-tips-layout {
            left: calc(50% + 31px);
        }
    }

    @media screen and (min-width: 1024px) {
        .trending-list .tick-item.tick-lang {
            display: none;
        }

        .read-tips-keyboard {
            z-index: 104;
            bottom: 0;
            right: 0;
            width: 140px;
            opacity: 1 !important;
            background: #222;
        }

        .read-tips-keyboard.rtk-hide {
            width: 32px;
            right: 20px;
        }

        .rtk-content .title {
            font-size: 16px;
        }

        .rtk-content .item {
            width: calc(100% - 20px);
            margin: 5px 10px;
        }

        body.darkmode .social-home-block {
            padding: 15px;
            padding-left: 90px;
            border-radius: 10px;
            background: {{ $setTheme->secondary_base_color }};
        }

        body.darkmode .social-home-block .shb-icon {
            top: 14px;
            left: 20px;
        }
    }

    @media screen and (min-width: 1600px) {
        body.page-reader {
            padding-left: 260px;
        }

        #header.header-reader {
            width: 260px;
        }

        .mrt-top {
            left: 260px;
        }

        .hr-navigation .dropdown-menu-fixed {
            left: 260px !important;
        }
    }

    @media screen and (min-width: 1200px) {
        #main-wrapper.page-read-hoz {
            height: 100vh !important;
        }
    }

    @media screen and (max-height: 680px) {

        .ad-toggle,
        .hr-fav,
        .hr-info,
        .read-tips-keyboard {
            display: none;
        }

        #header.header-reader .hr-right {
            bottom: 0 !important;
        }
    }

    @media screen and (min-width: 861px) {
        .container-reader-hoz .ds-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #111;
        }

        .container-reader-hoz .ds-image .image-horizontal {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            object-fit: contain;
            z-index: 2;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image {
            width: calc(50% - 5px);
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 5%;
            z-index: 9;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-a {
            left: 0;
            right: auto;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-a::before {
            right: 0;
            background: #111;
            background: linear-gradient(90deg,
                    rgba(17, 17, 17, 0) 0,
                    rgba(17, 17, 17, 0.4) 100%);
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-a .image-horizontal {
            object-position: center right;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-b {
            right: 0;
            left: auto;
            display: block;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-b::before {
            left: 0;
            background: #111;
            background: linear-gradient(90deg,
                    rgba(17, 17, 17, 0.4) 0,
                    rgba(17, 17, 17, 0) 100%);
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-b .image-horizontal {
            object-position: center left;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-a .card-loading .c-l-area {
            transform: translateY(-50%);
            left: auto;
            right: 0;
        }

        .container-reader-hoz .ds-item.ds-sbs .ds-image.dsi-b .card-loading .c-l-area {
            transform: translateY(-50%);
            right: auto;
            left: 0;
        }

        .nabu-fill {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            z-index: 100;
            overflow: hidden;
            display: block;
        }

        .nabu-fill .nf-item {
            width: 32px;
            text-align: center;
            position: relative;
            height: 24px;
            padding: 0 0 10px;
            float: left;
            cursor: pointer;
        }

        .nabu-fill .nf-item.active::before {
            content: "";
            width: 18px;
            height: 2px;
            background: {{ $setTheme->button_color }};
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
        }

        .nabu-fill .nf-item.active span {
            background: #666 !important;
        }

        .nabu-fill .nf-item span {
            display: inline-block;
            margin: 0 1px;
            height: 14px;
            background: #333;
        }

        .nabu-fill .nf-item.nf-single span {
            width: 10px;
            border-radius: 2px;
        }

        .nabu-fill .nf-item.nf-double span {
            width: 8px;
            border-radius: 2px 0 0 2px;
        }

        .nabu-fill .nf-item.nf-double span:nth-child(2) {
            border-radius: 0 2px 2px 0;
            opacity: 0.8;
        }
    }

    @media screen and (max-width: 860px) {
        .container-reader-hoz .ds-item.ds-sbs .ds-image {
            width: 100% !important;
        }
    }

    .grecaptcha-badge {
        display: none !important;
    }

    .adsbyvli {
        margin: 1rem auto !important;
    }

    .icon-class {
        position: relative;
    }

    .icon-class span {
        position: absolute;
        top: 0px;
        right: 0px;
        display: block;
    }


    @media screen and (max-width: 760px) {
        #header #logo img {
            height: auto;
            width: 100%;
            float: left;
        }
    }
    /* @media screen and (max-width: 480px) {
        #logo .logo-read
        {
            margin-top: 12px;
        }
    } */
</style>
