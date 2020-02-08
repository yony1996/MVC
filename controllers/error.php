<?php

class Errors extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="error generico";
        $this->view->render('error/index');
       // echo "<p>Error al cargar el recurso</p>";
    }


}
