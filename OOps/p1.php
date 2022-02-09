<?php

//wap in php to show class and objects in php

class Tv{
	
	var $model = 'XL TV';
	var $type = 'LED';
	var $price = '5000';
	var $color = 'Black';
	var $varient = 'Curved';
	
	public function showInformation(){
		echo "the model for ".__class__." {$this->model} \n";
		echo "the type for ".__class__." {$this->type} \n";
		echo "the price for ".__class__." {$this->price} \n";
		echo "the color for ".__class__." {$this->color} \n";
		echo "the varient for ".__class__." {$this->varient} \n";
	}
	public function volume(){
		echo "Volume Up";
	}
}
$tv = new Tv();  //objects
$tv->showInformation();  //method calling or function calling
echo "Tv Volume will be : ";
echo " {$tv->volume()} ";


?>