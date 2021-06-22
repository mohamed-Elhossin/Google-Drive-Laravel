@extends('layouts.app')

@section('content')

    <div class="container col-4 text-center">
        <div class="card">
            <img src="{{ asset('img/file.jpg') }}" class="card-img-top" alt="...">
            <h2> File Title : {{ $file->title }} </h2>
            <div class="card-body">
                <p> File Description : {{ $file->desc }}</p>
                <h3> File Name : {{ $file->file }}</h3>
            </div>
            <a href="{{ route('file.download', $file->id) }}" class="btn btn-primary btn-50 "> DownLoad </a>
            <a href="{{ route('file.share', $file->id) }}" class="btn btn-success btn-50 "> Share </a>
        </div>
    </div>

@endsection
