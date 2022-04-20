@php
    $menu = [
        [
            "titolo" => "dc comics",
            "contenuto" => [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News"
            ],
        ],
        [
            "titolo" => "shop",
            "contenuto" => [
                "Shop DC",
                "Shop DC Collectibles"
            ],
        ],
        [
            "titolo" => "dc",
            "contenuto" => [
                "Terms Of Use",
                "Privacy policy(New)",
                "Ad Choices",
                "Advertising",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificate",
                "Rating",
                "Shop Help",
                "Contact Us"
            ],
        ],
        [
            "titolo" => "sites",
            "contenuto" => [
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa",
            ],
        ],
    ];

    $elencoSocial = [
            [
                "src" => asset('../img/footer-facebook.png'),
                "href" => "/"
            ],
            [
                "src" => asset("../img/footer-twitter.png"),
                "href" => "/"
            ],
            [
                "src" => asset("../img/footer-youtube.png"),
                "href" => "/"
            ],
            [
                "src" => asset("../img/footer-pinterest.png"),
                "href" => "/"
            ],
            [
                "src" => asset("../img/footer-periscope.png"),
                "href" => "/"
            ]
          ]
@endphp


<div>
    <div class="footer-menu">
        <div class="menu">
            @foreach ($menu as $item)    
                <ul>
                    <h4>{{$item["titolo"]}}</h4>
                    @foreach ($item["contenuto"] as $element)
                    <li> {{ $element }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
        <div class="logo">
            <img src="{{ asset('../img/dc-logo-bg.png') }}" alt="">
        </div>
      </div>
      <div class="footer">
        <div>
            <button type="button" class="bottone">sign up now!</button>
        </div>
        <div class="social">
            <h2>follow us</h2>
            <ul>
                @foreach ($elencoSocial as $item)
                <li><a href={{ $item["href"] }}></a>
                    <img src={{ $item["src"] }} alt="">
                </li>
                @endforeach
            </ul>
        </div>
      </div>
    </div>
