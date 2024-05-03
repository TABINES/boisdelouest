@extends('layouts.main')

@section('title') {{'FAQ'}} @endsection

@section('content')

<div class="grid grid-cols-2 place-content-start">
    @if(isset($questions) && $questions != null)
        @foreach($questions as $question)
            <div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10">
                <div class="divide-y divide-gray-300/50">
                    <div class="pb-3 text-gray-900">
                        <div>{{ $question->content }}</div>
                        <div>Par {{ $question->user->firstname }} {{ $question->user->lastname }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
