<?php

namespace vendor\core\base;

abstract class Controller
{
    
    public $route = [];
        /**
     * текущий маршрут и параметры (controller, action, params)
     * @var array
     */

    public $view;
        /**
     * текущий вид
     * @var string
     */

    public $layout = [];
    /**
     * текущий шаблон
     * @var string
     */

    public $vars = [];
    /**
     * пользовательские данные
     * @var array
     */

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }

}