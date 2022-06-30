<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Comics List</h1>

    <ul>

        @foreach ($comics as $comic)
            <li>
              <a href="">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                <div>{{ $comic->title }}</div>
              </a>
            </li>
        @endforeach
    </ul>
</body>

</html>
