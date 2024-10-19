<?php

    //-----------------------task 1 -----------------------
    echo'<h1>Array Tasks</h1>';
    echo'<h3> Task1 </h3>';
    $colors = array ('white','green','red');
    
    sort($colors);

    echo"<ul>";

    foreach($colors as $color){
        echo("<li> $color </li>");
    }
    echo "</ul>";

    //-----------------------task 2 -----------------------
    
    // associative array
    echo'<h3> Task2</h3>';
    $cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

    asort($cities);

    foreach($cities as $country => $capital){
        echo "The capital of $country is $capital <br>";
    }

    //-----------------------task 3-----------------------

    echo'<h3> Task3 </h3>';
    $colorsArray =array("4"=>"white", "6"=>"green", "11"=>"red");
    print_r(array_slice($colorsArray,0,1));
    echo"<br>";

    //-----------------------task 4-----------------------

    echo'<h3> Task4 </h3>';
    /// Use array_splice to modify the array in place & 
    function addItem(&$arr,$location,$item){
       return array_splice($arr,$location-1,0,$item);
    }
    $arr=[1,2,3,4,5];
    addItem($arr,4,'$');
    echo implode(" ", $arr);
    // implode function converts the array elements into a string

    //-----------------------task 5-----------------------
    
    echo'<h3> Task5 </h3>';
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    foreach($fruits as $index => $fruit)
    echo"$index = $fruit <br>";

    //-----------------------task 6-----------------------
    echo'<h3> Task6 </h3>';
    $temps=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
    65, 64, 68, 73, 75, 79, 73];

    $sum = array_sum($temps);
    $count = count($temps);
    $avg = $sum/$count;


    sort($temps);
    $lowest_temps=array_slice($temps,0,5);
    $highest_temps=array_slice($temps,-5);

    echo"Average Temperature is : ".round($avg,1)."<br>";
    echo"List of fifth lowest temperatures:".implode(" ,",$lowest_temps)."<br>";
    echo"List of fifth highest temperatures:".implode(" ,",$highest_temps)."<br>";

    //-----------------------task 7-----------------------
    echo'<h3> Task7 </h3>';
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

    $merged_array=array_merge($array1,$array2);
    print_r($merged_array);

    //-----------------------task 8-----------------------
    echo'<h3> Task8 </h3>';
    $colorsArr = array("red","blue", "white","yellow");
    $upperedArr=array_map('strtoupper',$colorsArr);
    echo implode("<br>",$upperedArr);



    ?>
    
