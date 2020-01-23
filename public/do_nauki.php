<?php     
     
$string = 'abc';     
var_dump((int)$string); // 0    
var_dump((string)$string); // 'abc'    
var_dump((array)$string); // [0=>'abc']    
var_dump((bool)$string); // true   
     
$int = 123;    
var_dump((int)$int); // 123   
var_dump((string)$int); // '123'   
var_dump((array)$int); // [0=>123]   
var_dump((bool)$int); // true   
    
$array = [1,2,3];    
var_dump((int)$array); // 1   
var_dump((string)$array); // 'Array' i NOTICE: Array to string conversion   
var_dump((array)$array); // [0=>1, 1=>2, 2=>3]   
var_dump((bool)$array); // true   
    
$bool = true;    
var_dump((int)$bool); // 1   
var_dump((string)$bool); // '1'   
var_dump((array)$bool); // [0=>true]   
var_dump((bool)$bool); // true