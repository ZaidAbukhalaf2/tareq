@section('title')
    {{ 'About Us' }}
@endsection
@include('./layouts/header')
@include('./layouts/nav')

{{-- <div class=" min-h-screen dark:bg-gray-900 " style="background-color: black"> --}}

<div class="container-fluid space mb-5">
    <div class="row ">
        {{-- <div class="col-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"
            data-aos-mirror="false"> --}}
        {{-- <h2 style="color: white;font-family:Trirong, serif">About</h2> --}}

    </div>
</div>

</div>
<div class="container-fluid d-flex justify-content-center">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 picabout">
            <img src="{{ asset('image/cc.jpg') }}" width="100%" alt="">
        </div>
    </div>
</div>
<div class="container-fluid ">

    <div class="row d-flex justify-content-center mt-4">
        <div class="col-12 col-lg-10 col-md-10 col-sm-10 about">
            <p style="color: white">Jordan's 3D Mapping is a company that includes a group of artists creating 3D
                projection mapping artwork for events to create dazzling memorable visual experiences added to your
                special events .that can make people smile and enjoy our artwork and feel .. WOW!
                * Create exciting projection mapping performances which are carefully wrapped around objects ,
                buildings , stage design , architectural features .
                * Large scale building projections for indoor and outdoor events.
                * Digital media production
                High quality 2D & 3D animation content creation not only for projection mapping projects .
                (advertising and more)
                We'd love to project your ideas into visual reality
                We'll be glad to create an offer for you!
                Please provide some information about your ideas and we'll get back to you ASAP!
                Find out the maximum degree of your satisfaction at JORDAN'S 3D MAPPING .</p>
        </div>

    </div>


</div>


</div>

{{-- <div class="container-fluid   mb-5 mt-5">
    <div class="row d-flex justify-content-evenly ">
        <div class="col-8 who" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700" data-aos-once="true"
            data-aos-mirror="false">
            <h2 style="color: white;  font-family:Trirong, serif;">OUR VALUED CLIENTS</h2>

        </div>
    </div>

</div>
<div class="container-fluid d-flex justify-content-center ">
    <div class="row ">
        <div class="col-12 col-lg-8 col-md-8 col-sm-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700"
            data-aos-once="true" data-aos-mirror="false">
            <img src="{{ asset('image/Logos-02.png') }}" style=" width:80vw; height:65vh" class="mb-5">
        </div>

    </div>


</div> --}}



{{-- </div> --}}






@include('./layouts/footer')
