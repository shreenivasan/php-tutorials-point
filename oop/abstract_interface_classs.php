<?php

abstract class A{
    abstract public function myAbstractFunction();
}

interface B{
    public function myVirtualFunction();
}

class C extends A implements B {
    public function myAbstractFunction(){
        echo "<br> This is overrided from abstract";
    }
    
    public function myVirtualFunction(){
        echo "<br> This is overrided from interface";
    }
    
    public function myFunction(){
        echo "<br> This is normal function";
    }
}

$c = new C();
$c->myFunction();
$c->myAbstractFunction();
$c->myVirtualFunction();

