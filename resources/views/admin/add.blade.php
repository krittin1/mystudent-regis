@extends('layouts.adminDefault')
@section('content')



    <div class="container">
        <h2>ADD Courses in Term.</h2>


        <form action="{{action('SubjectsController@store')}}" method="post" >
            @csrf
            <div class="form-group">
                <label for="email">Course ID:</label>
                <input type="text" class="form-control" id="Cid" placeholder="course ID" name="Cid" style="  border-radius: 100px;">
            </div>
            <div class="form-group">
                <label for="pwd">Course Name:</label>
                <input type="text" class="form-control" id="name" placeholder="course name" name="name" style="  border-radius: 100px;">
            </div>

            <div class="form-group">
                <label for="pwd">Lecture Credit:</label>
                <input type="text" class="form-control" id="Clec" placeholder="lecture credit" name="Clec" style="  border-radius: 100px;">
            </div>

            <div class="form-group">
                <label for="pwd">Lab Credit:</label>
                <input type="text" class="form-control" id="Clab" placeholder="lab credit" name="Clab" style="  border-radius: 100px;">
            </div>

            <button type="submit" class="btn btn-success" style="  border-radius: 100px;">Submit</button>
        </form>

        <br><br><br><br><br>
    </div>



    @endsection

<br><br>





