<?php
$age=17;
if ($age<18){
    echo "tu es mineur!";
}
else {
    echo "tu es majeur!";
}

$temperature=22;

if($temperature>21){
    echo "mets un t-shirt!";
    $scarf=false;
} 
else{
    echo "mets un pull";
    $scarf=true;
}

if($scarf==true){
    echo "prends une écharpe!";
}
else{
    echo "ne prends pas une écharpe!";
}