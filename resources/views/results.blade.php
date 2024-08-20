@extends('app')

@section('content')

<a class="top-left-corner blue-btn" href="{{ route('profile') }}"> {{auth()->user()->username}} </a>

<a class="top-right-corner blue-btn" href="{{ route('home') }}">
    < Home</a>

    
        
    @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Results</h1>
        <p>Correct Answers: {{ $correctAnswers }} / {{ $totalQuestions }}</p>
        @foreach($categoryScores as $category => $score)
            <p>{{ $category }}: {{ $score['correct'] }} / {{ $score['total'] }}</p>
        @endforeach
    </div>
@endsection
