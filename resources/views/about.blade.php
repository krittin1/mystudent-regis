
 @extends('layouts.default')

 @section('image')

 @endsection

@section('content')


    <div class="about-student" style="align-text: right">
    <h1>About Student</h1>
    <p>ID: <b>{{ $id }} </b> </p>
    <p>Name: <b>{{ $name }} </b> </p>
    <p>Year: <b>{{ $year }}</b> </p>
    <p>Faculty:<b> {{ $faculty }}</b> </p>
    <p>Major: <b>{{ $major }} </b> </p>
    <p>Address: <b>{{ $address }}</b> </p>
    <p>Advisor: <b>{{ $advicer }}</b> </p>
    <p>Status:<b> {{ $status }}</b> </p>
        <br>
        <br>
    </div>


@endsection






 @section('footer')

 @endsection