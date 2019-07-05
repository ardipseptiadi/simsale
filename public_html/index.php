<?php

    require_once(realpath(dirname(__FILE__) . "/../public_resource/config.php"));

    require_once(LIBRARY_PATH . "/templateFunctions.php");


    $setInIndexDotPhp = ".";

    $variables = array(
        'setInIndexDotPhp' => $setInIndexDotPhp
    );
    require_once('session.php');

    renderLayoutWithContentFile("home.php", $variables);

?>
