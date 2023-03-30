@extends('layouts.web')
@section('title', '404')
@section('content')
<style>
    body {
        background: #1F1F1F;
    }

    .page-wrap {
        min-height: 100vh;
    }
</style>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <img src="/assets/img/blank.png" style="max-height: 200px">
                <h2 class="my-4 lead font-weight-bold text-white">Tidak ada data yang ditemukan.</h2>
            </div>
        </div>
    </div>
</div>
@endsection
