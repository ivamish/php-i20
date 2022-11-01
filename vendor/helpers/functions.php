<?php

/**
 *
 * Красивая распечатка массива
 *
 * @param array $arr
 */
function print_arr(array $arr) {
      echo "<pre>";
      print_r($arr);
      echo "</pre>";
};

/**
 *
 * Формирование ссылки со всеми get-параметрами
 *
 * @param string $param
 * @param string|int $value
 * @return string
 */
function get_links_with_query(string $param, string|int $value) : string
{
    $queryArray = explode("&", $_SERVER['QUERY_STRING']);
    $queryArrayWithoutParam = array_filter($queryArray, function ($item) use ($param){
        return !str_contains($item, $param) && str_contains($item, '=');
    });
    $sign = empty($queryArrayWithoutParam) ? "" : "&";
    return "?" . implode("&", $queryArrayWithoutParam) . $sign . "$param=$value";
}

/**
 *
 * Стилизация поля, если оно заполнено неправильно
 *
 * @param $name
 * @return string
 */
function get_border_validate($name) : string
{
    if(isset($_SESSION['errors'][$name])) {
        return "style='border: 2px solid red;'";
    }

    return '';
}

/**
 *
 * Вывод ранее неправельных введёных полей или значений из куки
 *
 * @param $name
 * @return string
 */
function get_errors_or_cookie($name) : string
{
    if(isset($_SESSION['errors'][$name])) {
        return "value='" . $_SESSION['fields'][$name] . "'";
    } else if(isset($_COOKIE['fields'][$name])) {
        return "value='" . $_COOKIE['fields'][$name] . "'";
    } else {
        return '';
    }
}