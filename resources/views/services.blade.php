@extends('layout')

@section('title', 'Услуги и цены')

@section('content')
<div class="container">
    <table class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th>Код</th>
                <th>Наименование</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->code }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->price }}</td>
                    </tr>    
                @endforeach
            </tbody>
    </table>
    {{ $services->links() }}
</div>
    
@endsection