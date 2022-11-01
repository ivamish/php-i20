<?php


namespace vendor;
use http\Params;
use PDO;

/**
 *
 * Абстрактный класс для работы с пост-запросами
 *
 * Class Services
 * @package vendor
 *
 */
abstract class Services
{

    protected PDO $db;

    /**
     *
     * Поля, которые будут затрагиваться
     *
     * @var array
     */
    protected array $whitelist = [];

    /**
     *
     * Поля, прошедшие проверку, с которыми в последствии необходимо работать
     *
     * @var array
     */
    protected array $data = [];

    public function __construct()
    {
        $this->db = Db::getInstance();
        $this->getDataFromWhiteList();
    }

    /**
     *
     * Метод для привязки определенного сервиса к форме
     *
     * Необходимо вызвать в разметке необходимой формы
     *
     * @param $serviceName
     */
    public static function bindProvider($serviceName) : void
    {
        echo <<<provider
            <input name="service" style="visibility: hidden" type='text' value="$serviceName">
        provider;
    }

    protected function getDataFromWhiteList () : void
    {
        foreach ($this->whitelist as $item) {
            $this->data[$item] = $_POST[$item];
        }
    }

    abstract public function exc() : bool;
}