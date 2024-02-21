<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Innovatech - {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="admin-body" style="background-image: url('{{ $bgImage ?? null }}')">
    {{ $slot }}
</body>
</html>