<!DOCTYPE html>
<html>
<head>
    <title>Invoice Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>
<div style="width: 100%; max-width: 1200px; margin: auto">
{{--    <img src="/img/iitu.png">--}}
    <h4>МЕЖДУНАРОДНЫЙ УНИВЕРСИТЕТ ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ</h4>
    <p style="text-align: right;font-size: 12px">
        <strong> Директору DAB </strong><br>
        <strong> Мустафиной А.К. </strong><br>
        <strong> от студента {{ $statements->course_id }} курса</strong><br>
        <strong> {{ $statements->name }} </strong><br>
        <strong> ID :{{ $statements->id }} </strong><br>
        <strong> IIN :{{ $statements->user->tel }} </strong><br>
    </p>
    <br><br><br><br>
    <h2 style="text-align: center">Заявление на аппеляцию</h2>
    <p>Прошу Вас пересмотреть результат экзамена по дисциплине {{ $statements->subject->title_ru }}</p>
    <p>Вопрос: {{ $statements->answer }}</p>
    <p>Ответ: {{ $statements->response }}</p>

</div>
</body>
</html>
