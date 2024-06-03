@extends('layouts.main')

@section('title') {{'Panel Admin'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5">Posez une question</div>
</div>
<div class="flex flex-col items-center">
    <div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10 w-3/5 p-9">
        <div class="divide-y divide-gray-300/50">
            <form method="POST" action="{{ route('question.store') }}" class="flex flex-col items-center space-y-2">
                @csrf
                @method('POST')


                <label for="questionContent" class="block mb-2 text-sm font-medium text-gray-900 w-full">Votre question:</label>
                <textarea name="questionContent" class="w-full"></textarea>
                <button type="submit" class="text-14532d px-4 py-2 rounded bg-gray-200 hover:bg-green-900 hover:text-white transition-colors duration-300">
                    Demander
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
