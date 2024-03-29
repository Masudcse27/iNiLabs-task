@extends('layout.main')

@section('css_content')
<link rel="stylesheet" href="assets/css/profile.css">
@stop

@section('main_content')
    <div class="container mt-5">
        <div class="container rounded border border-primary bg-secondary p-1" align="center">
            @if(session('postsuccess'))
                <div class="alert alert-success">
                    {{ session('postsuccess') }}
                </div>
            @endif
            @if(session('updatesuccess'))
                <div class="alert alert-success">
                    {{ session('updatesuccess') }}
                </div>
            @endif
            @if(session('deletesuccess'))
                <div class="alert alert-success">
                    {{ session('deletesuccess') }}
                </div>
            @endif
            <form action="{{ route ('make_post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" />
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Content" rows="2"></textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Make New Post</button>
            </form>
        </div>
        <h1 align="center">My Post</h1>
            @foreach($posts as $post)
                <div class="container postcontent">
                    <h4 class="title">{{ $post->title }}</h4>
                    <p>{{ $post->content}}</p>
                    <a class="btn btn-primary" href="{{ route('edit_form', ['id' => $post->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('delete_post', ['id' => $post->id]) }}">Delete</a>
                </div>
            @endforeach
    </div>
@stop