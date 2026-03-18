@extends ('layouts.master')

@section ('title')
home
@endsection

@php
$comics = config('comics');
$primiSei = array_slice($comics, 0, 6);
@endphp


@section ('content')
<div class="jumbo">
    <x-button class="btn-current-series">
        CURRENT SERIES
    </x-button>
</div>
<div class="section-comics-home">
    <div class="container p-5">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 g-lg-4">
            @foreach ($primiSei as $comic)
            <div class="col">
                <x-card>
                    <x-slot:img>{{$comic["thumb"]}}</x-slot>
                        <x-slot:title>{{$comic["title"]}}</x-slot>
                </x-card>
            </div>

            @endforeach
        </div>
    </div>
</div>
<section class="shop-banner">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-auto d-flex align-items-center px-4">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="col-auto d-flex align-items-center px-4">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="col-auto d-flex align-items-center px-4">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
                </li>
                <div class="col-auto d-flex align-items-center px-4">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="col-auto d-flex align-items-center px-4">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
</section>
<div class="footer-top">
    <div class="container position-relative">

        <div class="row py-5">
            <div class="col-auto me-5">
                <h4 class="text-white fw-bold mb-3">DC COMICS</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                </ul>

                <h4 class="text-white fw-bold mt-4 mb-3">SHOP</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
            </div>

            <div class="col-auto me-5">
                <h4 class="text-white fw-bold mb-3">DC</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                </ul>
            </div>

            <div class="col-auto">
                <h4 class="text-white fw-bold mb-3">SITES</h4>
                <ul class="list-unstyled">
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-logo-bg"></div>

    </div>
</div>

@endsection