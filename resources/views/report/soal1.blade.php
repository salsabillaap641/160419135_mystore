@extends('layouts.conquer2')
@section('title')
    soal 1
@endsection
@section('content')
<h2>jawaban soal 1</h2>
<p>Table</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            
        </tr>
    </thead>
<tbody>
    @foreach ($listdata as $li)
    <tr>
        <td>{{$li->name}}</td>
        <td>{{$li->description}}</td>
        
    </tr>
    @endforeach
</tbody>
</table> 
@endsection