<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include "navbar.php"?>
<?php include "carousel.php"?>
<div class="aboutme-text row" id="aboutme" >
    <div class="col-md-4">
    <img src="img/aboutpic.jpg" id="loops">
    </div>
    <div class="col-md-6">
        <h1>About me</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
        </p>
    </div>

</div>
<div class="portfolio_section" id="portfolio_gallery">
    <h1 id="portfolio_title">Portfolio</h1>
    <hr>
    <?php include "gallery.php"?>
</div>
<div id="werk_school">
    <h1 id="portfolio_title">Opleidingen</h1>
    <hr>
    <div class="row">
        <div class="wrapper col-md-3">
            <h2>Windroos</h2>
            <img src="img/windroos.png">
            <h3>Economie</h3>
            <p id="text">Van 2014-2016</p>
        </div>
        <div class="wrapper col-md-3">
            <h2>Da Vinci</h2>
            <img src="img/DV.jpg" class="dv">
            <h3>ICT beheer</h3>
            <p id="text">Van 2016-2018</p>
        </div>
        <div class="wrapper col-md-3">
            <h2>Da Vinci</h2>
            <img src="img/DV.jpg" class="dv">
            <h3>Applicatieontwikkeling</h3>
            <p id="text">Van 2018-Heden</p>
        </div>
    </div>
    <h1 id="portfolio_title">Werkervaring</h1>
    <hr>
    <div class="row">
        <div class="wrapper col-md-3">
            <h2>Gorinchemse krant</h2>
            <img src="img/krant.png" class="dv">
            <h3>Krantenbezorger</h3>
            <p id="text">Van 2014-2015</p>
        </div>
        <div class="wrapper col-md-3">
            <h2>Jumbo Gorinchem</h2>
            <img src="img/jumbo.png" class="dv">
            <h3>Vakkenvuller</h3>
            <p id="text">Van 2015-2018</p>
        </div>
        <div class="wrapper col-md-3">
            <h2>Domino's</h2>
            <img src="img/pizza.png" class="dv">
            <h3>Pizza bezorger</h3>
            <p id="text">Van 2018-Heden</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12" id="contantme"  align="center">
        <?php include "contactform.php"?>
    </div>
</div>

</body>
</html>





