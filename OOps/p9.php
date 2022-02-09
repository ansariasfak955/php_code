<?php

//wap in php show setter and getter

class User{
	public $name;
	public $class;
	public $rollno;
	public $sub=[];
	
	public function create($name,$class,$rollno,$sub){
		$this->name = $name;
		$this->class = $class;
		$this->rollno = $rollno;
		$this->sub = $sub;
	}
	
	public function getName(){ //getter
		return $this->name;
	}
	
	public function getclass(){ //getter
		return $this->class;
	}
	
	public function getrollno(){ //getter
		return $this->rollno;
	}
	
	public function getsub(){ //getter
		return $this->sub;
	}
	
	public function userInfo(){                    //method
		echo "user name : {$this->name} \n";
		echo "user class : {$this->class} \n";
		echo "user rollno : {$this->rollno} \n";
		echo "user subject : ".implode(',',$this->sub)." \n";
	}
}

$user = new User();
$user->create('asfak','12th',1001,['PHP','HTML','CSS']);
echo "User name from getter {$user->getName()} \n";
echo "User class from getter {$user->getclass()} \n";
echo "User rollno from getter {$user->getrollno()} \n";
echo "User  subject getter : ".implode(',',$user->sub)." \n";

// $user->getName();
// $user->getclass();
// $user->getrollno();
// $user->getsub();
$user->userInfo();


?>