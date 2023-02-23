{{-- @component('components.layout') --}}
<x-layouts.app 
title='Home' 
meta-description='Descripción Home'
>
<h1>Home</h1>

@auth
<pre>
Usuario Autenticado: {{ Auth::user()->name }}
Email: {{ Auth::user()->email }}
</pre>
@endauth

</x-layouts.app>

{{-- @endcomponent --}}