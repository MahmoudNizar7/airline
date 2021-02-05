<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('create') }}" method="post">
    @csrf
    adults: <input type="number" name="adults">
    children: <input type="number" name="children">
    baby: <input type="number" name="baby">
    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
    <input type="submit" value="reserve">
</form>
</body>
</html>
