@extends('templates.default')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Апелляционный модуль</h1>
            <p class="lead">Данная система предназначена для подачи заявления на аппеляцию студентами, магистрантами.
                Выберите кнопку "Авторизоваться" для прохождения авторизации и подачи заявления.
            </p>
            <a href="{{route('auth.signin')}}" class="btn btn-info" role="button">Авторизоваться</a>
        </div>
    </div>
@endsection

