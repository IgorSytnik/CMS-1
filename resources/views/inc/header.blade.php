

<div class="left">
        <div id="menu">
            
            <div class="pages">
                @if($lan == 'ru')
                    <a href="/"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts/{{ $lan }}" class="item">Контакты</a>
                    <a href="/photos/{{ $lan }}" class="item">Фото</a>
                    <a href="/encyclopedia" class="item">энциклопедия</a>
                @elseif($lan == 'ua')
                    <a href="/"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts/{{ $lan }}" class="item">Контакти</a>
                    <a href="/photos/{{ $lan }}" class="item">Фото</a>
                    <a href="/encyclopedia" class="item">енциклопедія</a>
                @elseif($lan == 'en')
                    <a href="/"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts/{{ $lan }}" class="item">Contacts</a>
                    <a href="/photos/{{ $lan }}" class="item">Photos</a>
                    <a href="/encyclopedia" class="item">encyclopedia</a>
                @else
                    <a href="/"><img src="/images/Applogo.jpg" class="Applogo"></a>
                    <a href="/contacts" class="item">Контакты</a>
                    <a href="/photos" class="item">Фото</a>
                    <a href="/encyclopedia" class="item">энциклопедия</a>
                @endif
            </div>

            <div class="language">
                <a href="/{{ Request::segment(1) }}/ru" class="item">ru</a>
                <a href="/{{ Request::segment(1) }}/ua" class="item">ua</a>
                <a href="/{{ Request::segment(1) }}/en" class="item">en</a>
            </div>
            
        </div>
    </div>