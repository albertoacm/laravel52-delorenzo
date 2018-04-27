<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ trans('page.langMETA_1') }}">
        <meta name="keywords" content="{{ trans('page.langMETA_2') }}">
        <meta name="author" content="{{ trans('page.langMETA_3') }}">
        <title>De Lorenzo Group</title>
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:300,300italic' />
        <link rel="shortcut icon" href="image/favicon.ico" />
        <link rel='stylesheet' type='text/css' href="font-awesome/css/font-awesome.min.css" />
        <link rel='stylesheet' type='text/css' href="css/bootstrap.min.css" />
        <link rel='stylesheet' type='text/css' href="css/animate.css" />
        <link rel='stylesheet' type='text/css' href="css/style.css" />
        <link rel='stylesheet' type='text/css' href="css/jquery.cookiesdirective.css" />
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
      @include("templates.partials.std_header")
      @include("templates.partials.std_slider")

      @yield("content")

      @include("templates.partials.std_footer")
      @include("templates.partials.std_search")
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/app/common.js"></script>
      <!-- COOKIE -->
      <script type="text/javascript" src="js/jquery.cookiesdirective.js"></script>
      <script type="text/javascript" src="js/app/cookie-policy.js"></script>

    </body>
</html>
