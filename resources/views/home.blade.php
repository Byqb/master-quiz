<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mister Quiz - Home</title>
</head>
<body>
    <h1>Welcome to Mister Quiz</h1>
    
    @auth
        <a href="{{ route('profile') }}">Profile</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth

    <a href="{{ route('leaderboard') }}">Leaderboard</a>
    <a href="{{ route('quiz.start') }}">Start Quiz</a>
</body>
</html>