<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Գլխավոր էջ";
    include("pages/includes/head.php");
    ?>
</head>
<body>
<div id="preloader" class="visible"></div>
<header class="container-fluid">
    <nav class="navbar navbar-expand-xl navbar-light">
        <a href="#" class="navbar-brand"><img src="/img/logo.png" id='logo' alt="logo"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link link-slide active">Գլխավոր</a>
                <a href="#tabs" class="nav-link link-slide">Ինտերնետ</a>
                <a href="/pages/packages.php#packages" class="nav-link link-slide">Ինտերնետ և TV</a>
                <a href="pages/services.php#services" class="nav-link link-slide">Ծառայություններ</a>
                <a href="pages/about_us.php#about_us" class="nav-item nav-link link-slide">Մեր մասին</a>
                <a href="pages/how_to_pay.php#how_to_pay" class="nav-item nav-link link-slide">Ինչպե՞ս վճարել</a>
                <a href="#a" class="nav-item nav-link link-slide"><i class="fa-solid fa-phone" id="phone-icon"></i> 093 | 095 028004</a>
                <a href="https://www.facebook.com/kibernetnet/?__tn__=%2Cd%2CP-R&eid=ARAv-00y9g4aw_LDP6IOZM2_DG_bWCFjHxfCjY0v9UodSQClEUoJakvStOEOYmi6-iqXzQfRcXUuPS8B"
                   class="nav-item nav-link" target="_black"><i class='fab fa-facebook-f' id="fb_icon"></i></a>
                <a href="#contuct" class="nav-item nav-link"><i class="far fa-envelope" id='contact_us_icon'></i></a>
            </div>
        </div>
    </nav>
</header>

<!-- Images slide show -->
<?php include "./pages/includes/swiper-cont.php"; ?>

<article id='tabs'>
    <div class="art_item internet_item" id="home">
        <a href="#a">
            <i class="fas fa-home"></i>
            <p>ՏԱՆ <br> ՀԱՄԱՐ</p>
        </a>
    </div>
    <div class="art_item internet_item" id="business">
        <a href="#s">
            <i class="fas fa-briefcase"></i>
            <p>ԲԻԶՆԵՍԻ <br> ՀԱՄԱՐ</p>
        </a>
    </div>
    <div class="art_item internet_item" id="gift">
        <a href="#a">
            <i class="fas fa-gift"></i>
            <p>ՀԱՏՈՒԿ ԱՌԱՋԱՐԿ</p>
        </a>
    </div>

    <div class="art_item art_item_home hover-yellow" id="internet_standart_village">
        <a href="#a">
            <h3>ՍՏԱՆԴԱՐՏ</h3>
            <span>4000֏</span>
            <p>30մբ/վ</p>
        </a>
    </div>
    <div class="art_item art_item_home hover-blue" id="internet_standart_village">
        <a href="#a">
            <h3>ՍՏԱՆԴԱՐՏ</h3>
            <span>5000֏</span>
            <p>60մբ/վ</p>
        </a>
    </div>
    <div class="art_item art_item_home hover-red" id="internet_standart_plus_village">
        <a href="#a">
            <h3>ՍՏԱՆԴԱՐՏ+</h3>
            <span>6000֏</span>
            <p>80մբ/վ</p>
        </a>
    </div>
    <div class="art_item art_item_home hover-dark-blue" id="internet_mega_village">
        <a href="#a">
            <h3>ՄԵԳԱ</h3>
            <span>7000֏</span>
            <p>100մբ/վ</p>
        </a>
    </div>
    <div id="business_info">
        <h3>ԲԻԶՆԵՍԻ ՀԱՄԱՐ</h3>
        <p>Բիզնեսի համար ընկերությունը տրամադրում է փաթեթներ պայմանագրային հիմունքներով։ Պայմաններին մանրամասն
            ծանոթանալու համար կարող եք զանգահարել հետևյալ հեռախոսահամարով։</p>
    </div>
    <div id="gift_info">
        <h3>ՀԱՏՈՒԿ ԱՌԱՋԱՐԿ</h3>
        <h5> Բաժանորդագրվելով 1 տարի սակագներց որևէ մեկին դուք կստանաք՝</h5>
        <ul>
            <li>անվճար WIFI սարք</li>
            <li>հավելյալ մեգբայթներ</li>
            <li>անվճար միացում</li>
        </ul>
    </div>
    <div class="break-column">
        <a href="#tabs"><i class="fas fa-arrow-circle-left"></i></a>
    </div>
</article>
<div id="contuct" class="main-container">
    <div class="header-container">
        <h3 class="header-title">ԿԱՊ ՄԵԶ ՀԵՏ</h3>
    </div>
    <div class="form-container">
        <form action="action.php" method="post">
            <input type="text" required name="name" placeholder="Անուն">
            <input type="text" required name="number" placeholder="Հեռախոսահամար" minlength="8" maxlength="9"
                   pattern="[0-9]{8,9}">
            <textarea class="message-box" required name="msg" placeholder="Նամակ"></textarea>
            <button name='send'>Ուղարկել</button>
    </div>
</div>

<div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5119.308559922734!2d44.35270775779188!3d40.27665915809714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sashtarak%20tigran%20mec%2030!5e0!3m2!1sru!2s!4v1587414635789!5m2!1sru!2s"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
</div>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div id="footer_top">
                <p>093 028004 | 095 028004</p>
                <p><i class="fas fa-map-marker-alt"></i> Արագածոտնի մարզ, ք. Աշտարակ, Տիգրան Մեծի 30</p>
                <p>
                    <i class="far fa-envelope"></i> Kiberinternet@mail.ru
                </p>
            </div>
            <div id="footer_bottom">
                <img src="img/footer_logo.png" id='footer_logo' alt="footer_logo">
                <p>Բոլոր իրավունքները պաշտպանված են: <i class="far fa-registered"></i>. COPYRIGHT "KIBERNET" <i
                            class="far fa-copyright"></i>. 2020</p>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>!function (e) {
        "undefined" == typeof module ? this.charming = e : module.exports = e
    }(function (e, n) {
        "use strict";
        n = n || {};
        var t = n.tagName || "span", o = null != n.classPrefix ? n.classPrefix : "char", r = 1, a = function (e) {
            for (var n = e.parentNode, a = e.nodeValue, c = a.length, l = -1; ++l < c;) {
                var d = document.createElement(t);
                o && (d.className = o + r, r++), d.appendChild(document.createTextNode(a[l])), n.insertBefore(d, e)
            }
            n.removeChild(e)
        };
        return function c(e) {
            for (var n = [].slice.call(e.childNodes), t = n.length, o = -1; ++o < t;) c(n[o]);
            e.nodeType === Node.TEXT_NODE && a(e)
        }(e), e
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="js/slider.js"></script>
<script>
    function loadData() {
        return new Promise((resolve, reject) => {
            setTimeout(resolve, 1000);
        })
    }

    loadData()
        .then(() => {
            let preloaderEl = document.getElementById('preloader');
            preloaderEl.classList.add('hidden');
            preloaderEl.classList.remove('visible');
        });
</script>
<script>
    $('.items-cont').hide();
    $('.break-column').hide();
    $('#business_info').hide();
    $('.price_heading').hide();
    $('.price_heading').css('color', 'rgb(95,95,95)');
    $('.price_body').hide();
    $('#gift_info').hide();

    $('#home').click(function () {
        $('#home').hide();
        $('#business').hide();
        $('#gift').hide();
        $('.items-cont').show();
        $('.break-column').show();
        $('.price_heading').show();
        $('.price_body').show();
    });

    $('#home_internet').click(function () {
        $('#home').hide();
        $('#business').hide();
        $('#gift').hide();
        $('#business_info').hide();
        $('.items-cont').show();
        $('.break-column').show();
        $('.price_heading').show();
        $('.price_body').show();
    });


    $('#int_link').click(function () {
        $('#home').show();
        $('#business').show();
        $('#gift').show();
        $('.items-cont').hide();
        $('.break-column').hide();
        $('#business_info').hide();
        $('.price_heading').hide();
        $('.price_body').hide();
        $('#gift_info').hide();
    });
    $('#gift').click(function () {
        $('#home').hide();
        $('#business').hide();
        $('#gift').hide();
        $('#gift_info').show();
        $('.break-column').show();
    });

    $('.break-column').click(function () {
        $('#home').show();
        $('#business').show();
        $('#gift').show();
        $('.items-cont').hide();
        $('.break-column').hide();
        $('#business_info').hide();
        $('.price_heading').hide();
        $('.price_body').hide();
        $('#gift_info').hide();
    });

    $('#business').click(function () {
        $('#home').hide();
        $('#business').hide();
        $('#gift').hide();
        $('#gift_info').hide();
        $('#business_info').show();
        $('.break-column').show();
    });
    $('#business_internet').click(function () {
        $('#home').hide();
        $('#business').hide();
        $('#gift').hide();
        $('.items-cont').hide();
        $('.price_heading').hide();
        $('.price_body').hide();
        $('#gift_info').hide();

        $('#business_info').show();
        $('.break-column').show();

    });
    $('#special_gift').click(function () {
        $('#home').hide();
        $('#business').hide();
        $('#gift').hide();
        $('#business_info').hide();
        $('.items-cont').hide();
        $('.price_heading').hide();
        $('.price_body').hide();

        $('#gift_info').show();
        $('.break-column').show();
    });
</script>
</body>
</html>
