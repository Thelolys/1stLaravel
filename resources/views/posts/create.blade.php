@extends('layouts.app')

@section('content')
    <h1>Create reservation</h1>
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Car make')}}
                {{ Form::text('title','',['class' => 'form-control','placeholder'=>'Car make'])}}
            </div>
            <div class="form-group">
                {{ Form::label('model', 'Car Model')}}
                {{ Form::text('model','',['class' => 'form-control','placeholder'=>'Car model'])}}
            </div>
            <div class="form-group">
                {{ Form::label('date', 'Date')}}
                {{ Form::date('date',Carbon\Carbon::today(),['class' => 'form-control','placeholder'=>'date'])}}
            </div>

            <div class="form-group">
                {{ Form::label('body', 'Body')}}
                {{ Form::textarea('body','',['id'=>'article-ckeditor','class' => 'form-control','placeholder'=>'Body Text'])}}
            </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection