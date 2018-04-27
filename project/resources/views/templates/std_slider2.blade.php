<?php
    $sliders_random = rand(1, 4);
    echo "<header id='carousel-example-generic' class='carousel slide' {$altezza}>";
    echo "<div class='fill' style='background-image:url(\"image/banner/201016_PER_SITO_{$sliders_random}.jpg\");'></div>";
    include_once "template/std_wave_bar.php";
    echo "</header>";
?>