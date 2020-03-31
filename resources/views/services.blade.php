@extends('layout')

@section('title', 'Услуги и цены')

@section('content')
<div class="container">
    @foreach ($services as $service)
        {{ $service->name }}
    @endforeach
</div>

{{ $services->links() }}    
@endsection