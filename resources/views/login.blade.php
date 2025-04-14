<form method="POST" action="{{ route('login.post') }}">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
