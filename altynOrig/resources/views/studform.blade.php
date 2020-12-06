@extends('templates.default')
@section('content')
<!--    --><?php
//        echo $statement."ghhgdg";
//        die;
//    ?>
<div class="container mb-2" style="background: #FDE1AE" >
    <div class="row mb-4 mx-auto">
        <div class="col-md-12 mx-auto">
            <h5>Заполните заявления:</h5>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-4">
            <a class="btn btn-info" href="{{route('generatePDF',$statement)}}" role="button">Конвертация заявления в PDF</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-info" href="{{ route('home.downloadpdf', $users->id) }}" role="button">Загрузка заявления</a>
            {{--            <a class="btn btn-info" href="{{ route('home.downloadpdf') }}" role="button">Загрузка заявления</a>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-1 mb-3">
                        <label for="fio">ID: </label>
                        <input type="text" class="form-control" name="id" id="fio" value="{{$users->id}}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="fio">ФИО студента: </label>
                        <input type="text" class="form-control" name="fio" id="fio" value="{{$users->firstname." ".$users->lastname}}" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="course">Курс:</label>
                        <input type="text" name="course" class="form-control" id="course" value="{{$users->student->course}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="subject">Дисциплина:</label>
                            <select class="form-control" id="subject" name="subject">
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{ $subject->title_ru }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="teacher">Преподаватель:</label>
                            <select class="form-control" id="teacher" name="teacher">
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{ $teacher->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="answer">Вопрос:</label>
                            <textarea class="form-control" name="answer" id="answer" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="answer">Ответ:</label>
                            <textarea class="form-control" name="response" id="response" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-info mb-2" type="submit" name="submit"  role="button">Отправить на рассмотрение</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
