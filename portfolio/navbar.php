<?php
$hour = Date("H")+2;
$min = Date("i");
$year = Date("y");
$month = Date("m");
$day = Date("d")
?>
<div class="pos-f-t sticky-top">
    <nav class="navbar navbar-dark bg-dark">
        <span class="tijd"> <?php echo $day. "-" . $month. "-" . $year. "*" .$hour . ":" . $min ?></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <ul class="nav-bar">
                <li class="nav-item" >Home</li>
                <li class="nav-item"><a  href="#portfolio_gallery">Portfolio</a></li>
                <li class="nav-item"><a  href="#werk_school">Werk & School</a></li>
                <li class="nav-item"><a  href="#contantme">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
