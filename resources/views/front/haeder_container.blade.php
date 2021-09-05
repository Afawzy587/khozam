<!--       start header-->
<div class="header-container">
    <header class="wrapper">
        <!-- nav-section -->
        <div class="nav-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="logo-box">
                            <a href="{{route('pages.home')}}" class="logo-link">
                                <img src="{{Voyager::image(setting('site.logo'))}}" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="menu-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="nav-link">
                            <div class="close-icon">
                                <i class="fas fa-times"></i>
                            </div>
                            {{menu('front', 'my_menu')}}
                        </div>
                        <div class="over-lay"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav-section -->
    </header>
</div>
<!--       end header-->
