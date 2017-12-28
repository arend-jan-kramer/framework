<?php
/* 
 * main is een uitbereiding van controller
 * in controllerInterface staat welke functies er moeten zijn
 * 
 */
class main extends controller implements controllerInterface {
    function index() {
        // load::view('main/index'); / or ::
        load::view('main::index');
    }
}