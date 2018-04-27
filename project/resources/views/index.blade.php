@extends("templates.app")

@section("content")
<?php
    $home_image = isset($home->path) ? $home->path : '';
    $home_link = isset($home->link) ? $home->link : '' ;
?>
    <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                          <div class='col-md-12 '>
                              <div class='row'>
                                  <div class='col-lg-12'>
                                      <h1 class='page-header'>{{ trans('page.langHOME_1') }}</h1>
                                  </div>
                              </div>
                              <div class='sep42'></div>
                              <div class='row'>
                                  <div class='col-xs-12 col-sm-10 col-md-10 col-lg-10 chisiamo'>
                                    <?php
                                      // foreach ($home as $obj) {
                                      //     //$text = $obj->{"text_".$lang};
                                      //     echo "<p>{text}</p>";
                                      // }

                                    echo $lang;
                                    ?>
                                  </div>
                              </div>
                           <div class='sep42'></div>
                      </div>

                  <div class="col-md-12">
                      <div class="row">
                          <div class="col-lg-12">
                              <h1 class="page-header">{{ trans('page.langNEWS_4') }}</h1>
                          </div>
                      </div>
                      <div class="sep42"></div>
                      <?php
                      if (count($news) > 0) {
                          $cont_news = 1;
                          foreach ($news as $obj) {
                              $fecha = date("d/m/Y", $obj->data);
                              // traduzione contenuti
                              $titolo = $obj->{"titolo_".$lang};
                              $sommario = $obj->{"sommario_".$lang};
                              $id = $obj->id;

                              // selezione icona
                              $fa_icon = ($obj->type == 1) ? "fa-newspaper-o" : "fa-rss";
                              $class_title = ($obj->type == 1) ? "news-title" :"news-aggiornamento";
?>
                              <div class='col-md-4'>
                              <article class='post clearfix'>
                              <div class='row'>
                              <section class='col-md-11 col-sm-12 col-xs-12 col-md-offset-1 home-news' id="news-cont_news">
                                <p class="entry-date"><i class="postMeta fa {{ $fa_icon }} fa-lg {{ $class_title }}"></i>{{ $fecha }}</p>
                                <h4><a class="{{ $class_title }}" href="news/{{ $id }}" title=''>{!! $titolo !!}</a></h4>
                                <p>{!! $sommario !!}</p>
                              </section>
                              </div>
                              </article>
                              <hr class='news-home-sep' id='sep-{{ $cont_news }}'>
                              </div>
<?php
                              $cont_news++;
                          }
                      }
                      ?>
                  </div>
              </div>
              <div class="col-md-4" style="margin-top: 100px;">
                  <?php
                      if($home_link != null && $home_image != null){
                          echo "<a href='{$home_link}'>";
                              echo "<img src='image/{$home_image}' class='img-responsive img-ban' alt='' />";
                          echo"</a>";
                      }
                      else if ($home_image != null) {
                          echo "<img src='image/".$home_image."' class='img-responsive img-ban' alt='' />";
                      }
                  ?>
              </div>
          </div>
      </div>
<!--        <div class="sep42"></div>-->
      <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="row">
                          <div class="col-lg-8">
                              <h1 class="page-header">{{ trans('page.langMENU_2') }}</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="sep42"></div>
          <div class="row prodotti">
              <div class="col-md-6">
                  <div class="row">
                      <?php
                      if (count($categorieRoot) > 0) {
                          for ($i = 0; $i < 4; $i++) {
                              if (isset($categorieRoot[$i])) {
                                  echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
                                  echo "<a href='product/".$categorieRoot[$i]->id."'>";
                                  echo "<img src='image/icon_categorie/".$categorieRoot[$i]->icona."' class='img-responsive img-pro' alt='' />";
                                  echo "<p>".utf8_decode($categorieRoot[$i]->{"titolo_".$lang})."</p>";
                                  echo "</a>";
                                  echo "</div>";
                              }
                          }
                      }
                      ?>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="row">
                      <?php
                      if (count($categorieRoot) > 0) {
                          for ($i = 4; $i < 8; $i++) {
                              if (isset($categorieRoot[$i])) {
                                  echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
                                  echo "<a href='product/".$categorieRoot[$i]->id."'>";
                                  echo "<img src='image/icon_categorie/".$categorieRoot[$i]->icona."' class='img-responsive img-pro' alt='' />";
                                  echo "<p>".utf8_decode($categorieRoot[$i]->{"titolo_".$lang})."</p>";
                                  echo "</a>";
                                  echo "</div>";
                              }
                          }
                      }
                      ?>
                  </div>
              </div>
          </div>
          <div class="sep42 hidden-xs"></div>
          <div class="row prodotti">
              <div class="col-md-6">
                  <div class="row">
                      <?php
                      if (count($categorieRoot) > 0) {
                          for ($i = 8; $i < 12; $i++) {
                              if (isset($categorieRoot[$i])) {
                                  echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
                                  echo "<a href='product/".$categorieRoot[$i]->id."'>";
                                  echo "<img src='image/icon_categorie/".$categorieRoot[$i]->icona."' class='img-responsive img-pro' alt='' />";
                                  echo "<p>".utf8_decode($categorieRoot[$i]->{"titolo_".$lang})."</p>";
                                  echo "</a>";
                                  echo "</div>";
                              }
                          }
                      }
                      ?>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="row">
                      <?php
                      if (count($categorieRoot) > 0) {
                          for ($i = 12; $i < 16; $i++) {
                              if (isset($categorieRoot[$i])) {
                                echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
                                echo "<a href='product/".$categorieRoot[$i]->id."'>";
                                echo "<img src='image/icon_categorie/".$categorieRoot[$i]->icona."' class='img-responsive img-pro' alt='' />";
                                echo "<p>".utf8_decode($categorieRoot[$i]->{"titolo_".$lang})."</p>";
                                echo "</a>";
                                echo "</div>";
                              }
                          }
                      }
                      ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="sep42"></div>
@stop
