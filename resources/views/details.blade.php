@extends('layout.home')

@php
 $menu = [
        [
            "href" => "/",
            "src" => asset("../img/buy-comics-digital-comics.png"),
            "text" => "digital comics"
        ],
        [
            "href" => "/",
            "src" => asset("../img/buy-comics-merchandise.png"),
            "text" => "dc merchandise"
        ],
        [
            "href" => "/",
            "src" => asset("../img/buy-comics-subscriptions.png"),
            "text" => "subscription"
        ],
        [
            "href" => "/",
            "src" => asset("../img/buy-comics-shop-locator.png"),
            "text" => "comic shop locator"
        ],
        [
            "href" => "/",
            "src" => asset("../img/buy-dc-power-visa.svg"),
            "text" => "dc power visa"
        ],
    ]

@endphp

@section("main")
<div class="mainDetails">
    <div class="banner"></div>
    <div class="blue">
        <figure>
            <img src="{{ $comics["thumb"] }}" alt="">
            <div class="thumb">
                <div class="comic">COMIC BOOK</div>
                <div class="gallery">VIEW GALLERY</div>
            </div>
        </figure>
    </div>
    <div class="content">
        <div class="col-9">
            <h1>{{ $comics["title"] }}</h1>
            <div class="price">
                <div class="col-8">
                    <span><span class="green">U.S Price: </span> $19,99</span>
                    <span class="green">AVAILABLE</span>
                </div>
                <div class="col-4">
                    <span>Check Availability</span>
                    <span class="triangolo">&#9660</span>
                </div>
            </div>
            <p>{{ $comics["description"] }}</p>
        </div>
        <div class="col-3">
            <h4>ADVERTISEMENT</h4>
            <figure>
                <img src="../img/adv.jpg" alt="">
            </figure>
        </div>
    </div>
    <div class="content-bottom">
        <div class="container">
            <div class="col-6">
                <h2>Talent</h2>
                <div class="talent">
                    <span>Art by:</span>
                    <p>
                        @foreach ($comics["artists"] as $item)
                            <a href="/">{{ $item }}</a>,
                        @endforeach
                    </p>
                </div>
                <div class="talent">
                    <span>Written by:</span>
                    <p>
                        @foreach ($comics["writers"] as $item)
                            <a href="">{{ $item }}</a>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="col-6">
                <h2>Talent</h2>
                <div class="talent">
                    <span>Series:</span>
                    <p>
                        <a style="text-transform:uppercase" href="/">{{ $comics["series"] }}</a>
                    </p>
                </div>
                <div class="talent">
                    <span>U.S. Price:</span>
                    <p>{{ $comics["price"] }}</p>
                </div>
                <div class="talent">
                    <span>On Sale Date:</span>
                    <p>{{ $comics["sale_date"] }}</p>
                </div>
            </div>
        </div>
        <div class="navbar-details">
            <ul>
                @foreach ($menu as $item)
                <li><a href={{ $item["href"] }}></a>
                 <span>{{ $item["text"]}}</span>
                 <img src={{ $item["src"] }}>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection