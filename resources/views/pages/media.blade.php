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
                                     {{__('home.Media')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro-inner-page -->

            <!-- event-section -->
            <div class="event-section media-section">
                <div class="container">
                    <div class="section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="brown-title">
                                    <h2 class="title" data-aos="fade-up">
                                        {{__('home.projects')}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        @foreach($projects as $pId =>$project)
                            <div class="row">
                            <div class="col-md-12">
                                <div class="media-event project-slider">
                                    <div class="media-event-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="event-img border-class"
                                                     style="background-image: url({{voyager::image($project->image)}});">
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex" style="align-items: center;">
                                                <div class="event-content">
                                                    <h2 class="event-title">
                                                        {{$project->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                                    </h2>
                                                    <p class="prag">
                                                        {{$project->getTranslatedAttribute('about', Config::get('app.locale') , 'fallbackLocale')}}
                                                    </p>
                                                    <div class="link-box">

                                                        <a rel="ligthbox"
                                                           href="{{route('pages.project_details',['id'=>$project->id])}}" tabindex="0">
                                                            {{__('home.See_More')}}
                                                        </a>
                                                        <?php $file = (json_decode($project->brochure))[0]->download_link; ?>
                                                        <a href="{{voyager::image($file)}}" target="_black">
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
            </div>
            <!-- event-section -->
            <!-- news-section -->
            <div class="news-section media-section">
                <div class="container">
                    <div class="section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="brown-title">
                                    <h2 class="title" data-aos="fade-up">
                                       {{__('home.news_events')}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        @foreach($news as $nId=>$new)
                             <div class="row">
                            <div class="col-md-12">
                                <div class="media-event news-slider">
                                    <div class="media-event-item">
                                        <a rel="ligthbox" style="display: block;" data-fancybox="pop-1"
                                           href="{{$new->link}}"
                                           tabindex="-1">
                                            <div class="event-img border-class gallery-box"
                                                 style="background-image: url('{{voyager::image($new->image)}}');">
                                                <div class="event-content">
                                                    <h2 class="event-title">
                                                        {{$new->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                                    </h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
            <!-- event-section -->
        </main>
    </div>
    <!--           end content-->

@endsection
