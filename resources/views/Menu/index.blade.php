@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Menú Principal</h1>
    <ul>
        @forelse($menus as $menu)
            <li><a href="{{ url($menu->route) }}">{{ $menu->title }}</a></li>
        @empty
            <li>No hay entradas de menú.</li>
        @endforelse
    </ul>
</div>
@endsection