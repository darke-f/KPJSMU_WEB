@extends('layouts.app')

@section('content')
    <h1>Create Review</h1>
    {!! Form::open(['action'=>'ReviewsController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title','',['class' =>'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{form::label('name','Name')}}
        {{form::text('name','',['class' =>'form-control','placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{form::label('detail','Detail')}}
        {{form::textarea('detail','',['id'=>'article-ckeditor','class' =>'form-control','placeholder' => 'Detail Text'])}}
    </div>
   
    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection