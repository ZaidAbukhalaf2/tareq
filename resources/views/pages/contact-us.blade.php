@section('title')
    {{ 'Contact Us' }}
@endsection
@include('./layouts/header')
@include('./layouts/nav')

<div class=" min-h-screen dark:bg-gray-900 " style="background-color: black">


    <div class="container-fluid space mb-5 ">
        <div class="row d-flex justify-content-center ">
            <div class="col-12 col-lg-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300"
                data-aos-once="true" data-aos-mirror="false">

                <h2 class="ms-2" style="color: white;font-family:Trirong, serif; text-align: center;">CONTACT</h2>
                <h3 class="mb-5" style="color: gray;font-family:Trirong, serif;text-align: center;">
                    We love to project your ideas into visual reality.
                    Find out the maximum degree of your satisfaction at ....</h3>
                <h3 class="ms-2 mb-5" style="color: gray;font-family:Trirong, serif;text-align: center;">
                    You are welcome to contact us directly for further information and inquiries.</h3>
                    <div class="contact-pl">
                           <p class="contact-type " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"
                        data-aos-once="true" data-aos-mirror="false">

                        <h5 class=" ms-2">
                            <a href="mailto: zaid.ammar.ak@gmail.com"style="color: gray; font-family: Trirong, serif; text-align: center;"> <i class="fa fa-envelope-o" style="font-size:25px; color:gray"></i> Email: Jordans3dmapping@gmail.com  </a>
                        </h5>

                    </p>
                    <p class="contact-type ms-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"
                        data-aos-once="true" data-aos-mirror="false">


                        <h5 class=" ms-2">
                            <a href="tel:+962795953832" style="color: gray; font-family: Trirong, serif; text-align: center;" >
                             <i class="fa fa-phone" style="font-size:25px; color:gray"></i> Phone:+962799665061 </a>
                        </h5>

                    </p>
                    </div>

            </div>
        </div>
      
    </div>

</div>
@include('./layouts/footer')
