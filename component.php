<?php

abstract class Component {

    public $part;

    public function __construct($part){

        $this->part = $part;
    }

    abstract public function indossa();

    abstract public function attacca();

    abstract public function difendi();



}




?>