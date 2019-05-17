<?php 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
</head>

<body>
   <header>
    <div class="contact-parallax">
        <h1 class="contact-parallax-title">Contact</h1>
    </div>
    </header>
    
    <?php include('templates/navbar.php')  ?>
    
    <main>
    <div class="form-content">
        <div class="form-text-container">
            <div class="form-text">
                <h2 class="contact-msg">Get in touch with us.</h2>
                <div class="CHS">
                    <h3 class="CHStitle">Clovis high school</h3>
                    <p>1055 Fowler Ave,</p>
                    <p>Clovis, CA 93611</p>
                </div>
                <div class="CHS">
                    <h3>Times</h3>
                    <p>Wednesdays at lunch</p>
                </div>
            </div>
        </div>
        <form>
            <div class="form-name">
                <input class="name" type="text" id="fname" name="fname" placeholder="Name...">
                <input class="email" type="text" id="email" name="fname" placeholder="Email...">
            </div>
            <textarea name="msg" id="msg" placeholder="Message..."></textarea>
            <input class="submit" type="Submit" value="Submit">
        </form>
    </div>
    </main>
    <?php include('templates/footer.php') ?>


</body>

</html>
