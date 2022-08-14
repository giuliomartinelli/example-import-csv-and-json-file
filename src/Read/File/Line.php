<?php

namespace Martinelli\Read\File;

use Martinelli\Read\Interface\Line as LineInterface;


class Line implements LineInterface
{
    private $fname;
    private $lname;
    private $emailaddress;

    public function __construct($fname, $lname, $emailaddress)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->emailaddress = $emailaddress;
    }

    public function setLine($fname, $lname, $emailaddress)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->emailaddress = $emailaddress;
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function getEmailAddress()
    {
        return $this->emailaddress;
    }
}
