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
  <header>
    <div class="upper-header bg-primary">
      <div class="container d-flex justify-content-end">
        <a href="#">DC POWER VISA</a>
        <button>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i> </button>
      </div>
    </div>

    <div class="bottom-header">
      <div class="container">
        <img src="{{asset('img/dc-logo.png')}}" alt="">
        <ul>
          <li><a href="#">CHARACTERS</a></li>
          <li><a href="#">COMICS</a></li>
          <li><a href="#">MOVIES</a></li>
          <li><a href="#">TV</a></li>
          <li><a href="#">GAMES</a></li>
          <li><a href="#">COLLECTIBLES</a></li>
          <li><a href="#">VIDEOS</a></li>
          <li><a href="#">FANS</a></li>
          <li><a href="#">NEWS</a></li>
          <li><a href="#" class="custom-dropdown">SHOP <i class="fas fa-caret-down"></i></a></li>
        </ul>
        <input type="text" placeholder="Search" class="text-end">
      </div>
    </div>

    <nav>

    </nav>
  </header>

  <main>
    <section class="jumbo">

    </section>
  </main>
</body>
</html>