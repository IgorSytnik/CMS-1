

<div class="left">
        <div id="menu">
            
            <div class="pages">
                @if($lan == 'ru')
                    <a href="/landing/{{ $lan }}"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts/{{ $lan }}" class="item">Контакты</a>
                    <a href="/photos/{{ $lan }}" class="item">Фото</a>
                    <a href="/encyclopedia" class="item">Энциклопедия</a>
                @elseif($lan == 'ua')
                    <a href="/landing/{{ $lan }}"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts/{{ $lan }}" class="item">Контакти</a>
                    <a href="/photos/{{ $lan }}" class="item">Фото</a>
                    <a href="/encyclopedia" class="item">Енциклопедія</a>
                @elseif($lan == 'en')
                    <a href="/landing/{{ $lan }}"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts/{{ $lan }}" class="item">Contacts</a>
                    <a href="/photos/{{ $lan }}" class="item">Photos</a>
                    <a href="/encyclopedia" class="item">Encyclopedia</a>
                @else
                    <a href="/"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts" class="item">Контакты</a>
                    <a href="/photos" class="item">Фото</a>
                    <a href="/encyclopedia" class="item">Энциклопедия</a>
                @endif
            </div>

            <div class="language">
                @if(Request::segment(1) == 'encyclopedia')
                <a href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/ru" class="item">ru</a>
                <a href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/ua" class="item">ua</a>
                <a href="/{{ Request::segment(1) }}/{{ Request::segment(2) }}/en" class="item">en</a>
                @else
                <a href="/{{ Request::segment(1) }}/ru" class="item">ru</a>
                <a href="/{{ Request::segment(1) }}/ua" class="item">ua</a>
                <a href="/{{ Request::segment(1) }}/en" class="item">en</a>
                @endif
            </div>
            
        </div>
    </div>