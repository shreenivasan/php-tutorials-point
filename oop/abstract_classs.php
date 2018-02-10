<?php
abstract class A{
    abstract public function myAbstractFunction();
}

class child extends A{
    public function myAbstractFunction() {
        echo "<br>I have extended abstract class & this function is overrided ";
    }
    public function myFunction() {
        echo "<br> this is simple function";
    }
}

$a = new child();
$a ->myAbstractFunction();
$a->myFunction();
