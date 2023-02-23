<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('posts.index') }}">Blog</a></li>
    <li><a href="{{ route('contacto') }}">Contacto</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('test') }}">Test</a></li>
    @guest
    <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Registro</a></li>
    @endguest
    @auth
    <li>
        <a href="#">{{ Auth::user()->name }}</a><br>
        <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
        </form>
    </li>
    @endauth
</ul>
