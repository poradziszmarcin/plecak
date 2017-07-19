<?php
/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 11:30
 */

namespace Backpack\View\Renderer;


use Backpack\Controller\PostController;
use Backpack\Model\Classes\AlgorithmsList;


class InfoRenderer
{
    function render($data)
    {
        $postController = new PostController();
        $algorithm = $postController->getAlgorithmName();
        $backpackSize = $postController->getBackpackSize();
        $algorithmList = new AlgorithmsList();
        $algorithmDevName = $algorithmList->getAlgorithmList();

        $algorithmUserName = $algorithmDevName["$algorithm"];
        echo "Wybrana metoda: ", $algorithmUserName, "<br>";
        echo "Wybrany rozmiar plecaka: ", $backpackSize, "<br>";
        echo "Ilosc produktow w plecaku: ", $data->getNumberOfItems(), "<br>";
        echo "Wartosc produktow w plecaku:", $data->getBackpackPrice(), "<br>";
        echo "Waga plecaka: ", $data->getBackpackWeight(), "<br>";
    }

}