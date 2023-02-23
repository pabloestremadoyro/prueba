<x-layouts.app
title="Crear Nuevo Post"
meta-description="Formulario para Crear un nuevo Post"
>
<h1>Crear Nuevo Post</h1>


<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    @include('posts.form-fields')

<button type="submit">Enviar</button>
</form>
<br>
<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
