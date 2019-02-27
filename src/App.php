<?php
    /**
     * Created by PhpStorm.
     * User: alexandresmagghe
     * Date: 27/02/2019
     * Time: 22:59
     */

    namespace Devise;

// TEST SINGLETON

    class App
    {
        public $EUROversGBP = 0.87295;
        public $EUROversUSD = 1.2234;
        public $GBPversUSD = 1.28078;
        public $GBPversEURO = 1.13470;
        public $USDversEURO = 0.885957;
        public $USDversGBP = 0.780704;

        private static $_instance;

        public static function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new App();
            }
            return self::$_instance;

        }

    }