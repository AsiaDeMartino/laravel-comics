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

<div class="navbar">
    <ul>
     @foreach ($menu as $item)
     <li><a href={{ $item["href"] }}></a>
      <img src={{ $item["src"] }}>
      <span>{{ $item["text"]}}</span>
     </li>
     @endforeach
   </ul>
 </div>