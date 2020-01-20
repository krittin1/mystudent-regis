@extends('layouts.adminDefault')

@section('content')
    <h1>Edit Courses in Term.</h1>
    <form action="{{action('SubjectsController@update',['id' =>$subjects->id])}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title"><b>Course ID</b></label>
            <input style="  border-radius: 100px;" placeholder="course ID"  type="text" id = "subjectID" name="subjectID" value="{{$subjects->subjectID}}"/>

        </div>
        <br>
        <div>
            <label for="detail"><b>Course Name</b></label>
            <textarea name="name" id="name" cols="30" rows="10">{{$subjects->name}}</textarea>
        </div>
        <div>
            <label for="detail"><b>Lecture Credit</b></label>
            <textarea name="lecC" id="lecC" cols="30" rows="10">{{$subjects->lecC}}</textarea>
        </div>
        <div>
            <label for="detail"><b>Lab Credit</b></label>
            <textarea style="margin-left: 30px" name="labC" id="labC" cols="30" rows="10">{{$subjects->labC}}</textarea>
        </div>
        <br>
        <div style="margin-left: 100px">
            <button class="btn btn-dark" style="  border-radius: 100px;  " type="submit">Edit</button>
            <button class="btn btn-warning" style="  border-radius: 100px; " type="reset">Reset</button>

        </div>
    </form>

    <br>

@endsection