@extends('layouts.app')

@section('content')

    <div class="container col-7">
        
        <div class="card">
    <h1 class="text-center text-info"> Welcome At Public Page  </h1>
            <div class="card-body">
                <table class="table table-dark table-hover text-center">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Action </th>
                    </tr>
                    @foreach ($files as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->title }}</td>
                            <td> <a href="{{ route('file.show', $data->id) }}" class="btn btn-info">View </a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
