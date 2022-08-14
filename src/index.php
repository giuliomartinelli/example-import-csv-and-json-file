<?php
require __DIR__."/../vendor/autoload.php";

use Martinelli\Import\Csv;
use Martinelli\Import\Json;

$csv = new Csv();
$csv->import(__DIR__."/Files/sample.csv");

$json = new Json();
$json->import(__DIR__."/Files/sample.json");