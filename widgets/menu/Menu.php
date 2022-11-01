<?php


namespace widgets\menu;


class Menu
{
    private static array $menuItems;

    private static function getMenuItems() : void
    {
        self::$menuItems = require_once 'menu_items.php';
    }

    private static function getTpl() : string
    {
        $items = self::$menuItems;
        ob_start();
        require_once 'menu_tpl.php';
        return ob_get_clean();
    }

    public static function render() : void
    {
        self::getMenuItems();
        echo self::getTpl();
    }
}