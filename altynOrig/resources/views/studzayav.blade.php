@extends('templates.default')

@section('content')

{{--    <link rel="stylesheet" href="/css/style2.css">--}}
<body style="background: #343A40">
<div class="container" style="background: #FDE1AE">
    <div class="row mb-4">
        <div class="col-md-12 mt-2">
            <h5>Мои заявления на аппеляцию</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-info mb-4" href="{{route('student',$id)}}" role="button">Подать на аппеляцию</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            <form class="box1">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">ФИО студента:</label>
                        <input type="text" class="form-control" id="validationDefault01" value="{{ $firstname." ".$lastname }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Курс:</label>
                        <input type="text" class="form-control" id="validationDefault02" value="{{ $course }}" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 box">
            <table class="table table-hover table-light">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Предмет</th>
                    <th scope="col">Заявление(.pdf)</th>
                    <th scope="col">Статус по движению</th>
                    <th scope="col">Решение</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->statements as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td><a href="{{ route('home.detail',$item) }}">{{ $item->subject->title_ru }}</a></td>
                    <td><a href="{{ route('pdf.download', $item->id) }}">{{ $item->filepdf }}</a></td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->cause }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




