<?php

namespace Martinelli\Read\File;

use Martinelli\Read\Interface\File;


class Csv implements File
{
    private $file;

    public function read($file)
    {

        $this->file = fopen($file, "r");
    }

    public function decode(): array
    {
        $lines = [];
        while (($data = fgetcsv($this->file)) !== FALSE) {
            if($data[0] != "fname") {
                $lines[] = new Line($data[0], $data[1], $data[2]);
            }
        }
        return $lines;
    }
}
