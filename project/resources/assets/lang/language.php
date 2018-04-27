<?php
    // la lingua di default è l"italiano
    if (isset($_GET["lang"]) && ($_GET["lang"] == "it" || $_GET["lang"] == "en" || 
                                 $_GET["lang"] == "es" || $_GET["lang"] == "fr" ))
    {
        $lang_choise = $_GET["lang"];

        // registro la scelta in sessione
        $_SESSION["lang"] = $lang_choise;
        
        // registro cookie
        setcookie("lang", $lang_choise, time() + (3600 * 24 * 30));
    }
    else if (isset($_SESSION["lang"]))
    {
        $lang_choise = $_SESSION["lang"];
    }
    else if (isset($_COOKIE["lang"]))
    {
        $lang_choise = $_COOKIE["lang"];
    }
    else {
        // Recupera lingua del Browser
        $lang_browser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch ($lang_browser){
            case "fr": $lang_choise = "fr"; break;
            case "it": $lang_choise = "it"; break;
            case "en": $lang_choise = "en"; break;
            case "es": $lang_choise = "es"; break;
            default: $lang_choise = "en"; break;
        }
    }
   
    // includo traduzione
    if (isset($relativePath)){
        include_once "{$relativePath}lang/{$lang_choise}.php";
    }
    else include_once "lang/{$lang_choise}.php";    
?>