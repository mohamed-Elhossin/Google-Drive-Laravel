@extends('layouts.app')

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container col-7">
        <div class="card ">
            <div class="card-body">
                <form action="{{ route('file.update', $files->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Title</label>
                        <input type="text" value="{{ $files->title }}" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> descripation</label>
                        <textarea class="form-control" name="desc" id="" cols="30"
                            rows="10"> {{ $files->desc }} </textarea>
                    </div>
                    <div class="form-group">
                        <label> File</label>
                        <input type="file" name="fileInput" id="">
                        <p> {{ $files->title }} </p>
                    </div>
                    <input type="hidden" name="userId" value="{{ Auth::user()->id }}" id="">
                    <button type="submit" class="btn btn-light btn-block"> Send</button>
                </form>
            </div>
        </div>
    </div>

@endsection
