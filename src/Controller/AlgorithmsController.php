<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 16:31
 */

namespace Backpack\Controller;

use Backpack\Model\Algorithms\PriceToAveragePrice;
use Backpack\Model\Classes\Backpack;
use Backpack\Model\Algorithms\ItemProfitability;
use Backpack\Model\Algorithms\ProductPrice;
use Backpack\Controller\PostController;
use Backpack\Model\Classes\OutputData;
use Backpack\View\Renderer\ResultRenderer;

class AlgorithmsController
{


    public function runAlgorithm($data)
    {
        $postController = new PostController();
        $backpackSize = $postController->getBackpackSize();

        if ($this->checkData($data,$backpackSize) == true) {

            $algorithmName = $postController->getAlgorithmName();
            switch ($algorithmName) {
                case null:
                    break;
                case "ItemProfitability":
                    $algorithm = new ItemProfitability();


                    break;
                case "ItemsPrice":
                    $algorithm = new ProductPrice();
                    break;
                case "PriceToAveragePrice":
                    $algorithm = new PriceToAveragePrice();
            }
            $algorithmResult = $algorithm->processData($data);
            $output =OutputData::returnOutput($algorithmResult,$backpackSize);
            $resultRenderer = new ResultRenderer();
            $resultRenderer->render($output);

        }
    }

    public function checkData($data, $backpackSize)
    {
        $validate = true;
        $size = sizeof($data);

        if ($size == 0) {
            $validate = false;
        }

        foreach ($data as $product) {
            if (!is_a($product, "Backpack\Model\Classes\Product")) {
                $validate = false;
            }
        }

        if ($backpackSize == "" or $backpackSize == null) {
            $validate = false;
        }
        if ($backpackSize == 0) {
            echo "plecak nie moze miec wartosci 0";
            $validate = false;
        }
        return $validate;

    }
}

