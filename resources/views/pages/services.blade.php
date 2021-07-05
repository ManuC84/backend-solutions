@extends('layouts.app')

@section('content')
<div class="jumbotron" style="padding:10px; text-align:center">

    <h1>SERVICES</h1>

    </div>
@if(count($services) > 0)

<ul class="list-group mb-5">
    @foreach($services as $service)
        <li class="list-group-item " style="text-align: center"><h4>{{$service}}</h4></li>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$id[$loop->index]}}">
            + Information
          </button>

            <img src={{$images[ $loop->index ]}} class="mb-3" style="max-width:100%; height:auto;" />
            <div class="modal fade" id={{$id[$loop->index]}} tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{$modalTitle[ $loop->index ]}} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        {{$modalContent[ $loop->index ]}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
              </div>
        @endforeach

</ul>

@endif
@endsection
