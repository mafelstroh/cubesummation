@extends('layouts.main')

@section('content')
    {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('testcases', 'Test cases:') !!}
            {!! Form::text('testcases', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nsize', ' N:') !!}
            {!! Form::text('nsize', null, ['class' => 'form-control']) !!}
        </div>   

        <div class="form-group">
            {!! Form::label('msize', ' M:') !!}
            {!! Form::text('msize', null, ['class' => 'form-control']) !!}
        </div> 

        <div class="form-group">
            {!! Form::submit('Create Matrix', ['class' => 'btn btn-primary form-control']) !!}
        </div>                

    {!! Form::close() !!}
@stop