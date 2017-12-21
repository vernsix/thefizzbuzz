<?php
/**
 * User: vern
 * Date: 12/21/14
 * Time: 12:16 PM
 */

echo '<pre>'; // just to make it human readable

for ($i = 1; $i <= 100; $i++) {

    // is it a multiple of 3?
    $f = $i % 3 ? '' : 'fizz';

    // is it a multiple of 5?
    $b = $i % 5 ? '' : 'buzz';

    // if the concatenation yields anything,
    // show the concatenated value otherwise,
    // just show the iterator
    echo $f . $b ? $f . $b : $i;

    // a delimiter wasn't specified, so I chose new
    // line to make human readable
    echo PHP_EOL;
}

