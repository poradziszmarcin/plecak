<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 16:12
 */
namespace Backpack\Model\Classes;
class AlgorithmsList
{
  private $list = [
      "ItemProfitability"=>"wartosc waga/cena",
      "ItemsPrice"=>"Najwyższa cena",
      "PriceToAveragePrice"=>"stosunek ceny do sredniej ceny"];

  public function getAlgorithmList()
  {
      return $this->list;
  }
}