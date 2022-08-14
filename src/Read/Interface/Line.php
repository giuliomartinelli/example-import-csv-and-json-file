<?php

namespace Martinelli\Read\Interface;


interface Line
{
    public function __construct($fname, $lname, $emailaddress);
    
    public function setLine($fname, $lname, $emailaddress);
    
    public function getFname();
    
    public function getLname();
    
    public function getEmailAddress();
}
