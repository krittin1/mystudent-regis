

@extends('layouts.default')



@section('content')
    <h1>All Courses</h1>
    <h2>registration system</h2>

   @foreach($courseArray as $course)
        @if(($course['id']-1)%2 == 0)
            <div class="d-flex mb-3">
        @endif
        <div class="p-2 flex-fill">
           <div class="card" style="width:400px">

               <div class="card-body">

                   <h4 class="card-title">{{ $course['title'] }}</h4>
                   <p class="card-text">{{ $course['code'] }}</p>
                   <p class="card-text">{{ $course['lecturer'] }}</p>
                   <a href="{{ action('CourseController@show', ['id' => $course['id']]) }}" class="btn btn-primary">see more</a>

               </div>
           </div>
        </div>
       @if(($course['id']-1)%2 == 1)
            </div>
        @endif

   @endforeach
    @endsection




