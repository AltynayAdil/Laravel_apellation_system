<!DOCTYPE html>
<html>
<head>
    <title>Generate Pdf</title>
</head>
<body>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>
<h1>{{ $statements['name']}}</h1>
<div>
    <p>{{$statements->answer}}</p>
</div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>

    </tbody>
</table>
</body>
</html>
