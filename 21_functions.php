<?php

function greet($name = "Taen")
{
    return "Hello ${name}, Assalamualaikum. \n";
}

echo (greet());
echo (greet("Tarif"));
