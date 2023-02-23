<label for="title">
    Título<br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    @error('title')
    <br>
    <small style="color: red">{{ $message }}</small>
    @enderror
    </label>
    <br>
    <label for="content">
    Contenido<br>
    <textarea name="content">{{old('content', $post->content)}}</textarea>
    @error('content')
    <br>
    <small style="color: red">{{ $message }}</small>
    @enderror
    </label>
    <br>
