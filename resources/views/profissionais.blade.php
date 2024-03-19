<!DOCTYPE html>
<html>
<head>
    <title>Profissionais</title>
</head>
<body>
    <h1>Profissionais</h1>
    <ul>
        @foreach ($profissionais as $profissional)
            <li>{{ $profissional->nome }} - {{ $profissional->categoria }}</li>
        @endforeach
    </ul>
</body>
</html>
