@extends('layouts.app')

@section('content')
<h3>{{$title}}</h3>
    @if (count($services) > 0)
        <ul>
        @foreach ($services as $service)
            <li>{{$service}}</li>
        @endforeach
        </ul>
    @endif
@endsection
