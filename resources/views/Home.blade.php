@extends('layouts.app')

@section('title', 'Laravel 10')

@push('css')
    <style>
        body{
            background: #f3f3f3;
        }
    </style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto px-4">
    <h1>Bienvenido a la pagina principal</h1>
    <x-alert2 type="success" class="mb-8">
        <x-slot name="title">
            Alert
        </x-slot>
        Contenido de la alerta
    </x-alert2>
    <p>Hola Mundo</p>
</div>
@endsection