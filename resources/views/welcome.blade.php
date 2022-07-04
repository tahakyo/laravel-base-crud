<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <header>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('comics.index') }}">Comics List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('comics.create') }}">New comic</a>
      </li>
    </ul>
  </header>
</body>

</html>