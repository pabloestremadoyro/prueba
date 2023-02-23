<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Descripción por Defecto' }}">


    <title>Altronics - {{ $title ?? 'Titulo por Defecto'}}</title>
</head>
<body>

{{-- @include('partials.nav') --}}
<x-layouts.nav />
{{-- comentario --}}

@if (session('status'))
<div>{{  session('status') }}</div>
@endif

{{ $slot }}



</body>
</html>
