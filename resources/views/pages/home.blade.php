@extends('layouts.front')
@section('content')
    <!--           start content-->
    <div class="main-container">
        <main class="main wrapper">
            <!-- intro-section -->
            <div class="intro-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 padding-0">
                            <div class="intro-slider">
                              @foreach($sliders as $k => $slider)
                                    <div class="intro-slider-item"
                                         style="background-image: url('{{Voyager::image($slider->image)}}');">
                                        <div class="intro-slider-content">
                                            <h2 class="intro-title">
                                                {{$slider->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                            </h2>
                                            <div class="link-box">
                                                <h5 class="buttom-style" data-scroll="contect-section">
                                                 {{__('home.book_now')}}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro-section -->

            <!-- about-section -->
            <div class="about-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title">
                                <h2 class="title" data-aos="fade-up">
                                    @if ( Config::get('app.locale') == 'en')
                                        {{setting('site.a_s_title_en')}}
                                    @elseif ( Config::get('app.locale') == 'ar' )
                                        {{setting('site.a_s_title_ar')}}
                                    @endif
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 padding-0">
                            <p class="prag" data-aos="zoom-in">
                                @if ( Config::get('app.locale') == 'en')
                                    {{setting('site.a_s_content')}}
                                @elseif ( Config::get('app.locale') == 'ar' )
                                    {{setting('site.a_s_content_ar')}}
                                @endif
                            </p>
                        </div>
                        <div class="col-md-7 padding-0">
                            <div class="about-img" data-aos="zoom-in">
                                <img src="{{Voyager::image(setting('site.a_s_image'))}}" style="width: 100%;" alt=""
                                     class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-section -->
            <!-- project-section -->

            <div class="project-section pad-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brown-title brown-title-2">
                                <h2 class="title" data-aos="fade-up">
                                    {{__('home.projects')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                       @foreach($projects as $k => $project)
                           <div class="row">
                        <div class="col-md-12 padding-0" >

                            <div class="project-banner-box"  style="background-image: url({{Voyager::image($project->image)}})">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="project-box">
                                                <img src=" {{Voyager::image($project->getTranslatedAttribute('logo', Config::get('app.locale') , 'fallbackLocale'))}}" alt=""  class="img-fluid" />
                                                <p class="prag">
                                                    {{$project->getTranslatedAttribute('about', Config::get('app.locale') , 'fallbackLocale')}}
                                                </p>
                                                <div class="link-box">
                                                    <a href="{{route('pages.project_details',['id'=>$project->id])}}" class="hoverZoomLink">
                                                        {{__('home.See_More')}}
                                                    </a>
                                                    <?php $file = (json_decode($project->brochure))[0]->download_link; ?>
                                                    <a href="{{Voyager::image($file)}}" target="_black" tabindex="0">
                                                        {{__('home.Download_Brochure')}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       @endforeach
                </div>

</div>
<!-- project-section -->



<!-- contactUs-section -->
<div class="contactUs-section padding-0" id="contect-section">
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
                    <p class="prag">
                        {{__('home.I_to_Buy_title')}}
                    </p>

                    <form action="" id="contactForm" class="contactUs-form">
                        {{csrf_field()}}
                        <div class="form-group">

                            <input type="text" name="name" id="name" class="form-control"  placeholder="{{__('home.your_name')}}" aria-describedby="helpId"  />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control"   placeholder="{{__('home.Phone')}}" aria-describedby="helpId"  />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder=" {{__('home.Email')}}" aria-describedby="helpId"  />
                        </div>
                        <div class="form-group">
                            <select name="project_id" class="select-style" id="project_id" required>
                                <option value="" disabled selected>{{__('home.Select_Project')}}</option>
                                @foreach($projects as $pId => $project)
                                     <option value="{{$project->id}}">
                                         {{$project->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                     </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <textarea name="message" id="message" cols="30" rows="10" placeholder="{{__('home.message')}}" ></textarea>
                        </div>
                        <div class="link-box">
                            <button type="submit"> {{__('home.Send')}}</button>
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
