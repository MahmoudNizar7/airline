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

<form action="{{ route('client_trips.store') }}" method="post">
    @csrf
    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
    <input type="hidden" name="adults" value="{{ $adults }}">
    <input type="hidden" name="children" value="{{ $children }}">
    <input type="hidden" name="baby" value="{{ $baby }}">
    @if($adults > 0)
        <h1>adults</h1>
        @for($adults ; $adults > 0 ; $adults--)
            first name:<input type="text" name="first_name[]">
            last name:<input type="text" name="last_name[]">
            birth od date:<input type="datetime-local" name="dob[]">
            nationality:<select name="nationality[]">
                <option value="">-- select one --</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
            </select>

            passport number:<input type="text" name="passport_no[]">
            passport expiration date:<input type="datetime-local" name="ped[]">
            <input type="hidden" name="type[]" value="adult">
        @endfor
    @endif

    @if($children > 0)

        <h1>children</h1>
        @for($children ; $children > 0 ; $children--)
            first name:<input type="text" name="first_name[]">
            last name:<input type="text" name="last_name[]">
            birth od date:<input type="datetime-local" name="dob[]">
            nationality:<select name="nationality[]">
                <option value="">-- select one --</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
            </select>

            passport number:<input type="text" name="passport_no[]">
            passport expiration date:<input type="datetime-local" name="ped[]">
            <input type="hidden" name="type[]" value="child">
        @endfor
    @endif

    @if($baby > 0)

        <h1>baby</h1>
        @for($baby ; $baby > 0 ; $baby--)
            first name:<input type="text" name="first_name[]">
            last name:<input type="text" name="last_name[]">
            birth od date:<input type="datetime-local" name="dob[]">
            nationality:<select name="nationality[]">
                <option value="">-- select one --</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
            </select>

            passport number:<input type="text" name="passport_no[]">
            passport expiration date:<input type="datetime-local" name="ped[]">
            <input type="hidden" name="type[]" value="baby">
        @endfor
    @endif

    <br>reservation confirmation: <input type="checkbox" name="confirmation" value="1">
    <input type="submit" value="Reserve Now">
</form>
</body>
</html>
