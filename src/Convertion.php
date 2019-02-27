<?php
/**
 * Created by PhpStorm.
 * User: alexandresmagghe
 * Date: 14/02/2019
 * Time: 18:32
 */

namespace Devise;


class Convertion
{

    public function createTab($prixFinal)
    {
        $tab[0] = $prixFinal;
        print_r($tab);
    }

    public function tabconvertion($tableau, $deviseFinale)
    {


        $add = 0;

        foreach ($tableau as $i) {


            $i = $this->InputConvertion($i['prix'], $i[1], $deviseFinale);
            $add = $add + $i;


        }

        echo $add . ' ' . $deviseFinale;


    }

    public function InputConvertion($prix, $deviseBase, $deviseFinale)
    {
        $app = App::getInstance();

        if (!empty($prix)) {
            if ($deviseBase == 'EURO') {

                if ($deviseFinale == "GBP") {


                    $result = $this->convertion($prix, $app->EUROversGBP);
                    return $result;

                }
                if ($deviseFinale == "USD") {

                    $result = $this->convertion($prix, $app->EUROversUSD);
                    return $result;

                }

            }
            if ($deviseBase == 'GBP') {

                if ($deviseFinale == "USD") {

                    $result = $this->convertion($prix, $app->GBPversUSD);
                    return $result;

                }
                if ($deviseFinale == "EURO") {

                    $result = $this->convertion($prix, $app->GBPversEURO);
                    return $result;

                }

            }
            if ($deviseBase == 'USD') {

                if ($deviseFinale == "GBP") {


                    $result = $this->convertion($prix, $app->USDversGBP);
                    return $result;

                }
                if ($deviseFinale == "EURO") {

                    $result = $this->convertion($prix, $app->USDversEURO);
                    return $result;


                }


            }
            if ($deviseFinale == $deviseBase) {
                $result = $prix;
                return $result;
            } else {

                echo '<p>Veuillez inserer des valeurs</p>';

            }
        }
    }

    public function convertion($prixdebase, $tauxDeChange)
    {
        $prixFinal = $prixdebase * $tauxDeChange;
        return $prixFinal;

    }


}


