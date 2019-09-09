<?php

//in inheritance we can't use multiple inheritance but in traits we can use multiple traits 
//simplae example of traits
trait A {
    public function Hi() {
         echo 'Hi ';
    }
}

trait B {
    public function Users() {
        echo 'Jaydeep ';
    }
}

class C {
    use A, B; //use multiple traits 
    public function Welcome() {
          echo 'Welcome';
    }
}

$obj = new C();
$obj->Hi();
$obj->Users();
$obj->Welcome();