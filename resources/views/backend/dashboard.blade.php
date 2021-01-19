@extends('backend.layout.default')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Bienvenido :name', ['name' => $logged_in_user->name]) }}
        </x-slot>

        <x-slot name="headerActions">
        </x-slot>

        <x-slot name="body">
            <p>
                {{ __('Bienvenido al tablero') }}
            </p>

            <br>

            <p>
                Token: <b>{{ secToken() }}</b>
            </p>
        </x-slot>
    </x-backend.card>
@endsection
