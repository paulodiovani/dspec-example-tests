<?php
require 'vendor/autoload.php';

use \Esperance\Assertion;

/**
 * Expect style assertion function using [Esperance][1]
 * [1]: https://github.com/yuya-takeyama/esperance
 * 
 * @param  object $obj 
 * @return Assertion
 */
function expect($obj) {
    return new Assertion($obj);
}
