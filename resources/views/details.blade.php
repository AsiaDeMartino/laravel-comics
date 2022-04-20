@extends('layout.home')

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
</div>
@endsection