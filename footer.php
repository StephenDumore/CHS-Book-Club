
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        footer {
            background-color: #eaeaea;
            font-family: "Open Sans", sans-serif;
            padding: 1em;
        }
        button {
            background-color: rgba(0, 0, 0, 0);
            border: .15em solid #606060;
            font-size: 1.3em;
            font-family: "Open Sans", sans-serif;
            font-style: italic;
            letter-spacing: 0.15em;
            color: #606060;
            padding-top: .25em;
            padding-bottom: .25em;
            padding-left: 1em;
            padding-right: 1em;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1em;
            transition: ease .5s;
            cursor: pointer;
        }
        button:hover {
            color: #161616;
        }
        .line {
            border-color: #606060;
            border-style: solid;
            border-width: 2px;
            border-width: 100%;
            border-radius: 10px;
            margin: 2em;
        }
        .footer-bottom {
            display: flex;
            position: relative;
        }
        .footer-info {
            width: 60%
        }
        .footer-info p {
            color: #161616;
            margin-bottom: .5em;
            margin-top: .5em;
            font-size: 1.1em;
        }
        .footer-icons {
            display: flex;
            position: relative;
            position: absolute;
            bottom: 0;
            right: 0;
        }
        .footer-icons a i {
            color: #606060;
            margin: .5em;
            font-size: 1.3em;
            transition: .45s ease;
        }
        .footer-icons a i:hover {
            color: #161616;
        }
    </style>
</head>
<footer>
    <button onclick="topBtn()">Top</button>
    <div class="line"></div>
    <div class="footer-bottom">
        <div class="footer-info">
            <p>Room: P13</p>
            <p>1055 Fowler Ave, Clovis, CA 93611</p>
            <p>Club advisor: LeanneLewis@clovisusd.k12.ca.us</p>
        </div>
        <div class="footer-icons">
            <a href="https://www.instagram.com/chs.book.club/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="LeanneLewis@clovisusd.k12.ca.us" target="_blank"><i class="far fa-envelope"></i></a>
        </div>
    </div>
</footer>
<script>
    function topBtn() {
        document.documentElement.scrollTop = 0;
        document.body.scrollTop = 0;
    }
    
</script>

</html>

