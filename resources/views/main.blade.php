@extends("layout.home");

@section('main')
<div class="main">
    <div class="banner"></div>
    <button id="current">current series</button>
    <div class="card_wrapper">
        @foreach ($comics as $key=>$item)
        <a href="/details/{{ $key }}">
            <div class="card">
                <figure>
                    <img src={{ $item["thumb"] }} alt="">
                </figure>
                <h3>{{ $item["series"] }}</h3>
            </div>
        </a>
        @endforeach
    </div>
    <button>load more</button>
  </div>

  @include('partials.navbar')
@endsection

