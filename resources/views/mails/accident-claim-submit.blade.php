<!DOCTYPE html>
<html>

<head>
    <title>Laravel Email</title>
</head>

<body>
    <h1>Hello, {{ $name }}</h1>
    <p>Your accident claim has been submitted against car registration number: <b>{{ $car_registration_number }}</b>.
        One of our representative will call you soon. In the mean time if you want to complete the full form you can do
        so by clicking on the link:
        <a href="{{ route('home.accident-repairs') }}">{{ route('home.accident-repairs') }}</a>
    </p>
    <p>Thanks,<br>{{ config('mail.from.name') }}</p>
</body>

</html>
