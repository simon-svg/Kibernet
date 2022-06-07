<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Ինտերնետ և TV";
    include("includes/head.php");
    ?>
</head>
<body>
<div id="preloader" class="visible"></div>

<!--Header-->
<?php include "./includes/header.php"; ?>

<!-- Images slide show -->
<?php include "./includes/swiper-cont.php"; ?>

<article id='packages'>
    <div class="items-cont items-cont-first">
        <div class="art_item art_item_package hover-red">
            <a href="#">
                <h3>ԱՏԱՆԴԱՐՏ ԵՎ ՍՄԱՐԹ TV</h3>
                <span>6000֏</span>
                <p>60մբ/վ</p>
                <span class="art_item_star red">*</span>
            </a>
        </div>
        <div class="art_item art_item_package hover-red">
            <a href="#">
                <h3>ՍՏԱՆԴԱՐՏ+ ԵՎ ՍՄԱՐԹ TV</h3>
                <span>7000֏</span>
                <p>80մբ/վ</p>
                <span class="art_item_star red">*</span>
            </a>
        </div>
        <div class="art_item art_item_package hover-red">
            <a href="#">
                <h3>ՄԵԳԱ ԵՎ ՍՄԱՐԹ TV</h3>
                <span>8000֏</span>
                <p>100մբ/վ</p>
                <span class="art_item_star red">*</span>
            </a>
        </div>

        <div class="art_item art_item_package hover-yellow">
            <a href="#">
                <h3>ՍՏԱՆԴԱՐՏ ԵՎ ՍՄԱՐԹ TV box</h3>
                <span>6500֏</span>
                <p>60մբ/վ</p>
                <span class="art_item_star yellow">**</span>
            </a>
        </div>
        <div class="art_item art_item_package hover-yellow">
            <a href="#a">
                <h3>ՍՏԱՆԴԱՐՏ+ ԵՎ ՍՄԱՐԹ TV box</h3>
                <span>7500֏</span>
                <p>80մբ/վ</p>
                <span class="art_item_star yellow">**</span>
            </a>
        </div>
        <div class="art_item art_item_package hover-yellow">
            <a href="#a">
                <h3>ՄԵԱԳ ԵՎ ՍՄԱՐԹ TV box</h3>
                <span>8500֏</span>
                <p>100մբ/վ</p>
                <span class="art_item_star yellow">**</span>
            </a>
        </div>

        <div class="art_item art_item_package hover-blue">
            <a href="#a">
                <h3>ՍՏԱՆԴԱՐՏ ԵՎ ՍՄԱՐԹ Android TV box</h3>
                <span>7500֏</span>
                <p>60մբ/վ</p>
                <span class="art_item_star blue">***</span>
            </a>
        </div>
        <div class="art_item art_item_package hover-blue">
            <a href="#a">
                <h3>ՍՏԱՆԴԱՐՏ+ ԵՎ ՍՄԱՐԹ Android TV box</h3>
                <span>8500֏</span>
                <p>80մբ/վ</p>
                <span class="art_item_star blue">***</span>
            </a>
        </div>
        <div class="art_item art_item_package hover-blue">
            <a href="#a">
                <h3>ՄԵԳԱ ԵՎ ՍՄԱՐԹ Android TV box</h3>
                <span>9500֏</span>
                <p>100մբ/վ</p>
                <span class="art_item_star blue">***</span>
            </a>
        </div>
    </div>
    <div class="items-info-cont">
        <h4 class="items-info"><span class="red">*</span> ՍՄԱՐԹ IP-TV, Catch-Up, Android TV առկայության դեպքում</h4>
        <h4 class="items-info"><span class="yellow">**</span> ՍՄԱՐԹ IP-TV, Catch-Up</h4>
        <h4 class="items-info"><span class="blue">***</span> ՍՄԱՐԹ IP-TV, Catch-Up, Android TV, YouTube</h4>
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

<!-- Footer -->
<?php include "includes/footer.php"; ?>

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
</body>
</html>
