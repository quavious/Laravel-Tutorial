@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center my-3">
<h3>{{$title}}</h3>
<p>This is the Laravel Application from the Scratch Course in Youtube</p>
</div>
<div class="flex justify-center">
    <div class="w-10/12 bg-white p-6 rounded-lg">
        Posts
    </div>
</div>
@endsection