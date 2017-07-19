<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 16:11
 */
use Backpack\Model\Algorithms\AlgorithmInterface;
namespace Backpack\Model\Algorithms;

class ItemProfitability implements AlgorithmInterface
{
    public function processData($data)
    {
        foreach ($data as $product) {
            $product->setProductRate($product->getProfitability());
        }
        return $data;
    }


}