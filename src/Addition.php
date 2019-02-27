<?php

namespace Devise;

class Addition
{
    private $prixtotal;
    private $nombreArticle;
    private $listeproduit = array();



    public function addition($listeproduit){
         $result = array_sum($listeproduit);
         echo $result;
    }
}
