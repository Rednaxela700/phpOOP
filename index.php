<?php

abstract class Customer
{
    private $id = 1; // prop can be accessed outside the class
    private $name; // can be accessed only inside the class
    protected $email; //can't be accessed outside, but can be accessed inside another class
    private $balance;

    public function __construct($id, $name, $email, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
//        echo 'The Constructor Run';
    }

    public  function getEmail() {
        return $this->email;
    }

}

class  Subscriber extends Customer{
    public $plan;

    public function __construct($id, $name, $email, $balance, $plan)
    {
        parent::__construct($id, $name, $email, $balance);
            $this->plan = $plan;
    }

}

//instantiate a class
//$customer = new Customer(1,'John Doe', 'hello@as.de', 1300);
$subscriber = new Subscriber(2,'Jane Doe', 'hello@fem.ai', 5000, 'user');

//echo $customer->getEmail();
echo $subscriber->getEmail();