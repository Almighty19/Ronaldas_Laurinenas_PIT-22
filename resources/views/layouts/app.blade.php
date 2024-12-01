<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mano puslapis')</title>
    <link rel="stylesheet" href="{{ asset('css/simple.css') }}">
</head>
<body>
<nav>

        <a href="/">Pradžia</a>
        <a href="/client/conferences">Klientas</a>
        <a href="/employee/conferences">Darbuotojas</a>
    <a href="{{ route('admin.home') }}">Admin</a>
    <a href="{{ route('register') }}">Registracija</a>


</nav>
<div class="content">
    @yield('content')
</div>


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
