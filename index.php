<?php
class Customer{
    public $id; // prop can be accessed outside the class
    private $name; // can be accessed only inside the class
    protected $email; //can't be accessed outside, but can be accessed inside another class
    public $location;
}