@extends('layouts.app')

@section('content')
<div class="jumbotron" style="padding:10px; text-align:center">

    <h1>SERVICES</h1>
    </div>
@if(count($services) > 0)

<ul class="list-group mb-5">
    @foreach($services as $service)
        <li class="list-group-item " style="text-align: center"><h4>{{$service}}</h4></li>

            <img src={{$images[ $loop->index ]}} class="mb-3" style="max-width:100%; height:auto;" />
        @endforeach

</ul>

@endif
@endsection
