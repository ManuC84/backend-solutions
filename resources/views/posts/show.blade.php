@extends('layouts.app')

@section('content')
<div class="container" style="height:90vh">
<div class="jumbotron">
    <a href="/posts" class="btn btn-secondary mb-2 ">Go Back</a>
    <h1>{{$post->title}}</h1>
    @if($post->cover_image !== 'noimage.jpg') 
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    @endif
    <div class="card card-body bg-light mb-4 shadow-sm">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <table>
            <tr>
                <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}</td>
            </tr>   
        </table> 
    

            
        @endif
    @endif
</div>
</div>
@endsection
           
