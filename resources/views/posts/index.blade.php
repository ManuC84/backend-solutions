@extends('layouts.app')

@section('content')
<div class="container" style="height:90vh">
<div class="jumbotron" style="overflowY: scroll;height:85vh">
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-primary mb-4">Create post</a>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card card-body bg-light mb-4 shadow-sm">
            <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{!!$post->body!!}</p>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    @if($post->cover_image !== 'noimage.jpg')
                        <img style="width:100%" src="{{$post->cover_image}}">

                    @endif
            </div>
            </div>

        </div>
        @endforeach
        {{$posts->links()}}
    @else
            <p>No posts found</p>
    @endif
</div>
</div>
    @endsection
