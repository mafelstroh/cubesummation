@extends('layouts.main')

@section('content')
    {!! Form::open() !!}
        
        <div class="form-group">
            {!! Form::label('cmd', 'Command (QUERY/UPDATE)') !!}
            {!! Form::text('cmd', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Execute', ['class' => 'btn btn-success form-control']) !!}
        </div>                

    {!! Form::close() !!}
@stop