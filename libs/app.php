<?php

class App{

    function __construct()
    {
        echo "<p>nueva app</p>";
        $url=$_GET['url'];
       // echo $url;
        $url=rtrim($url,'/');
        $url=explode('/',$url);

        //var_dump($url);
        $archivoController='controllers/' . $url[0] . '.php';
        require_once  $archivoController;
        $controller=new $url[0];

    }
}
