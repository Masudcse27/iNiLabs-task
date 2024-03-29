@extends('layout.primary')

@section('primary_css')
  <link rel="stylesheet" href="assets/css/login.css">
@stop

@section('primary_content')
    <div class="container mt-5">
      <form action="{{ route ('update' , $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $post->title ?? '' }}">
          @error('title')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="2">{{ $post->content ?? '' }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        
      </form>
    </div>
@stop
