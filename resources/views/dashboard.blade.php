@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
               
               <div class="card-body">
                <a href="/posts/create"class="btn btn-primary">Create Post</a>
                <h3>Your blog post</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>
                            Title
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                            {{$post->title}}
                            </td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default" >Edit</a></td>
                            <td>
                            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' =>'POST','class' => 'pull-right'])!!}
                                 {{Form::hidden('_method','DELETE')}}
                                 {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                          {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else 
                    <p>You have no post</p>
                    @endif 
                
                   
                    <a href="/wisatas/create"class="btn btn-primary">Create Wisata</a>
                    <br>
                    <br>
                    <a href="/events/create"class="btn btn-primary">Create Event</a>
                    <br>
                    <br>
                    <a href="/reviews/create"class="btn btn-primary">Create Review</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
