@extends('layouts.app')
@section('tittle', 'Page Title')

@section('content')

<style>
    .carousel .carousel-item {
      height: 300px;
    }

.__bg-my-S_presentation{
        background-image: linear-gradient(15deg, #e9edf0 0%, #d5e7f5 100%);
    }

</style>

{{-- Banner --}}
<div id="carouselExampleSlidesOnly" class="carousel slide pb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('custom/banner/test.jpg')}}" class="d-block w-100" alt="img1">
    </div>
    {{-- <div class="carousel-item">
      <img src="{{asset('custom/banner/test.jpg')}}" class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="{{asset('custom/banner/test.jpg')}}" class="d-block w-100" alt="img3">
    </div> --}}
  </div>
</div>
{{-- End banner --}}

<div class="container">

    <div class="sec1">
        <div class="p-5 mb-4 bg-light rounded-3 __bg-my-S_presentation">
          <div class="container-fluid">
            <h1 class="display-5 fw-bold">Custom jumbotron (template)</h1>
            <p class="col-md-8 fs-4">(template)Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
          </div>
        </div>

        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
              <h2>Change the background (template)</h2>
              <p>(template) Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
              <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>Add borders (template)</h2>
              <p>(template) Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
              <button class="btn btn-outline-secondary" type="button">Example button</button>
            </div>
          </div>
        </div>

    </div>

    <div class="my-3 sec2">



    </div>


    <div class="my-3 sec3">

        <div class="row">
      <div class="col-lg-4 col-md-4">
        <svg class="d-block m-auto bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="text-center pt-3">Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p class="text-center"><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-4">
        <svg class="d-block m-auto bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="text-center pt-3">Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p class="text-center"><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-4">
        <svg class="d-block m-auto bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2 class="text-center pt-3">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p class="text-center"><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div>

    </div>

    {{-- Heroes --}}
    {{-- <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4 img-fluid" src="{{asset('custom/navbar/logo-cucsh.png')}}" alt="#" width="400" height="320">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
          </div>
        </div>
      </div> --}}

</div>
@endsection
