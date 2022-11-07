<?php
class employee
{

public $name;
public $id;
public $salary;

function getdata($n,$i,$s)
{
$this->name=$n;
$this->id=$i;
$this->salary=$s;
}

function print()
{
echo $this->name;
echo $this->id;
echo $this->salary;
}
}


class salary extends employee
{

public $intrest;

function intrest(







$e1=new employee();
$e1->getdata("madhu",123,10000);
$e1->print();

?>