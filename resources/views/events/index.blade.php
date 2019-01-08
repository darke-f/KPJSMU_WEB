@extends('layouts.app')

@section('content')
    <h1>Event</h1>
    @if(count($events)>0)
        @foreach($events as $event)
            <div class="well">
           <!--{{route('events.show', $event->id)}}--> 
                <div class="row">
                         <div class="col-md-4 col-sm-4">
                           
                         </div>
                         <div class="col-md-8 col-sm-8">
                         </div>
                </div>
                <h3><a href="/events/{{$event->id}}">{{$event->title}}</a></h3>
               
             </div>
        @endforeach
        {{$events->links()}}
    @else
        <p>No Event found</p>
    @endif
@endsection