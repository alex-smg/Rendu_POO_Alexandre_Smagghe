<?php
    /**
     * Created by PhpStorm.
     * User: alexandresmagghe
     * Date: 27/02/2019
     * Time: 22:37
     */

    namespace Devise;


    class Config
    {
        private $settings = [];

        private static $_instance;

        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new Config();
            }
            return self::$_instance;

        }
        public function __construct()
        {

            $this->settings = require dirname(__DIR__) . '/config/config.php';
        }

        public function get($key){
            if (!isset($this->settings[$key])){
                return null;
            }
            return $this->settings[$key];
        }

    }