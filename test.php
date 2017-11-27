<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 27/11/2017
 * Time: 11:40
 */



include('src/BarcodeGenerator.php');
include('src/BarcodeGeneratorFile.php');
include('src/BarcodeGeneratorJPG.php');
include('src/BarcodeGeneratorPNG.php');

$generator = new \Kollway\Barcode\BarcodeGeneratorFile();
$generator->getBarcode('HHHS050104', $generator::TYPE_CODE_128, 'test.jpg');


