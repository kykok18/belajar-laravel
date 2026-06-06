<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact Us')</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <h1>Contact Us</h1>
        <p>hubungi kami jika Anda memiliki pertanyaan atau masukan.</p>
        @yield('content')
    </div>

</body>

</html>