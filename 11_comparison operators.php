<?php

var_dump(10 > 10);
var_dump(10 >= 10);
var_dump(10 < 10);
var_dump(10 <= 10);

// Strict Equality
var_dump(100 === '100');
var_dump(1 === true);
var_dump(false !== true);

// Lose Equality
var_dump(100 == '100');
var_dump(1 == true);
var_dump(true == 'true');
var_dump(true != 'true');
