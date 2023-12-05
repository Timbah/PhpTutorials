<?php

$word = 'two65eightbkgqcsn91qxkfvgseven';
$arrayOfNumbers=array();
$lines = file('input.txt');
$totalValue = 0;

function append_number_to_position($data){
   
    $wordValue;
    $wordPosition;
    $arrayOfNumbers = null;
   //Search for a word(number) from the data input
   if (is_numeric(strpos($data,"one"))) {

    //echo "Number found at position :" .strpos($data,"two").'<br>';
    $wordValue = 1;
    $wordPosition = strpos($data,"one");

    $arrayOfNumbers[$wordPosition]= $wordValue;

   };
   
   if (is_numeric(strpos($data,"two"))){
    
        $wordValue = 2;
        $wordPosition = strpos($data,"two");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"three"))){
    
        $wordValue = 3;
        $wordPosition = strpos($data,"three");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

   if (is_numeric(strpos($data,"four"))){
    
        $wordValue = 4;
        $wordPosition = strpos($data,"four");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"five"))){
    
        $wordValue = 5;
        $wordPosition = strpos($data,"five");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"six"))){
    
        $wordValue = 6;
        $wordPosition = strpos($data,"six");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"seven"))){
    
        $wordValue = 7;
        $wordPosition = strpos($data,"seven");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"eight"))){
    
        $wordValue = 8;
        $wordPosition = strpos($data,"eight");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"nine"))){
    
        $wordValue = 9;
        $wordPosition = strpos($data,"nine");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"ten"))){
    
        $wordValue = 10;
        $wordPosition = strpos($data,"ten");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"eleven"))){
    
        $wordValue = 11;
        $wordPosition = strpos($data,"eleven");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"twelve"))){
    
        $wordValue = 12;
        $wordPosition = strpos($data,"twelve");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"thirteen"))){
    
        $wordValue = 13;
        $wordPosition = strpos($data,"thirteen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"fourteen"))){
    
        $wordValue = 14;
        $wordPosition = strpos($data,"fourteen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"fifteen"))){
    
        $wordValue = 15;
        $wordPosition = strpos($data,"fifteen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };
    
    if (is_numeric(strpos($data,"sixteen"))){
    
        $wordValue = 16;
        $wordPosition = strpos($data,"sixteen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

   if (is_numeric(strpos($data,"seventeen"))){
    
        $wordValue = 17;
        $wordPosition = strpos($data,"seventeen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"eighteen"))){
    
        $wordValue = 18;
        $wordPosition = strpos($data,"eighteen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"nineteen"))){
    
        $wordValue = 19;
        $wordPosition = strpos($data,"nineteen");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"twenty"))){
    
        $wordValue = 20;
        $wordPosition = strpos($data,"twenty");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"thirty"))){
    
        $wordValue = 30;
        $wordPosition = strpos($data,"thirty");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

   if (is_numeric(strpos($data,"forty"))){
    
        $wordValue = 40;
        $wordPosition = strpos($data,"forty");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"fifty"))){
    
        $wordValue = 50;
        $wordPosition = strpos($data,"fifty");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"sixty"))){
    
        $wordValue = 60;
        $wordPosition = strpos($data,"sixty");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"seventy"))){
    
        $wordValue = 70;
        $wordPosition = strpos($data,"seventy");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"eighty"))){
    
        $wordValue = 80;
        $wordPosition = strpos($data,"eighty");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"ninety"))){
    
        $wordValue = 90;
        $wordPosition = strpos($data,"ninety");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"onehundred"))){
    
        $wordValue = 100;
        $wordPosition = strpos($data,"onehundred");

        $arrayOfNumbers[$wordPosition]= $wordValue;
    
    };

    if (is_numeric(strpos($data,"zero"))){
    
        $wordValue = 0;
        $wordPosition = strpos($data,"zero");
        
        $arrayOfNumbers[$wordPosition]= $wordValue;
        
    };


     $GLOBALS['arrayOfNumbers'] = $arrayOfNumbers;
//     echo '<pre>';
//  var_dump($arrayOfNumbers);
//  echo '</pre>';
}

$lineCount=1;

foreach($lines as $line){
    
    //echo $line .'<br>';
    $firstNumber = null;
    $lastNumber = null;
    $currentChar= null;
    $amount = 0;
    $firstArrayNumber = null;
    $lastArrayNumber = null;
    $arrayCurrent =null;
    $arrayAmount = null;
    $firstArrPos = 0;
    $lastArrPos = 0;
    $firstNumPos = 0;
    $lastNumPos = 0;
    


    for($x=0; $x <= strlen($line); $x++){

        $currentChar = substr($line,$x,1);

        if (is_numeric($currentChar)) {

            if (is_null($firstNumber)){
                $firstNumber = $currentChar;
                $firstNumPos = $x;
            } else{
                $lastNumber = $currentChar;
                $lastNumPos = $x;
            }
        }
    }

   
    append_number_to_position($line);

    $arrayOfNumbers = $GLOBALS['arrayOfNumbers'];
//     echo '<pre>';
//     var_dump($GLOBALS['arrayOfNumbers']);
//    echo '</pre>';
   for($index =0; $index < 101 ; $index++){

    if (isset($arrayOfNumbers[$index])){

        if(is_null($firstArrayNumber)){
        
            $firstArrayNumber = $arrayOfNumbers[$index];
            $firstArrPos = $index;
       
           }else {
               $lastArrayNumber = $arrayOfNumbers[$index];
               $lastArrPos = $index;
       
           }
    }
   
   }
    //echo "First  array number ". $firstArrayNumber." last array number" . $lastArrayNumber . '<br>';
    //echo "First number ". $firstNumber." last number" . $lastNumber . '<br>';
   //195one 
   //bcdspxmhzsqfhhlghmqh5794blxm

    $lastNumber = isset($lastNumber) ? $lastNumber : $firstNumber;
    $firstNumber = isset($firstNumber) ? $firstNumber : 0;
    $lastNumber = isset($lastNumber) ? $lastNumber : 0;
        

    if ($firstNumPos < $firstArrPos){
        $firstNumber = $firstNumber;
    }

    if($firstNumPos > $firstArrPos){
        $firstNumber = isset($firstArrayNumber) ? $firstArrayNumber : $firstNumber;   
    }

    if($lastNumPos > $lastArrPos){
        $lastNumber = $lastNumber;
    }

    if($lastNumPos < $lastArrPos){
        $lastNumber = isset($lastArrayNumber) ? $lastArrayNumber : $lastNumber;
    }
  
    if($lastNumPos < $firstArrPos && $lastArrPos==0){
        $lastNumber = $firstArrayNumber;
    }
    echo"Line ". $lineCount."==========================" .'<br>';

    echo "First  array number ". $firstArrayNumber." last array number" . $lastArrayNumber . '<br>';
    echo "First number ". $firstNumber." last number" . $lastNumber . '<br>';


    $amount = $firstNumber . $lastNumber;
    echo "The total from this line is ". $amount . '<br>';
    $totalValue += $amount;
   // echo "Current total value : ".$totalValue . '<br>';
    $firstNumber = null;
    $lastNumber = null;

    $lineCount +=1;
}

echo "The total value is : " . $totalValue . '<br>';

// append_number_to_position($word);
// // echo strpos($word,"eight");

//   echo '<pre>';
//   var_dump($GLOBALS['arrayOfNumbers']);
//  echo '</pre>';