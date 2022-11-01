<?php


namespace widgets\paginator;


class Paginator
{
    public static int $perpage;
    public static int $totalItems;
    public static int $countItems;
    public static int $currentPage;

    protected static function initParams($totalItems, $countItems, $currentPage): void
    {
        self::$totalItems = $totalItems;
        self::$countItems = $countItems;
        self::$currentPage = $currentPage;
        self::$perpage = ceil(self::$totalItems / self::$countItems);
    }

    protected static function getHtml() : string
    {
        $currentPage = self::$currentPage;
        $perpage = self::$perpage;
        ob_start();
        require_once "paginator_tpl.php";
        return ob_get_clean();
    }

    public static function render($totalItems, $countItems, $currentPage) :void
    {

        self::initParams($totalItems, $countItems, $currentPage);

        echo self::getHtml();
    }
}