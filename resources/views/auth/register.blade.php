<x-layouts.app title='Registro' meta-description='Descripción Registro'>
    <h1>Formulario de Registro</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">
            Nombre<br>
            <input type="text" name="name" value="{{ old('name') }}" autofocus="autofocus">
            </label>
            <br>
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
                <label for="password_confirmation">
                    Confirmar Password<br>
                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}">
                    </label>
                    <br>
<p>
        <button type="submit">Registrar</button>
    </form>
    <a href="{{ route('login') }}"></a>
</x-layouts.app>
