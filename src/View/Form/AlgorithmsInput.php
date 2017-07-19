<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 15:40
 */

namespace Backpack\View\Form;

use Backpack\View\RenderInterface;
use Backpack\Model\Classes\AlgorithmsList;

class AlgorithmsInput implements RenderInterface
{


    public function render()
    {
        $algorithmList = new AlgorithmsList();
        $list = $algorithmList->getAlgorithmList();

        echo "Algorytm: <select name='setAlgorithm' form='inputForm'>";
        foreach ($list as $key=>$algorithm) {
            echo "<option value=$key>$algorithm</option>";
        }


        echo "</select><br>";
    }


}