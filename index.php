<?php
//echo 'hello';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
</head>

<body>
    <header>
        <div class="home-parallax">
            <h1 class="home-title">CHS Book Club</h1>
            <div class="title-btn-padding">
                <button onclick="downFunction()" class="title-btn" id="scrollBtn">Scroll Down</button>
            </div>
        </div>
    </header>

    <?php include('templates/navbar.php')  ?>
    <main>
        <article>
            <div class="mission">
                <h2 class="title">Mission</h2>
                <p class="paragraph">The Clovis High Book Club was created this last year by a student, Tori Roberts and Teacher, Leanne Lewis with the hope of allowing students to enjoy reading with others. Over this first year, we have completed two novels, <i>Turtles All the Way Down</i> by John Green and <i>The Outsiders</i> by S.E. Hinton and have compared the <i>The Outsiders</i> to the film. We have sold floats at a school event and have participated in our school’s homecoming parade which was great publicity for the club! In the future we plan to read a novel and take a field trip to the movie theater to compare!</p>
            </div>
        </article>

        <div class="tri-img">
            <div class="tri-img1"><a href="https://www.instagram.com/chs.book.club/?hl=en" target="_blank"><img class="img-min-width" src="img/home-tri1.jpg" alt="Two rows of bookshelves">
                    <div class="fade">
                    </div>
                    <p class="fade-text">Instagram</p>
                </a>
            </div>
            <div class="tri-img2">
                <div><a href="aboutus.php" target="_blank">
                        <div class="fade"></div><img class="img-min-width" src="img/home-tri-2.jpg" alt="A bookshelf">
                        <div class="fade">
                        </div>
                        <p class="fade-text">About Us</p>
                    </a></div>
            </div>
            <div class="tri-img3">
                <div><a href="contact.php" target="_blank">
                        <div class="fade"></div><img class="img-min-width" src="img/home-tri-3.jpg" alt="A woman reading beside a bookshelf">
                        <div class="fade">
                        </div>
                        <p class="fade-text">Contact</p>
                    </a></div>
            </div>
        </div>

        <h2 class="calendar-title">Calendar</h2>
        <div class="calendar">
            <div class="month1">
                <p class="calendar-month">April</p>
                <ul>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                </ul>
            </div>
            <div class="month2">
                <p class="calendar-month">May</p>
                <ul>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                </ul>
            </div>
            <div class="month3">
                <p class="calendar-month">July</p>
                <ul>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                    <li>Lorem ispsum dolor Sit Ammet</li>
                </ul>
            </div>
        </div>
    </main>
    <div class="parallax-bottom"></div>
    <?php include('templates/footer.php') ?>
    <script>
        function downFunction() {
            document.documentElement.scrollTop = 700;
            document.body.scrollTop = 700;
        }

    </script>
</body>

</html>