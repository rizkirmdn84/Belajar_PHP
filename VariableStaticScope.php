<?php

function increment()
{
    static $counter = 1; // static scope    

    echo "Counter = $counter <br>";

    $counter++;
}

increment();
increment();
increment();
