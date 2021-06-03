@extends('layouts.admin.app')
@section('admin_container')

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center">Create New Location Form</h2><hr>
                <form action=" {{ isset($edit) ? url('admin/location/store',$edit->id) : url('admin/location/store') }} " method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="">Location Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ @$edit->name }}" id="" required>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-info" name="btn" value="Create New location" id="">
                        </div>

                </form>
            </div>
        </div>
    </section>

@endsection
