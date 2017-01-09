<?php class ShopProduct
{
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;

	function __construct($title,$firstName,$mainName,$price){
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}

	function getProducer()
	{
		return $this->producerFirstName . " ". $this->producerMainName;
	}

	function getSummaryLine(){
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		return $base;
	}
}	

	class BookProduct extends ShopProduct {
					public $numPages;

					public function __construct(string $title,string $firstName,string $mainName,float $price,int $numPages ) {
							parent ::__construct($title,$firstName,$mainName,$price);
							$this->numPages = $numPages;
				    	}
				    public function getNumberOfPages()
					{
						return $this->numPages;
					}	

					public function getSummaryLine()
					{
						$base = "{$this->title} ( $this->producerMainName, ";
						$base .= "$this->producerFirstName )";
						$base .= ": page count – {$this->numPages}";
						return $base;
					}

	}		



	class CdProduct extends ShopProduct
	{
		public $playLength;
		public $labee;
		public function __construct(string $title,string $firstName,string $mainName,float $price,int $playLength){
			parent ::__construct($title,$firstName,$mainName,$price);
			$this->playLength = $playLength;

		}	

		public function getPlayLength()
			{
			return $this->playLength;
			}

		public function getSummaryLine()
		{
			$base = "{$this->title} ( {$this->producerMainName}, ";
			$base .= "{$this->producerFirstName} )";
			$base .= ": playing time - {$this->playLength}";
			return $base;
		}	
	}
 