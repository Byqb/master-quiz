@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Leaderboard</h1>
        <table>
            <tr>
                <th>Username</th>
                <th>XP</th>
                <th>Total Correct Answers</th>
            </tr>
            @foreach($leaders as $leader)
                <tr>
                    <td>{{ $leader->name }}</td>
                    <td>{{ $leader->xp }}</td>
                    <td>{{ array_sum(array_column($leader->category_scores, 'correct')) }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
