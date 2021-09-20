<?php

require_once './Model/Model.php';
require_once './View/View.php';

class Controller {

    private $model;
    private $view;

    function showHome(){

        $doctors = $this->model->getDoctors();

        $this->view->showDoctors($doctors);
    }
}