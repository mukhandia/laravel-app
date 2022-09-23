@extends('layout')
@section('title','Guitars')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 lg:px-8" method="POST" action="{{route('guitars.store')}}">
        @csrf
        <div>
            <label for="guitar-name" class="col-sm-2 col-form-label col-form-label-sm">Guitar Name</label>
            <div>
                <input type="text" class="form-control form-control-sm" id="guitar-name" placeholder="Guitar name" name="guitar_name">
            </div>
            @error('guitar_name')
            <div class="form-error">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="brand">Brand</label>
            <div>
                <input type="text" id="brand" placeholder="Brand" name="brand">
            </div>
            @error('brand')
            <div class="form-error">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="year made">Year made</label>
            <div>
                <input type="text" id="year" placeholder="Year made" name="year">
            </div>
            @error('year')
            <div class="form-error">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <button type="submit"> submit</button>
        </div>
    </form>
</div>
@endsection