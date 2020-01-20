<nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <a class="navbar-brand" href="{{action('CenterController@index') }}">
        <img src="ku.png"  style="width:40px;">
    </a>
    <ul class="navbar-nav">

        <li class="nav-item active" style=" font-family: 'Proza Libre', sans-serif;

    ">
            <a class="nav-link" href="{{action('CenterController@index') }}"><b>Department of Computer Science Kasetsart University</b></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{action('SubjectsController@index') }}">Courses</a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{action('CenterController@index') }}">Home</a>
        </li>


    </ul>

</nav>
