<?php


namespace vendor;


use vendor\components\ComponentFactory;

class Router
{
    private array $routes;
    private string $component;

    public function __construct()
    {
        $this->routes = require_once $_SERVER['DOCUMENT_ROOT'] . "/web/routes.php";
    }

    private function dispatch() : bool
    {
        foreach ($this->routes as $page => $get) {

            if ($page === $_SERVER["PHP_SELF"]) {

                foreach ($get as $key => $component) {
                    if(isset($_GET[$key]) || $key == "") {
                        $this->component = $component;
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public function run() : void
    {
        if($this->dispatch()) {
            $component = ComponentFactory::create($this->component);
            $component->render();
        } else {
            echo 'Роута нет(';
        }
    }

}