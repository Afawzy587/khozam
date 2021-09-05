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
                                {{__('projects.projects')}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- intro-inner-page -->
        @foreach($projects as $pId => $project)
            <div class="projects-section">
                <div class="container">
                    <div class="section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="brown-title">
                                    <h2 class="title" data-aos="fade-up">
                                        {{$project->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-img">
                                    <img src="{{Voyager::image($project->image)}}" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-6 d-flex" style="align-items: center;">
                                <div class="section-content">
                                    <h3 class="title3">
                                        {{$project->getTranslatedAttribute('title', Config::get('app.locale') , 'fallbackLocale')}}
                                    </h3>

                                    <p class="prag" data-aos="zoom-in">
                                        {{$project->getTranslatedAttribute('offer', Config::get('app.locale') , 'fallbackLocale')}}
                                    </p>


                                    <p class="prag" data-aos="fade-up">
                                        {{$project->getTranslatedAttribute('about', Config::get('app.locale') , 'fallbackLocale')}}

                                    </p>
                                    <div class="link-box">
                                        <a href="{{route('pages.project_details',['id'=>$project->id])}}" tabindex="0">
                                           {{__('projects.see_more')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- projects-section -->
            @endforeach
    </main>
</div>
<!--           end content-->
@endsection
