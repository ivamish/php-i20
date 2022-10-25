<?php


namespace vendor\contracts;


interface IView
{
    public function __construct(string $viewPath, array $data);

    public function render() : void;
}