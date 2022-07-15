<!-- <?php
$names= array('John', 'jeanne', 'Joan', 'emile');
var_dump($names);

foreach ($names as $key => $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);
?> -->

<!-- <?php $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They'); 
foreach ($pronouns as $pronoun){
    if($pronoun=="He/She"){
        echo "$pronoun codes <br>";
    
    }
    else {
        echo "$pronoun code <br>";
    }
}
?> -->

<?php $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They'); 
foreach ($pronouns as $key => $value){
	
    if($key==2){
        echo "$value codes <br>";
    
    }
    else {
        echo "$value code <br>";
    }
}
?>
