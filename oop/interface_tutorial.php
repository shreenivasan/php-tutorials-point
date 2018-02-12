<?php
interface myinterface{
    public function myVirtualFunction();
}

class child implements myinterface{
    public function myVirtualFunction(){
        echo "<br>This is overrided function";
    }
    
    public function myFunction(){
        echo "<br>This is normal function";
    }
}
$obj1 = new child();
$obj1->myFunction();
$obj1->myVirtualFunction();