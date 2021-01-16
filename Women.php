<?php

class Women extends Clothes
{
    public $size;

    public function __construct($_new, $cost, $size)
    {
        $this->size = $size; 
        parent::__construct($_new, $cost);      
    }

    function about()
    {
        echo $this->_new . ' cost ' . $this->cost . ' size ' . $this->size . '<br/>';
    }


}