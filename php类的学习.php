<?php
class a{
    var $name;
    var $age;
    var $gender;
    //构造函数
    function __construct($name){
        return $this->name;
    }
    function getName(){
        return $this->name;
    }


}
$person=new a("zjg");
echo $person->name;
