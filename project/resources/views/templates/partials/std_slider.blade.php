<?php
//if (count($sliders) > 0) {
    echo "<header id='carousel-example-generic' class='carousel slide' {altezza}>";
    echo "<div class='carousel-inner' role='listbox'>";
    // foreach ($sliders as $key => $slide) {
    //     $active = ($key == 0) ? "active" : "";
    //     $immagine = translateIn($slide, "immagine", $lang_choise);
    //     $titolo = translateIn($slide, "titolo", $lang_choise);
    //     $sottotitolo = translateIn($slide, "sottotitolo", $lang_choise);
    //     $link = translateIn($slide, "link", $lang_choise);
    //     if($immagine != null) {
    //         echo "<div class='item {$active} deepskyblue text-center fill' style='background-image:url(\"image/slider/{$immagine}\");'>";
    //     }
    //     else{
    //         echo "<div class='item {$active} deepskyblue text-center fill' style='background-image:url(\"image/slider/{$slide->immagine_it}\");'>";
    //     }
    //     echo "<div class='header-text hidden-sm hidden-xs' {$d_text}>";
    //     if($titolo != null) {
    //         echo "<h3 data-animation='animated bounceInLeft'><span>{$titolo}</span></h3>";
    //         echo "<br>";
    //     }
    //     if($sottotitolo != null) {
    //         echo "<h3 data-animation='animated bounceInRight'><span>{$sottotitolo}</span></h3>";
    //         echo "<br>";
    //     }
    //     echo "</div>";
    //     if($link != null) {
    //         echo "<div class='details'>";
    //         echo "<a class='btn btn-theme btn-sm btn-min-block' data-animation='animated zoomInUp' href='{$link}'>{$lang["DETAILS_1"]}</a></div>";
    //     }
    //     echo "</div>";
    // }
    echo "</div>";
    echo "<a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>";
    echo "<span class='icon-prev'></span>";
    echo "</a>";
    echo "<a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>";
    echo "<span class='icon-next'></span>";
    echo "</a>";
    //include_once "std_wave_bar.php";
    echo "</header>";
//}
?>
