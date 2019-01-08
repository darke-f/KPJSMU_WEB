@extends('layouts.app')

@section('content')
    <h1>Create Wisata</h1>
    {!! Form::open(['action'=>'WisatasController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title','',['class' =>'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{form::label('detail','Detail')}}
        {{form::textarea('detail','',['id'=>'article-ckeditor','class' =>'form-control','placeholder' => 'Detail Text'])}}
    </div>
    <div class="form-group">
        {{form::label('hotel','Hotel')}}
        {{form::text('hotel','',['class' =>'form-control','placeholder' => 'hotel'])}}
    </div>
    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection