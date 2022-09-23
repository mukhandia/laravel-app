@extends('layout')
@section('title','Guitars')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div>
    <h3>
        {{$guitars['name']}}
        
    </h3>
    <ul>
        <li>
            made by:{{$guitars['Brand']}}
        </li>
    </ul>
</div>
</div>
@endsection