@extends('layouts.default')

@section('content')
  <section class="divider">
    <div class="container">
      <div class="cover-container">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
        <div class="cover-text">COMIC BOOK</div>
        <a href="#" class="cover-text">VIEW GALLERY</a>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-8  my-3">
          <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
          <table class="table price-table">
            <tbody>
              <tr>
                <td class="price-td"><span>U.S. Price: <span class="text-light">$19.99</span></span><span>AVAILABLE</span></td>
                <td class="text-center availability-td col-3 text-light">Check Availability <i class="fas fa-caret-down"></i></td>
              </tr>
            </tbody>
          </table>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam minus nemo tempora delectus, ipsam totam nostrum, impedit doloribus, corrupti doloremque commodi iusto fugit nisi nobis sit quaerat esse velit dolorem.
          Quos enim totam, veritatis doloremque molestiae in error dolore facere veniam voluptatum, sint ipsam sit magnam explicabo, ratione dolorum eaque! Earum ducimus fugiat repellendus necessitatibus laborum fuga? Tempore, fuga qui.
          Voluptas ipsum error aliquam dolor cupiditate vero consequuntur perspiciatis quisquam, eligendi, illo architecto nobis. Facere maiores nostrum enim? Debitis doloribus temporibus nisi omnis itaque impedit quidem praesentium harum architecto unde?</p>
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
                <td class="td-authors"><a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>,</td>
              </tr>
              <tr>
                <td>Written by:</td>
                <td class="td-authors"><a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>, <a href="#">adsdsa</a>,</td>
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
                <td><a href="#">ACTION COMICS</a></td>
              </tr>
              <tr>
                <td>U.S. Price:</td>
                <td>$19.99</td>
              </tr>
              <tr>
                <td>On Sale Date:</td>
                <td>Oct 02 2018</td>
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