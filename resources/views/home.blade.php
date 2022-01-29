@extends('layouts.base')

@section('title-cables')
    Главная страница
@endsection

@section('content')
    <img class="d-block mx-auto mb-4" src="/images/2.png" alt width="450" height="265">
    @guest
    <p class="text-danger text-center"><strong>ДЛЯ ВЫПОЛНЕНИЯ РАСЧЕТА АВТОРИЗУЙТЕСЬ В СИСТЕМЕ</strong></p>
    @endguest
    @auth
    <form action="{{ route('start') }}" method="GET">   
    <button type="submit" class="btn btn-success" style="position: relative; float: right;">Начать расчет</button>
    </form>
    @endauth
@endsection

@section('aside')
    @parent
    <p>В зависимости от требований, кабели могут быть экранированные и неэкранированные. Если кабель неэкранированный и состоит из нескольких проводов, требуется дополнительная изоляционная трубка.</p>
    <p class="text-primary">Не забудьте это учесть при проведении расчета.</p>
    <p>Структура экранированного кабеля представлена на рисунке.</p>
@endsection