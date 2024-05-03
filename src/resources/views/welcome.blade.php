@extends('layouts.main')

@section('title') {{'Accueil'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5 pb-10">Bois de l'Ouest</div>
    <x-button href="{{route('about')}}" :active="false">

    </x-button>
</div>


@endsection
