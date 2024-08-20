@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('quiz.submit') }}" method="POST">
            @csrf
            @foreach($questions as $question)
                <div>
                    <p>{{ $question->text }}</p>
                    @foreach($question->answers as $answer)
                        <input type="radio" name="question_{{ $question->id }}" value="{{ $answer }}">{{ $answer }}
                    @endforeach
                </div>
            @endforeach
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
