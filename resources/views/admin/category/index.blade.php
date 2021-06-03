@extends('layouts.admin.app')
@section('admin_container')

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center">
                    <h2>All Category List</h2>
                </div><hr>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Indexing</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->index +1 }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('admin/category/edit',$category->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ url('admin/category/delete',$category->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>

        </div>
    </section>

@endsection
