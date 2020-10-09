
    <footer>  
        <div id="contacts_">
            <div id="contacts">
                <img src="/images/Line.png" id="line">
                <div>
                    @if($lan == 'ua')
                        Контакти
                    @elseif($lan == 'en')
                        Contacts
                    @else
                        Контакты
                    @endif
                </div>
                <div id="mail_ect">
                    <div style="margin-right: 1em;">
                        Gmail:<br/>
                        Patreon:<br/>
                        Instagram:<br/>
                        Twitter:<br/>
                        Facebook:<br/>
                        Моб. тел.:<br/>
                    </div>
                    <div>
                        birrrrrds@gmail.com<br/>
                        https://www.patreon.com/birrrrrds<br/>
                        https://www.instagram.com/birrrrrdsC<br/>
                        https://twitter.com/birrrrrds<br/>
                        https://www.facebook.com/birrrrrdsC<br/>
                        +38 0xx xxx xx xx
                    </div>
                </div>
                <div>
                    {{$created_at}}
                </div>
            </div>
        </div>
        <div id="me">
            <img src="/images/Kteleg.svg">Kintys
        </div>
    </footer>
</div>