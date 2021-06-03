@extends('layouts.user.app')
@section('content')

<style>
    .polaroid{

padding: 10px;
box-shadow: 5px 5px 15px 6px #d4d4d4;
height: 280px;
text-align: center;
}
.polaroid-hover{
padding: 10px;
box-shadow: 5px 5px 15px 6px #d4d4d4;
height: 420px;
text-align: center;
}
a{
    text-decoration: none;
}
</style>
<section class="container my-5">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-lg-5">
            <div class="container polaroid-hover">
                <img src="{{ asset($book->image) }}" height="400px" width="100%" alt="">
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-lg-7">
            <h4>{{ $book->title }} &nbsp;Detials</h4>
            <h5 class="text-success">{{ $book->price }} TK</h5>
            <h6 class="">ISBN : {{ $book->ISBN }}</h6>
            <div  style="" class="my-5">
                <a style="background-color:#2e86de" class="btn btn-sm text-light" href="{{ url('user/cart',$book->id) }}">Add To Card</a>
            </div>

            <div class="my-5">
                <span>Category : {{ $book->category->name }}</span><br>
                <span>Author : {{ $book->author }} </span><br>
                <span>Description: {{ $book->description }}</span>
            </div>
        </div>
    </div>
</section>

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

<section class="container">
    <section class="my-5"><!--books-->
        <div class=" my-3">
          <h2>Releted Product's</h2>
        </div>
        <div class="container">
          <div class="row p-2">
            @foreach ($books as $book)
            <div class=" col-sm-6 col-6 col-md-3 col-lg-3 polaroid my-4 rounded-lg" >
                <div class="card" style="width: 100%; margin-left:0px;" >
                <a href="{{ url('book/detail',$book->id) }}">
                  <img height="200px" width="100%" src="{{ asset($book->image) }}" class="card-img-top p-2"  alt="...">
                </a>
                  <div class="card-body">
                    <p class="card-text"><a class="text-dark" href="{{ url('book/detail',$book->id) }}">{{ $book->title }}</a>.</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section><!-- end of book-->
</section>
@endsection
