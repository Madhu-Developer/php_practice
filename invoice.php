<?php

class invoice
{
	public $invoiceid ;
	public $desc ;
	public $date ;
    
   /* public $a = $_POST["id"];
    public  $b = $_POST["desc"];
    public  $c = $_POST["date"];
*/
	function __construct($i,$d,$da)
	{
		$this->invoiceid=$i;
		$this->desc = $d ;
		$this->date = $da ;
	}

	function print()
	{
       echo $this->invoiceid."<br>";
       echo $this->desc."<br>" ;
       echo $this->date."<br>" ;

	}

}
 
 // this code idea got from jofin ns jeen 
// for contact 9789847384 ;
// gmapm location will be shared shortly ;
 $s1 = new invoice($_POST["id"],$_POST["desc"],$_POST["date"]);

 $s1->print();


?>