@extends('layouts.admin.app')
@section('admin_container')

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Indexing</th>
        <th scope="col">Email</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($messages as $msg)
        <tr>
            <th scope="row">{{ $loop->index +1 }}</th>
            <td>{{ $msg->email }}</td>
            <td>{{ $msg->message }}</td>

            <td>
                @if ($msg->status == 1)
                <a class="btn btn-info btn-sm" href="{{ url('admin/message/status',$msg->id) }}">Seen</a>
                @else
                <a class="btn btn-danger btn-sm" href="{{ url('admin/message/status',$msg->id) }}">No Seen</a>
                @endif
                <a class="btn btn-danger btn-sm" href="{{ url('admin/message/delete',$msg->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endsection
