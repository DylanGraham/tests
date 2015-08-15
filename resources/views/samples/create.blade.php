@extends('app')
@section('content')
    <h1>SeqTrack - Enter samples</h1>
    <hr/>

    {!! Form::open(['url'=>'samples', 'class'=>'form-inline']) !!}
        <div class="form-group">
        {!! Form::label('basc-project', 'BASC Project', ['class'=>'sr-only']) !!}
        {!! Form::text('basc-project', null, ['class'=>'form-control', 'placeholder'=>'BASC Project']) !!}
        {!! Form::label('name', 'Name', ['class'=>'sr-only']) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
        {!! Form::label('i7', 'i7', ['class'=>'sr-only']) !!}
        {!! Form::text('i7', null, ['class'=>'form-control', 'placeholder'=>'i7']) !!}
        {!! Form::label('i5', 'i5', ['class'=>'sr-only']) !!}
        {!! Form::text('i5', null, ['class'=>'form-control', 'placeholder'=>'i5']) !!}
        {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
