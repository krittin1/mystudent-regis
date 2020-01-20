@extends('layouts.adminDefault')

@section('content')

    <div>
    <h1>Course enroll in this Term.</h1>
    </div>

    <br>

    <h1>{{$subjects->subjectID }}</h1>

    <h3>{{$subjects->name}}</h3>



     <br>

    @if(Auth::user() and Auth::user ()->can('update', $subjects))
    <a href="{{action('SubjectsController@edit',['id'=>$subjects->id])}}" class="btn btn-dark">
        Edit this Course
    </a>
    @endif



    <br><br><br><br><br><br><br><br><br><br><br>
@endsection