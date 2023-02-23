<x-layouts.app
:title="$post->title"
:meta-description="$post->content"
>
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
