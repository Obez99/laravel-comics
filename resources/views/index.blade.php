<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
  @include('partials.head_scripts')
</head>
<body>

  @include('partials.header')

  <main>
    <section class="jumbo">

    </section>

    <section class="comics-section">
      <div class="container">
      <h4>CURRENT SERIES</h4>

        <div class="comics-container">
          <div class="row row-cols-6">
            @foreach ($comics_list as $comic)
            <div class="col comics-card">
              <img src="{{$comic["thumb"]}}" alt="">
              <h6>{{$comic["series"]}}</h6>
            </div> 
            @endforeach
          </div>

          <button>LOAD MORE</button>
        </div>
      </div>
    </section>

    <section class="shop-section">
      <div class="container">
        <div class="row row-cols align-items-center">
          <div class="col">
            <div class="shop-menu-item">
              <a href="#">
              <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
              <h6>DIGITAL COMICS</h6>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="shop-menu-item">
              <a href="#">
              <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
              <h6>MERCHANDISE</h6>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="shop-menu-item">
              <a href="#">
              <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
              <h6>SUBSCRIPTION</h6>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="shop-menu-item">
              <a href="#">
              <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
              <h6>SHOP LOCATOR</h6>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="shop-menu-item">
              <a href="#">
              <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
              <h6>POWER VISA</h6>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')
</body>
</html>