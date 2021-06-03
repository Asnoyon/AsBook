@extends('layouts.user.app')
@section('content')
<section><!--start of slider-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset( 'frontend/image/4.jpg' ) }}"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/image/8.jpg') }}"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/image/7.jpg') }}"  class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section><!-- end of slider-->
<style>
    .polaroid{

    padding: 10px;
    box-shadow: 2px 2px 5px 2px #eee9e9;
    height: 350px;
    text-align: center;
    }
    a{
        text-decoration: none;
        color:black;
    }

    </style> 

          <section class="my-5"><!--books-->
            <div class="text-center my-3">
              <h2>All Books</h2>
            </div>
            <div class="container">
              <div class="row p-2">
                @foreach ($books as $book)
                <div class=" col-sm-6 col-6 col-md-3 col-lg-3 polaroid my-4 rounded-lg" >
                    <div class="card" style="width: 100%; margin-left:0px;" >
                      <a href="{{ url('book/detail',$book->id) }}">
                          <img height="250px" width="100%" src="{{ asset($book->image) }}" class="card-img-top p-2"  alt="...">
                      </a>
                      <div class="card-body">
                        <p class="card-text"><a href="{{ url('book/detail',$book->id) }}">{{ $book->title }}</a> </p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </section><!-- end of book-->
@endsection
