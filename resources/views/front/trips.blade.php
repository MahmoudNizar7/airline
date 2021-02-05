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
@if($trips->count() > 0)
    <table class="ext-center table" cellspacing="0" width="100%" style="border: 1px">
        <thead>
        <tr>
            <th>#</th>
            <th>from</th>
            <th>to</th>
            <th>travel number</th>
            <th>air line</th>
            <th>price</th>
            <th>baby price</th>
            <th>seats</th>
            <th>date</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trips as $trip)
            <th>{{ $trip->id }}</th>
            <th>{{ $trip->from }}</th>
            <th>{{ $trip->to }}</th>
            <th>{{ $trip->travel_no }}</th>
            <th>{{ $trip->air_line }}</th>
            <th>{{ $trip->price }}</th>
            <th>{{ $trip->baby_price }}</th>
            <th>{{ $trip->seats }}</th>
            <th>{{ $trip->date }}</th>
            <th><a href="{{ route('first_form',['id'=>$trip->id]) }}">reservation now</a></th>
        @endforeach
        </tbody>
    </table>
@endif
</body>
</html>
