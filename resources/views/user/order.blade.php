@extends('layouts.user.app')
@section('content')
 <section class="container my-5">
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Indexing</th>
            <th scope="col">Book Title</th>
            <th scope="col">Price</th>
            <th scope="col">Book Author</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
        @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $cart->book->title }}</td>
            <td>{{ $cart->book->price * $cart->quantity }}</td>
            <td>{{ $cart->book->author }}</td>
            <?php
            $total +=$cart->book->price * $cart->quantity;
            ?>
            <td>
                <img src="{{ asset($cart->book->image)  }}" height="80px" width="80px" alt="">
            </td>
            <td>
                {{$cart->quantity}}
            </td>
            <td>
                <a class="btn btn-info text-light btn-sm" href="{{ url('book/detail',$cart->book->id) }}">View</a>
                <a class="btn btn-danger btn-sm" href="{{ url('user/cart/delete',$cart->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="my-5 text-center">
        <a class="btn btn-success btn-sm" href="{{ url('/') }}">Continue Shopping</a>
      </div>
 </section>

 </section>
@endsection
