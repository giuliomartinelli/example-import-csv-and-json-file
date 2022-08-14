<?php

namespace Martinelli\Read\Interface;

interface File
{    
    public function read( $file );
    
    public function decode(): array;   
}
