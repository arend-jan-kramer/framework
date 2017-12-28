<?php

class load {
    static function view($viewFile, $viewVars = array()) {
        extract($array);
        $viewFileCheck = explode(".", $viewFile);
        if(!isset($viewFileCheck[1])) {
            $viewFile .= ".php";
        }
        $viewFile = str_replace("::", "/");
        require_once $GLOBALS["config"]["path"]["app"]."views/{$viewFile}";
    }
}