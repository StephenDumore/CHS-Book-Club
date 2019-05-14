<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
</head>

<body>
    <div class="title-aboutus">
        <img class="aboutus-title-img" src="img/about-us-title.jpg" alt="The inside of a circular tower of books">
        <h1 class="main-title">About Us</h1>
    </div>

    <div class="ppl-y-txt">
        <div class="ppl-img">
            <img class="img-min-width" src="img/people.jpg" alt="The members of the CHS book club with their positions listed"></div>
        <div class="about-us-txt1">
            <h2 class="title">CHS Book Club</h2>
            <ul>
                <li class="about-us-txt-li">Read</li>
                <li class="about-us-txt-li">Connect with others</li>
                <li class="about-us-txt-li">Have fun!</li>
            </ul>
        </div>
    </div>
    <div class="lightbox">
        <div class="lightbox-img"><img class="img-min-width" src="img/turtles.jpg" onclick="display(); " alt="A copy of John Green's novel, Turtles all the way down"></div>
        <div class="lightbox-img"><img class="img-min-width" src="img/group.jpg" alt="The CHS book club working on posters"></div>
        <div class="lightbox-img"><img class="img-min-width" src="img/classroom.jpg" alt="The CHS book club's classroom"></div>
        <div class="lightbox-img"><img class="img-min-width" src="img/bookshelf.jpg" alt="A bookshelf in the CHS book club classroom"></div>
    </div>

    <div id="lightboxDisplayed" class="lightbox-displayed">
        <i class="fas fa-times"></i>
        <div class="lightbox-img-d"><img class="img-min-width" src="img/turtles.jpg" alt="A copy of John Green's novel, Turtles all the way down"></div>
        <div class="lightbox-img-d"><img class="img-min-width" src="img/group.jpg" alt="The CHS book club working on posters"></div>
        <div class="lightbox-img-d"><img class="img-min-width" src="img/classroom.jpg" alt="The CHS book club's classroom"></div>
        <div class="lightbox-img-d"><img class="img-min-width" src="img/bookshelf.jpg" alt="A bookshelf in the CHS book club classroom"></div>
    </div>

    <div class="about-us-btm">
        <div class="btn-container">
            <a class="contact-btn" href="#">Contact</a>
        </div>
        <div class="about-us-btm-img">
            <img class="img-min-width" src="img/about-us-bottom.jpg" alt="The window of a bookstore"></div>
    </div>

    <script>
        function display() {
            document.getElementById("lightboxDisplayed").style.display = "block";
        }

        function close() {
            document.getElementById("lightboxDisplayed").style.display = "none";
        }

        var indexSlides = 1;
        openSlide(indexSlides);

        function next(n) {
            openSlide(indexSlides += n);
        }

        function currentSlide(n) {
            openSlide(indexSlides -= n);
        }

        function openSlide(n) {
            var i;
            var slides = document.getElementsByClassName("lightbox-img-d");
            if (n > slides.length) {
                indexSlides = 1
            }
            if (n < 1) {
                indexSlides = slides.length;
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" current", "");
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
</body>

</html>
