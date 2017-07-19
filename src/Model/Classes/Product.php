<?php

/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 13:59
 */
namespace Backpack\Model\Classes;

class Product
{
    private $id;
    private $price;
    private $weight;
    private $profitability;
    private $productRate;

    public function __construct($id, $price, $weight)
    {
        $this->id = $id;
        $this->price = $price;
        $this->weight = $weight;

        $this->profitability = $price / $weight;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getProfitability()
    {
        return $this->profitability;
    }

    /**
     * @return mixed
     */
    public function getProductRate()
    {
        return $this->productRate;
    }

    /**
     * @param mixed $productRate
     */
    public function setProductRate($productRate)
    {
        $this->productRate = $productRate;
    }

    /**
     * @return float|int
     */



}