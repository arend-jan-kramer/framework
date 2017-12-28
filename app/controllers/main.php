<?php

class main extends controller {
    function __construct() {
        echo "class: ".__CLASS__."<br>";
    }
    function index() {
        echo "function: ".__FUNCTION__."<br>home pagina!<br>";
    }

    function foo() {
        echo "function: ".__FUNCTION__."<br>sub van home<br>";
    }
}