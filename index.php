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
 * https://www.youtube.com/watch?v=qQaLluMCbR0
 * 
 * Part 6
 * https://www.youtube.com/watch?v=2iBM7_TVyU4
 * 
 * Part 7
 * https://www.youtube.com/watch?v=hEj7seVxKII
 * 
 * Part 8
 * https://www.youtube.com/watch?v=Xf23YXAYh8E
 * 
 * Part 9
 * https://www.youtube.com/watch?v=XTPeA7TTbiw
 * 
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
$GLOBALS["config"] = array(
    "appName" => "PHP framework",
    "version" => "0.0.1",
    "domain" => "framework.nl",
    "cache_enabled" => false,
    "handlebars_enabled" => true,
    "path" => array( 
        "app" =>"app/",
        "cache" => "caches/",
        "session" => "/app/sessions",
        "basePath" => "/",
        // "basePath" => "D://xampp/htdocs/PHP/framework/",
        // "basePath" => __DIR__,
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
        "username" => "root",
        "password" => "",
        "name" => "phpframework"
    )
);
date_default_timezone_set("Europe/Amsterdam");
$GLOBALS["instances"] = array();

require_once $GLOBALS["config"]["path"]["core"]."autoload.php";

new router();