<?php
/**
 * Class Wconfig
 *  Конфигурационный статический класс
 */
class Wconfig
{
    private static $instance = null;
    private  $driver_db = 'mysql'; //or sqlite
    private   $email_admin = 'xxx@mail.ru'; // E-mail администратора
    private    $wsb_storeid= '23456г5'; // Id магазина
    private  $wsb_secret_key ='23aa4565';
    private   $wsb_test = 1;
    private  $wsb_currency_id = 'BYR';
    private  $tcpdflib_path = 'tcpdf/examples/accept.php';
    private   $dbhost='localhost';
    private  $dbname= 'mdoorsby_pravby';
    private   $dbuser = 'pravuser';
    private  $dbpassword = 'KVrmKewk';
    private  $log_path = 'ClassWebPay/log.txt';
    private  $charset = 'utf8';



    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
    /**
     * prevent the instance from being cloned.
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final private function __construct()
    {

    }
    final private function __clone()
    {

    }

    /**
     * prevent from being unserialized.
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final private function __wakeup()
    {

    }
    public function __isset($name) {
        return isset($this->$name);
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __set($name, $value) {
        throw new Exception('Not allowed');
    }

}


