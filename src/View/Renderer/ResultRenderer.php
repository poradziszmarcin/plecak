<?php
/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 18.07.2017
 * Time: 10:16
 */

namespace Backpack\View\Renderer;


class ResultRenderer
{
    public function render($data)
    {
        echo "<table>";
            echo "<tr>";
                echo "<th>ID produktu</th>";
                echo "<th>Waga produktu</th>";
                echo "<th>Cena produktu</th>";
        echo "</tr>";

        foreach ($data->getData() as $product) {
            echo "<tr>";
                echo "<td>",$product->getId(),"</td>";
                echo "<td>",$product->getWeight(),"</td>";
                echo "<td>",$product->getPrice(),"</td>";
            echo "</tr>";

       }
       echo "</table>";
        $info = new InfoRenderer();
        $info->render($data);
    }
}