<?php
/**
 * Created by PhpStorm.
 * User: Poradzisz Marcin
 * Project plecak
 * Date: 17.07.2017
 * Time: 17:06
 */

namespace Backpack\Controller;

use Backpack\Model\Classes\Backpack;
use Backpack\Model\Classes\Product;

class DataController
{
    public function loadData()
    {
        $backpack = new Backpack();
        if (isset($_FILES["dataCSV"])) {
            $name = $_FILES["dataCSV"]["name"];


            $uploadDir = "files/";
            $dir = is_dir("files");
            if ($dir == false) {
                mkdir($uploadDir, 777, true);
            }

            $uploadFile = $uploadDir . basename(($_FILES["dataCSV"]["name"]));

            if (move_uploaded_file($_FILES["dataCSV"]["tmp_name"], $uploadFile)) {

                echo "baza zostala zaladowana <br>";

                $fileName = "files/$name";

                $file_parts = pathinfo($fileName);

                switch ($file_parts['extension']) {

                    case "csv":
                        $row = 1;
                        if (($handle = fopen($fileName, "r")) !== FALSE) {
                            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                $num = count($data);
                                $row++;
                                $rowData = array();

                                for ($c = 0; $c < $num; $c++) {

                                    array_push($rowData, $data[$c]);

                                }

                                $dataRow = explode(";", $rowData[0]);


                                if (count($dataRow) == 3) {
                                    if (is_numeric($dataRow[0])&&is_numeric($dataRow[1])&&is_numeric($dataRow[2])) {
                                        $product = new Product($dataRow[0], $dataRow[2], $dataRow[1]);
                                        $backpack->addProduct($product);
                                    }

                                } else {
                                    echo "niepoprawne dane";
                                    break;
                                }


                            }
                            fclose($handle);


                        }
                        break;

                    default:
                        echo "niepoprawny format pliku";
                }

            }
        }

        return $backpack->getData();
    }
}


