@extends('layouts.admin.app')
@section('admin_container')

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center">Details Informaton Book Of {{ $show->title }}</h3>

                <div class="row my-5 text-center">

                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-center">Details Informaton Book Of {{ $show->title }}</h6>
                        <div>
                            <img height="300px" width="100%" src="{{ asset($show->image) }}" alt="">
                        </div>
                        <p>{{ $show->title }}</p>
                    </div>

                    <div class="col-md-8 col-sm-12">

                        <div>
                            <h3>Details Information</h3>
                            <p>Book ISBN : {{ $show->ISBN }}</p> <br>
                            <p>Book Category : {{ $show->category->name }}</p> <br>
                            <p>Book Location : {{ $show->location->name }}</p> <br>
                            <p>Book Author : {{ $show->author }}</p> <br>
                            <p>Book Price : {{ $show->price }}</p> <br>
                            <p>Book Description : {{ $show->description }}</p> <br>

                        </div>
                    </div>

                </div>
<a class="btn btn-info" href="{{ url('admin/book/index') }}">Back</a>
            </div>
        </div>
    </section>

@endsection
