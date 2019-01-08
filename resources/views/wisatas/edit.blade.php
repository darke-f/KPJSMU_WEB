@extends('layouts.app')

@section('content')
<h1>Edit Wisata</h1>
{!! Form::open(['action'=>['WisatasController@update',$wisata->id],'method'=>'POST']) !!}
    
    <!--{{ Form::model($wisata, array('route' => array('wisatas.update', $wisata->id), 'method' => 'PUT')) }}
    -->
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title',$wisata->title,['class' =>'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{form::label('detail','Detail')}}
        {{form::textarea('detail',$wisata->detail,['id'=>'article-ckeditor','class' =>'form-control','placeholder' => 'Detail Text'])}}
    </div>
    <div class="form-group">
        {{form::label('hotel','Hotel')}}
        {{form::text('hotel',$wisata->hotel,['class' =>'form-control','placeholder' => 'hotel'])}}
    </div>
    {{form::hidden('_method','PUT')}}
    {{form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection