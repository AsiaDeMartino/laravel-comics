@php
$menu = [
    [
    "text" => "Characters",
    "href" => "/",
    ],
    [
    "text" => "Comics",
    "href" => "/",
    ],
    [
    "text" => "Movies",
    "href" => "/",
    ],
    [
    "text" => "TV",
    "href" => "/",
    ],
    [
    "text" => "Games",
    "href" => "/",
    ],
    [
    "text" => "collectibles",
    "href" => "/",
    ],
    [
    "text" => "videos",
    "href" => "/",
    ],
    [
    "text" => "fans",
    "href" => "/",
    ],
    [
    "text" => "news",
    "href" => "/",
    ],
    [
    "text" => "shop",
    "href" => "/",
    ]
];



@endphp


<div class="header">
    <figure>
        <img src="{{ asset('img/dc-logo.png') }}" alt="">
    </figure>
    <div>
        <ul>
            @foreach($menu as $item)
            <li>
                <a href="{{$item["href"]}}">
                    {{$item["text"]}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
