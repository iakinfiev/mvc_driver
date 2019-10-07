<?php


namespace app\system;

use app\system\View;

abstract class Controller
{
    private $route;
    protected $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
    }
}