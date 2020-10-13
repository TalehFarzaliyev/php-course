<?php
class Insan 
{
	public $yash = 20;
	private $ad;
	private $soyad;

	public function __construct($ad, $soyad)
	{
		$this->ad = $ad;
		$this->soyad = $soyad;
	}

	//public function __construct();

	public static function hello()
	{
		echo '<br>'.'Salam ';
	}
	public function adsoyad()
	{
		echo $this->ad.' '.$this->soyad;
	}
}

$insan = new Insan('Cahangir','Osmanov'); 
$insan->adsoyad();
// echo $insan->yash;
// $insan->hello();
// Insan::hello();
// echo Insan::$ad;

?>