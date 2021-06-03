@extends('layouts.admin.app')
@section('admin_container')

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center">Create New Book Form</h2><hr>
                <form action=" {{ isset($edit) ? url('admin/book/store',$edit->id) : url('admin/book/store') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="">Select Category *</label>
                            <select name="category_id" class="form-control" id="" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id }}"  {{$category->id == @$edit->category_id ? "selected" : "" }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Select Location *</label>
                            <select name="location_id" class="form-control" id="" required>
                                <option value="">Select Location</option>
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}" {{$location->id == @$edit->location_id ? "selected" : "" }}  >{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">book Title *</label>
                            <input type="text" name="title" class="form-control" value="{{ @$edit->title }}" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">book ISBN *</label>
                            <input type="number" name="ISBN" class="form-control" value="{{ @$edit->ISBN }}" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">book Author *</label>
                            <input type="test" name="author" class="form-control" value="{{ @$edit->author }}" id="" required>
                        </div>

                        <div class="form-group">
                            <label for="">book Image *</label>
                            @if(@$edit->image)
                            <input type="file" name="image" class="form-control" value="" id="">
                            @else
                            <input type="file" name="image" class="form-control" value="" id="" required>
                            @endif
                            <img height="80px" width="80px" src="{{asset(@$edit->image)}}" alt="">
                        </div>

                        <div class="form-group">
                            <label for="">book price *</label>
                            <input type="number" name="price" class="form-control" value="{{ @$edit->price }}" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">book Description *</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ @$edit->description }}</textarea>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-info" name="btn" value="Create New book" id="">
                        </div>

                </form>
            </div>
        </div>
    </section>

@endsection
