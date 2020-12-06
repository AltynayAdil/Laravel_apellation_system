@extends('templates.default')

@section('content')
    <body style="background: #343A40">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-6 mx-auto">
                <h3>Страница коммиссии</h3>
            </div>
            <div class="col-md-3">
                <a class="btn btn-info" href="#" role="button">Создать протокол</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-info" href="#" role="button">Загрузить файл</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 box">
                <table class="table table-striped table-hover table-light">
                    <thead>

                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">ФИО студента</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Заявление(.pdf)</th>
                        <th scope="col">Решение</th>

                    </tr>

                    </thead>
                    <tbody>
                    @foreach($statements as $statement)
                        <tr>
                            <td scope="col">{{ $statement->id }}</td>
                            <td scope="col">{{ $statement->name }}</td>
                            <td scope="col">{{ $statement->status }}</td>
                            <td><a href="{{ route('commission.download', $statement->id) }}">{{ $statement->filepdf }}</a></td>
                            <td>{{ $statement->cause }}</td>
                            <td class="table-buttons"><a href="{{ route('home.detail', $statement->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                <a href="{{route("home.causeyes", $statement->id)}}" class="btn btn-warning"><i class="fa fa-envelope-open-o"></i></a>
                                <a href="{{route("home.causeno", $statement->id)}}" class="btn btn-danger"><i class="fa fa-envelope-open-o"></i></a>
                                <a href="{{ route('home.statuscomyes', $statement->id) }}" class="btn btn-info"><i class="fa fa-check-square-o"></i></a>
                                <form method="post" action="{{ route('home.destroy',$statement) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection





