@extends("templates.app")

@section("content")
<!-- Mappa -->
  <header id="carousel-example-generic" class="carousel">
      <div id="mapProjectsWrapper"></div>
      @include("templates.partials.std_wave_bar")
  </header>
    <div class="sep42"></div>
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header"><?php //echo $lang["MENU_11"]; ?></h1>
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php" title=""><?php //echo $lang["MENU_7"]; ?></a></li>
                    <li class="active"><?php //echo $lang["MENU_11"]; ?></li>
                </ol>
            </div>
        </div>
        <div class="sep22"></div>
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 chisiamo">
                <?php
                    // if (count($projects)) {
                    //     foreach ($projects as $obj)
                    //     {
                    //         echo "<div class='col-md-12'>";
                    //             echo "<article class='post clearfix'>";
                    //                 echo "<div class='row'>";
                    //                     echo "<section class='col-lg-5 col-md-5 col-sm-12 col-xs-12 news'>";
                    //                         echo "<p class='entry-date2'>";
                    //                             echo "<i class='postMeta fa fa-cogs fa-lg news-title'></i>" .date("d/m/Y", $obj->data);
                    //                         echo "</p>";
                    //                         echo "<h4><a class='news-title' href='project.php?id={$obj->id}'>".translateIn($obj, "titolo", $lang_choise)."</a></h4>";
                    //                         echo translateIn($obj, "sommario", $lang_choise);
                    //                     echo "</section>";
                    //                     echo"<div class='sep42'></div>";
                    //                     echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 projects-button'>";
                    //                             echo "<a class='marker-link btn btn-default btn-form btn-project' href='#' data-markerid='{$obj->id}'><i class='fa fa-map-marker' aria-hidden='true'></i> {$lang['PROGETTI_4']} </a></h4>";
                    //                             echo "<a class='btn btn-default btn-form btn-project' href='project.php?id={$obj->id}'> <i class='fa fa-chevron-right' aria-hidden='true'></i> {$lang['PROGETTI_3']}</a>";
                    //                     echo "</div>";
                    //                 echo "</div>";
                    //             echo "</article>";
                    //             echo "<hr class='news-home-sep'>";
                    //         echo "</div>";
                    //     }
                    // }
                ?>
            </div>
            <div class="col-md-3 col-sm-12 hidden-xs">
                <div class="col-md-12 col-sm-6 col-xs-6 chisiamo-margin news-sidebar">
                    <h4><?php echo '$lang["PROGETTI_5"];' ?></h4>
                    <ul>
                        <?php
                            // Africa
                            // $archive = $projectsManager->getByContinente("Africa");
                            // $css_bold = ($archive > 0) ? "style='font-weight:bold;text-decoration:underline'" : " ";
                            // echo "<li><a href='all-projects.php?c=Africa' {$css_bold}><i class='fa fa-angle-right' aria-hidden='true'></i> Africa ({$archive})</a></li>";
                            //
                            // // America
                            // $archive = $projectsManager->getByContinente("America");
                            // $css_bold = ($archive > 0) ? "style='font-weight:bold;text-decoration:underline'" : " ";
                            // echo "<li><a href='all-projects.php?c=America' {$css_bold}><i class='fa fa-angle-right' aria-hidden='true'></i> America ({$archive})</a></li>";
                            //
                            // // Europa
                            // $archive = $projectsManager->getByContinente("Europa");
                            // $css_bold = ($archive > 0) ? "style='font-weight:bold;text-decoration:underline'" : " ";
                            // echo "<li><a href='all-projects.php?c=Europa' {$css_bold}><i class='fa fa-angle-right' aria-hidden='true'></i> Europa ({$archive})</a></li>";
                            //
                            // // Asia
                            // $archive = $projectsManager->getByContinente("Asia");
                            // $css_bold = ($archive > 0) ? "style='font-weight:bold;text-decoration:underline'" : " ";
                            // echo "<li><a href='all-projects.php?c=Asia' {$css_bold}><i class='fa fa-angle-right' aria-hidden='true'></i> Asia ({$archive})</a></li>";
                            //
                            // // Oceania
                            // $archive = $projectsManager->getByContinente("Oceania");
                            // $css_bold = ($archive > 0) ? "style='font-weight:bold;text-decoration:underline'" : " ";
                            // echo "<li><a href='all-projects.php?c=Oceania' {$css_bold}><i class='fa fa-angle-right' aria-hidden='true'></i> Oceania ({$archive})</a></li>";
                            //
                            // // Medio Oriente
                            // $archive = $projectsManager->getByContinente("Medio Oriente");
                            // $css_bold = ($archive > 0) ? "style='font-weight:bold;text-decoration:underline'" : " ";
                            // echo "<li><a href='all-projects.php?c=Medio Oriente' {$css_bold}><i class='fa fa-angle-right' aria-hidden='true'></i> Medio Oriente ({$archive})</a></li>";
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sep42"></div>
    </div>
@stop
