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
            <div class="comics-card">
              <img src="{{$comic["thumb"]}}" alt="">
              <h6>{{$comic["series"]}}</h6>
            </div> 
            @endforeach
          </div>

          <button>LOAD MORE</button>
        </div>
      </div>
    </section>
  </main>
</body>
</html>