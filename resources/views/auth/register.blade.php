<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Vardas</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">El. paštas</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Slaptažodis</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Pakartokite slaptažodį</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <button type="submit">Registruotis</button>
</form>
