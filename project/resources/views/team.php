<?php
    foreach ($team as $obj) {
        $descrizione = translateIn($obj, "descrizione", $lang_choise);
        echo "<div id='myModalTeam{$obj->id}' class='modal fade' tabindex='-1' role='dialog' aria-hidden='true'>";
            echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
                    echo "<div class='modal-header'>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
                        echo "<h3>{$obj->nome_cognome}</h3>";
                        echo "<h4 style='float: left'>{$obj->ruolo}</h4>";
                    echo "</div>";
                    echo "<div class='modal-body row'>";
                        echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
                            echo "<img src='image/team/{$obj->immagine}' class='img-responsive img-portfolio img-hover video_img' alt=''>";
                        echo "</div>";
                        echo "<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
                            echo "<p>{$descrizione}</p>";
                        echo "</div>";
                    echo "</div>";
                echo "<div class='modal-footer'></div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
?>