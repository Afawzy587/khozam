@extends('layouts.front')
@section('content')
    <!--           start content-->
    <div class="main-container">
        <main class="main wrapper">
            <!-- intro-inner-page -->
            <div class="intro-inner-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-page-title">
                                <h2 class="title" data-aos="fade-up">
                                    {{__('home.CONTACT_US')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro-inner-page -->

            <!-- contact-section -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="footer-contact-ul">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="tel:{{setting('site.tel')}}">
                                                <span>
                                                    <i class="fas fa-phone-volume"></i>
                                                    {{setting('site.tel')}}
                                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@khozamdevelopment.com">
                                                <span>
                                                    <i class="fas fa-envelope"></i>
                                                    {{__('home.F_Email')}}
                                                </span>
                                            <span class="span2">
                                                    {{setting('site.email')}}
                                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <span>
                                                    <i class="fas fa-phone-alt"></i>
                                                    {{__('home.F_Phone')}}
                                                </span>
                                            <span class="span2">
                                                    {{setting('site.tel')}}
                                                </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <span>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                     {{__('home.F_Address')}}
                                                </span>
                                            <span class="span2">
                                                    {{setting('site.adress')}}
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contactUs-box">
                                <h2 class="contactUs-title">
                                    {{__('home.CONTACT_US')}}
                                </h2>
                                <p class="prag" data-aos="zoom-in">
                                    {{__('home.CONTACT_US')}}
                                </p>
                                <form action="" id="contactForm" class="contactUs-form" >
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"  placeholder="{{__('home.your_name')}}"  aria-describedby="helpId"  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" class="form-control"   placeholder="{{__('home.Phone')}}"  aria-describedby="helpId"  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control" placeholder=" {{__('home.Email')}}"  aria-describedby="helpId"  />
                                    </div>
                                    <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="10"   placeholder="{{__('home.message')}}" ></textarea>
                                    </div>
                                    <div class="link-box">
                                        <button type="submit">{{__('home.Send')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-section -->
            <!-- map-section -->
            <div class="map-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <iframe src="{{setting('site.location')}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- map-section -->
        </main>
    </div>
    <!--           end content-->

@endsection

@section('footer')
    <script type="text/javascript">

        $('#contactForm').on('submit',function(event){
            event.preventDefault();

            let name = $('#name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let message = $('#message').val();

            $.ajax({
                url: "/contact_us",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    email:email,
                    phone:phone,
                    message:message,
                },
                success:function(response){
                    console.log(response);
                },
            });
        });
    </script>
@endsection
