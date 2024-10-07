<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mano puslapis')</title>
    <link rel="stylesheet" href="{{ asset('css/simple.css') }}">
</head>
<body>

<div class="content">
    @yield('content')
</div>
<nav>
    <ul>
        <li><a href="/">Pagrindinis puslapis</a></li>
        <li><a href="/client/conferences">Kliento posistemis</a></li>
        <li><a href="/employee/conferences">Darbuotojo posistemis</a></li>
        <li><a href="/admin/users">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div id="my-calendar"></div>

<footer>
    <p>© 2024 Ronaldas</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/Calendar.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#my-calendar').simpleCalendar({
            onDateSelect: function(date) {
                alert("Pasirinkai " + date + " diena");
            }
        });
    });
</script>
</body>
</html>
