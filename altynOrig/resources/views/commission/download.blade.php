@extends('templates.default')

@section('content')

    <h1>Загрузка файла заявления</h1>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('commission.update', ['statement'=>$statement]) }}" enctype="multipart/form-data">
                @csrf
                <p>Файл: <br><input type="file" name="protokolpdf" class="form-control"> </p>
                <br>
                <button type="submit" class="btn btn-info">Загрузить</button>

            </form>
        </div>
    </div>

@endsection

