<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 09:46
 */
use Backpack\Model\Classes\Backpack;
namespace Backpack\Model\Classes;


class OutputData
{

    static function sortData($data)
    {


        $result = uasort($data, "self::cmp");
        if ($result == true)
        {
            return $data;
        }

        else {
            echo "cos poszlo nie tak";
        }
    }

    static function cmp($a, $b)
    {
        return ($a->getProductRate() < $b->getProductRate());
    }

    static function createBackpack($data,$backpackSize)
    {
        $itemsWeight = $backpackSize;
        $backpack = new Backpack();


              foreach ($data as $product)
              {
                  $weight = $product->getWeight();
                  if ($weight<=$itemsWeight)
                  {
                      $backpack->addProduct($product);
                      $itemsWeight = $itemsWeight-$weight;
                  }
              }

          return $backpack;

    }



    static function returnOutput($data,$backpackSize)
    {

    $sortedData = self::sortData($data);
    $backpack = self::createBackpack($sortedData,$backpackSize);
    return $backpack;


    }

}