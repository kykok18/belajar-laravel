<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <p>Ini adalah halaman utama web orang yang lagi belajar Laravel.</p>
        @yield('content')
    </div>
</body>

</html>