<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Մեր մասին";
    include("includes/head.php");
    ?>
</head>
<body>
<div id="preloader" class="visible"></div>

<!--Header-->
<?php include "./includes/header.php"; ?>

<!-- Images slide show -->
<?php include "./includes/swiper-cont.php"; ?>

<article id='about_us'>
    <div class="about_us-cont">
        <h3>ՄԵՐ ՄԱՍԻՆ</h3>
        <p>Kibernet ընկերությունն իր գործունեությունը սկսել է ծավալել Արագածոտնի մարզում 2019 թվականից` տրամադրելով
            գերարագ ինտերնետ կապ՝ գերժամանակակից սարքավորումներով։ Օգտագործելով օպտիկամանրաթելային (FTTH, FTTB, FTTN
            տեխնոլոգիաներ), անլար 2.4 Ghz(PTP, PTMP տեխնոլոգիաներ) և լարային տեխնոլոգիաներ:</p>
        <p>Արդեն կարճ ժամանակահատվածում Kibernet ընկերությունը հասցրել է ընդլայնվել մարզում՝ ինտերնետ կապ ապահովելով ոչ
            միայն քաղաքներում և մոտակա գյուղերում այլ նաև հեռավոր և դժվար հասանելի շրջաններում։ Ինտերնետային
            ծառայությունից բացի ընկերությունը մատուցում է այլ ծառայություններ, որոնցից են՝ տեսախցիկների, հակահրդեհային
            համակարգերի տեղադրում, տպիչների վերանորոգում, քարթրիջների լիցքավորում, համակարգչային ցանցերի նախագծում և
            տեղադրում (սերվերային համակարգերի կառուցում, ցանցային անհրաժեշտ սարքավորումների տեղադրում և կարգավորում,
            ցանցի սպասարկում):</p>
        <p>Ընկերությունը շարունակելու է ընդլայնել ցանցը՝ ինտերնետ կապ տրամադրելով նաև Հայաստանի այլ մարզերում և
            շրջաններում։ Ընդլայնվելու է նաև բաժանորդներին տրամադրվող ծառայությունների բազմազանությունը։ Առաջիկայում
            բաժանորդները հնարավորություն կունենան օգտվելու ինտերնետային հեռուստահեռարձակման ծառայությունից։
            Ընկերությունը նպատակ է դրել աշխատել առաջատար օպերատորների հետ՝ լավագույնը մատուցելու իր հաճախորդներին։</p>
        <a href="../files/1.docx" download>Բեռնել հաշվետվությունը:</a>
    </div>
</article>
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
                <img src="../img/footer_logo.png" id='footer_logo' alt="footer_logo">
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
<script src="../js/slider.js"></script>
<script>
    function loadData() {
        return new Promise((resolve, reject) => {
            setTimeout(resolve, 2000);
        })
    }

    loadData()
        .then(() => {
            let preloaderEl = document.getElementById('preloader');
            preloaderEl.classList.add('hidden');
            preloaderEl.classList.remove('visible');
        });
</script>
</body>
</html>
