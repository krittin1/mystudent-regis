@extends('layouts.adminDefault')

@section('content')

    <div class="container">
        <h1>All Courses</h1>

                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif


                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Course ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Lecture Credit</th>
                        <th scope="col">Lab Credit</th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)

                    <tr>

                       <th scope="row">{{ $subject->subjectID }}</th>
                        <td>{{ $subject->name }}</td>
                       <td>{{ $subject->lecC }}</td>
                        <td>{{ $subject->labC }}</td>
                        <td> <a class="btn btn-outline-info" style="  border-radius: 100px;" href="{{action('SubjectsController@show',['id'=>$subject->id])}}">SHOW</a></td>
                        <td>

                            <form method="post" class="delete_form" action="{{action('SubjectsController@destroy', ['id'=>$subject->id])}}">
                                  {{csrf_field()}}

{{--                                @if( Auth::user() and Auth::user()->can('destroy', \App\Subject::class) )--}}
                                  <input type="hidden" name="_method" value ="DELETE" />

                                  <button type="submit" class="btn btn-danger" style="  border-radius: 100px;">DROP</button>
{{--                                 @endif--}}

                        </form>
                        </td>
                   </tr>

                    @endforeach
                    </tbody>
                </table>
             <br>
        <div class="detail" style="font-family: 'Proza Libre', sans-serif;font-family: 'Kanit', sans-serif;">



        <p style="font-size: xx-large">ถ้าอยากถอนก็ไม่ต้องคิดมาก คุณสามารถทำได้เลยเพียงแค่ปลายนิ้ว</p>
            <h1>คุณสามารถทำการลงทะเบียนรายวิชาได้นะ</h1>
            <br>

{{--            @if( Auth::user() and Auth::user()->can('create', \App\Subject::class) )--}}
                <div>
                        <a class="btn btn-success" style="  border-radius: 100px;" href="{{action('SubjectsController@create')}}">ADD Courses</a>
                </div>
{{--            @endif--}}


             <br>
             <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
             <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){ $('.delete_form').on('submit', function(){
            if (confirm("Are you sure you want to drop ?")){
                return true;
            }
            else {
                return false;
            }
        });
        });
    </script>


@endsection