@extends('layouts.app')

@section('content')
    <a href="/reviews" class="btn btn-default">Go back</a>
    <h1>{{$review->title}}</h1>
    <div>
        {!!$review->detail!!}
    </div>
    <hr>
    <small>Written on {{$review->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->bool !== 1 )
    <a href="/reviews/{{$review->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action'=>['ReviewsController@destroy',$review->id],'method' =>'POST','class' => 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection