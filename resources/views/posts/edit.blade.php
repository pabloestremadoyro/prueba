<x-layouts.app
:title="$post->title"
:meta-description="$post->content"
>
<h1>Formulario de Edición</h1>

<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf @method('PATCH')

    @include('posts.form-fields')

<button type="submit">Enviar</button>
</form>
<br>

<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
