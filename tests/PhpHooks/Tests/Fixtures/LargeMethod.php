<?php

class Foo {

    public function example()  {
        if ($a == $b)  {
            if ($a1 == $b1) {
                fiddle();
            } else if ($a2 == $b2) {
                fiddle();
            }  else {
                fiddle();
            }
        } else if ($c == $d) {
            while ($c == $d) {
                fiddle();
            }
        } else if ($e == $f) {
            for ($n = 0; $n < $h; $n++) {
                fiddle();
            }
        } else{
            switch ($z) {
                case 1:
                    fiddle();
                    break;
                case 2:
                    fiddle();
                    break;
                case 3:
                    fiddle();
                    break;
                default:
                    fiddle();
                    break;
            }
        }
    }
}

function fiddle()
{
    echo "foo";
}