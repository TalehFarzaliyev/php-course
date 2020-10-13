<?php
/**
 * 
 */
class Duzbucaqli
{
	
	public $en;
	public $uzunluq;
	private $password = '123456';
	public $balllar = array();

	public function getEn()
	{
		return $this->en;
	}
	public function setEn($en)
	{
		$this->en = $en;
	}
	public function getUzunluq()
	{
		return $this->uzunluq;
	}
	public function setUzunluq($uzunluq)
	{
		$this->uzunluq = $uzunluq;
	}

	public function sahe()
	{
		echo ' Sahe: '.$this->en * $this->uzunluq;
	}

	public function perimetr()
	{
		echo ' Perimetr: '.(2*($this->en + $this->uzunluq));
	}
}

$my_object = new Duzbucaqli();

$my_object->setEN(15);
$my_object->setUzunluq(15);

echo "Eni-> ".$my_object->getEn();
echo " Uzunluqu-> ".$my_object->getUzunluq();

$my_object->sahe();
$my_object->perimetr();

echo '<br>'.$my_object->en;


?>