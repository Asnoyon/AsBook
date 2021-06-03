@extends('layouts.user.app')
@section('content')
<style>
    .polaroid{

    padding: 10px;
    box-shadow: 2px 2px 5px 2px #eee9e9;
    height: 280px;
    text-align: center;
    }
    a{
        text-decoration: none;
    }

    </style>

          <section class="my-5"><!--books-->
            <div class="text-center my-3">
              <h2>{{$search}} Books</h2>
            </div>
            <div class="container">
              <div class="row p-2">
                @foreach ($books as $book)
                <div class=" col-sm-6 col-6 col-md-2 col-lg-2 polaroid my-4" >
                    <div class="card" style="width: 100%; margin-left:0px;" >
                    <a href="{{ url('book/detail',$book->id) }}">
                      <img height="200px" width="100%" src="{{ asset($book->image) }}" class="card-img-top p-2"  alt="...">
                    </a>
                      <div class="card-body">
                        <p class="card-text "><a class="text-dark" href="{{ url('book/detail',$book->id) }}">{{ $book->title }}</a>.</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </section><!-- end of book-->
@endsection
