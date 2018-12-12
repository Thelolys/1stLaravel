@extends('layouts.app')
    @section('content')


        {{--<div class="jumbotron text-center">--}}
            {{--<h1>Welcome to Laravel!</h1>--}}
            {{--<p>This is the laravel application from the "Laravel from scratch" youtube series</p>--}}
        {{--<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>--}}

        {{--</div>--}}
        <div class="gallery-content gallery-section" style="max-width: 100%;" align="middle">
            <img class="mySlides w3-animate-left" src="./images/Audi_CGI_RS5_Vedat_Afuzi_Design_Red_Coupe_538505_1920x1080.jpg" style="width:100%" >
            <img class="mySlides w3-animate-left" src="./images/alll-new-audi-a5-sportback-1920x1080.jpg" style="width:100%">
            <img class="mySlides w3-animate-left" src="./images/1920x1080_InlineMediaGallery_AA8_D_171016.jpg" style="width:100%">

        </div>


        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 4000);
            }
        </script>



        <div class="main">

            <h1 align="center"> Official audi dealer service</h1>
            <h2 align="center"> Car repairs, maintenance.</h2>

            <div class="specBox">
                <div class="specLeft">
                    <div class="mg-image">
                        <a class="zoom" href="/">
                            <img src="./images/1920x600_01_Stage_hero_neu.png" alt="">


                        </a>
                    </div>
                    <div class="mg-image">

                            <img src="./images/1audiq8.png" alt="">


                    </div>
                    <div class="mg-image">

                            <img class="quattro" src="./images/a5-coupe-audi-silver-front-angle-oasis-1920x600.png" alt="">

                    </div>


                </div>

                <div class="specRight">
                    <div class="mg-image">

                            <img src="./images/maxresdefault.png" alt="">


                    </div>
                    <div class="mg-image">

                            <img src="./images/audi-rs6.png" alt="">

                    </div>
                    <div class="mg-image">

                            <img src="./images/A189696_x750.png" alt="">

                    </div>

                </div>
            </div>




        </div>


        <!--<div class="left"></div>-->

        <!--<div class="right"></div>-->

        <div class="footer"></div>





        </div>
    @endsection


