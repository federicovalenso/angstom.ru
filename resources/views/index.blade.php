@extends('layout')

@section('title', 'Главная страница')

@section('content')
<div class="container-fluid parallax parallax-main py-0 px-0">
    <div class="header-text py-5">
        <h1 class="text-center py-5 my-5 display-1 text-primary">ООО Стоматология</h1>
        <h3 class="text-center py-5 display-3 text-success">Ждём вас в гости, дорогие пациенты!</h3>
    </div>
</div>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad0a95e4dd7aef1dc64eefaf30c1cec34c87bbe1cc84da7a2a7763adf68b3507b&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
@endsection