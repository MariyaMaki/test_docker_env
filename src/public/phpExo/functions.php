<!-- <?php 
$text="According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$text=explode(" ", $text);
print_r ($text);
foreach($text as $word){
    echo str_shuffle($word)." ";
}
?> -->

<!-- <?php 
function Capitalize($name){
    $nameCap=ucfirst($name);
    echo $nameCap;
}
Capitalize('antoine'); 
?> -->

<!-- <?php 
function sum($num1, $num2){
    if($num1 !== "" && $num2 !== ""){
        if(is_numeric($num1) && is_numeric($num2)){
            echo $num1+$num2;
        }
        else {
           echo "Error:argument is not a number"; 
        }

    }
    else {
        echo "enter a number you fucker!";
    }
    
}
sum(1,2);
?> -->

<?php
function acronym($f){
        
    $words = explode(" ", $f);// on prend argument $f qu'on va exploser en array à chaque espace " ", 
    $acronym = "";
    
    foreach ($words as $w){
        $acronym .= $w[0];
    }
    
    return strtoupper($acronym);

}
echo acronym('banana tiplouf minion');
?>