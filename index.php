<?php

include_once "bootstrap.php";
use Backpack\View\Renderer\FormRenderer;
use Backpack\Controller\DataController;
use Backpack\Controller\AlgorithmsController;
$renderer = new FormRenderer();
$renderer->render();
$dataController = new DataController();
$AlgorithmController = new AlgorithmsController();
$data = $dataController->loadData();
$AlgorithmController->runAlgorithm($data);








