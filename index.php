<?php

class Customer
{
    public $id = 1; // prop can be accessed outside the class
    public $name; // can be accessed only inside the class
    public $email; //can't be accessed outside, but can be accessed inside another class
    public $balance;

    public function __construct($id, $name, $email, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
//        echo 'The Constructor Run';
    }

}

//instantiate a class
$customer = new Customer(1,'John Doe', 'hello@as.de', 1300);

echo $customer->name;