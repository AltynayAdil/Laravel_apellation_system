@extends('templates.default')

@section('content')


    <div class="container-fluid">
        <div class="card text-center">
            <div class="card-header">
                Статус {{$statements->status}}
            </div>
            <div class="card-body">
                <h5 class="card-title">Заявление: {{$statements->name}}</h5>
                <h5 class="card-title">Преподаватель: {{$statements->teacher->name}}</h5>
                <h5 class="card-title">Предмет: {{$statements->subject->title_ru}}</h5>
                <p class="card-text">Вопрос: {{$statements->answer}}</p>
                <p class="card-text">Ответ: {{$statements->response}}</p>

            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

    </div>

@endsection


