@extends('layouts.user.app')
@section('content')
<style>
        input{
          border: 1px solid;
          border-radius: 20px;
          box-shadow: 3px 3px 5px 6px #ccc;
        }
        select{
          border: 1px solid;
          border-radius: 20px;
          box-shadow: 3px 3px 5px 6px #ccc;
        }
        textarea{
          border: 1px solid;
          border-radius: 20px;
          box-shadow: 3px 3px 5px 6px #ccc;
        }

    .desing{
        -moz-box-shadow:    inset 0 0 5px rgb(51,51,51);
       -webkit-box-shadow: inset 0 0 5px rgb(51,51,51);
       box-shadow:         inset 0 0 5px rgb(51,51,51);
    }

    </style>

    <section class="container my-3">
        <div class="row justify-content-center desing">
            <div class="col-md-7">
                <h2 class="text-center my-2">Create New Book Form</h2>
                <form action="{{ url('user/book/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1" for="">Select Category *</label>
                            <select name="category_id" class="form-control" id="" required>
                                <option style="font-weight:bold" class="my-1"  value="">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Select Location *</label>
                            <select name="location_id" class="form-control" id="" required>
                                <option value="">Select Location</option>
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Book Title *</label>
                            <input type="text" placeholder="Book Title" name="title" class="form-control"  id="" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Book ISBN *</label>
                            <input type="number" name="ISBN" class="form-control" placeholder="Book ISBN" id="" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Book Author *</label>
                            <input type="test" name="author" class="form-control" placeholder="Book Author" id="" required>
                        </div>

                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Book Image *</label>
                            <input type="file" name="image" class="form-control" value="" id="" required>
                        </div>

                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Book price *</label>
                            <input type="number" name="price" class="form-control" placeholder="Book Price" id="" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold" class="my-1"  for="">Book Description *</label>
                            <textarea name="description" class="form-control" id="" placeholder="Description" cols="30" rows="10"></textarea>
                        </div>

                        <div class="text-center my-3">
                            <input style="background-color:#2e86de" type="submit" class="btn text-light" name="btn" value="Create New Book" id="">
                        </div>

                </form>
            </div>
        </div>
    </section><br>


</section>
@endsection
