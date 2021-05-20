@extends('layouts.app')

@section('main')
<section class="comics-section pb-2">
  <div class="current-series">current series</div>
  <div class="container-card pt-6">
    <!-- ciclo la card con un foreach-->
    @foreach ($comics as $comic)
      <div class="card">
          <div class="container-img" style="background-image: url('{{ $comic->thumb }}')" >
          </div>
          <h5 class="text-uppercase mt-2">{{ $comic->series }}</h5>
      </div>
    @endforeach
  </div>
  <div class="my-btn-main">load more</div>
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
    <div class="card-shop">
      <img src="/img/buy-dc-power-visa.svg" alt="">
      <span class="text-uppercase">dc power visa</span>
    </div>
  </div>
</section>
@endsection
