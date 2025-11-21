<?php
class Payment{
  public $amount;
  public function __construct($amount){
    $this->amount=$amount;
  }
    public function calculationbill(){
        echo"The amount is:{$this->amount}.<br>";

    }
}
class Order extends Payment{
   public $product;
    public function __construct($amount,$product){
        parent::__construct($amount);
        $this->product=$product;
    }
    public function orderinfo(){
        echo"the order is:{$this->product}.<br>";
    }

}
$order=new Order("800","Dress");
$order->calculationbill();
$order->orderinfo();
?>