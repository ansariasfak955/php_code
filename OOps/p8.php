<?php

class Tv{
	public $color = 'Black';
	public $size = '56 inch';
	public $Price = 25000;
	public $type = 'LED';
	public $company = 'LG';
	
	public function info(){
		echo "the color : {$this->color} \n";
		echo "the size : {$this->size} \n";
		echo "the Price : {$this->Price} \n";
		echo "the type : {$this->type} \n";
		echo "the company : {$this->company} \n";
	}
	
	public function on(){
		echo "Tv on \n ";
	}
	
	public function off(){
		echo "Tv off \n ";
	}
	
	public function volup(){
		echo "volumne ++ \n ";
	}
	
	public function voldown(){
		echo "volumne -- \n ";
	}
}
(new Tv)->info(); //Anonymous Object
(new Tv)->volup(); //Anonymous Object
(new Tv)->voldown(); ////Anonymous Object

$remote1 = new Tv; //Reference Object
$remote1->info(); //Reference Object
$remote1->on(); //Reference Object
$remote1->off(); //Reference Object
$remote1->volup(); //Reference Object
$remote1->voldown(); //Reference Object

$remote2 = new Tv; //Reference Object
$remote2->info(); //Reference Object
$remote2->on(); //Reference Object
$remote2->off(); //Reference Object
$remote2->volup(); //Reference Object
$remote2->voldown(); //Reference Object

?>