<?php
/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 10:23
 */

namespace Backpack\Controller;


class PostController
{
    public function getAlgorithmName()
    {
        $algorithm = null;
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["setAlgorithm"])) {
                $algorithm = trim($_POST["setAlgorithm"]);
            }

        }
        return $algorithm;
    }

    public function getBackpackSize()
    {
        $backpackSize = null;
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["backpackSize"])) {
                $backpackSize = trim($_POST["backpackSize"]);
            }

        }
        return $backpackSize;
    }
}