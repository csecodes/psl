<?php 
function checkPalindrome($number){
    $p = $number;
    $revnum =0;
    while($number != 0){ 
          $revnum = $revnum*10 + $number % 10 ;
         $number = (int)($number/10);
    }
    if($revnum==$p){
        echo $p.' is palindrome number';
        //return TRUE;
    }
    else{
        echo 'number is not palindrome';
        //return FALSE;
    }
}
echo checkPalindrome('noon');
?>