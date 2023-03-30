@extends('layouts.web')
@section('title', App\Models\SEO::select('title')->first()->title)
@section('content')
    <style>
        body {
            background: #1F1F1F;
        }

        .page-wrap {
            min-height: 50vh;
        }
    </style>
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <h2>{{ $page->title }}</h2>
                <div class="col-md-12 mt-5">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
