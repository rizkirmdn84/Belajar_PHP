<?php

require "Lib/MyFunction.php"; // Bila tidak ketemu akan error

// include "Lib/MyFunction.php"; // Bila tidak ketemu tidak akan error 
// include_once "Lib/MyFunction.php"; // Memastikan file tersebut sekali di load

echo sayHello("Rizki", "Ramadhan");
