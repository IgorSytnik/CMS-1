<div class="menu">
    <!-- меню верхнее -->
    <div class="MainMenu">
        <div class="social">
            <a href="https://www.facebook.com/">
                <img src="/images/facebook.svg">
            </a>
            <a href="https://www.instagram.com/">
                <img href="https://www.instagram.com/" src="/images/instagram.svg">
            </a>
        </div>
        <div class="items">
            <a href="/motoinfo">ПРО НАС</a>
            <a href="/motocontacts">КОНТАКТИ</a>
        </div>
    </div>
</div>
<!-- моб меню -->
<div class="itemsMob">
    <div class="nav-toggle">
        <div class="nav-toggle-bar"></div>
    </div>
    <nav class="nav">
        <ul>
            <li><a href="/motoinfo">ПРО НАС</a></li>
            <li><a href="/motocontacts">КОНТАКТИ</a></li>
        </ul>
    </nav>
</div>
<!-- скрипт для моб меню -->
<script>
(function() {

    var hamburger = {
        navToggle: document.querySelector('.nav-toggle'),
        nav: document.querySelector('nav'),

        doToggle: function(e) {
            e.preventDefault();
            this.navToggle.classList.toggle('expanded');
            this.nav.classList.toggle('expanded');
        }
    };

    hamburger.navToggle.addEventListener('click', function(e) {
        hamburger.doToggle(e);
    });
    hamburger.nav.addEventListener('click', function(e) {
        hamburger.doToggle(e);
    });

}());
</script>

<div class="back">
    <div class="main">
        <!-- меню внутреннее -->
        <div class="headerInMain">
            <a href="/"><img src="/images/Logo.svg" class="name"></a>
            <div class="innerMenu">
                <a href="/news">Новини</a>
                <a href="/buying">Мотоцикли</a>
                <a href="/accs">Аксесуари</a>
            </div>
        </div>
        <div>