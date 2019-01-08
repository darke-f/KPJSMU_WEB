@extends('layouts.app')

@section('content')
<h1>Edit Event</h1>
    {!! Form::open(['action'=>['EventsController@update',$event->id] ,'method'=>'POST']) !!}
     <!--{{route('events.edit', $event->id)}}--> 
    <!--{{ Form::model($wisata, array('route' => array('wisatas.update', $wisata->id), 'method' => 'PUT')) }}
    -->
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title',$event->title,['class' =>'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{form::label('detail','Detail')}}
        {{form::textarea('detail',$event->detail,['id'=>'article-ckeditor','class' =>'form-control','placeholder' => 'Detail Text'])}}
    </div>
    {{form::hidden('_method','PUT')}}
    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection