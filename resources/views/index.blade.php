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

  <footer>
    <div class="upper-footer">
      <div class="container">
        <div class="row row-cols-2">
          <div class="col d-flex">
            <div class="row row-cols-3">
              <div class="col">
                <div class="footer-list">
                  <h5>DC COMICS</h5>
                  <ul>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                  </ul>
                </div>
                <div class="footer-list footer-shop">
                  <h5>SHOP</h5>
                  <ul>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                  </ul>
                </div>
              </div>

              <div class="col">
                <div class="footer-list">
                  <h5>DC</h5>
                  <ul>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy policy(New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>

              <div class="col">
                <div class="footer-list">
                  <h5>SITES</h5>
                  <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <p>All Site Content TM and © 2020 DC Entertainment, 
              unless otherwise <a href="#">noted here</a>. All
              rights reserved. <a href="#">Cookies Settings</a>
            </p>
          </div>

          <div class="col">
            <img src="{{asset('img/dc-logo-bg.png')}}" class="footer-bg-logo" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-footer">
      <div class="container d-flex justify-content-between align-items-center">
        <button>SIGN-UP NOW!</button>

        <div class="social-links d-flex align-items-center">
          <strong>FOLLOW US</strong>
          <img src="{{asset('img/footer-facebook.png')}}" alt="">
          <img src="{{asset('img/footer-twitter.png')}}" alt="">
          <img src="{{asset('img/footer-youtube.png')}}" alt="">
          <img src="{{asset('img/footer-pinterest.png')}}" alt="">
          <img src="{{asset('img/footer-periscope.png')}}" alt="">
        </div>
      </div>
    </div>
  </footer>
</body>
</html>