@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('photos.update', ['photo' => $photo->id])}}" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif 

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title', $photo->title) }}">
        </div> 

        <div class="form-group mt-2">
            <label for="img">Photo</label>
            <div style="display: flex">
            <input id="img" type="file" class="form-control" name="img" value="{{ old('img', $photo->img) }}">
        </div>     

        <button type="submit" class="btn btn-success mt-4">SUBMIT</button>

    </form>
@endsection