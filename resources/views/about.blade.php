<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'About Us')</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <h1>About Us</h1>
        <p>Ini adalah halaman tentang kami, tempat Anda dapat mempelajari lebih banyak tentang perusahaan dan misi kami.</p>
    </div>
</body>

</html>