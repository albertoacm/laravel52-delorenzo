<?php
    //require_once "class/utenti.php";
    //$utentiManager = new UtentiManager();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navigation">
    <div class="container-fluid " style="background-color: #fbb800">
        <div id="preHeader">
        	<div class="row">
        		<div class="col-md-12 col-sm-8 col-xs-12 wlc-up-menu">
        			<ul class="quickMenu tips">
                <li><a href='login'><i class='fa fa-user ' aria-hidden='true'> </i> {{ trans('page.langLOGIN') }}</a></li>
                        <?php
                            // if (isset($_SESSION["login-id"]) && $_SESSION["login-id"] > 0) {
                                //$utente = $utentiManager->getById($_SESSION["login-id"]);
                                // echo "<li><i class='fa fa-user' aria-hidden='true'></i> {utente->nome} {utente->cognome}</li>";
                                // echo "<li><a href='logout.php'><i class='fa fa-sign-out ' aria-hidden='true'></i> {lang['LOGOUT']}</a></li>";
                            // } else {

                            //}

                            // BANDIERE
                            // Parametri per lanciare ricerca dopo il cambio lingua
                            // if (isset($_REQUEST["searched"]) && $_REQUEST["searched"] != "") {
                            //     $searched = "&searched=".$_REQUEST["searched"];
                            // } else $searched = "";
                            ?>
                            <li><a href="/it" data-toggle="tooltip" data-placement="bottom" title="{{ trans('page.langLINGUA_1') }}"><img src="image/flags/min/it.png" alt="{{ trans('page.langLINGUA_1') }}" /></a></li>
                            <li><a href="/en" data-toggle="tooltip" data-placement="bottom" title="{{ trans('page.langLINGUA_2') }}"><img src="image/flags/min/gb.png" alt="{{ trans('page.langLINGUA_2') }}" /></a></li>
                            <li><a href="/fr" data-toggle="tooltip" data-placement="bottom" title="{{ trans('page.langLINGUA_3') }}"><img src="image/flags/min/fr.png" alt="{{ trans('page.langLINGUA_3') }}" /></a></li>
                            <li><a href="/es" data-toggle="tooltip" data-placement="bottom" title="{{ trans('page.langLINGUA_4') }}"><img src="image/flags/min/es.png" alt="{{ trans('page.langLINGUA_4') }}" /></a></li>
                            <li><a href="http://www.de-lorenzo.us/" data-toggle="tooltip" data-placement="bottom" title="{{ trans('page.langLINGUA_5') }}" target="_blank"><img src="image/flags/min/usa.png" alt="{{ trans('page.langLINGUA_5') }}" /></a></li>
                            <li><a href="{{ app()->getLocale() }}/laboratory" data-toggle="tooltip" data-placement="bottom" title="{{ trans('page.langLINGUA_6') }}"><img src="image/flags/min/ot.png" alt="{{ trans('page.langLINGUA_6') }}" /></a></li>

        			</ul>
        		</div>
        	</div>
        </div>
    </div>
    <div class="container-fluid nav-padding">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ app()->getLocale() }}" title="">
                <img src="image/logo.png" class="img-responsive res-logo" title="delorenzo" alt="delorenzo" />
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                    <!--$class_menu_active = ($menu_active == "company") ? "class='active'" : "";-->
                    <li class='dropdown'><a {class_menu_active} href='#' data-toggle='dropdown' title=''>{{ trans('page.langMENU_16') }}<b class='caret'></b></a>
                        <ul class='dropdown-menu'>
                                <li>
                                    <a href='about-us.php'>{{ trans('page.langMENU_1') }}</a>
                                    <a href='mission.php'>{{ trans('page.langMENU_20') }}</a>
                                    <!--a href='team.php'>{{ trans('page.langMENU_17') }}</a-->
                                    <a href='contacts.php'>{{ trans('page.langMENU_5') }}</a>
                                </li>
                        </ul>
                    </li>

                    <li class='dropdown'><a {class_menu_active} data-toggle='dropdown' href='products' title=''>{{ trans('page.langMENU_2') }}<b class='caret'></b></a>
                        <ul class='dropdown-menu'>
                          <?php
                            if (count($categorieRoot) > 0) {
                                foreach ($categorieRoot as $cat_root) {
                                    echo "<li>";
                                        echo "<a href='product.php?cat={cat_root->id}'>". $cat_root->{"titolo_".$lang } ."</a>";
                                    echo "</li>";

                                }
                            }
                             ?>
                        </ul>
                    </li>

                    <li><a {class_menu_active} href='all-news.php' title=''>{{ trans('page.langMENU_3') }}</a></li>

                    <li><a {class_menu_active} href='catalogs.php' title=''>{{ trans('page.langMENU_12') }}</a></li>

                    <li><a {class_menu_active} href='all-projects.php' title=''>{{ trans('page.langMENU_11') }}</a></li>

                        <li class='dropdown'><a {class_menu_active} href='#' data-toggle='dropdown' title=''>{{ trans('page.langMENU_18') }}<b class='caret'></b></a>
                            <ul class='dropdown-menu'>
                                <li>
                                    <a href='all-videos.php' title=''>{{ trans('page.langMENU_4') }}</a></a>
                                    <a href='gallery.php' title=''>{{ trans('page.langMENU_6') }}</a>
                                </li>
                            </ul>
                        </li>
                        <?php
//                    $class_menu_active = ($menu_active == "faq") ? "class='active'" : "";
//                    echo "<li><a {$class_menu_active} href='faq.php' title=''>{$lang['MENU_19']}</a></li>";
//
//                    $class_menu_active = ($menu_active == "gallery") ? "class='active'" : "";
//                    echo "<li><a {$class_menu_active} href='about-us.php' title=''>{$lang['MENU_6']}</a></li>";

//                    $class_menu_active = ($menu_active == "contacts") ? "class='active'" : "";
//                    echo "<li><a {$class_menu_active} href='contacts.php' title=''>{$lang['MENU_5']}</a></li>";
                ?>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
