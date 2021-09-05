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
                                <h2 class="title pad-20" data-aos="fade-up">
                                    {{__('about.about_us')}}
                                </h2>
                            </div>
                            <p class="prag" data-aos="zoom-in">
                                @if ( Config::get('app.locale') == 'en')
                                    {{setting('site.a_s_content')}}
                                @elseif ( Config::get('app.locale') == 'ar' )
                                    {{setting('site.a_s_content_ar')}}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro-inner-page -->


            <!-- mision-section -->
            <div class="mision-section">
                <div class="container">
                    <div class="section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="brown-title">
                                    <h2 class="title" data-aos="fade-up">
                                        {{__('about.mission')}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        @foreach($missions as $mId => $mission)
                        <div class="row">
                            <div class="col-md-7 d-flex" style="align-items: center;">
                                <div class="section-content">
                                    <h2 class="section-title">
                                        @if ( Config::get('app.locale') == 'en')
                                            {{$mission->title_en}}
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                            {{$mission->title_ar}}
                                        @endif
                                    </h2>
                                    <p class="prag" data-aos="zoom-in">
                                        @if ( Config::get('app.locale') == 'en')
                                            {{$mission->text_en}}
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                            {{$mission->text_ar}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5 order-md-3">
                                <div class="about-img">
                                    <img src="{{Voyager::image($mission->image)}}" data-aos="flip-left" alt=""
                                         class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- mision-section -->
            <!-- vision-section -->
            <div class="vision-section">
                <div class="container">
                    <div class="section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="brown-title">
                                    <h2 class="title" data-aos="fade-up">
                                        {{__('about.vision')}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        @foreach($visions as $vId => $vision)
                        <div class="row">
                            <div class="col-md-5">
                                <div class="about-img">
                                    <img src="{{Voyager::image($vision->image)}}" data-aos="flip-left" alt=""
                                         class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-7 d-flex" style="align-items: center;">
                                <div class="section-content">
                                    <h2 class="section-title">
                                        @if ( Config::get('app.locale') == 'en')
                                            {{$vision->title_en}}
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                            {{$vision->title_ar}}
                                        @endif
                                    </h2>
                                    <p class="prag" data-aos="zoom-in">
                                        @if ( Config::get('app.locale') == 'en')
                                            {{$vision->text_en}}
                                        @elseif ( Config::get('app.locale') == 'ar' )
                                            {{$vision->text_ar}}
                                        @endif
                                       </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- vision-section -->
        </main>
    </div>
    <!--           end content-->

@endsection
