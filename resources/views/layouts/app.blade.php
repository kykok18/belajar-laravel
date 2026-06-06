<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Belajar Laravel')</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 20px;
        }

        nav {
            background: #333;
            padding: 10px;
            margin-bottom: 20px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .container {
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>