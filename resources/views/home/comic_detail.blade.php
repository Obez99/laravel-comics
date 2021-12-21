@extends('layouts.default')

@section('content')
  <section class="divider">
    <div class="container">
      <div class="cover-container">
        <img src="{{$comic["thumb"]}}" alt="">
        <div class="cover-text text-uppercase">{{$comic["type"]}}</div>
        <a href="#" class="cover-text">VIEW GALLERY</a>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-8  my-3">
          <h3>{{$comic["title"]}}</h3>
          <table class="table price-table">
            <tbody>
              <tr>
                <td class="price-td"><span>U.S. Price: <span class="text-light">{{$comic["price"]}}</span></span><span>AVAILABLE</span></td>
                <td class="text-center availability-td col-3 text-light">Check Availability <i class="fas fa-caret-down"></i></td>
              </tr>
            </tbody>
          </table>
          <p>{{$comic["description"]}}</p>
        </div>
        <div class="col-4 d-flex flex-column align-items-end">
          <h5 class="text-end">Advertisement</h5>
          <img class="text-end" src="{{asset('img/adv.jpg')}}">
        </div>
      </div>
    </div>
  </section>

  <section class="table-section">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <table class="table">
            <tbody>
              <tr>
                <td><h4>Talent</h4></td>
                <td></td>
              </tr>
              <tr>
                <td>Art by:</td>
                <td class="td-authors">
                  @foreach ($comic["artists"] as $artist)
                    <a href="#">{{$artist}}</a>
                    @if ($loop->last)
                  {{"."}}

                  @else
                  {{", "}}
                  @endif

                  @endforeach
                </td>
              </tr>
              <tr>
                <td>Written by:</td>
                <td class="td-authors">
                  @foreach ($comic["writers"] as $writer)
                  <a href="#">{{$writer}}</a>
                  @if ($loop->last)
                  {{"."}}

                  @else
                  {{", "}}
                  @endif

                  @endforeach
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-6">
          <table class="table">
            <tbody>
              <tr>
                <td><h4>Specs</h4></td>
                <td></td>
              </tr>
              <tr>
                <td>Series:</td>
                <td><a href="#" class="text-uppercase">{{$comic["series"]}}</a></td>
              </tr>
              <tr>
                <td>U.S. Price:</td>
                <td>{{$comic["price"]}}</td>
              </tr>
              <tr>
                <td>On Sale Date:</td>
                <td>{{$comic["sale_date"]}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="full-page-borders">
      <div class="container">
        <div class="row">
          <div class="col-3">DIGITAL COMICS</div>
          <div class="col-3">SHOP DC</div>
          <div class="col-3">COMIC SHOP LOCATOR</div>
          <div class="col-3">SUBSCRIPTIONS</div>
        </div>
      </div>
    </div>

  </section>
@endsection