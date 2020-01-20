



@extends('layouts.default')

@section('content')
    


    <div class="jumbotron">
  <h1 class="display-4">Hello, Student! </h1>
  <p class="lead">This is Student Grade and Midterm Score system.</p>
  <hr class="my-4">
  <p>This is page for show student midterm score and student grade of {{ $course['title'] }}.</p>

        <p>Full Score: {{ $course['full'] }} %</p>
        <p>Your Midterm Score is {{ $course['midterm']  }}</p>
        <p>Midterm Maximun Score is {{ $course['max']  }}</p>
        <p>Midterm Minimum Score is {{ $course['min']  }}</p>
        <p>Midterm Average Score is {{ $course['avg']  }}</p>
        <p>Your Grade is {{ $course['grade'] }}</p>

</div>
@endsection

