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
                                    {{__('career.Careers')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro-inner-page -->

            <!-- careers-section -->
            <div class="careers-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="careers-title">
                                {{__('career.C_title')}}
                            </h2>
                            <p class="prag" data-aos="zoom-in">
                                @if ( Config::get('app.locale') == 'en')
                                    {{setting('site.join_us_p_1')}}
                                @elseif ( Config::get('app.locale') == 'ar' )
                                    {{setting('site.join_us_p_1_ar')}}
                                @endif
                            </p>
                            <p class="prag" data-aos="zoom-in">
                                @if ( Config::get('app.locale') == 'en')
                                    {{setting('site.join_us_p_2')}}
                                @elseif ( Config::get('app.locale') == 'ar' )
                                    {{setting('site.join_us_p_2_ar')}}
                                @endif
                            </p>
                            <p class="prag" data-aos="zoom-in">
                                @if ( Config::get('app.locale') == 'en')
                                    {{setting('site.join_us_p_3')}}
                                @elseif ( Config::get('app.locale') == 'ar' )
                                    {{setting('site.join_us_p_3_ar')}}
                                @endif
                            </p>
                        </div>
                        <div class="col-md-12">
                            <div class="select-careers-box">
                                <select class="select-careers">
                                    @foreach($jobs as $jIp =>$job)
                                         <option value="{{$job->id}}">{{$job->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    @foreach($jobs as $jIp =>$job)
                        <div class="row @if($jIp >0 )hide-form @endif" id="{{$job->id}}"">
                            <div class="col-md-12">
                                <div class="careers-box-content">

                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 pad-0">
                                                <img src="{{voyager::image($job->image)}}" alt="" class="img-fluid" />
                                            </div>
                                        <div class="col-lg-7 col-md-6 pad-0">
                                            <div class="careers-box-text">
    {{--                                            @foreach($jobs as $jIp =>$job)--}}
                                                     <div class="careers-text ">
                                                        <h2 class="title" data-aos="fade-up">
                                                            {{$job->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                                        </h2>
                                                        <p class="prag" data-aos="zoom-in">
                                                            {{$job->getTranslatedAttribute('text', Config::get('app.locale') , 'fallbackLocale')}}
                                                        </p>
        {{--                                                <div class="link-box">--}}
        {{--                                                    <a href="#" tabindex="0">--}}
        {{--                                                        Book Now--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
                                                    </div>
    {{--                                            @endforeach--}}

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            </div>
            <!-- careers-section -->

            <!-- contactUs-section -->
            <div class="contactUs-section padding-0">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-8 col-md-12">
                            <div class="contactUs-box">
                                <h2 class="contactUs-title">
                                    {{__('career.join_team')}}
                                </h2>
                                <p class="prag" data-aos="zoom-in">
                                    {{__('career.join_team')}}
                                </p>

                                <form  id="join_us_form"  class="contactUs-form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"  placeholder="{{__('home.your_name')}}"  aria-describedby="helpId"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="{{__('home.Phone')}}" aria-describedby="helpId" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control"  placeholder=" {{__('home.Email')}}"aria-describedby="helpId" required />
                                    </div>
                                    <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="10"  placeholder="{{__('home.message')}}" required></textarea>
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

            <!-- contactUs-section -->
        </main>
    </div>
    <!--           end content-->

@endsection
@section('footer')
    <script type="text/javascript">

        $('#join_us_form').on('submit',function(event){
            event.preventDefault();

            let name = $('#name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let message = $('#message').val();
            $.ajax({
                url: "/join_us",
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
