<?php


namespace vendor\components;


use vendor\contracts\IComponent;

class Component implements IComponent
{
    protected string $model;
    protected string $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function render() : void
    {
        $data = (new $this->model)->exc();
        $view = new View($this->view, $data);
        $view->render();
    }
}