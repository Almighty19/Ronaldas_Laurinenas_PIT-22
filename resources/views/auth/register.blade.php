<link rel="stylesheet" href="{{ asset('css/simple.css') }}">

<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="first_name">Vardas:</label>
    <input type="text" name="first_name" required><br>
    @error('first_name')
    <div class="error">{{ $message }}</div>
    @enderror

    <label for="last_name">Pavardė:</label>
    <input type="text" name="last_name" required><br>
    @error('last_name')
    <div class="error">{{ $message }}</div>
    @enderror

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    @error('email')
    <div class="error">{{ $message }}</div>
    @enderror

    <label for="password">Slaptažodis:</label>
    <input type="password" name="password" required><br>
    @error('password')
    <div class="error">{{ $message }}</div>
    @enderror

    <label for="password_confirmation">Pakartoti slaptažodį:</label>
    <input type="password" name="password_confirmation" required><br>

    <button type="submit">Registruotis</button>
</form>


