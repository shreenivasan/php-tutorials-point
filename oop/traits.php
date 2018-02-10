<?php
trait A{
    function getA(){
        echo "getA <br>";
    }
}

trait B{
    function getB(){
        echo "getB <br>";
    }
}

class Child{
    use A;
    use B;
}


class ChildNew{
    use A;
}

$obj = new Child();
$obj->getA();
$obj->getB();

$obj = new ChildNew();
$obj->getA();