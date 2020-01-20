
@extends('layouts.centerDefault')

@section('content')
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="#home" class="w3-bar-item w3-button">Department of Computer Science Kasetsart University</a>

            <div class="w3-right w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">About</a>
                <a href="#menu" class="w3-bar-item w3-button">Academic</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
                <a href="{{action('AboutController@index')}}" class="w3-bar-item w3-button">Student</a>
                <a href="{{action('SubjectsController@index')}}" class="w3-bar-item w3-button">Admin</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;min-width:800px" id="home">
        <img class="w3-image" src="max.jpg" width="1500" height="800">
        <div class="w3-display-bottomleft w3-padding-large w3-opacity">

        </div>
    </header>

    <!-- Page content -->
    <div class="w3-content" style="max-width:1100px">

        <!-- About Section -->
        <div class="w3-row w3-padding-64" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="kk2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">Department history </h1><br>
                <h5 class="w3-center"> since 1943</h5>
                <p class="w3-large">  วิชาทางด้านวิทยาการคอมพิวเตอร์ได้เริ่มเปิดสอนในภาควิชาคณิตศาสตร์มาตั้งแต่ประมาณปี 2510 จนกระทั่งปี 2530 จึงได้รับอนุมัติให้จัดการเรียนการสอนหลักสูตร วิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ และเมื่อวันที่ 14 สิงหาคม 2535 ได้มีประกาศทบวงมหาวิทยาลัยเรื่องการแบ่งส่วนราชการ ในมหาวิทยาลัยเกษตรศาสตร์ ให้มีการจัดตั้ง ภาควิชาวิทยาการคอมพิวเตอร์ ขึ้นในคณะวิทยาศาสตร์ ในวันที่ 19 เมษายน 2542 ภาควิชาวิทยาการคอมพิวเตอร์ได้รับอนุมัติ ให้จัดตั้งโครงการปริญญาตรีสาขาคอมพิวเตอร์ภาคพิเศษ<span class="w3-tag w3-light-grey"></span> </p>

            </div>
        </div>

        <hr>

        <!-- Menu Section -->
        <div class="w3-row w3-padding-64" id="menu">
            <div class="w3-col l6 w3-padding-large">
                <h1 class="w3-center">About Department</h1><br>


                <h4>ปรัชญา</h4>
                <p class="w3-text-grey">ภาควิชาวิทยาการคอมพิวเตอร์มีปณิธานมุ่งมั่นในการปฏิบัติภาระกิจให้เป็นไปตามปรัชญา ของมหาวิทยาลัยเกษตรศาสตร์และคณะวิทยาศาสตร์โดยการผลิตบัณฑิต ที่มีความรู้ความสามารถในสาขาวิชาวิทยาการคอมพิวเตอร์ทั้งระดับปริญญาตรีและปริญญาโท ให้เป็นที่ยอมรับในระดับชาติและนานาชาติ </p><br>

                <h4>ปณิธาน</h4>
                <p class="w3-text-grey">ผลิตบัณฑิตที่มีความรู้ มีความคิด มีจิตสำนึกในคุณธรรมจริยธรรม ใฝ่เรียนรู้ ใฝ่สร้างสรรค์ รู้จักปรับตัว และพัฒนาตนให้เข้ากับสังคมโลก ธำรงไว้ซึ่งวัฒนธรรม และขนบธรรมเนียมประเพณีไทย และยึดมั่นในหลัก “คุณธรรมนำเทคโนโลยี”</p><br>

                <h4>วัตถุประสงค์</h4>
                <p class="w3-text-grey">พื่อผลิตบัณฑิตและมหาบัณฑิตด้านวิทยาการคอมพิวเตอร์ เพื่อให้การศึกษาวิทยาการคอมพิวเตอร์พื้นฐานแก่นิสิตมหาวิทยาลัยเกษตรศาสตร์ เพื่อศึกษาค้นคว้าวิจัยด้านวิทยาการคอมพิวเตอร์เพื่อให้บริการวิชาการแก่สังคม

                    วิสัยทัศน์</p><br>

                <h4>วิสัยทัศน์</h4>
                <p class="w3-text-grey">เป็นผู้นำทางวิทยาศาสตร์และเทคโนโลยีในภูมิภาค เพื่อการพัฒนาไปสู่ระดับสากล</p>
            </div>

            <div class="w3-col l6 w3-padding-large">
                <img src="KU.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
            </div>
        </div>

        <hr>

        <!-- Contact Section -->
        <div class="w3-container w3-padding-64" id="contact">
            <h1>Contact</h1><br>


            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
                <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
                <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
            </form>
        </div>

        <!-- End page content -->
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-light-grey w3-padding-32">
            <p>credit&nbsp www.cs.sci.ku.ac.th</p>
            <p>       www.ku.ac.th</p>
            <p>w3school.com</p>
    </footer>







@section('footer')

@endsection