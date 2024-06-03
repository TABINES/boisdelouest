@extends('layouts.main')

@section('title') {{'Panel Admin'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5">Modifier une réponse</div>
</div>
@if(isset($question) && $question->answerId != null)
<div class="flex flex-col items-center">
    <div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10 w-3/5 p-9">
        <div class="divide-y divide-gray-300/50">
            <div class="pb-3 text-gray-900">
                <div class="text-xl font-bold text-align-left mb-5">L'utilisateur à demandé :</div>
                <div>{{ $question->content }}</div><br>
            </div>
            <form method="POST" action="{{ route('admin.answered.update', ['id' => $answer->id]) }}" class="flex flex-col items-center space-y-2">
                @csrf
                @method('POST')
                <textarea name="answerContent" class="w-full">{{ $answer->content }}</textarea>
                <button type="submit" class="text-14532d px-4 py-2 rounded bg-gray-200 hover:bg-green-900 hover:text-white transition-colors duration-300">
                    Répondre
                </button>
            </form>
        </div>
    </div>
</div>

@else
<script>window.location = "{{ route('home') }}"</script>
@endif
@endsection
