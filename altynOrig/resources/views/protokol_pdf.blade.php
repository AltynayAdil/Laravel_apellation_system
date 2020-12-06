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
    <h4>Протокол</h4>
    <p>Заседания экзаменационной коммиссии</p>
    <p><h1>Форма протокола:</h1> №2</p>
    <br>
    <p>В заседании участвовали:</p>
    <ul>
        <li>Дузбаев Н.Т.    - председатель опеляционной комиссии</li>
        <li>Мишина А.Е.     - член опеляционной комиссии</li>
        <li>Ипалакова М.Т.    - член опеляционной комиссии</li>
        <li>Едилхан Д.    - член опеляционной комиссии</li>
        <li>Куттыбаева Н.Н.    - член опеляционной комиссии</li>
    </ul>
    <h5 align="center">Повестка дня</h5>
   <p>Рассмотрение аппеляционных заявлений по дисциплине <br>следующих студентов:</p>
    <table border="1" width="500">
        <thead>
        <tr>
            <th>№</th>
            <th>ФИО</th>
            <th>Курс</th>
        </tr>
        </thead>
        <tbody>
{{--            @forelse($statements as $statement)--}}
{{--            <tr>--}}
{{--                <td>{{ $statement->id }}</td>--}}
{{--                <td>{{$statement->name}}</td>--}}
{{--                <td>{{ $statement->course_id }}</td>--}}
{{--            </tr>--}}
{{--            @empty--}}
{{--                <tr>--}}
{{--                    <td>Нет данных</td>--}}
{{--                </tr>--}}
{{--            @endforelse--}}

        </tbody>
    </table>
    <p><strong>Рассмотрение 1-го вопроса повестки дня:</strong></p>

</div>
</body>
</html>

