<?php
class model {
    public $model;
    function __construct() {
        $this->model = new database(
            $GLOBAL["config"]["database"]["host"],
            $GLOBAL["config"]["database"]["username"],
            $GLOBAL["config"]["database"]["password"],
            $GLOBAL["config"]["database"]["database"]
        );
    }
}