@extends('layouts.main')

@section('title') {{'Accueil'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5 pb-10">Bois de l'Ouest</div>
    <x-button href="{{route('about')}}" :active="false">
        A propos
    </x-button>
</div>


<div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10">
                    <div class="divide-y divide-gray-300/50">
                        <div class="pb-3 text-gray-900">
                            Nous sommes Bois de l'Ouest, une entreprise artisanale spécialisée dans la fabrication d'objets en bois de qualité.
                        </div>
                        <div class="pt-3 text-gray-900">
                            Chez Bois De l'Ouest, nous croyons en l'utilisation de matières premières durables et respectueuses de l'environnement. <br/>                            Nos artisans talentueux mettent tout leur savoir-faire au service de la création de pièces
                            intemporelles, reflétant ainsi notre engagement envers l'excellence et la durabilité. <br/><br/>
                        </div>
                        <div class="pt-3 text-gray-900">
                            Nous aspirons à créer des pièces tendance et universelles qui offriront une décoration de goût tout en
                            préservant notre planète et notre patrimoine. <br/><br/>
                        </div>
                    </div>
                </div>

@endsection
