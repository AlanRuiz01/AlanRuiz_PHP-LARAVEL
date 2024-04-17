{{-- Comentarios en blade --}}
{{-- Metodos para plantillas con componentes --}}
{{--
 @component('components.layout')

 <h1>Home con componente</h1>
@endcomponent --}}

{{--
<x-layout>
<x-slot name="titulo">
        Home
    </x-slot>
    <h1>Otra forma de Home con componente</h1>
</x-layout>
--}}

{{-- Con atributos --}}
<x-layouts.app 
titulo='Home' 
meta-description="Home meta description"
>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>
@auth
<div class="text-white" > Authenticated User : {{Auth::user()->name}}</div>
<div class="text-white" > Email : {{Auth::user()->email}}</div>
@endauth
</x-layout>

   
