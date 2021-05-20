@extends('layouts.app')

@section('main')
<section class="detail-up">
  <div class="container-detail-up">
    <img src="{{ $comic['thumb'] }}" alt="">
  </div>
</section>
<section class="detail-center pb-10">
  <div class="detail-center-left pt-10">
    <h1 class="text-uppercase">{{ $comic['title'] }}</h1>
    <div class="container-green mt-3">
      <div class="container-green-left">
        <span>U.S. Price:{{ $comic['price'] }}</span>
        <span class="text-uppercase">available</span>
      </div>
      <div class="container-green-right">Check Availability<i class="fas fa-sort-down"></i></div>
    </div>
    <p class="mt-2">{{ $comic['description'] }}</p>
  </div>
  <div class="detail-center-right pt-8">
    <span class="text-uppercase">advertisement</span>
    <img src="/img/adv.jpg" alt="">
  </div>
</section>
<section class="detail-down">
  <div class="container-detail-down pt-2 pb-14">
    <div class="container-detail-talent">
      <h2>Talent</h2>
      <div class="art-by">
        <h5>Art by:</h5>
        <div class="container-talent-info">
          @foreach ($comic['artists'] as $artist)
          <span>{{ $artist}}</span>
          @if (!$loop->last)
          ,
          @endif
          @endforeach
        </div>
      </div>
      <div class="written-by">
        <h5>Written by:</h5>
        <div class="container-talent-info">
          @foreach ($comic['writers'] as $writer)
          <span>{{ $writer}}</span>
          @if (!$loop->last)
          ,
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <div class="container-detail-specs">
      <h2>Specs</h2>
      <div class="series">
        <h5>Series:</h5>
        <p class="text-uppercase">{{ $comic['series'] }}</p>
      </div>
      <div class="us-price:">
        <h5>U.S. Price:</h5>
        <p>{{ $comic['price'] }}</p>
      </div>
      <div class="on-sale-date">
        <h5>On Sale Date</h5>
        <p>{{ $comic['sale_date'] }}</p>
      </div>
    </div>
  </div>
</section>
<section class="shop">
  <div class="container-shop">
    <div class="card-shop">
      <img src="/img/buy-comics-digital-comics.png" alt="">
      <span class="text-uppercase">digital comics</span>
    </div>
    <div class="card-shop">
      <img src="/img/buy-comics-merchandise.png" alt="">
      <span class="text-uppercase">dc merchandise</span>
    </div>
    <div class="card-shop">
      <img src="/img/buy-comics-subscriptions.png" alt="">
      <span class="text-uppercase">subscription</span>
    </div>
    <div class="card-shop">
      <img src="/img/buy-comics-shop-locator.png" alt="">
      <span class="text-uppercase">comic shop locator</span>
    </div>
  </div>
</section>

@endsection