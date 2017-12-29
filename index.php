<?php
/*
 * part 1
 * https://www.youtube.com/watch?v=MnFRBuVKkMA
 * 
 * Part 2
 * https://www.youtube.com/watch?v=RGOYhoOQGP4
 * 
 * Part 3
 * https://www.youtube.com/watch?v=Q8dYzHAUpwU
 * 
 * Part 4
 * https://www.youtube.com/watch?v=cwme0qRt1mw
 * 
 * Part 5
 * 
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

$GLOBALS["config"] = array(
    "appName" => "PHP framework",
    "version" => "0.0.1",
    "domain" => "framework.nl",
    "path" => array( 
        "app" =>"app/",
        "core" => "core/",
        "index" => "index.php"
    ),
    "defaults" => array(
        "controller" => "main",
        "method" => "index",
    ),
    "routes" => array(),
    "database" => array(
        "host" => "localhost",
        "username" => "",
        "password" => "",
        "name" => ""
    )
);

$GLOBALS["instances"] = array();

require_once $GLOBALS["config"]["path"]["core"]."autoload.php";

new router();