<?php

namespace Martinelli\Import;

use Martinelli\Import\Interface\Import;
use Martinelli\Read\File\Csv as FileCsv;

class Csv implements Import
{
    private $fileCsv;

    public function __construct()
    {
        $this->fileCsv = new FileCsv();
    }

    public function import( $file )
    {
        $this->fileCsv->read($file);
        foreach($this->fileCsv->decode() as $line) {
            var_dump("CSVVVV");
            var_dump($line);
        }
    }
}