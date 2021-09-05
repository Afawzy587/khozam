<!--           start footer-->
<div class="footer-container">
    <footer class="wrapper">
        <!-- footer-section -->
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box">
                            <h3 class="footer-title">
                                <a href="{{route('pages.about')}}">
                                    {{__('about.about_us')}}
                                </a>
                            </h3>
                            <p class="prag">

                                @if ( Config::get('app.locale') == 'en')
                                    {{setting('site.a_s_content')}}
                                @elseif ( Config::get('app.locale') == 'ar' )
                                    {{setting('site.a_s_content_ar')}}
                                @endif

                            </p>
                            <div class="footer-ul">
                                {{menu('social_media', 'social_menu')}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box">
                            <h3 class="footer-title">
                                <a href="#">
                                    {{__('home.projects')}}
                                </a>
                            </h3>
                            <div class="footer-projects-ul">
                                <ul class="list-unstyled">
                                    @foreach($projects as $pId =>$project)
                                        <li>
                                            <a href="{{route('pages.project_details',['id'=>$project->id])}}">
{{--                                                {{$project->name}}--}}
                                                {{$project->getTranslatedAttribute('name', Config::get('app.locale') , 'fallbackLocale')}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box">
                            <h3 class="footer-title">
                                {{__('home.NewsLetter')}}
                            </h3>
                            <form action="" id="contactliter" class="newsLetter-form">
                                {{csrf_field()}}
                                <input class="form-control" formcontrolname="email" name="litter_email"  placeholder="{{__('home.Email')}}"
                                       required="" type="email"  id="litter_email"/>
                                <div class="link-box">
                                    <button type="submit">{{__('home.Send')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box">
                            <h3 class="footer-title">
                                <a href="{{route('pages.contact')}}">
                                    {{__('home.CONTACT_US')}}
                                </a>
                            </h3>
                            <div class="footer-contact-ul">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="tel:{{setting('site.tel')}}" data-call="{{setting('site.tel')}}">
                                            <i class="fas fa-phone-volume"></i>
                                            <span>
                                                {{setting('site.tel')}}
                                             </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{setting('site.email')}}">
                                            <i class="fas fa-envelope"></i>
                                            <span>
                                                        {{__('home.F_Email')}}
                                                    </span>
                                            <span class="span2">
                                                        {{setting('site.email')}}
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-phone-alt"></i>
                                            <span>
                                                        {{__('home.F_Phone')}}
                                                    </span>
                                            <span class="span2">
                                                        {{setting('site.phone')}}
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-section -->
        <!-- footer-copy -->
        <div class="footer-copy">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-8 col-md-12">
                        <div class="footer-copy-box">
                            <p class="prag">
                                © Copyright | KHOZAM 2020. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-copy -->
    </footer>
</div>
<!--           end footer-->
@section('contact_latter')
    <script type="text/javascript">

        $('#contactliter').on('submit',function(event){
            event.preventDefault();
            let email = $('#litter_email').val();
            $.ajax({
                url: "/contact_latter",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    email:email,
                },
                success:function(response){
                    console.log(response);
                },
            });
        });
    </script>
@endsection
