<?php

function test1_1(){
    for ($i=2; $i <= 1024; $i*=2) 
    { 
        echo $i.' ';
    }
}
function test1_2(){
    for ($i=1; $i <= 100; $i++ ){
        echo $i.' ';
    }
}
function test2(){
    for ($i=23; $i <= 78; $i++ ){
        echo $i.' ';
    }
}

function test4(){
    for($i=0; $i<100; $i++)
     {
        $arr[$i] = rand(0,100);
        echo $arr[$i]. " ";
        }
}


function test5(){
   while ($i < 100){
        $arr[$i] = rand(0,100);
        echo $arr[$i]. " ";
        $i++;
   }
}
function test5_2(){
    foreach (test4() as $i){
        echo $i.' ';
    }
}
function test6(){ 
    $arr = ["Top","Top","Top", "Top", "Top", "Top", "Top", "Top", "Bob" ];
    foreach ($arr as $i){
        echo $i.' ';
    }
}

test6();
