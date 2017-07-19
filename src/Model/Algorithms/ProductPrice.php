<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 09:41
 */
use Backpack\Model\Algorithms\AlgorithmInterface;
namespace Backpack\Model\Algorithms;

class ProductPrice implements AlgorithmInterface
{
    public function processData($data)
    {
        foreach ($data as $product) {
            $product->setProductRate($product->getPrice());
        }
        return $data;
    }

}