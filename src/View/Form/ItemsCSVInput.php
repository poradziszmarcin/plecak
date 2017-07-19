<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 15:34
 */

namespace Backpack\View\Form;
use Backpack\View\RenderInterface;

class ItemsCSVInput implements RenderInterface
{
    public $form = <<<'FORM'
        <form action="#" method="post" enctype="multipart/form-data" id="inputForm">
    <input type="file" name="dataCSV" id="dataCSV">
    <input type="submit" value="zaladuj produkty" name="dataCSV">
</form>
FORM;
 public function render()
 {
   echo $this->form;

 }
}