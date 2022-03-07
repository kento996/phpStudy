<?php
interface Person{
    /**
     * interface用于生成一个接口
     * 接口中所有的method都是public
     * interface只能使用常量const
     */

    const name='zjg';
    public function getname();
    public function setname($name);

}

/**
 * 继承接口的时候，interface中的所有method都要implement
 */
class A implements Person{
    var $person;
    public function getname()
    {
        // TODO: Implement getname() method.
        return Person::name;
    }
    public function setname($name)
    {
        // TODO: Implement setname() method.
        $this->person=$name;
    }
}

$p=new A();
echo $p->getname();
$p->setname('zzjg');
echo $p->person;