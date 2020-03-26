<?php

require_once ALIAS . '/inc/trait/Trait1.php';
require_once ALIAS . '/inc/trait/Trait2.php';
require_once ALIAS . '/inc/trait/Trait3.php';

class Test
{
    use Trait1, Trait2, Trait3{
        Trait1::method insteadof Trait2, Trait3;
        Trait2::method as trait2;
        Trait3::method as trait3;
    }

    public function getSum(){
        return $this->method() + $this->trait2() + $this->trait3();
    }
}


