@extends('layouts.user.app')
@section('content')
<section class="my-5">
    <p class="text-center h3">{{ Auth::user()->name }} Book Upload List</p>
</section>
<section class="container">
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Index</th>
            <th scope="col">Title</th>
            <th scope="col">ISBN</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $books as $book)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->ISBN }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    <img src="{{ asset($book->image) }}" height="80px" width="80px" alt="">
                </td>
                <td>
                    @if ($book->status == 0)
                    <button class="btn btn-danger"> Inactive </button>
                    @else
                    <button class="btn btn-infor"> Active </button>
                    @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ url('book/detail',$book->id) }}"> View </a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</section>
@endsection
