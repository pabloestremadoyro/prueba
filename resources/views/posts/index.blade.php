<x-layouts.app
title='Blog'
meta-description='Descripción Blogs.app'
>

<h1>Blog</h1>
@auth
<a href="{{ route('posts.create') }}">Create new post</a>
@endauth
@foreach ($posts as $post)
     <div style="display: flex; align-items: baseline"><h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }} : {{ $post->content }}</a>
        @auth
        &nbsp;<a href="{{ route('posts.edit', $post) }}"> -> Editar</a></h2>&nbsp;<form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
            @endauth
        </form>

    </div>
@endforeach

</x-layouts.app>
