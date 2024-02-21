<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Innovatech - {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    @vite(['resources/css/cleanblog.css', 'resources/js/cleanblog.js', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <x-layouts.nav/>
    <header class="masthead" style="background-image: url('{{ $headImage ?? null }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="{{ request()->routeIs('posts.show') ? null : 'col-md-10 col-lg-8 col-xl-7' }}">
                    <div class="site-heading">
                        <h1 class="introduction-text">{{ $title }}</h1>
                        <span class="subheading introduction-text">{{ $subtitle ?? null }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if(session('status'))
        <div class="alert alert-success text-center custom-mw-500px m-auto" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{ $slot }}
    <x-layouts.footer/>
</body>
</html>