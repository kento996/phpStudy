<?php
class a{
    var $name;
    var $age;
    var $gender;
    //构造函数
    function __construct($name){
        $this->name=$name;
    }
    //析构函数
    function __destruct()
    {
        echo "I'm break!";
    }

    //成员函数
    function getName(){
        return $this->name;
    }


}
$person=new a("zjg");
echo $person->name;