<!DOCTYPE html>
<html>

<head>
    <title>Laravel Email</title>
</head>

<body>
    <h1>Hello, {{ config('app.name') }}</h1>
    <p>A new accident claim has been submitted. Customer details are as followed.</p>
    <ul>
        <li>Name: {{ $name }}</li>
        <li>Email: {{ $email }}</li>
        <li>Phone: {{ $phone }}</li>
        <li>Car Registration #: {{ $car_registration_number }}</li>
    </ul>
    <p>Thanks,<br>{{ config('mail.from.name') }}</p>
</body>

</html>
