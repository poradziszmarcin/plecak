<?php
/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 10:33
 */
use Backpack\Model\Algorithms\AlgorithmInterface;
namespace Backpack\Model\Algorithms;


class PriceToAveragePrice implements AlgorithmInterface
{
    public function processData($data)
    {
        $summaryPrice = 0;
        $items = 0;
        foreach ($data as $product)
        {
            $price = $product->getPrice();
            $summaryPrice = $summaryPrice+$price;
            $items++;
        }

        $averagePrice = $summaryPrice/$items;
        foreach ($data as $product)
        {
            $price = $product->getPrice();
            $product->setProductRate($price/$averagePrice);
        }

        return $data;
    }

}