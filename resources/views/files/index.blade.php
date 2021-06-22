@extends('layouts.app')

@section('content')

    <div class="container col-7">
        @if (Session::has('done'))
            <div class="alert alert-info col-12">
                <h2 class="text-center"> {{ Session::get('done') }} </h2>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h1 class="text-center text-info"> Welcome At index Page  </h1>
                <table class="table table-dark table-hover text-center">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th colspan="3">Action </th>
                    </tr>
                    @foreach ($files as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->title }}</td>
                            <td> <a href="{{ route('file.show', $data->id) }}" class="btn btn-info">View </a> </td>
                            <td> <a href="{{ route('file.edit', $data->id) }}" class="btn btn-primary">Edit </a> </td>
                            <td> <a href="{{ route('file.destroy', $data->id) }}" class="btn btn-danger">Delete </a> </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
