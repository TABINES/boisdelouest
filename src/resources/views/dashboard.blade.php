@extends('layouts.main')

@section('title') {{'Tableau de bord'}} @endsection

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-200 shadow-xl rounded border ">
            <div class="p-6 text-gray-900">
                {{ __("Vous êtes connecté!") }}
            </div>
        </div>
    </div>
</div>

@endsection
