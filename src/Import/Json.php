<?php

namespace Martinelli\Import;

use Martinelli\Import\Interface\Import;
use Martinelli\Read\File\Json as FileJson;

class Json implements Import
{
    private $fileJson;

    public function __construct()
    {
        $this->fileJson = new FileJson();
    }

    public function import( $file )
    {
        $this->fileJson->read($file);
        foreach($this->fileJson->decode() as $line) {
            var_dump("JSONNN");
            var_dump($line);
        }
    }
}
