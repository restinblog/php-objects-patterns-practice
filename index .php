<?php 
/*
Creating Class and Objects and How to Use them
*/

class ShopProduct
{
	public $title = "default product";
	public $producerMainName = "main name";
	public $producerFirstName = "first name";
	public $price = 0;


	public function getProducer()
		{
			
			return $this->producerFirstName . " ". $this->producerMainName;
		}
}

$product1=new ShopProduct(); 
$product1->title="My Antonia";
$product1->producerMainName="Cather";
$product1->producerFirstName="Willa";
$product1->price=5.55;

 
print "author:  $product1->producerFirstName  ". " $product1->producerMainName \n";

echo $product1->getProducer();
 

?>