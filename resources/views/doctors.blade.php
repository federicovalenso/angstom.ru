@extends('layout')

@section('title', 'Врачи')

@section('content')
<div class="container">
    <div class="card-columns">
        @foreach($doctors as $doctor)
            <div class="card bg-light">
                <img class="card-img-top" src="storage/{{ $doctor->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-success">{{ $doctor->name }}</h5>
                    <p class="card-text">
                        Кабинет: <b>{{ $doctor->cab }}</b><br>
                        Диплом: {{ $doctor->diploma }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection