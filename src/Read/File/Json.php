<?php

namespace Martinelli\Read\File;

use Martinelli\Read\Interface\File;


class Json implements File
{
    private $file;

    public function read($file)
    {
        $this->file = json_decode(file_get_contents($file));
    }

    public function decode(): array
    {
        $lines = [];
        foreach ($this->file as $line) {
            $lines[] = new Line($line->fname, $line->lname, $line->emailaddress);
        }
        return $lines;
    }
}
