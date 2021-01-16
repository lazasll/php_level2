<?php
//Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.

class Clothes 
{

    //Описать свойства класса из п.1 (состояние).
    protected $cost;
    protected $_new;

    function __construct($_new, $cost)
    {
        $this->cost = $cost;
        $this->_new = $_new; 
         
    }
    

    //Описать поведение класса из п.1 (методы).
    function about()
    {
        echo $this->_new . ' cost ' . $this->cost . '<br/>';
    }


}