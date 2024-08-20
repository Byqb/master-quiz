@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Profile</h1>
        <p>Email: {{ $user->email }}</p>
        <p>XP: {{ $user->xp }}</p>
        <p>Rank: {{ $rank }}</p>
        <h3>Category Statistics</h3>
        @foreach($user->category_scores as $category => $score)
            <p>{{ $category }}: {{ $score['correct'] }} / {{ $score['total'] }}</p>
        @endforeach
    </div>
@endsection
