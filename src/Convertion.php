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

        if (!empty($prix)) {
            if ($deviseBase == 'EURO') {

                if ($deviseFinale == "GBP") {


                    $result = $this->convertion($prix, 0.87295);
                    return $result;

                }
                if ($deviseFinale == "USD") {

                    $result = $this->convertion($prix, 1.2234);
                    return $result;

                }

            }
            if ($deviseBase == 'GBP') {

                if ($deviseFinale == "USD") {

                    $result = $this->convertion($prix, 1.28078);
                    return $result;

                }
                if ($deviseFinale == "EURO") {

                    $result = $this->convertion($prix, 1.13470);
                    return $result;

                }

            }
            if ($deviseBase == 'USD') {

                if ($deviseFinale == "GBP") {


                    $result = $this->convertion($prix, 0.780704);
                    return $result;

                }
                if ($deviseFinale == "EURO") {

                    $result = $this->convertion($prix, 0.885957);
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


