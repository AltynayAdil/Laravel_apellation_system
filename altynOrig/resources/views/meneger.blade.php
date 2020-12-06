@extends('templates.default')

@section('content')
    <link rel="stylesheet" href="/css/style2.css">
    <body style="background: #343A40">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h5>Страница менеджера</h5>
                <form class="box1">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">ФИО студента:</label>
                            <input type="text" class="form-control" id="validationDefault01" value="Адиль Алтынай" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Группа:</label>
                            <input type="text" class="form-control" id="validationDefault02" value="CSSE-202M" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <a class="btn btn-info" href="{{route('student')}}" role="button">Подать на аппеляцию</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 box">
                <table class="table table-hover table-light">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">Предмет</th>
                        <th scope="col">Преподаватель</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Заявление(.pdf)</th>
                        <th scope="col">Статус по движению</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Веб-программирование</td>
                        <td>заявление1</td>
                        <td>на рассмотрении</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Администрирование серверов</td>
                        <td>заявление2</td>
                        <td>рассмотрен</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Администрирование серверов</td>
                        <td>заявление3</td>
                        <td>на рассмотрении</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection




