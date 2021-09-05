@extends('layouts.front')
@section('content')
    <!--           start content-->
    <div class="main-container">
        <main class="main wrapper">
            <!-- projects-banner-section -->
            <div class="projects-banner-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 padding-0">
                            <div class="banner-img" style="background-image: url({{Voyager::image($project->image)}});">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="logo-img">
                                                <img src="{{Voyager::image($project->getTranslatedAttribute('logo', Config::get('app.locale') , 'fallbackLocale'))}} " alt=""  class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- projects-banner-section -->

            <!-- consept-section -->
            <div class="consept-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title brown-title-2">
                                <h2 class="title" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-easing="linear">
                                    {{$project->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-content">
                                <p class="prag">
                                    {{__('projects.offers')}}
                                    {{$project->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                    <strong>
                                        {{$project->getTranslatedAttribute('offer', Config::get('app.locale') , 'fallbackLocale')}}
                                    </strong>
                                </p>
                                <p class="prag" data-aos="fade-up">
                                    {{$project->getTranslatedAttribute('about', Config::get('app.locale') , 'fallbackLocale')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- consept-section -->
            <!-- master-plan-section -->
            <div class="master-plan-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title brown-title-2">
                                <h2 class="title" data-aos="fade-up">
                                    {{__('projects.master_plan')}}
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="img-box">
                                <a rel="ligthbox" data-fancybox="floorPlan-img" href="{{voyager::image($project->master_plan)}}"
                                   tabindex="-1">
                                    <img src="{{voyager::image($project->master_plan)}}" alt="" class="img-fluid box-s box-s" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- master-plan-section -->

            <!-- floorPlan-section -->
            <div class="floorPlan-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title flex-class brown-title-2">
                                <h2 class="title" data-aos="fade-up">
                                    {{__('projects.floor_plans')}}
                                </h2>
                                <div class="select-floor-box">
                                    <label for="floor-select"> {{__('projects.Gross_Area')}}</label>
                                    <select name="floor-select" class="floor-select" id="floor-select">
                                       @foreach( $project->floorplans as $fId => $floor)
                                            <option value="floorplan{{$floor->id}}">
                                                {{$floor->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                                </option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach( $project->floorplans as $fId => $floor)
                                <div class="floorPlan-img-size @if($fId != 0) hide-form @endif" id="floorplan{{$floor->id}}">
                                    <a rel="ligthbox" data-fancybox="Floor-PLANS{{$floor->id}}" href="{{voyager::image($floor->image)}}"  tabindex="-1">
                                        <img class="img-fluid box-s" src="{{voyager::image($floor->image)}}" alt="" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- floorPlan-section -->

            <!-- gallery-section -->
            <div class="gallery-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title brown-title-2">
                                <h2 class="title" data-aos="fade-up">
                                     {{__('projects.Insights')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 padding-0">
                            <div class="gallery-box" rel="ligthbox" data-fancybox="Our-Ameneties"
                                 href="@if(is_array($project->amaneties)){{voyager::image($project->amaneties()->first()->image)}}@else{{voyager::image('defaults\Ameneties1.png')}} @endif"
                                tabindex="-1" data-aos="fade-up"
                                 data-aos-duration="700">
                                <a href="#" class="gallery-box-link"> </a>
                                <div class="gallery-box-img"
                                     style="background-image: url({{voyager::image($project->amaneties()->first()->image)}});"></div>
                                <div class="show-more">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="details-box">
                                    <h3 class="myDesc"> {{__('projects.Ameneties')}}</h3>
                                    <p class="prag">
                                        {{__('projects.Ameneties_services')}}
                                    </p>
                                    <ul>
                                        @foreach($project->amaneties as $aId => $amanety)
                                            <li>
                                                {{$amanety->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 padding-0">
                            <div class="gallery-box" rel="ligthbox" data-fancybox="Our-Facilities"
                                 href="@if(is_array($project->facilities)){{voyager::image($project->facilities()->first()->image)}}@else{{voyager::image('defaults\Facilities1.png')}} @endif"
                                  tabindex="-1" data-aos="fade-up"
                                 data-aos-duration="800">
                                <a href="#" class="gallery-box-link"> </a>
                                @foreach($project->facilities as $fId => $facility)
                                     <div class="gallery-box-img"  style="background-image:url({{voyager::image($facility->image)}});"></div>
                                 @endforeach
                                <div class="show-more">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="details-box">
                                    <h3 class="myDesc"> {{__('projects.facilities')}}</h3>
                                    <p class="prag">
                                         {{__('projects.facilities_contant')}}
                                    </p>
                                    <ul>
                                        @foreach($project->facilities as $fId => $facility)
                                            <li>
                                                {{$facility->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 padding-0">
                            <div class="gallery-box" rel="ligthbox" data-fancybox="Interiors"
                                 href="@if(is_array($project->iteriors)){{voyager::image($project->iteriors()->first()->image)}}@else{{voyager::image('defaults\Interiors1.png')}} @endif" tabindex="-1" data-aos="fade-up"
                                 data-aos-duration="600" data-open="pop-1">
                                @if($project->iteriors)
                                    @foreach($project->iteriors as $tId => $iterior)
                                       <div class="gallery-box-img"
                                         style="background-image:url({{voyager::image($iterior->image)}});"></div>
                                    @endforeach
                                @endif
                                <div class="show-more">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="details-box">
                                    <h3 class="myDesc"> {{__('projects.interiors')}}</h3>
                                    <p class="prag">
                                         {{__('projects.interiors_contant')}}
                                    </p>
                                    <ul>
                                        @foreach($project->iteriors as $tId => $iterior)
                                            <li>
                                                {{$iterior->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery-section -->

            <!-- gallery-section -->
            <div class="gallery-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title">
                                <h2 class="title" data-aos="fade-up">
                                      {{__('projects.GALLERY')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                            <div class="row">
                            <div class="col-md-12">
                                    <div class="gallery-slider">
                                        @foreach($project->galleries as $gId => $gallery)
                                        <div class="gallery-slider-item">
                                            <a rel="ligthbox" data-fancybox="Projects{{$gallery->id}}"  href="{{$gallery->link}}"  tabindex="-1">
                                                <div class="border-class" style="display: inline-block;">
                                                    <img class="img-fluid box-s" src="{{voyager::image($gallery->image)}}" alt="" />
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- gallery-section -->

            <!-- construction-section -->
            <div class="construction-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title brown-title-2">
                                <h2 class="title" data-aos="fade-up">
                                      {{__('projects.Construction_Update')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <div class="construction-slider">
                                @foreach($project->ProjectConstractions as $cId => $Constractions)
                                    <div class="construction-slider-item">
                                        <a rel="ligthbox" data-fancybox="construction{{$Constractions->id}}"
                                           href="{{$Constractions->link}}" tabindex="-1">
                                            <div class="construction-dateBox">
                                                    <span class="date-number">
                                                        {{Carbon\Carbon::parse($Constractions->date)->shortLocaleMonth}}
                                                    </span>
                                                <span class="date-month">
                                                        {{Carbon\Carbon::parse($Constractions->date)->year}}
                                                    </span>
                                            </div>
                                            <div class="border-class" style="display: inline-block;">
                                                <img class="img-fluid box-s"
                                                     src="{{voyager::image($Constractions->image)}}" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- construction-section -->
            <!-- location-section -->
            <div class="location-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title">
                                <h2 class="title" data-aos="fade-up">
                                      {{__('projects.LOCATION')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <iframe
                                src="{{$project->location}}"
                                width="100%" height="450" frameborder="0" style="border: 0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- location-section -->
            <!-- contactUs-section -->
            <div class="contactUs-section padding-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title brown-title-2">
                                <h2 class="title" data-aos="fade-up">
                                    {{__('home.CONTACT_US')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-8 col-md-12">
                            <div class="contactUs-box">
                                <h2 class="contactUs-title">
                                    {{__('home.Interested_to_Buy')}}
                                </h2>
                                <p class="prag" data-aos="zoom-in">
                                    {{__('home.I_to_Buy_title')}}
                                </p>

                                <form action="" id="contactForm" class="contactUs-form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input data-aos="zoom-in" type="text" name="name" id="name"  class="form-control" placeholder="{{__('home.your_name')}}"
                                               aria-describedby="helpId" />
                                    </div>
                                    <div class="form-group">
                                        <input data-aos="zoom-in" type="text" name="phone" id="phone"
                                               class="form-control" placeholder="{{__('home.Phone')}}"
                                               aria-describedby="helpId" />
                                    </div>
                                    <div class="form-group">
                                        <input data-aos="zoom-in" type="text" name="email" id="email"
                                               class="form-control" placeholder="{{__('home.Email')}}"
                                               aria-describedby="helpId" />
                                        <input  type="text" name="project_id" value="{{$project->id}}" id="project_id" hidden />
                                    </div>
                                    <div class="form-group">
                                            <textarea data-aos="zoom-in" name="message" id="message" cols="30" rows="10"
                                                      placeholder="{{__('home.message')}}"></textarea>
                                    </div>
                                    <div class="link-box">
                                        <button data-aos="zoom-in" type="submit">{{__('home.Send')}}</button>
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
<!-- pop-upimg -->

<div class="pop-upimg" style="visibility: hidden;">
        @foreach($project->iteriors as $tId => $iterior)
            @if($tId > 0)
                 <a rel="ligthbox" data-fancybox="Interiors" href="{{voyager::image($iterior->image)}}" tabindex="-4"></a>
           @endif
        @endforeach


            @foreach($project->facilities as $fId => $facility)
                @if($fId !=0)
                    <a rel="ligthbox" data-fancybox="Our-Facilities" href="{{voyager::image($facility->image)}}" tabindex="-4"></a>
                @endif
            @endforeach

            @foreach($project->amaneties as $aId => $amanety)
                @if($aId !=0)
                    <a rel="ligthbox" data-fancybox="Our-Ameneties" href="{{voyager::image($amanety->image)}}" tabindex="-4"></a>
                @endif
            @endforeach

</div>

<!-- pop-upimg -->
@section('footer')
    <script type="text/javascript">

        $('#contactForm').on('submit',function(event){
            event.preventDefault();

            let name = $('#name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let message = $('#message').val();
            let project_id = $('#project_id').val();
            $.ajax({
                url: "/contact_buy",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    email:email,
                    phone:phone,
                    message:message,
                    project_id:project_id,
                },
                success:function(response){
                    console.log(response);
                },
            });
        });
    </script>
@endsection
