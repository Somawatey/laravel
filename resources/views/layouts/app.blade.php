<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <h1>My Website</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">about</a></li> {{--    can move to the another page--}}
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul> </nav> </header> <main> @yield('content')
</main>
<footer>
    <p>&copy; 2024 My Website</p>
</footer>
</body>
</html>


