<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Data Post</h1>
    </center>
    @foreach ($query as $item)
        <h2>{{ $item->id }}</h2>
        <p>{{ $item->name }}</p>
        <p>{{ $item->bornDate }}</p>
        <p>{{ $item->gender }}</p>
        <p>{{ $item->address }}</p>
        <p>{{ $item->religion }}</p>
        <p>{{ $item->age }}</p>
        <p>{{ $item->hobi }}</p>
        <hr>
    @endforeach
</body>

</html>
