<?php
require_once 'layout/header.php';
require_once 'classes/band.php';
require_once 'classes/style.php';
require_once 'functions.php';
?>
<?php
$bands = createBands('bands.txt');
$styles = createStyles('styles.txt');
?>
<div class="row row-cols-3 mt-5">
<?php
foreach($bands as $band) {?>
<div class="col mt-4">
    <div class="bg-white text-black d-flex flex-column text-center align-items-center justify-content-center p-5" style="height: 200px;">
        <?php 
        echo $band->getName();
        echo "<br>";
        echo $band->getCreation();
        echo "<br>";   
        echo whichStyle($band->getStyle_int(),$styles);
        ?>
    </div>
</div>
<?php
}
?>
</div>
<?php

require_once 'layout/footer.php';