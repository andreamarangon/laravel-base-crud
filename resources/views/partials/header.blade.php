<header>
  <nav>
    <div class="nav-up">
      <div class="container-nav-up">
        <ul>
          <li class="text-uppercase">dc power visa &reg;</li>
          <li class="text-uppercase">additional dc sites<i class="fas fa-sort-down"></i></li>
        </ul>
      </div>
    </div>
    <div class="nav-down">
      <div class="img-logo-dc">
        <a href="{{route('home')}}">
          <img src="/img/dc-logo.png" alt="">
        </a>
      </div>
      <ul>
        <li class="text-uppercase"><a class="{{Route::currentRouteName() == 'home' ? 'active': '' }}" href="{{route('home')}}">home</a></li>
        <li class="text-uppercase"><a class="{{Route::currentRouteName() == 'comics.index' ? 'active': '' }}" href="{{route('comics.index')}}">comics</a></li>
      </ul>
      <span class="search">Search <i class="fas fa-search"></i></span>
    </div>
  </nav>
  <div class={{Route::currentRouteName() != 'home' ? 'jumbo': '' }}>

  </div>
</header>