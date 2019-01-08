@extends('layouts.app')

@section('content')
    <h1>Review</h1>
    @if(count($reviews)>0)
        @foreach($reviews as $review)
            <div class="well">
           <!--{{route('reviews.show', $review->id)}}--> 
                <div class="row">
                         <div class="col-md-4 col-sm-4">
                           
                         </div>
                         <div class="col-md-8 col-sm-8">
                         </div>
                </div>
                <h3><a href="/reviews/{{$review->id}}">{{$review->title}}</a></h3>
               
             </div>
        @endforeach
        {{$reviews->links()}}
    @else
        <p>No Review found</p>
    @endif
@endsection