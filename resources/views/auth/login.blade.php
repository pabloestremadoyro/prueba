<x-layouts.app title='Login' meta-description='Descripción Login'>
    <h1>Formulario de Registro</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

            <label for="email">
            Email<br>
            <input type="email" name="email" value="{{old('email')}}">
            </label>
            <br>
            <label for="password">
                Password<br>
                <input type="password" name="password" value="{{old('password')}}">
                </label>
                <br>
                <label for="remember">
                    Recuérdame<br>
                    <input type="checkbox" name="remember">
                    </label>
                    <br>

<p>
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('register') }}">Registrar</a>
</x-layouts.app>