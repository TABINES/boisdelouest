@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Statistiques des Questions et Réponses</h1>
    
    <ul>
        @foreach($statsByMonth as $month => $stats)
            <li>
                <strong>{{ date('F Y', strtotime($month . '-01')) }}</strong>: 
                {{ $stats['question_count'] }} questions, 
                {{ $stats['answer_count'] }} réponses,
                {{ $stats['answer_rate'] }} % de réponse
            </li>
        @endforeach
    </ul>
</div>
@endsection
