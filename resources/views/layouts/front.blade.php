<!DOCTYPE html>
@if ( Config::get('app.locale') == 'en')
    <html lang="en" dir="ltr">
@elseif ( Config::get('app.locale') == 'ar' )
    <html lang="ar" dir="rtl">
@endif

@include('front.head')
<body>
    <div id="page" class="hfeed site">
        @include('front.haeder_container')
          @yield('content')
        @include('front.footer_container')
    </div>
    @include('front.foot')
    @yield('footer')
    @yield('contact_latter')
</body>
