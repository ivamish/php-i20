<?php


namespace vendor\components;


use vendor\contracts\IComponent;
use vendor\contracts\IComponentFactory;

class ComponentFactory implements IComponentFactory
{
    public static function create(string $componentName) : IComponent
    {
        $model = "components\\" . $componentName . "\model";
        $view = "components/$componentName/view.php";

        return new Component($model, $view);
    }
} 