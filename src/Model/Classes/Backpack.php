<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 14:06
 */
namespace Backpack\Model\Classes;
use Backpack\Model\Classes\Product;

class Backpack
{
 public $items = [] ;


    public function addProduct(Product $product)
 {

     array_push($this->items,$product);
 }

 public function getBackpackPrice()
 {
     $summaryPrice = 0;
     foreach ($this->items as $product)
     {
         $summaryPrice = $summaryPrice+$product->getPrice();
     }
     return $summaryPrice;
 }

 public function getBackpackWeight()
 {
     $summaryWeight = 0;
     foreach ($this->items as $product)
     {
         $summaryWeight = $summaryWeight+$product->getWeight();
     }
     return $summaryWeight;

 }
 public function getNumberOfItems()
 {
     return count($this->items);
 }

 public function getData()
 {
     return $this->items;
 }







}