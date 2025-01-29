<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daily Report</h1>
    <p>Hi, {{ $user->name }}</p>
    <p>Here is your daily report</p>
    <p>Sales total on day: R${{ $total }}</p>
</body>
</html>