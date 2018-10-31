<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza & Mershelle Rivera
 * Date: 10/30/18
 * Time: 7:38 PM
 */

//Require the autoload file
require_once ('vendor/autoload.php');

//Crate an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /page1',
    function () {
        $view = new View;
        echo $view->render('views/page1.html');
});

$f3->route('GET /page3',
    function () {
        $view = new View;
        echo $view->render('views/page3.html');
    });

//Run fat free
$f3->run();