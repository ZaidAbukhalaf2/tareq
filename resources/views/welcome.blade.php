@section('title')
    {{ 'Home Page' }}
@endsection
@include('./layouts/header')
@include('./layouts/nav')
<div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0"></div>
    <div class="min-screen  dark:bg-gray-900 w-100 space" style="background-color: black">

        <div class="container-fluid ">
            <div class="row ">
                <div class=" col-12 col-lg-12 col-md-12 col-sm-12 ">
                    <video autoplay muted loop>
                        <source src="{{ URL::asset('video/our Showreel - 3D Projection Mapping.mp4') }}"
                            type="video/mp4" style="width: 100vw">

                    </video>
                </div>
            </div>

        </div>

    </div>
{{-- end video section --}}


{{-- start whoAreYou --}}
    <div class="container-fluid backGround mt-5">
        <div class="row op">
            <div class="mb-3 col-12 col-lg-12 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <img class="imgHowAreYou" src="{{ asset('image/whoAreYou.png') }}"  width="90%" alt="">
            </div>
        </div>
        <div class="row  justify-content-center">
            <div class="trans  col-12 col-lg-12 col-md-12 col-sm-12" >

                <p class="aboutof3d ">
                    3D Mapping is a company that includes a group of
                    Jordan's artists creating 3D projection mapping artwork
                    For events to create dazzling memorable visual experiences
                    Added to your special events that can make people smile
                    And enjoy our artwork and feel .. WOW
                </p>

            </div>
        </div>


    </div>
    {{-- end whoAreYou --}}

    {{-- strat What We Serve --}}
    <div class="container-fluid mt-4 pt-5 ">
        <div class="row op">
            <div class="mb-3 col-12 col-lg-10 col-md-12 col-sm-12  header-row  GoldHeader"  data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                What We Serve ?
            </div>

        </div>
    </div>

    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans   col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid">
                    <h1 class="p3d " style="text-align: center">3D Projection Mapping</h1>
                    <p class="cs">

                        create exciting projection mapping performances which are carefully
                        Wrapped around objects and Buildings.
                    </p>
                </div>

            </div>
        </div>
        <div class="row display-row m-l">
            <div class=" mt-4   col-12 col-lg-6 col-md-12 col-sm-12"  data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                <img class="test"src="{{ asset('image/3d projection mapping_1_02626.jpg') }}" width="103%"
                    alt="">
            </div>
            <div class=" mt-4   col-12 col-lg-6 col-md-12 col-sm-12"  data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false">
                <img  class="test"   src="{{ asset('image/3D projection mapping_2_01125.jpg') }}" width="103%"
                    alt="">
            </div>
        </div>



    </div>

        {{-- end What We Serve --}}

        {{--    start Outdoor Building Projection Mapping --}}

    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="550" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid">
                    <h1 class="p3d mt-3">Outdoor Building Projection Mapping</h1>

                </div>

            </div>
        </div>
        <div class="row display-row m-l ">

            <div class=" mt-4   col-12 col-lg-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="600" data-aos-once="true" data-aos-mirror="false">
                <img  class="test"  src="{{ asset('image/outdoor projection_27713.jpg') }}" width="103%"
                    alt="">
            </div>
            <div class=" mt-4   col-12 col-lg-6 col-md-12 col-sm-12 "  data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                <img   class="test" src="{{ asset('image/outdoor2.jpg') }}" width="103%" alt="">
            </div>
        </div>

    </div>

            {{--    end Outdoor Building Projection Mapping --}}


                        {{--start Indoor Projection Mapping on 3D Objects --}}


    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="400" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid" >
                    <h1 class="p3d mt-3">Indoor Projection Mapping on 3D Objects</h1>

                </div>

            </div>

        </div>

    </div>



                <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/indoor.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>

                            {{--end Indoor Projection Mapping on 3D Objects --}}


                        {{--start Hologram --}}

    <div class="container-fluid mt-4">
        <div class="row justify-content-center op">

            <div class="trans2  col-12 col-lg-10 col-md-10 col-sm-10 "  data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                <div class="d-grid">
                    <h1 class="p3d mt-3">Hologram</h1>

                </div>

            </div>
        </div>
        <div class="row display-row m-l" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="800" data-aos-once="true" data-aos-mirror="false">
            <div class=" mt-4  col-12 col-lg-6 col-md-12 col-sm-12  " >
                <img class="test"  src="{{ asset('image/hologram_1.jpg') }}" width="103%"  alt="">
            </div>
            <div class=" mt-4  col-12 col-lg-6 col-md-12 col-sm-12  "  data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false">
                <img class="test" src="{{ asset('image/Hologram_2.jpeg') }}" width="103%"
                    alt="">
            </div>
        </div>
    </div>
                        {{--end Hologram --}}


                                                {{--start Stage Design --}}

    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans2  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="400" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid"  >
                    <h1 class="p3d mt-3">Stage Design</h1>

                </div>

            </div>

        </div>

    </div>


            <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/Stage Desgin.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>

 {{--end Stage Design --}}

  {{--start Led Screen --}}

    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans5  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid" >
                    <h1 class="p3d mt-3">Led Screen</h1>

                </div>

            </div>

        </div>

    </div>



        <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/LED Screens.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>


  {{--end Led Screen --}}


    {{--statrt Interactive Dacne Show--}}

    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans4  col-12 col-lg-10 col-md-12 col-sm-12"data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid"  >
                    <h1 class="p3d mt-3">Interactive Dacne Show</h1>

                </div>

            </div>

        </div>

    </div>




    <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/Stage Desgin.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>

    {{--end Interactive Dacne Show--}}



    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans3  col-12 col-lg-10 col-md-12 col-sm-12"data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid"  >
                    <h1 class="p3d mt-3">Bridal Entrance Show</h1>

                </div>

            </div>

        </div>

    </div>


    <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/Stage Desgin.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>

 <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans3  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid" >
                    <h1 class="p3d mt-3">Augemented Reality</h1>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/augmented reality.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>


    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans5 col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid" >
                    <h1 class="p3d mt-3">Interactive Led Screen</h1>

                </div>
                <!--<div class="triangle triangle-2"></div>-->

            </div>

        </div>

    </div>



    <div class="container-fluid mt-4">

        <div class="row  ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img src="{{ asset('image/Interactive.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>
    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans5  col-12 col-lg-10 col-md-12 col-sm-12"data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid" >
                    <h1 class="p3d mt-3">Interactive Floors Projaction</h1>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid mt-4">

        <div class="row ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img  src="{{ asset('image/interactive Floor.jpg') }}" width="103%"></img>

            </div>
        </div>




    </div>


    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans  col-12 col-lg-12 col-md-12 col-sm-12"data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                <div class="d-grid" >
                    <h1 class="p3d " style="text-align: center">Technological solutions</h1>
                    <p class="cs">

                        Boost sales and brand awareness with
                        Different Techological Solutions
                    </p>
                </div>

            </div>

        </div>

    </div>
  <div class="container-fluid mt-4">
        <div class="row m-lk">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 ml-m" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="800" data-aos-once="true" data-aos-mirror="false">
                 <img
                    src="{{ asset('image/1.jpg') }}" width="103%"></div>

            <div class="col-12 col-lg-6 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false" >
                <img
                    src="{{ asset('image/2.jpg') }}" width="103%" height="102%"></div>


        </div>
        <div class="row  m-lk" style="height: 591px;" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="800" data-aos-once="true" data-aos-mirror="false"> <img
                    src="{{ asset('image/3.jpg') }}" width="103%"></div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false">
                 <img
                    src="{{ asset('image/4.jpg') }}" width="103%"   height="58.5%"></div>

        </div>

    </div>

     <div class="container-fluid">
        <div class="row  justify-content-center op">
            <div class="trans2  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid" >
                    <h1 class="p3d ">Face Mapping</h1>

                </div>

            </div>

        </div>

    </div>
    <div class="container-fluid mt-4  ">
        <!--<div class="row m-la">-->
        <!--    <div class="col-12 col-lg-6 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"-->
        <!--        data-aos-delay="700" data-aos-once="true" data-aos-mirror="false"><img-->
        <!--            src="{{ asset('image/Facem.jpg') }}" width="103%">-->
        <!--    </div>-->
        <!--    <div class="col-12 col-lg-6 col-md-12 col-sm-12" data-aos="fade-down" data-aos-duration="1000"-->
        <!--        data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">-->
        <!--        <img src="{{ asset('image/Facemm.jpg') }}" width="103%">-->
        <!--    </div>-->
        <!--</div>-->
            <div class="row display-row m-l" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="800" data-aos-once="true" data-aos-mirror="false">
            <div class=" mt-4  col-12 col-lg-6 col-md-12 col-sm-12  " >
                <img class="test"   src="{{ asset('image/Facem.jpg') }}" width="103%"  alt="">
            </div>
            <div class=" mt-4  col-12 col-lg-6 col-md-12 col-sm-12  "  data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="900" data-aos-once="true" data-aos-mirror="false">
                <img class="test" src="{{ asset('image/Facemm.jpg') }}" width="103%"
                    alt="">
            </div>
        </div>
    </div>
   <div class="container mt-4 d-flex  justify-content-center">
        <div class="trans  col-12 col-lg-12 col-md-12 col-sm-12 " data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
            <div class="d-grid op">
                <h1 class="p3d ">3D Animation and Motion Graphics</h1>
                <p class="cs">

                    They can help you present your business as an
                    Industry expert by explaining your product or
                    Service's fundamental concepts As well as using
                    3D advertising.
                </p>
            </div>

        </div>
    </div>
    <div class="container-fluid mt-4">

        <div class="row ml-s">

            <div class="col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                   <img  src="{{ asset('image/indoor.jpg') }}" width="103%"></img>
            </div>
        </div>




    </div>


    <div class="container-fluid mt-5">

        <div class="row  justify-content-center op">
            <div class="trans5  col-12 col-lg-10 col-md-12 col-sm-12" data-aos="fade-rigth" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">

                <div class="d-grid">
                    <h1 class="p3d mt-3">Our Valid Clients</h1>

                </div>

            </div>

        </div>

    </div>


    <div class="container-fluid d-flex justify-content-center mt-4">
        <div class="row ">
            <div class="col-12 col-lg-8 col-md-8 col-sm-8" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="700" data-aos-once="true" data-aos-mirror="false">
                <img class="about" src="{{ asset('image/Logos-02.png') }}" style=" width:80vw; height:65vh"
                    class="mb-5">
            </div>

        </div>


    </div>


    <a href="#" class="scrollToTop" title="Go Top"><i class="sprite scrollarrow"></i></a>
    @include('./layouts/footer')
