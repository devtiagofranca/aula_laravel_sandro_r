<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milha primeira view</title>
</head>
<body>
<h1>Minha primeira view</h1>
<ol>
@foreach ($usuarios as $u)
    <li>{{ $u['nome'] }}</li>
@endforeach
</ol>

</body>
</html>
