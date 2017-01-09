<?php 
/*
* 	    Inheritance is the means by which one or more classes can be derived from a base class.
		A class that inherits from another is said to be a subclass of it. This relationship is often described in
		terms of parents and children. A child class is derived from and inherits characteristics from the parent.
		These characteristics consist of both properties and methods. The child class will typically add new
		functionality to that provided by its parent (also known as a superclass); for this reason, a child class is said
		to extend its parent.
		 
*
*



		class ShopProduct
		{
			public $title;
			public $producerMainName;
			public $producerFirstName;
			public $price = 0;
			public function __construct($title,$firstName,$mainName,$price) {
				$this->title = $title;
				$this->producerFirstName = $firstName;
				$this->producerMainName = $mainName;
				$this->price = $price;
				}
				public function getProducer()
				{
					return $this->producerFirstName . " ". $this->producerMainName;
				}
		}

	$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);	
	$product2 = new ShopProduct("Exile on Coldharbour Lane","The","Alabama 3",10.99);

	print "author: " . $product1->getProducer() . "<br>";
    print "artist: " . $product2->getProducer() . "\n";

*/

    class shopProduct{
    	public $numPages;
    	public $playLength;
    	public $title;
    	public $producerMainName;
    	public $producerFirstName;
    	public $price;

    	public function __construct(  $title,  $firstName,  $mainName,  $price,  $numPages=0,  $playLength =0){

    		$this->title = $title;
			$this->producerFirstName = $firstName;
			$this->producerMainName = $mainName;
			$this->price = $price;
			$this->numPages = $numPages;
			$this->playLength = $playLength;

    	}

    	public function getNumberOfPages(){
    		return $this->numPages;
    	}

    	

    	public function getProducer(){
				return $this->producerFirstName . " ". $this->producerMainName;
			}
    
		public function getSummaryLine(){
				$base = "{$this->title} ( {$this->producerMainName}, ";
				$base .= "{$this->producerFirstName} )";
				return $base; 
     	  }
 }

 class CdProduct extends shopProduct{

 		public function getPlayLength(){
    		return $this->playLength;
    	}

    	public function getSummaryLine(){
    		$base= $this->title . "(" . $this->producerMainName . " , " . $this->producerFirstName .")";

    		$base .="Playing Time:" . $this->playLength;

    		return $base;
    	}
 }

class BookProduct extends ShopProduct
{
	public function getNumberOfPages()
	{
		return $this->numPages;
	}
	public function getSummaryLine()
		{
			$base = "{$this->title} ( {$this->producerMainName}, ";
			$base .= "{$this->producerFirstName} )";
			$base .= ": page count - {$this->numPages}";
			return $base;
		}
 }

$product2 =new CdProduct('Exile on Coldharbour Lane', 'The' , 'Albama 3' , 10.99,0,60.33);
 
 echo "Artist :". $product2->getProducer();

?>