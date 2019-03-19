<?php
$hour = Date("H")+1;
$min = Date("i");
?>
<div class="pos-f-t sticky-top">
    <nav class="navbar navbar-dark bg-dark">
        <span class="tijd"> <?php echo $hour . ":" . $min ?></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <ul class="nav-bar">
                <li class="nav-item">Home</li>
                <li class="nav-item">About me</li>
                <li class="nav-item">Portfolio</li>
            </ul>
        </div>
    </div>
</div>
