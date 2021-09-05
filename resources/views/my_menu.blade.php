<ul class="list-unstyled">
    @foreach($items as $menu_item)

        <li><a href="{{ route($menu_item->route) }}"  @if( Request::path() === $menu_item->title) class="active"  @elseif( Request::path() === 'PRINT_MEDIA_ACADEMY' && $menu_item->title === 'PRINT MEDIA ACADEMY') class="active" @elseif( Request::path() === 'Contact' && $menu_item->title === 'Contact Us') class="active" @endif>

                @if ( Config::get('app.locale') == 'en')
                    {{ $menu_item->getTranslatedAttribute('title', 'en', 'ar') }}
                @elseif ( Config::get('app.locale') == 'ar' )
                    {{ $menu_item->getTranslatedAttribute('title', 'ar', 'en') }}
                @endif
            </a></li>
    @endforeach
        <li class="hot-line">
            <a href="#" data-call="{{setting('site.tel')}}">
                {{setting('site.tel')}}
            </a>
        </li>
        <li >
            @if ( Config::get('app.locale') == 'en')
                <a href="{{route('locale',['locale'=>'ar'])}}" >
                    {{__('home.lang')}}
                </a>
            @elseif ( Config::get('app.locale') == 'ar' )
                <a href="{{route('locale',['locale'=>'en'])}}" >
                    {{__('home.lang')}}
                </a>
            @endif

        </li>
</ul>
