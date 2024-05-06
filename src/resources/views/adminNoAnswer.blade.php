@extends('layouts.main')

@section('title') {{'Panel Admin'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5 pb-10">Questions sans réponse</div>
</div>
<div class="grid grid-cols-2 place-content-start">
    @if(isset($questions) && $questions != null)
    @foreach($questions as $question)
    <div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10">
        <div class="divide-y divide-gray-300/50">
            <div class="pb-3 text-gray-900">
                <div>{{ $question->content }}</div><br>
                <div>Par {{ $question->user->firstname }} {{ $question->user->lastname }}</div>
            </div>
            <div class="text-center space-x-100">
                <form method="POST" action="{{ route('question.delete', ['id' => $question->id, 'route' => 'admin.answered']) }}">
                    @csrf
                    <button type="submit" class="text-14532d m-2 mr-10">
                        Répondre
                    </button>
                    <button type="submit" class="text-14532d m-2 mr-10">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection