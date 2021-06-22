@extends('layouts.app')

@section('content')

    @if (Session::has('done'))
        <div class="alert alert-info col-6">
            <h2 class="text-center"> {{ Session::get('done') }} </h2>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger col-6">
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
                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> descripation</label>
                        <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label> File</label>
                        <input type="file" name="fileInput" id="">
                    </div>
                        <input type="hidden" name="userId" value="{{ Auth::user()->id }}" id="">
                    <button type="submit" class="btn btn-light btn-block"> Send</button>
                </form>
            </div>
        </div>
    </div>

@endsection
