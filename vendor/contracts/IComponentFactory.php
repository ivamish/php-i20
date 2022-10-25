<?php


namespace vendor\contracts;


interface IComponentFactory
{
    public static function create(string $componentName) : IComponent;
}