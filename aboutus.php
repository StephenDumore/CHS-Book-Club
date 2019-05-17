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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="title-aboutus">
            <h1 class="main-title">About Us</h1>
        </div>
    </header>

    <?php include('templates/navbar.php')  ?>

    <main>
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
            <h2 class="lightbox-title">Click an image to enlarge.</h2>
            <div class="lightbox-imgs">
                <div class="lightbox-img">
                    <div class="fade"></div>
                    <div class="lb-fade-text" onclick="display(); currentSlide(1)">
                        <p>+</p>
                    </div><img class="img-min-width" src="img/turtles.jpg" alt="A copy of John Green's novel, Turtles all the way down">
                </div>
                <div class="lightbox-img">
                    <div class="fade"></div>
                    <div class="lb-fade-text" onclick="display(); currentSlide(2)">
                        <p>+</p>
                    </div><img class="img-min-width" src="img/group.jpg" alt="The CHS book club working on posters">
                </div>
                <div class="lightbox-img">
                    <div class="fade"></div>
                    <div class="lb-fade-text" onclick="display(); currentSlide(3)">
                        <p>+</p>
                    </div><img class="img-min-width" src="img/classroom.jpg" alt="The CHS book club's classroom">
                </div>
                <div class="lightbox-img">
                    <div class="fade"></div>
                    <div class="lb-fade-text" onclick="display(); currentSlide(4)">
                        <p>+</p>
                    </div><img class="img-min-width" src="img/bookshelf-thumnail.jpg" alt="A bookshelf in the CHS book club classroom">
                </div>
            </div>
        </div>

        <div id="lightboxDisplayed" class="lightbox-displayed">
            <span class="closeButton" id="closeButton" onclick="closeThing()"><i class="far fa-window-close"></i></span>
            <a class="prev" onclick="nextSlide(-1)"><i class="fas fa-angle-left"></i></a>
            <a class="next" onclick="nextSlide(1)"><i class="fas fa-angle-right"></i></a>

            <div class="lightbox-img-d"><img class="img-min-width" src="img/turtles.jpg" alt="A copy of John Green's novel, Turtles all the way down"></div>
            <div class="lightbox-img-d"><img class="img-min-width" src="img/group.jpg" alt="The CHS book club working on posters"></div>
            <div class="lightbox-img-d"><img class="img-min-width" src="img/classroom.jpg" alt="The CHS book club's classroom"></div>
            <div class="lightbox-img-d"><img class="img-min-width" src="img/bookshelf.jpg" alt="A bookshelf in the CHS book club classroom"></div>
        </div>

        <div class="about-us-btm">
            <div class="btn-container">
                <a class="contact-btn" href="contact.php">Contact</a>
            </div>
            <div class="about-us-btm-img">
                <img class="img-min-width" src="img/about-us-bottom.jpg" alt="The window of a bookstore"></div>
        </div>
    </main>

    <?php include('templates/footer.php') ?>

    <script>
        function display() {
            document.getElementById("lightboxDisplayed").style.display = "block";
            document.getElementById("closeButton").style.display = "block";

            document.getElementById("nav").style.zIndex = 1;
        }

        function closeThing() {
            console.log('debug');
            document.getElementById("lightboxDisplayed").style.display = "none";
        }
        var indexSlides = 1;
        openSlide(indexSlides);

        function nextSlide(n) {
            openSlide(indexSlides += n);
        }

        function currentSlide(n) {
            openSlide(indexSlides = n);
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
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[indexSlides - 1].style.display = "block";
        }

    </script>
</body>

</html>
