<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mano puslapis')</title>
    <link rel="stylesheet" href="{{ asset('css/simple.css') }}">

</head>
<body>
<nav>
    <ul>
        <li><a href="/">Pagrindinis puslapis</a></li>
        <li><a href="/client/conferences">Kliento posistemis</a></li>
        <li><a href="/employee/conferences">Darbuotojo posistemis</a></li>
        <li><a href="/admin/users">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div class="content">
    @yield('content')
</div>

<footer>
    <p>© 2024 Ronaldas</p>
</footer>
</body>
</html>
