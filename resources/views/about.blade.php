{{--
@extends('layouts.app')

@section('title','about')
@section('meta-description','About meta description')

@section('content')
<h1>About</h1>
@endsection
--}}

{{-- Con atributos --}}
<x-layouts.app 
titulo='about' 
meta-description="Home meta description"
>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">About</h1>
</x-layout>