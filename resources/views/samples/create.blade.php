@extends('app')
@section('content')
    <h1>SeqTrack - Enter samples</h1>
    <hr/>

    {!! Form::open(['class' => 'form-inline']) !!}
        <div class="form-inline">
        {!! Form::label('basc-project', 'BASC Project', ['class' => 'sr-only']) !!}
        {!! Form::text('basc-project', null, ['class' => 'form-control', 'placeholder' => 'BASC Project']) !!}
        {!! Form::label('name', 'Name', ['class' => 'sr-only']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}

        </div>
    {!! Form::close() !!}
@endsection
