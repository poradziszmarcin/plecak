<?php
/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 10:26
 */

namespace Backpack\View\Form;
use Backpack\View\RenderInterface;

class BackpackSizeForm implements RenderInterface
{
    public function render()
    {
        echo "Rozmiar Plecaka: <input type='number' value='20' name='backpackSize' form='inputForm'>";
    }

}