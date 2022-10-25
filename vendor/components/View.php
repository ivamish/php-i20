<?php


namespace vendor\components;


use vendor\contracts\IView;

class View implements IView
{
    protected string $viewPath;
    protected array $data;

    public function __construct(string $viewPath, array $data)
    {
        $this->viewPath = $viewPath;
        $this->data = $data;
    }

    public function render() : void
    {
        extract($this->data);
        ob_start();
        require_once $this->viewPath;
        echo ob_get_clean();
    }
}