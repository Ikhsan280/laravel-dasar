<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($posts as $data)
            id : {{ $data['id'] }} <br>
            title : {{ $data['title'] }} <br>
            id : <span> {{ $data['content'] }}</span>
        @endforeach
    </ul>
</body>

</html>
