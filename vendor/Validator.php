<?php


namespace vendor;


class Validator
{
    private string $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function email() : bool
    {
        return preg_match('#[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+#i', $this->str);
    }

    public function numeric() : bool
    {
        return preg_match('#^[a-zA-Zа-яА-Я]+$#ui', $this->str);
    }
}