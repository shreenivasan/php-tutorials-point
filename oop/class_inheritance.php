<?php

class Base1 {
    public function __construct(){
        echo "<br> constructor from Base1";
    }
    
    public function myPublicFunction(){
        echo "<br> Public function from Base1 class ";
    }
    
    protected function myProtectedFunction(){
        echo "<br> Protected function from Base1 class ";
    }
}

class Base2 extends Base1{
    public function __construct(){
        parent::__construct();
        echo "<br> constructor from Base2";
    }
    
    public function myPublicFunction(){
        
        echo "<br> Public function from Base2 class ";
    }
    
    protected function myProtectedFunction(){
        echo "<br> Protected function from Base2 class ";
        parent::myProtectedFunction();
    }
}

$b = new Base2();

$b->myPublicFunction();

$b->myProtectedFunction(); // Will gives error