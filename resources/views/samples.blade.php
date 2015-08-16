@extends('app')
@section('content')
    <h1>SeqTrack - Samples</h1>
    <hr/>    
    <table class="table table-striped">
    <thead><tr>
    </thead>
    @foreach ($samples as $s)
    <tr>
        <td>{{ $s->basc_project }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->i7_id }}</td>
        <td>{{ $s->i5_id }}</td>
    </tr> 
    @endforeach
    </table>
@endsection
