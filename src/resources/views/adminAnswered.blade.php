@extends('layouts.main')

@section('title') {{'Panel Admin'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5 pb-10">Questions répondues</div>
</div>
<div class="grid grid-cols-2 place-content-start">
    @if(isset($questions) && $questions != null)
    @foreach($questions as $question)
    @if($question->answer)
    <div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10">
        <div class="divide-y divide-gray-300/50">
            <div class="pb-3 text-gray-900">
                <div>{{ $question->content }}</div>
            </div>
            <div>
                <div class="pt-3 text-gray-600">{{ $question->answer->content }}</div>
                <div class="flex items-center pt-3 pb-3 text-gray-600">
                    <div class="mr-2 h-10 w-10 flex-shrink-0 sm:mr-3"><img class="rounded-full" src=" {{ $question->answer->user->profile }} " width="40" height="40" alt="{{ $question->answer->user->firstname }} {{ $question->answer->user->lastname }}" /></div>
                    <div class="font-medium text-gray-800">{{ $question->answer->user->firstname }} {{ $question->answer->user->lastname }}</div>
                </div>
            </div>
            <div class="text-center space-x-100">
                <form method="POST" action="{{ route('admin.answered.delete', ['id' => $question->id, 'route' => 'admin.answered']) }}">
                    @csrf

                    <button type="submit" class="text-14532d m-2 mr-10">
                        Supprimer
                    </button>
                </form>
                <form method="POST" action="{{ route('admin.answered.edit', ['id' => $question->id]) }}">
                    @csrf

                    <button type="submit" class="text-14532d m-2 mr-10">
                        Modifier
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @endif
</div>
@endsection
