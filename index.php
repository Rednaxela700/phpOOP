<?php
class Customer{
    public $id = 1; // prop can be accessed outside the class
    public $name; // can be accessed only inside the class
    public $email; //can't be accessed outside, but can be accessed inside another class
    public $balance;

    public function __construct()
    {
        echo 'The Constructor Run';
    }

    public function getCustomer($id) {
         $this->id = $id;
         return 'John Doe';
     }

     public function __destruct()
     {
         echo 'The Destructor Run';
     }
}
//instantiate a class
$customer = new Customer;

echo $customer->getCustomer(1);