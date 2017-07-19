<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 16:26
 */
namespace Backpack\View\Renderer;

use Backpack\View\Form\AlgorithmsInput;
use Backpack\View\Form\BackpackSizeForm;
use Backpack\View\Form\ItemsCSVInput;
use Backpack\View\RenderInterface;



class FormRenderer implements RenderInterface
{
    public function render()
    {
        $CSVForm = new ItemsCSVInput();
        $algorithmForm = new AlgorithmsInput();
        $backpackForm = new BackpackSizeForm();

        $algorithmForm->render();
        $backpackForm->render();
        $CSVForm->render();

    }

}