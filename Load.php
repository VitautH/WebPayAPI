<?php

/**
 * Class ProductFactory
 * Для автозагрузки и инициализации классов приложения
 * Designed by Vitaut, May, 2016
 */
error_reporting( E_ERROR );
include_once ('Wconfig.php');
class Factory
{
    public static function load_params ($class,$params)
    {
        $class = ucfirst($class);
        include_once ($class.'.php');

        if (class_exists($class)) {


              return new $class ($params);



        } else {
            throw new \Exception("Такой класс не существует");
        }
    }

    public static function load($class)
    {
        $class = ucfirst($class);
        include_once ($class.'.php');

        if (class_exists($class)) {


                return new $class ();

            }


         else {
            throw new \Exception("Такой класс не существует"); //Подумать  про обработку ошибок
        }
    }
}


$class =  Wconfig::getInstance()->driver_db; // Получаем тип базы данных

$params = array('user' => Wconfig::getInstance()->dbuser, 'pass' =>Wconfig::getInstance()->dbpassword, 'db' =>Wconfig::getInstance()->dbname, 'charset' => Wconfig::getInstance()->charset);

$db  = Factory::load_params($class ,$params); // Инициализация класса с параметрами
// Factory::load($class); - Инициализация класса без параметров

